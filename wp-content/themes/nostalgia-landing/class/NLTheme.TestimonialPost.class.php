<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeTestimonialPost
{
	
	/**************************************************************************/
	
	var $option;
	
	/**************************************************************************/
	
	function NLThemeTestimonialPost()
	{
		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_testimonial',
			array
			(  
				'labels'							=>	array
				(
					'name'							=>	__('Testimonials',THEME_DOMAIN),
					'singular_name'					=>	__('Testimonial',THEME_DOMAIN),
					'add_new'						=>	__('Add New',THEME_DOMAIN),
					'add_new_item'					=>	__('Add New Testimonial',THEME_DOMAIN),
					'edit_item'						=>	__('Edit Testimonial Item',THEME_DOMAIN),
					'new_item'						=>	__('New Testimonial Item',THEME_DOMAIN),
					'all_items'						=>	__('All Testimonial Items',THEME_DOMAIN),
					'view_item'						=>	__('View Testimonial Item',THEME_DOMAIN),
					'search_items'					=>	__('Search Testimonial Items',THEME_DOMAIN),
					'not_found'						=>	__('No Testimonial Items found',THEME_DOMAIN),
					'not_found_in_trash'			=>	__('No Testimonial Items found in Trash',THEME_DOMAIN), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	__('Testimonials',THEME_DOMAIN)
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	32,
				'hierarchical'						=>	false,  
				'rewrite'							=>	false,
				'supports'							=>	array('title','page-attributes')  
			)				
		);
		
		register_taxonomy
		(
			THEME_CONTEXT.'_testimonial_category',
			array(THEME_CONTEXT.'_testimonial'),
			array
			(
				'label'								=>	__('Categories',THEME_DOMAIN),
				'labels'							=>	array
				(
					'name'							=>	__('Testimonials categories',THEME_DOMAIN),		 
					'singular_name'					=>	__('Testimonial category',THEME_DOMAIN),		 
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
			'testimonial'	=> __('Testimonial',THEME_DOMAIN),
			'person'		=> __('Person',THEME_DOMAIN),   
			'company'		=> __('Company',THEME_DOMAIN)
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['testimonial']='title';
		$column['person']='title';
		$column['company']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		global $post;
		$option=NLThemeOption::getPostMeta($post->ID);

		NLThemeHelper::removeUIndex($option,'testimonial_person','testimonial_company');
		
		switch($column)  
		{
			case 'testimonial':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.get_the_title($post->ID).'</a>'; 
			break;
			case 'person':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.esc_html($option['testimonial_person']).'</a>'; 
			break;
			case 'company':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.esc_html($option['testimonial_company']).'</a>'; 
			break;
		}  
		
		return($column);
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_testimonial',__('Options',THEME_DOMAIN),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_testimonial','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=NLThemeOption::getPostMeta($post->ID);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_testimonial_noncename',false,false);

		NLThemeHelper::setDefaultOption($data['option'],'testimonial_person','');
		NLThemeHelper::setDefaultOption($data['option'],'testimonial_company','');
		NLThemeHelper::setDefaultOption($data['option'],'testimonial_caption','');
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/testimonial_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(NLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_testimonial_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=NLThemeHelper::getPostOption('testimonial');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function createTestimonial($attr)
	{
		$output=null;
		$Validation=new NLThemeValidation();		
		
		$default=array
		(
			'category'		=>	'',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);		
		
		$argument=array
		(
			'post_type'								=>	THEME_CONTEXT.'_testimonial',
			THEME_CONTEXT.'_testimonial_category'	=>	$attribute['category'],
			'posts_per_page'						=>	-1,
			'orderby'								=>	'menu_order',
			'order'									=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return($output);			
		
		$data=new stdClass();
		$data->exclude=array();
		
		foreach($query->posts as $value)
		{
			if($Validation->isEmpty($value->post_title))
			{
				$data->exclude[]=$value->ID;
				continue;
			}
			
			$option=NLThemeOption::getPostMeta($value->ID);
			
			if(($Validation->isEmpty($value->post_title)) && ($Validation->isEmpty($option['testimonial_person'])) && ($Validation->isEmpty($option['testimonial_company'])))
			{
				$data->exclude[]=$value->ID;
				continue;
			}
		}		
		
		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude)))
		{
			$data->query=$query;
			
			$data->meta=new stdClass();
			$data->meta->css_class=$attribute['css_class'];

			$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'testimonial.php');
			$output=$Template->output(true);				
		}

		return($output);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/