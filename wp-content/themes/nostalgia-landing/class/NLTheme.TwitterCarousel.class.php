<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeTwitterCarousel
{
	/**************************************************************************/

	function NLThemeTwitterCarousel()
	{
	
	}

	/**************************************************************************/

	function createTwitterCarousel()
	{
		$Validation=new NLThemeValidation();
		
		if(NLThemeOption::getOption('social_network_twitter_carousel_enable')!=1) return;
		
		if($Validation->isEmpty(NLThemeOption::getOption('social_network_twitter_name'))) return(null);
		
		if($Validation->isEmpty(NLThemeOption::getOption('social_network_twitter_consumer_key'))) return(null);
		if($Validation->isEmpty(NLThemeOption::getOption('social_network_twitter_consumer_secret_key'))) return(null);
		
		if($Validation->isEmpty(NLThemeOption::getOption('social_network_twitter_access_token'))) return(null);
		if($Validation->isEmpty(NLThemeOption::getOption('social_network_twitter_access_secret_token'))) return(null);
		
		$data=array();
		$data['id']='twitter_carousel_'.NLThemeHelper::createId();

		$connection=new TwitterOAuth(NLThemeOption::getOption('social_network_twitter_consumer_key'),NLThemeOption::getOption('social_network_twitter_consumer_secret_key'),NLThemeOption::getOption('social_network_twitter_access_token'),NLThemeOption::getOption('social_network_twitter_access_secret_token'));
		$tweet=$connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.NLThemeOption::getOption('social_network_twitter_name').'&count='.NLThemeOption::getOption('social_network_twitter_count'));

		$data['tweet']=$tweet;

		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'twitter_carousel.php');
		return($Template->output(true));
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/