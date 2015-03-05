<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeGalleryPost
{
	/**************************************************************************/

	function __construct()
	{
		$this->actionOpen=array
		(
			'open-image'			=>	array(__('Open image in lightbox',THEME_DOMAIN)),
			'open-page'				=>	array(__('Open page in the new window',THEME_DOMAIN)),
			'open-page-self'		=>	array(__('Open page in the same window',THEME_DOMAIN)),
			'open-video-vimeo'		=>	array(__('Open video from Vimeo in lighbox',THEME_DOMAIN)),
			'open-video-youtube'	=>	array(__('Open video from Youtube in lighbox',THEME_DOMAIN))
		);		
		
		$this->galleryType=array
		(
			'default'				=>	array(__('Default gallery',THEME_DOMAIN)),
			'carousel'				=>	array(__('Carousel gallery',THEME_DOMAIN))		
		);
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_gallery',
			array
			(  
				'labels'							=>	array
				(
					'name'							=>	__('Galleries',THEME_DOMAIN),
					'singular_name'					=>	__('Gallery',THEME_DOMAIN),
					'add_new'						=>	__('Add New',THEME_DOMAIN),
					'add_new_item'					=>	__('Add New Gallery',THEME_DOMAIN),
					'edit_item'						=>	__('Edit Gallery Item',THEME_DOMAIN),
					'new_item'						=>	__('New Gallery Item',THEME_DOMAIN),
					'all_items'						=>	__('All Gallery Items',THEME_DOMAIN),
					'view_item'						=>	__('View Gallery Item',THEME_DOMAIN),
					'search_items'					=>	__('Search Gallery Items',THEME_DOMAIN),
					'not_found'						=>	__('No Gallery Items found',THEME_DOMAIN),
					'not_found_in_trash'			=>	__('No Gallery Items found in Trash',THEME_DOMAIN), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	__('Galleries',THEME_DOMAIN)
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	26,
				'hierarchical'						=>	false,  
				'rewrite'							=>	false,
				'supports'							=>	array('title','excerpt','page-attributes','thumbnail')   
			)				
		);
		
		register_taxonomy
		(
			THEME_CONTEXT.'_gallery_category',
			array(THEME_CONTEXT.'_gallery'),
			array
			(
				'label'								=>	__('Categories',THEME_DOMAIN),
				'labels'							=>	array
				(
					'name'							=>	__('Gallery categories',THEME_DOMAIN),		 
					'singular_name'					=>	__('Gallery category',THEME_DOMAIN),		 
					'menu_name'						=>	__('Categories',THEME_DOMAIN),	
					'all_items'						=>	__('All Categories',THEME_DOMAIN),	
					'edit_item'						=>	__('Edit Category',THEME_DOMAIN),	
					'view_item'						=>	__('View Category',THEME_DOMAIN),	
					'update_item'					=>	__('Update Category',THEME_DOMAIN),	
					'add_new_item'					=>	__('Add New Category',THEME_DOMAIN),	
					'new_item_name'					=>	__('New Category Name',THEME_DOMAIN),	
					'parent_item'					=>	__('Parent Category',THEME_DOMAIN),	
					'parent_item_colon'				=>	__('Parent Category:',THEME_DOMAIN),	
					'search_items'					=>	__('Search Categories',THEME_DOMAIN),	
					'popular_items'					=>	__('Popular Categories',THEME_DOMAIN),	
					'separate_items_with_commas'	=>	__('Separate categories with commas',THEME_DOMAIN),	
					'add_or_remove_items'			=>	__('Add or remove categories',THEME_DOMAIN),	
					'choose_from_most_used'			=>	__('Choose from the most used categories',THEME_DOMAIN),
				)
			)
		);		
	}
	
	/**************************************************************************/
	
	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'image'			=> __('Image',THEME_DOMAIN),
			'title'			=> __('Title',THEME_DOMAIN),   
			'date'			=> __('Date',THEME_DOMAIN)
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['image']='title';
		return($column);
	}
	
	/**************************************************************************/

	function adminManageColumn($column)
	{
		global $post;
		switch($column)  
		{
			case 'image':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.get_the_post_thumbnail($post->ID,'thumbnail').'</a>'; 
			break;
		}  
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_gallery',__('Options',THEME_DOMAIN),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_gallery','normal','low');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=NLThemeOption::getPostMeta($post->ID);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_gallery_noncename',false,false);
		
		$data['postId']=$post->ID;
		
		$data['dictionary']['actionOpen']=$this->actionOpen;
		
		NLThemeHelper::setDefaultOption($data['option'],'gallery_url_page','');
		NLThemeHelper::setDefaultOption($data['option'],'gallery_url_video_vimeo','');
		NLThemeHelper::setDefaultOption($data['option'],'gallery_url_video_youtube','');
		NLThemeHelper::setDefaultOption($data['option'],'gallery_action_open','open-image');
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/gallery_meta_box.php');
		echo $Template->output();	
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(NLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_gallery_noncename','adminSaveMetaBox')===false) return(false);
		
			$option=NLThemeHelper::getPostOption('gallery');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}		
	}
	
	/**************************************************************************/
	
	function createGallery($attr)
	{
		$default=array
		(
			'type'								=>	'default',
			'filter'							=>	'1',
			'category'							=>	'',
			'selected'							=>	'0',
			'show_title'						=>	'1',
			'show_description'					=>	'1'
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_gallery',
			THEME_CONTEXT.'_gallery_category'	=>	$attribute['category'],
			'posts_per_page'					=>	-1,
			'orderby'							=>	'menu_order',
			'order'								=>	'asc'
		);
		
		$query=new WP_Query($argument);	
		if($query===false) return;

		$data=new stdClass();
		$data->gallery=new stdClass();
		
		$data->gallery->show_title=false;
		$data->gallery->show_description=false;
		
		$id=NLThemeHelper::createId();
		
		$Validation=new NLThemeValidation();

		foreach($query->posts as $post)
		{
			$post->post_metadata=new stdClass();
			
			list($post->post_metadata->full)=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
			list($post->post_metadata->thumbnail)=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'gallery-thumbnail');
			
			$option=NLThemeOption::getPostMeta($post->ID);

			$this->getImageMeta($option,$post->post_metadata->full,$url,$class);

			$post->post_metadata->url=$url;
			$post->post_metadata->class=$class;
			
			$post->post_metadata->rel=null;
			if($option['gallery_action_open']=='open-image')
				$post->post_metadata->rel='gallery_'.$id;
			
			$post->post_metadata->post_excerpt_limit=null;
			
			if(!$Validation->isEmpty($post->post_excerpt))
			{
				$post->post_metadata->post_excerpt_limit=mb_substr($post->post_excerpt,0,NLThemeOption::getOption('gallery_excerpt_limit'));
				
				$count=mb_strlen($post->post_excerpt);
				
				if($count>NLThemeOption::getOption('gallery_excerpt_limit')) 
					$post->post_metadata->post_excerpt_limit.=NLThemeOption::getOption('gallery_excerpt_limit_character');
			}	
			
			$post->post_metadata->show_title=(int)($attribute['show_title'] && $Validation->isNotEmpty($post->post_title));
			$post->post_metadata->show_description=(int)($attribute['show_description'] && $Validation->isNotEmpty($post->post_metadata->post_excerpt_limit));
		
			$data->gallery->show_title=(bool)$data->gallery->show_title || (bool)$post->post_metadata->show_title;
			$data->gallery->show_description=(bool)$data->gallery->show_description || (bool)$post->post_metadata->show_description;
			
			$category=get_the_terms($post->ID,THEME_CONTEXT.'_gallery_category');
			
			$post->post_metadata->categoryFilter=null;

			if(is_array($category))
			{
				foreach($category as $categoryIndex=>$categoryValue)
				{
					$post->post_metadata->category[]=$categoryIndex;
					$post->post_metadata->categoryFilter.=' filter-'.$categoryIndex;
					$data->gallery->category[$categoryIndex]=array($category[$categoryIndex]->name);
				}
			}
		}
		
		$data->query=$query;

		$data->gallery->id=$id;
			
		$data->gallery->selected=$attribute['selected'];
			
		$data->gallery->type=$attribute['type'];
			
		$data->gallery->show_title=(int)$data->gallery->show_title;
		$data->gallery->show_description=(int)$data->gallery->show_description;
			
		$data->gallery->filter=(int)($attribute['type']=='default' && $attribute['filter']==1 && count($data->gallery->category));

		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'gallery.php');
		return($Template->output(true));
	}
	
	/**************************************************************************/
	
	function getImageMeta($option,$image,&$url,&$class)
	{
		$url=null;
		$class=null;

		switch($option['gallery_action_open'])
		{
			case 'open-image':

				$class='overlay-image fancybox-image preloader';
				if($image!==false) $url=$image;

			break;
			case 'open-video-vimeo':

				$class='overlay-video fancybox-video-vimeo preloader';
				$url=$option['gallery_url_video_vimeo'];

			break;
			case 'open-video-youtube':

				$class='overlay-video fancybox-video-youtube preloader';
				$url=$option['gallery_url_video_youtube'];

			break;				
			case 'open-page':

				$class='overlay-url target-blank preloader';
				$url=$option['gallery_url_page'];

			break;	
			case 'open-page-self':

				$class='overlay-url preloader';
				$url=$option['gallery_url_page'];
				
			break;
		}

		$Validation=new NLThemeValidation();
		if($Validation->isEmpty($url)) $url='#';		
	}
	
	/**************************************************************************/
	
	function createSingleImage($attr,$content)
	{
		$attribute=shortcode_atts(array('id'=>'0'),$attr);
		
		$post=get_post($attribute['id']);
		
		if(is_null($post)) return(null);
		if($post->post_type!=THEME_CONTEXT.'_gallery') return(null);
		
		$option=NLThemeOption::getPostMeta($attribute['id']);
		
		if(!is_array($option)) return(null);
		
		$full=wp_get_attachment_image_src(get_post_thumbnail_id($attribute['id']),'full');
		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($attribute['id']),'single-image');
			
		if(($thumbnail===false) || ($full===false)) return(null);

		$this->getImageMeta($option,$full,$url,$class);
		
		$output=
		'
			<a href="'.$url.'" class="preloader '.$class.' single-image">
				<span>
					<span></span>
					<img src="'.$thumbnail[0].'" alt="'.esc_attr($post->post_title).'" />
				</span>
			</a>
			<div class="title">'.esc_attr($post->post_excerpt).'</div>
		';
		
		return(NLThemeHelper::formatCode($output));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/