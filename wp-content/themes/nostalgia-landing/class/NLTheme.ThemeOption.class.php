<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeOption
{
	/**************************************************************************/
	
	static function createOption($refresh=false)
	{
		$GlobalData=new NLThemeGlobalData();
		return($GlobalData->setGlobalData(THEME_OPTION_PREFIX,array('NLThemeOption','createOptionObject'),$refresh));				
	}
	
	/**************************************************************************/
	
	static function createOptionObject()
	{
		return((array)get_option(THEME_OPTION_PREFIX));
	}
	
	/**************************************************************************/
	
	static function refreshOption()
	{
		return(NLThemeOption::createOption(true));
	}
	
	/**************************************************************************/
	
	static function getOption($name)
	{
		NLThemeOption::createOption();
		
		global $themeGlobalData;

		if(!array_key_exists($name,$themeGlobalData[THEME_OPTION_PREFIX])) return(null);
		return($themeGlobalData[THEME_OPTION_PREFIX][$name]);		
	}
	
	/**************************************************************************/
	
	static function getOptionObject()
	{
		global $themeGlobalData;
		return($themeGlobalData[THEME_OPTION_PREFIX]);
	}
		
	/**************************************************************************/
	
	static function updateOption($option)
	{
		$nOption=array();
		foreach($option as $index=>$value) $nOption[$index]=$value;
		
		$oOption=self::refreshOption();

		update_option(THEME_OPTION_PREFIX,array_merge($oOption,$nOption));
		
		self::refreshOption();
	}
	
	/**************************************************************************/
	
	static function resetOption()
	{
		update_option(THEME_OPTION_PREFIX,array());
		NLThemeOption::refreshOption();		
	}
	
	/**************************************************************************/
	
	static function getPostMeta($post)
	{
		$id=is_object($post) ? $post->ID : (int)$post;
		return(get_post_meta($id,THEME_OPTION_PREFIX,true));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/