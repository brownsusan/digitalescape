<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeAudioPlayerPost
{
	/**************************************************************************/

	function __construct()
	{
		$this->audioFileType=array
		(
			'mp3'				=>	array(__('MP3',THEME_DOMAIN)),
			'mp4'				=>	array(__('MP4',THEME_DOMAIN)),
			'ogg'				=>	array(__('OGG',THEME_DOMAIN)),
			'flv'				=>	array(__('FLV',THEME_DOMAIN)),
			'wav'				=>	array(__('WAV',THEME_DOMAIN)),
			'webm'				=>	array(__('WEBM',THEME_DOMAIN))
		);		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_audio_player',
			array
			(  
				'labels'							=>	array
				(
					'name'							=>	__('Audio Player',THEME_DOMAIN),
					'singular_name'					=>	__('Audio Player',THEME_DOMAIN),
					'add_new'						=>	__('Add New',THEME_DOMAIN),
					'add_new_item'					=>	__('Add New Audio Player Item',THEME_DOMAIN),
					'edit_item'						=>	__('Edit Audio Player Item',THEME_DOMAIN),
					'new_item'						=>	__('New Audio Player Item',THEME_DOMAIN),
					'all_items'						=>	__('All Audio Player Items',THEME_DOMAIN),
					'view_item'						=>	__('View Audio Player Item',THEME_DOMAIN),
					'search_items'					=>	__('Search Audio Player Items',THEME_DOMAIN),
					'not_found'						=>	__('No Audio Player Items found',THEME_DOMAIN),
					'not_found_in_trash'			=>	__('No Audio Player Items found in Trash',THEME_DOMAIN), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	__('Audio Player',THEME_DOMAIN)
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	30,
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
		add_meta_box(THEME_CONTEXT.'_audio_player',__('Options',THEME_DOMAIN),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_audio_player','normal','high');		
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=NLThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_audio_player_noncename',false,false);
		
		$data['dictionary']['audioFileType']=$this->audioFileType;

		NLThemeHelper::setDefaultOption($data['option'],'audio_player_file','');
		NLThemeHelper::setDefaultOption($data['option'],'audio_player_file_type','mp3');
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/audio_player_meta_box.php');
		echo $Template->output();			
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(NLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_audio_player_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=NLThemeHelper::getPostOption('audio_player');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}		
	}
	
	/**************************************************************************/
	
	function getAudioFile()
	{
		$data=array();
		$Validation=new NLThemeValidation();
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_audio_player',
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
			
			if($Validation->isNotEmpty($option['audio_player_file']))
				$data[][$option['audio_player_file_type']]=$option['audio_player_file'];
		}
		
		$post=$bPost;
		return($data);
	}
	
	/**************************************************************************/
	
	function createAudioPlayerButton($attr,$content)
	{	
		if(!$this->isEnableAudioPlayer()) return(null);
		
		$default=array
		(
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		$output='<div class="float-right"><a href="#" class="audio-player-button off '.esc_attr($attribute['css_class']).'"></a></div>';
		return($output);		
	}
	
	/**************************************************************************/
	
	function isEnableAudioPlayer()
	{
		$Theme=new NLTheme();
		
		if(NLThemeOption::getOption('audio_player_enable')!=1) return(false);
		
		if($Theme->isMobileTablet())
			return(NLThemeOption::getOption('audio_player_mobile_tablet_enable')==1 ? true : false);

		return(true);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/