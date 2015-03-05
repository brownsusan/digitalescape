<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeGoogleMap
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->zoomControlStyle=array
		(
			'DEFAULT'															=>	array(__('Default',THEME_DOMAIN)),
			'SMALL'																=>	array(__('Small',THEME_DOMAIN)),
			'LARGE'																=>	array(__('Large',THEME_DOMAIN))
		);
	
		$this->mapTypeControlStyle=array
		(
			'DEFAULT'															=>	array(__('Default',THEME_DOMAIN)),
			'HORIZONTAL_BAR'													=>	array(__('Horizontal Bar',THEME_DOMAIN)),
			'DROPDOWN_MENU'														=>	array(__('Dropdown Menu',THEME_DOMAIN))
		);
	
		$this->mapPosition=array
		(
			'TOP_CENTER'														=>	array(__('Top center',THEME_DOMAIN)),
			'TOP_LEFT'															=>	array(__('Top left',THEME_DOMAIN)),
			'TOP_RIGHT'															=>	array(__('Top right',THEME_DOMAIN)),
			'LEFT_TOP'															=>	array(__('Left top',THEME_DOMAIN)),
			'RIGHT_TOP'															=>	array(__('Right top',THEME_DOMAIN)),
			'LEFT_CENTER'														=>	array(__('Left center',THEME_DOMAIN)),
			'RIGHT_CENTER'														=>	array(__('Right center',THEME_DOMAIN)),
			'LEFT_BOTTOM'														=>	array(__('Left bottom',THEME_DOMAIN)),
			'RIGHT_BOTTOM'														=>	array(__('Right bottom',THEME_DOMAIN)),
			'BOTTOM_CENTER'														=>	array(__('Bottom center',THEME_DOMAIN)),
			'BOTTOM_LEFT'														=>	array(__('Bottom left',THEME_DOMAIN)),
			'BOTTOM_RIGHT'														=>	array(__('Bottom right',THEME_DOMAIN))	
		);
	
		$this->mapTypeId=array
		(
			'ROADMAP'															=>	array(__('Roadmap',THEME_DOMAIN)),
			'SATELLITE'															=>	array(__('Satellite',THEME_DOMAIN)),
			'HYBRID'															=>	array(__('Hybrid',THEME_DOMAIN)),
			'TERRAIN'															=>	array(__('Terrain',THEME_DOMAIN))
		);	
	}
	
	/**************************************************************************/
	
	function createGoogleMap($attr)
	{
		if(NLThemeOption::getOption('google_map_enable')!=1) return(null);

		$default=array
		(
			'company_info_enable'			=>	NLThemeOption::getOption('google_map_company_info_enable'),
			'company_info_enable_start'		=>	NLThemeOption::getOption('google_map_company_info_enable_start'),
			'map_type_id'					=>	NLThemeOption::getOption('google_map_map_type_id'),
			'coordinate_lat'				=>	NLThemeOption::getOption('google_map_coordinate_lat'),
			'coordinate_lng'				=>	NLThemeOption::getOption('google_map_coordinate_lng'),
			'coordinate_marker_lat'			=>	NLThemeOption::getOption('google_map_coordinate_marker_lat'),
			'coordinate_marker_lng'			=>	NLThemeOption::getOption('google_map_coordinate_marker_lng'),
			'width'							=>	NLThemeOption::getOption('google_map_width'),
			'height'						=>	NLThemeOption::getOption('google_map_height'),
			'map_type_control_enable'		=>	NLThemeOption::getOption('google_map_map_type_control_enable'),
			'map_type_control_style'		=>	NLThemeOption::getOption('google_map_map_type_control_style'),
			'map_type_control_position'		=>	NLThemeOption::getOption('google_map_map_type_control_position'),
			'zoom_control_enable'			=>	NLThemeOption::getOption('google_map_zoom_control_enable'),
			'zoom_level'					=>	NLThemeOption::getOption('google_map_zoom_level'),
			'zoom_style'					=>	NLThemeOption::getOption('google_map_zoom_style'),
			'zoom_position'					=>	NLThemeOption::getOption('google_map_zoom_position'),
			'pan_control_enable'			=>	NLThemeOption::getOption('google_map_pan_control_enable'),
			'pan_control_position'			=>	NLThemeOption::getOption('google_map_pan_control_position'),
			'scale_control_enable'			=>	NLThemeOption::getOption('google_map_scale_control_enable'),
			'scale_control_position'		=>	NLThemeOption::getOption('google_map_scale_control_position'),
			'street_view_enable'			=>	NLThemeOption::getOption('google_map_street_view_enable'),
			'street_view_position'			=>	NLThemeOption::getOption('google_map_street_view_position')
		);
		
		$option=shortcode_atts($default,$attr);
		$option['theme_url']=THEME_URL;

		$data=array();
		
		$data['option']=NLThemeOption::getOptionObject();
		$data['optionGoogleMap']=$option;
		$data['id']='googleMap_'.NLThemeHelper::createId();
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'google_map.php');
		$output=$Template->output(true);
		
		return($output);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/