<?php

/******************************************************************************/
/******************************************************************************/

class NLThemePageSchemaPost
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
			THEME_CONTEXT.'_page_schema',
			array
			(  
				'labels'							=>	array
				(
					'name'							=>	__('Page Schemas',THEME_DOMAIN),
					'singular_name'					=>	__('Page Schema',THEME_DOMAIN),
					'add_new'						=>	__('Add New',THEME_DOMAIN),
					'add_new_item'					=>	__('Add New Page Schema',THEME_DOMAIN),
					'edit_item'						=>	__('Edit Page Schema Item',THEME_DOMAIN),
					'new_item'						=>	__('New Page Schema Item',THEME_DOMAIN),
					'all_items'						=>	__('All Page Schema Items',THEME_DOMAIN),
					'view_item'						=>	__('View Page Schema Item',THEME_DOMAIN),
					'search_items'					=>	__('Search Page Schema Items',THEME_DOMAIN),
					'not_found'						=>	__('No Page Schema Items found',THEME_DOMAIN),
					'not_found_in_trash'			=>	__('No Page Schema Items found in Trash',THEME_DOMAIN), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	__('Page Schemas',THEME_DOMAIN)
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	33,
				'hierarchical'						=>	false,  
				'rewrite'							=>	false,
				'supports'							=>	array('title')  
			)				
		);
	}

	/**************************************************************************/

	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'title'			=> __('Page Schema title',THEME_DOMAIN),  
			'properties'	=> __('Properties',THEME_DOMAIN),
			'date'			=> __('Date',THEME_DOMAIN)
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['title']='title';
		$column['properties']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		global $post;
		
		$Validation=new NLThemeValidation();
		
		$option=NLThemeOption::getPostMeta($post->ID);
		
		NLThemeHelper::removeUIndex($option,'page_schema_text_color_base','page_schema_text_color_header','page_schema_background_color','page_schema_background_opacity','page_schema_padding_top','page_schema_padding_right','page_schema_padding_bottom','page_schema_padding_left','page_schema_min_height');
		
		switch($column)  
		{
			case 'properties':   
				
				echo 
				'
					<div class="theme-page-schema-list">

						<ul class="theme-no-list">
							<li>
								<div class="theme-page-schema-list-property-label">'.esc_html__('Base text color',THEME_DOMAIN).':</div>'.
								($Validation->isHexColor($option['page_schema_text_color_base']) ? '<div class="theme-page-schema-list-property-color-box" style="border-color:#'.esc_attr($option['page_schema_text_color_base']).';background-color:#'.esc_attr($option['page_schema_text_color_base']).';"></div>' : null).' 
								<div class="theme-page-schema-list-property-value">'.esc_html($option['page_schema_text_color_base']).'</div>
							</li>
							<li>
								<div class="theme-page-schema-list-property-label">'.esc_html__('Header text color',THEME_DOMAIN).':</div>'.
								($Validation->isHexColor($option['page_schema_text_color_header']) ? '<div class="theme-page-schema-list-property-color-box" style="border-color:#'.esc_attr($option['page_schema_text_color_header']).';background-color:#'.esc_attr($option['page_schema_text_color_header']).';"></div>' : null).' 
								<div class="theme-page-schema-list-property-value">'.esc_html($option['page_schema_text_color_header']).'</div>
							</li>
							<li>
								<div class="theme-page-schema-list-property-label">'.esc_html__('Background color',THEME_DOMAIN).':</div>'.
								($Validation->isHexColor($option['page_schema_background_color']) ? '<div class="theme-page-schema-list-property-color-box" style="border-color:#'.esc_attr($option['page_schema_background_color']).';background-color:#'.esc_attr($option['page_schema_background_color']).';"></div>' : null).' 
								<div class="theme-page-schema-list-property-value">'.esc_html($option['page_schema_background_color']).'</div>
							</li>
							<li>
								<div class="theme-page-schema-list-property-label">'.esc_html__('Background opacity',THEME_DOMAIN).':</div>
								<div class="theme-page-schema-list-property-value">'.($Validation->isNumber($option['page_schema_background_opacity'],0,100) ? esc_html($option['page_schema_background_opacity']).'%' : null).'</div>
							</li>
							<li>
								<div class="theme-page-schema-list-property-label">'.esc_html__('Padding',THEME_DOMAIN).':</div>
								<div class="theme-page-schema-list-property-value">'
								.($Validation->isNumber($option['page_schema_padding_top'],0,999)		? esc_html__('Top',THEME_DOMAIN).': '.esc_html($option['page_schema_padding_top']).esc_html__('px',THEME_DOMAIN).'&nbsp;&nbsp;' : null)
								.($Validation->isNumber($option['page_schema_padding_right'],0,999)		? esc_html__('Right',THEME_DOMAIN).': '.esc_html($option['page_schema_padding_right']).esc_html__('px',THEME_DOMAIN).'&nbsp;&nbsp;' : null)
								.($Validation->isNumber($option['page_schema_padding_bottom'],0,999)	? esc_html__('Bottom',THEME_DOMAIN).': '.esc_html($option['page_schema_padding_bottom']).esc_html__('px',THEME_DOMAIN).'&nbsp;&nbsp;' : null)
								.($Validation->isNumber($option['page_schema_padding_left'],0,999)		? esc_html__('Left',THEME_DOMAIN).': '.esc_html($option['page_schema_padding_left']).esc_html__('px',THEME_DOMAIN).'&nbsp;&nbsp;' : null).'
								</div>
							</li>
							<li>
								<div class="theme-page-schema-list-property-label">'.esc_html__('Min height',THEME_DOMAIN).':</div>
								<div class="theme-page-schema-list-property-value">'.($Validation->isNumber($option['page_schema_min_height'],0,9999) ? esc_html($option['page_schema_min_height']).'px' : null).'</div>
							</li>
						</ul>
					
					</div>
				';
				
			break;
		}  
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_page_schema',__('Options',THEME_DOMAIN),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_page_schema','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=NLThemeOption::getPostMeta($post->ID);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_page_schema_noncename',false,false);
		
		$data['postId']=$post->ID;
		
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_text_color_base','');
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_text_color_header','');
		
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_background_color','');
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_background_opacity',100);
		
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_padding_top','');
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_padding_right','');
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_padding_bottom','');
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_padding_left','');
		
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_min_height','');
		
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_class_name','');		
		NLThemeHelper::setDefaultOption($data['option'],'page_schema_custom_class','');
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/page_schema_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(NLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_page_schema_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=NLThemeHelper::getPostOption('page_schema');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
			
			$Theme=new NLTheme();
			$Theme->createCSSFile();
		}
	}
	
	/**************************************************************************/
	
	function getPageSchema()
	{
		$data=array();
		
		$argument=array
		(
			'post_type'								=>	THEME_CONTEXT.'_page_schema',
			'posts_per_page'						=>	-1,
			'orderby'								=>	'post_title',
			'order'									=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return($data);	
		
		foreach($query->posts as $value)
			$data[$value->ID]=array('title'=>$value->post_title,'option'=>NLThemeOption::getPostMeta($value->ID));
		
		return($data);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/