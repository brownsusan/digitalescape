<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeSocialNetwork
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->type=array
		(
			'twitter'															=>	array(__('Twitter',THEME_DOMAIN)),
			'facebook'															=>	array(__('Facebook',THEME_DOMAIN)),
			'googleplus'														=>	array(__('Google +',THEME_DOMAIN)),
			'flickr'															=>	array(__('Flickr',THEME_DOMAIN)),
			'forrst'															=>	array(__('Forrst',THEME_DOMAIN)),
			'linkedin'															=>	array(__('Linkedin',THEME_DOMAIN)),
			'skype'																=>	array(__('Skype',THEME_DOMAIN)),
			'soundcloud'														=>	array(__('Soundcloud',THEME_DOMAIN)),
			'xing'																=>	array(__('Xing',THEME_DOMAIN)),
			'youtube'															=>	array(__('Youtube',THEME_DOMAIN))
		);
	}
	
	/**************************************************************************/

	function createSocialProfileList($attr)
	{
		$Validation=new NLThemeValidation();
		
		$socialNetwork=array();
		foreach($this->type as $index=>$value)
		{
			$url=NLThemeOption::getOption('social_network_'.$index.'_url');
			$order=NLThemeOption::getOption('social_network_'.$index.'_order');
			
			if($Validation->isEmpty($url)) continue;
			if($Validation->isEmpty($order)) array_push($socialNetwork,array('url'=>$url,'index'=>$index));
			else $socialNetwork[$order]=array('url'=>$url,'index'=>$index);
		}
		
		ksort($socialNetwork);
		
		$data=array();
		foreach($socialNetwork as $index=>$value)
		{
			$data['profile'][$value['index']]=array('url'=>$value['url']);
		}
		
		if(!count($data)) return;
		
		$default=array
		(
			'css_class'	=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$data['css_class']=$attribute['css_class'];
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'social_profiles_list.php');
		return($Template->output(true));	
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/