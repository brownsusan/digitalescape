<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeFeaturePost
{
	/**************************************************************************/

	function __construct()
	{
		$this->icon=array
		(
			'empty-red'															=>	array(__('Empty (red background)',THEME_DOMAIN)),
			'apple-red'															=>	array(__('Apple (red background)',THEME_DOMAIN)),
			'android-red'														=>	array(__('Android (red background)',THEME_DOMAIN)),
			'app-white'															=>	array(__('Application (white background)',THEME_DOMAIN)),
			'post-white'														=>	array(__('Post (white background)',THEME_DOMAIN)),
			'heart-white'														=>	array(__('Heart (white background)',THEME_DOMAIN)),
			'image-white'														=>	array(__('Image (white background)',THEME_DOMAIN)),
			'people-white'														=>	array(__('People (white background)',THEME_DOMAIN)),
			'camera-white'														=>	array(__('Camera (white background)',THEME_DOMAIN)),
			'document-white'													=>	array(__('Document (white background)',THEME_DOMAIN)),
			'briefcase-white'													=>	array(__('Briefcase (white background)',THEME_DOMAIN)),
			'lightbulb-white'													=>	array(__('Lightbulb (white background)',THEME_DOMAIN)),
			'binoculars-white'													=>	array(__('Binoculars (white background)',THEME_DOMAIN)),
			'basket-white'														=>	array(__('Basket (white background)',THEME_DOMAIN)),
			'chart-white'														=>	array(__('Chart (white background)',THEME_DOMAIN)),
			'chat-white'														=>	array(__('Chat (white background)',THEME_DOMAIN)),
			'clock-white'														=>	array(__('Clock (white background)',THEME_DOMAIN)),
			'database-white'													=>	array(__('Database (white background)',THEME_DOMAIN)),
			'mail-white'														=>	array(__('Mail (white background)',THEME_DOMAIN)),
			'music-white'														=>	array(__('Music (white background)',THEME_DOMAIN)),
			'screen-white'														=>	array(__('Screen (white background)',THEME_DOMAIN)),
			'target-white'														=>	array(__('Target (white background)',THEME_DOMAIN)),
			'video-white'														=>	array(__('Video (white background)',THEME_DOMAIN))
		);		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_feature',
			array
			(  
				'labels'							=>	array
				(
					'name'							=>	__('Features',THEME_DOMAIN),
					'singular_name'					=>	__('Feature',THEME_DOMAIN),
					'add_new'						=>	__('Add New',THEME_DOMAIN),
					'add_new_item'					=>	__('Add New Feature Item',THEME_DOMAIN),
					'edit_item'						=>	__('Edit Feature Item',THEME_DOMAIN),
					'new_item'						=>	__('New Feature Item',THEME_DOMAIN),
					'all_items'						=>	__('All Feature Items',THEME_DOMAIN),
					'view_item'						=>	__('View Feature Item',THEME_DOMAIN),
					'search_items'					=>	__('Search Feature Items',THEME_DOMAIN),
					'not_found'						=>	__('No Feature Items found',THEME_DOMAIN),
					'not_found_in_trash'			=>	__('No Feature Items found in Trash',THEME_DOMAIN), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	__('Features',THEME_DOMAIN)
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	27,
				'hierarchical'						=>	false,  
				'rewrite'							=>	false,
				'supports'							=>	array('title','editor','page-attributes','thumbnail')  
			)				
		);
		
		register_taxonomy
		(
			THEME_CONTEXT.'_feature_category',
			array(THEME_CONTEXT.'_feature'),
			array
			(
				'label'								=>	__('Categories',THEME_DOMAIN),
				'labels'							=>	array
				(
					'name'							=>	__('Features categories',THEME_DOMAIN),		 
					'singular_name'					=>	__('Feature category',THEME_DOMAIN),		 
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
			'feature'		=> __('Feature',THEME_DOMAIN),
			'icon'			=> __('Icon',THEME_DOMAIN)   
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['feature']='title';
		$column['icon']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		global $post;
		$option=NLThemeOption::getPostMeta($post->ID);

		NLThemeHelper::removeUIndex($option,'feature_icon');
		NLThemeHelper::removeUIndex($this->icon,$option['feature_icon']);
		NLThemeHelper::removeUIndex($this->icon[$option['feature_icon']],0);
		
		switch($column)  
		{
			case 'feature':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.get_the_title($post->ID).'</a>'; 
			break;
			case 'icon':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.esc_html($this->icon[$option['feature_icon']][0]).'</a>'; 
			break;
		}  
		
		return($column);
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_feature',__('Options',THEME_DOMAIN),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_feature','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=NLThemeOption::getPostMeta($post->ID);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_feature_noncename',false,false);
		
		$icon=$this->icon;
		ksort($icon);
		
		$data['dictionary']['icon']=$icon;

		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/feature_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(NLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_feature_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=NLThemeHelper::getPostOption('feature');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function createFeature($attr)
	{
		$output=null;
		$Validation=new NLThemeValidation();		
		
		$default=array
		(
			'layout'		=>	'1',
			'category'		=>	'',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!in_array($attribute['layout'],array(1,2))) $attribute['layout']=$default['layout'];
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_feature',
			THEME_CONTEXT.'_feature_category'	=>	$attribute['category'],
			'posts_per_page'					=>	-1,
			'orderby'							=>	'menu_order',
			'order'								=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return($output);		

		$data=new stdClass();
		$data->exclude=array();
		
		foreach($query->posts as $value)
		{
			if($Validation->isEmpty($value->post_title) || $Validation->isEmpty($value->post_content))
				$data->exclude[]=$value->ID;
		}
		
		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude)))
		{
			$data->query=$query;
			
			$data->meta=new stdClass();
			
			$data->meta->layout=$attribute['layout'];
			$data->meta->css_class=$attribute['css_class'];

			$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'feature.php');
			$output=$Template->output();				
		}

		return($output);	
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/