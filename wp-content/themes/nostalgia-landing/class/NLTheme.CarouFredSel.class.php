<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeCarouFredSel
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->direction=array
		(
			'right'																=>	array(__('Right',THEME_DOMAIN)),
			'left'																=>	array(__('Left',THEME_DOMAIN))
		);

		$this->effect=array
		(
			'none'																=>	array(__('None',THEME_DOMAIN)),
			'scroll'															=>	array(__('Scroll',THEME_DOMAIN)),
			'directscroll'														=>	array(__('Directscroll',THEME_DOMAIN)),
			'crossfade'															=>	array(__('Crossfade',THEME_DOMAIN)),
			'cover'																=>	array(__('Cover',THEME_DOMAIN)),
			'cover-fade'														=>	array(__('Cover-fade',THEME_DOMAIN)),
			'uncover'															=>	array(__('Uncover',THEME_DOMAIN)),
			'uncover-fade'														=>	array(__('Uncover-fade',THEME_DOMAIN))
		);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/