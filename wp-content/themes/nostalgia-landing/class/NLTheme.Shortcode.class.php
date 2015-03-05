<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeShortcode
{
	/**************************************************************************/
	
	static function header($attr,$content)
	{
		$Validation=new NLThemeValidation();
		
		$default=array
		(
			'important'		=>	'3',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!in_array((int)$attribute['important'],array(1,2,3,4,5,6))) $attribute['important']=$default['important'];
		
		$output='<div><h'.(int)$attribute['important'].NLThemeHelper::createHTMLAttribute($attribute['css_class']).'>'.do_shortcode($content).'</h'.(int)$attribute['important'].'></div>';
		return($output);		
	}

	/**************************************************************************/

	static function subheader($attr,$content)
	{
		$default=array
		(
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$content=trim($content);
		
		$output='<div'.NLThemeHelper::createHTMLAttribute(array('subheader','clear-fix',$attribute['css_class'])).'>'.do_shortcode($content).'</div>';
		return($output);
	}

	/**************************************************************************/
	
	static function logo($attr,$content)
	{
		$default=array
		(
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Validation=new NLThemeValidation();
		
		if($Validation->isEmpty(NLThemeOption::getOption('logo_image_url'))) return(null);
		
		$output='<img src="'.esc_attr(NLThemeOption::getOption('logo_image_url')).'" alt="" class="logo"/>';
		
		if(!$Validation->isEmpty(NLThemeOption::getOption('logo_link_url')))
			$output='<a href="'.esc_attr(NLThemeOption::getOption('logo_link_url')).'">'.$output.'</a>';
		
		$output='<div'.NLThemeHelper::createHTMLAttribute($attribute['css_class']).'>'.$output.'</div>';
		
		return($output);
	}	
	
	/**************************************************************************/
	
	static function box($attr,$content)
	{
		$default=array
		(
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$output='<div'.NLThemeHelper::createHTMLAttribute(array('box',$attribute['css_class'])).'>'.do_shortcode($content).'</div>';
		return($output);
	}	
	
	/**************************************************************************/

	static function link_button($attr,$content)
	{
		$class=array();
		$output=null;
		
		$default=array
		(
			'href'				=>	'#',
			'width'				=>	'800',
			'height'			=>	'600',
			'target'			=>	'',
			'css_class'			=>	'',
			'show_click_here'	=>	0
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if($attribute['show_click_here']==1) $output='<span class="click-here"></span>';
		
		if($attribute['target']=='_popup') $class[]='target-popup';
		if($attribute['target']=='_blank') $class[]='target-blank';
		
		if((int)$attribute['width']>0) $class[]='popup-width-'.(int)$attribute['width'];
		if((int)$attribute['height']>0) $class[]='popup-height-'.(int)$attribute['height'];
		
		array_unshift($class,'link-button');
		array_push($class,$attribute['css_class']);
		
		$output='<a href="'.esc_attr($attribute['href']).'"'.NLThemeHelper::createHTMLAttribute($class).'>'.$output.do_shortcode($content).'</a>';
		return($output);		
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/