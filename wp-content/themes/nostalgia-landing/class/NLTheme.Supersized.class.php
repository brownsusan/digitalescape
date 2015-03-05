<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeSupersized
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->performance=array
		(
			'0'																	=>	array(__('No adjustments',THEME_DOMAIN)),
			'1'																	=>	array(__('Hybrid, lowers image quality during transitions and restores after completed',THEME_DOMAIN)),
			'2'																	=>	array(__('Higher image quality',THEME_DOMAIN)),
			'3'																	=>	array(__('Faster transition speed, lower image quality',THEME_DOMAIN))
		);
	
		$this->transition=array
		(
			'none'																=>	array(__('No transition effect',THEME_DOMAIN)),
			'fade'																=>	array(__('Fade effect',THEME_DOMAIN)),
			'slideTop'															=>	array(__('Slide in from top',THEME_DOMAIN)),
			'slideRight'														=>	array(__('Slide in from right',THEME_DOMAIN)),
			'slideBottom'														=>	array(__('Slide in from bottom',THEME_DOMAIN)),
			'slideLeft'															=>	array(__('Slide in from left',THEME_DOMAIN)),
			'carouselRight'														=>	array(__('Carousel from right to left',THEME_DOMAIN)),
			'carouselLeft'														=>	array(__('Carousel from left to right',THEME_DOMAIN))
		);		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/