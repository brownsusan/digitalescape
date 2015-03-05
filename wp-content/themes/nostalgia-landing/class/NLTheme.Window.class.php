<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeWindow
{
	/**************************************************************************/
	
	function NLThemeWindow()
	{
		$this->linkWindowTarget=array
		(	
			'_self'			=>	array('target-self',__('Open page in the same frame',THEME_DOMAIN)),
			'_blank'		=>	array('target-blank',__('Open page in a new window',THEME_DOMAIN)),
			'_popup'		=>	array('target-popup',__('Open page in a fancyBox popup',THEME_DOMAIN))
		);			
	}
	
	/**************************************************************************/
	
	function getLinkWindowTargetClass($target)
	{
		return($this->linkWindowTarget[$target][0]);
	}
	
	/**************************************************************************/
	
	function targetExists($target)
	{
		return(array_key_exists($target,$this->linkWindowTarget));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/