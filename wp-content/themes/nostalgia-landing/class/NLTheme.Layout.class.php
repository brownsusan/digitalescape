<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeLayout
{
	/**************************************************************************/

	function NLThemeLayout()
	{
		$this->layout=array
		(
			'100'				=>	array('left'),
			'50x50'				=>	array('left','right'),
			'33x33x33'			=>	array('left','center','right'),
			'25x25x25x25'		=>	array('left','center-left','center-right','right'),
			'66x33'				=>	array('left','right'),
			'33x66'				=>	array('left','right')
		);

		$this->layoutColumn=array
		(
			'left'				=>	__('Left column',THEME_DOMAIN),
			'center-left'		=>	__('Center left column',THEME_DOMAIN),
			'center'			=>	__('Center column',THEME_DOMAIN),
			'center-right'		=>	__('Center right column',THEME_DOMAIN),
			'right'				=>	__('Right column',THEME_DOMAIN)
		);		
	}
	
	/**************************************************************************/

	function createLayout($attr,$content)
	{
		$default=array
		(
			'layout'		=>	'50x50',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!isset($this->layout[$attribute['layout']])) $attribute['layout']=$default['layout'];
		
		$this->columnIndex=0;
		$this->layoutType=$attribute['layout'];
		
		$output='<div class="layout-p-'.esc_attr($attribute['layout']).' clear-fix '.esc_attr($attribute['css_class']).'">'.do_shortcode($content).'</div>';
		return($output);
	}
	
	/**************************************************************************/
	
	function createLayoutColumn($attr,$content)
	{
		$output='<div class="'.esc_attr($this->getLayoutColumnNameByIndex($this->columnIndex,$this->layoutType)).' paragraph">'.do_shortcode($content).'</div>';
		
		$this->columnIndex++;
		
		return $output;		
	}
	
	/**************************************************************************/
	
	function getLayoutColumnNameByIndex($index,$name)
	{
		if(!isset($this->layout[$name])) return;
		$index%=substr_count($name,'x')+1;
		return('column-'.$this->layout[$name][$index]);
	}
	
	/**************************************************************************/
	
	function getLayoutCoulumnCount($name)
	{
		return(count($this->layout[$name]));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/