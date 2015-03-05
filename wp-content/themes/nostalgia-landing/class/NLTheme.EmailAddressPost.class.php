<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeEmailAddressPost
{
	
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		$label=array
		(
			'name'					=>	__('E-mail Address',THEME_DOMAIN),
			'singular_name'			=>	__('E-mail Address',THEME_DOMAIN),
			'add_new'				=>	__('Add New',THEME_DOMAIN),
			'add_new_item'			=>	__('Add New E-mail Address',THEME_DOMAIN),
			'edit_item'				=>	__('Edit E-mail Address',THEME_DOMAIN),
			'new_item'				=>	__('New E-mail Address',THEME_DOMAIN),
			'all_items'				=>	__('All E-mail Addresses',THEME_DOMAIN),
			'view_item'				=>	__('View E-mail Address',THEME_DOMAIN),
			'search_items'			=>	__('Search E-mail Address',THEME_DOMAIN),
			'not_found'				=>	__('No E-mail Addresses found',THEME_DOMAIN),
			'not_found_in_trash'	=>	__('No E-mail Addresses found in Trash',THEME_DOMAIN), 
			'parent_item_colon'		=>	'',
			'menu_name'				=>	__('E-mail Addresses',THEME_DOMAIN)
		);

		$argument=array
		(  
			'labels'				=>	$label, 
			'public'				=>	false,  
			'show_ui'				=>	true,  
			'capability_type'		=>	'post',
			'menu_position'			=>	32,
			'hierarchical'			=>	false,  
			'rewrite'				=>	true,  
			'supports'				=>	array('title')  
		);

		register_post_type(THEME_CONTEXT.'_email_address',$argument);  
	}
	
	/**************************************************************************/
	
	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'title'			=> __('E-mail address',THEME_DOMAIN),
			'date'			=> __('Date',THEME_DOMAIN)
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['title']='title';
		
		return($column);
	}
	
	/**************************************************************************/

	function adminManageColumn($column)
	{

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

	}
	
	/**************************************************************************/
	
	function publicInit()
	{

	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/