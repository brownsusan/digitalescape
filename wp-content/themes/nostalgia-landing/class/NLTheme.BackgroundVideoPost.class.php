<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeBackgroundVideoPost
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_bg_video',
			array
			(  
				'labels'							=>	array
				(
					'name'							=>	__('Background Video',THEME_DOMAIN),
					'singular_name'					=>	__('Background Video Item',THEME_DOMAIN),
					'add_new'						=>	__('Add New',THEME_DOMAIN),
					'add_new_item'					=>	__('Add New Background Video Item',THEME_DOMAIN),
					'edit_item'						=>	__('Edit Background Video Item',THEME_DOMAIN),
					'new_item'						=>	__('New Background Video Item',THEME_DOMAIN),
					'all_items'						=>	__('All Background Video Items',THEME_DOMAIN),
					'view_item'						=>	__('View Background Video Item',THEME_DOMAIN),
					'search_items'					=>	__('Search Background Video Items',THEME_DOMAIN),
					'not_found'						=>	__('No Background Video Items found',THEME_DOMAIN),
					'not_found_in_trash'			=>	__('No Background Video Items found in Trash',THEME_DOMAIN), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	__('BG Video',THEME_DOMAIN)
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	29,
				'hierarchical'						=>	false,  
				'rewrite'							=>	false,
				'supports'							=>	array('title','page-attributes')  
			)				
		);  
	}
	
	/**************************************************************************/
	
	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'title'			=> __('Title',THEME_DOMAIN),   
			'date'			=> __('Date',THEME_DOMAIN)
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		return($column);
	}
	
	/**************************************************************************/

	function adminManageColumn($column)
	{
 
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_bg_video',__('Options',THEME_DOMAIN),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_bg_video','normal','high');		
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=NLThemeOption::getPostMeta($post->ID);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_bg_video_noncename',false,false);
		
		NLThemeHelper::setDefaultOption($data['option'],'bg_video_file','');

		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/bg_video_meta_box.php');
		echo $Template->output();			
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(NLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_bg_video_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=NLThemeHelper::getPostOption('bg_video');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}		
	}
	
	/**************************************************************************/
	
	function getVideoFile()
	{
		$data=array();
		$Validation=new NLThemeValidation();
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_bg_video',
			'posts_per_page'					=>	-1,
			'orderby'							=>	'menu_order',
			'order'								=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return($data);		
		
		global $post;
		$bPost=$post;

		while($query->have_posts())
		{
			$query->the_post();
		
			$option=NLThemeOption::getPostMeta($post);
			if($Validation->isNotEmpty($option['bg_video_file'])) 
				$data[]=$option['bg_video_file'];
		}
		
		$post=$bPost;
		return($data);
	}
	
	/**************************************************************************/
	
	function isEnableBackgroundVideo()
	{
		$Theme=new NLTheme();
		
		if(NLThemeOption::getOption('background_type')!=1) return(false);
		
		if($Theme->isMobileTablet())
			return(NLThemeOption::getOption('background_video_mobile_tablet_enable')==1 ? true : false);

		return(true);
	}
	
	/**************************************************************************/
	
}

/******************************************************************************/
/******************************************************************************/