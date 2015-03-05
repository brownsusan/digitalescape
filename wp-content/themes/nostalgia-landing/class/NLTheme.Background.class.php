<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeBackground
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->backgroundOverlay=array
		(
			'0'																	=>	array(__('No overlay',THEME_DOMAIN)),
			'1'																	=>	array(__('Coagulated',THEME_DOMAIN)),
			'2'																	=>	array(__('Darken 20%',THEME_DOMAIN)),
			'3'																	=>	array(__('Darken 30%',THEME_DOMAIN)),
			'4'																	=>	array(__('Darken 40%',THEME_DOMAIN)),
			'5'																	=>	array(__('Darken 50%',THEME_DOMAIN)),
			'6'																	=>	array(__('Dimmed 20%',THEME_DOMAIN)),
			'7'																	=>	array(__('Dimmed 30%',THEME_DOMAIN)),
			'8'																	=>	array(__('Dimmed 40%',THEME_DOMAIN)),
			'9'																	=>	array(__('Dimmed 50%',THEME_DOMAIN)),
			'10'																=>	array(__('Mellow',THEME_DOMAIN)),
			'11'																=>	array(__('Monaco',THEME_DOMAIN)),
			'12'																=>	array(__('Noise',THEME_DOMAIN)),
			'13'																=>	array(__('Nostalgia',THEME_DOMAIN)),
			'14'																=>	array(__('Pudding',THEME_DOMAIN)),
			'15'																=>	array(__('Sandstorm',THEME_DOMAIN)),
			'16'																=>	array(__('Screen',THEME_DOMAIN)),
			'17'																=>	array(__('Soft Screen',THEME_DOMAIN)),
			'18'																=>	array(__('Soften',THEME_DOMAIN)),
			'19'																=>	array(__('Stripes',THEME_DOMAIN)),
			'20'																=>	array(__('Warm Filter',THEME_DOMAIN))
		);

		$this->backgroundRepeat=array
		(
			'no-repeat'															=>	array(__('No repeat',THEME_DOMAIN)),
			'repeat'															=>	array(__('Repeat along the X and Y axis',THEME_DOMAIN)),
			'repeat-x'															=>	array(__('Repeat along the X axis',THEME_DOMAIN)),
			'repeat-y'															=>	array(__('Repeat along the Y axis',THEME_DOMAIN))
		);

		$this->backgroundType=array
		(
			'0'																	=>	array(__('None',THEME_DOMAIN)),
			'1'																	=>	array(__('Fullscreen video',THEME_DOMAIN)),
			'2'																	=>	array(__('Fullscreen image slideshow',THEME_DOMAIN))
		);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/