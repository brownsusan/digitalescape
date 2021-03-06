<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeGlobalData
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function setGlobalData($name,$functionCallback,$refresh=false)
	{
		global $themeGlobalData;
		
		if(isset($themeGlobalData[$name]) && (!$refresh)) return($themeGlobalData[$name]);
		
		$themeGlobalData[$name]=call_user_func($functionCallback);
		
		return($themeGlobalData[$name]);
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/