<?php

/******************************************************************************/
/******************************************************************************/

class NLThemePage
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->pageLayout=array
		(
			'full-width'		=>	array(__('Full width',THEME_DOMAIN)),
			'half-width'		=>	array(__('Half width',THEME_DOMAIN))
		);		
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box('page',__('Options'),array($this,'adminCreateMetaBox'),'page','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox()
	{
		global $post;
		
		$data=array();
	
		$NavigationBar=new NLThemeNavigationBar();
		$PageSchemaPost=new NLThemePageSchemaPost();

		$data['option']=NLThemeOption::getPostMeta($post->ID);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_page_noncename',false,false);
		
		$data['dictionary']['pageLayout']=$this->pageLayout;
		$data['dictionary']['pageSchema']=$PageSchemaPost->getPageSchema();
		
		$data['dictionary']['navigationBarIcon']=$NavigationBar->icon;

		NLThemeHelper::setDefaultOption($data['option'],'page_show_page',1);
		NLThemeHelper::setDefaultOption($data['option'],'page_show_header',1);
		NLThemeHelper::setDefaultOption($data['option'],'page_class_name','');
		NLThemeHelper::setDefaultOption($data['option'],'page_page_schema','');
		NLThemeHelper::setDefaultOption($data['option'],'page_navigation_bar_icon','');
		NLThemeHelper::setDefaultOption($data['option'],'page_page_layout','full-width');
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/page_meta_box.php');
		echo $Template->output();			
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id)
	{
		if($_POST)
		{
			if(NLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_page_noncename','adminSaveMetaBox')===false) return(false);

			$option=NLThemeHelper::getPostOption('page');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}		
	}
	
	/**************************************************************************/
	
	function getPage()
	{
		$data=new stdClass();
		$data->exclude=array();
		
		$argument=array
		(
			'post_type'								=>	'page',
			'posts_per_page'						=>	-1,
			'orderby'								=>	'menu_order',
			'order'									=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return(false);	

		foreach($query->posts as $value)
		{
			$option=NLThemeOption::getPostMeta($value->ID);
			
			NLThemeHelper::removeUIndex($option,'page_show_page');
			
			if($option['page_show_page']!=1)
			{
				$data->exclude[]=$value->ID;
				continue;
			}
		}
		
		$data->query=$query;
	
		return($data);		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/