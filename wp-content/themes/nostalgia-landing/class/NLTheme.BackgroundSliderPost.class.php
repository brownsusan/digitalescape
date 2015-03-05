<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeBackgroundSliderPost
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
			THEME_CONTEXT.'_bg_slider',
			array
			(  
				'labels'							=>	array
				(
					'name'							=>	__('Background Slider',THEME_DOMAIN),
					'singular_name'					=>	__('Background Slider',THEME_DOMAIN),
					'add_new'						=>	__('Add New',THEME_DOMAIN),
					'add_new_item'					=>	__('Add New Background Slider Item',THEME_DOMAIN),
					'edit_item'						=>	__('Edit Background Slider Item',THEME_DOMAIN),
					'new_item'						=>	__('New Background Slider Item',THEME_DOMAIN),
					'all_items'						=>	__('All Background Slider Items',THEME_DOMAIN),
					'view_item'						=>	__('View Background Slider Item',THEME_DOMAIN),
					'search_items'					=>	__('Search Background Slider Items',THEME_DOMAIN),
					'not_found'						=>	__('No Background Slider Items found',THEME_DOMAIN),
					'not_found_in_trash'			=>	__('No Background Slider Items found in Trash',THEME_DOMAIN), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	__('BG Slider',THEME_DOMAIN)
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	28,
				'hierarchical'						=>	false,  
				'rewrite'							=>	false,
				'supports'							=>	array('title','page-attributes','thumbnail')  
			)				
		);
	}
	
	/**************************************************************************/
	
	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'image'			=> __('Background image',THEME_DOMAIN),
			'title'			=> __('Background image title',THEME_DOMAIN),   
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
		
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox() 
	{
		
	}
	
	/**************************************************************************/
	
	function getImage()
	{
		$data=array();
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_bg_slider',
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
			if(has_post_thumbnail())
				$data[]['image']=wp_get_attachment_url(get_post_thumbnail_id());
		}
		
		$post=$bPost;
		return($data);
	}

	/**************************************************************************/
	
	function isEnableBackgroundSlider()
	{
		$Theme=new NLTheme();
		
		if(NLThemeOption::getOption('background_type')!=2) return(false);
		
		if($Theme->isMobileTablet())
			return(NLThemeOption::getOption('background_slider_mobile_tablet_enable')==1 ? true : false);

		return(true);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/