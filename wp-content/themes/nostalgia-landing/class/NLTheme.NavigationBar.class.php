<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeNavigationBar
{
	/**************************************************************************/
	
	/**************************************************************************/
	

	
	/**************************************************************************/

	function NLThemeNavigationBar()
	{
		$this->icon=array
		(
			'none'																=>	array(__('None',THEME_DOMAIN)),
			'carousel'															=>	array(__('Carousel',THEME_DOMAIN)),
			'cart'																=>	array(__('Cart',THEME_DOMAIN)),
			'contact'															=>	array(__('Contact',THEME_DOMAIN)),
			'features'															=>	array(__('Features',THEME_DOMAIN)),
			'gallery'															=>	array(__('Gallery',THEME_DOMAIN)),
			'gift'																=>	array(__('Gift',THEME_DOMAIN)),
			'hero'																=>	array(__('Hero',THEME_DOMAIN)),
			'list'																=>	array(__('List',THEME_DOMAIN)),
			'location'															=>	array(__('Location',THEME_DOMAIN)),
			'people'															=>	array(__('People',THEME_DOMAIN)),
			'social'															=>	array(__('Social',THEME_DOMAIN)),
			'stats'																=>	array(__('Stats',THEME_DOMAIN)),
			'testimonials'														=>	array(__('Testimonials',THEME_DOMAIN)),
			'videos'															=>	array(__('Videos',THEME_DOMAIN))
		);

		$this->position=array
		(
			'top-left'															=>	array(__('Top left',THEME_DOMAIN)),
			'top-center'														=>	array(__('Top center',THEME_DOMAIN)),
			'top-right'															=>	array(__('Top right',THEME_DOMAIN)),
			'right-top'															=>	array(__('Right top',THEME_DOMAIN)),
			'right-center'														=>	array(__('Right center',THEME_DOMAIN)),
			'right-bottom'														=>	array(__('Right bottom',THEME_DOMAIN)),
			'bottom-right'														=>	array(__('Bottom right',THEME_DOMAIN)),
			'bottom-center'														=>	array(__('Bottom center',THEME_DOMAIN)),
			'bottom-left'														=>	array(__('Bottom left',THEME_DOMAIN)),
			'left-bottom'														=>	array(__('Left bottom',THEME_DOMAIN)),
			'left-center'														=>	array(__('Left center',THEME_DOMAIN)),
			'left-top'															=>	array(__('Left top',THEME_DOMAIN))
		);	
	}

	/**************************************************************************/

	function create()
	{
		$Validation=new NLThemeValidation();
		
		if(NLThemeOption::getOption('navigation_bar_enable')!=1) return;

		$argument=array
		(
			'post_type'				=>	'page',
			'posts_per_page'		=>	-1,
			'orderby'				=>	'menu_order',
			'order'					=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;		

		$i=0;
		$output=null;
		$element=null;

		global $post;
		$bPost=$post;

		while($query->have_posts())
		{
			$query->the_post();
		
			$option=NLThemeOption::getPostMeta(get_the_ID());
			
			NLThemeHelper::removeUIndex($option,'page_show_page');
			
			if($option['page_show_page']!=1) continue;
			if($option['page_navigation_bar_icon']=='none')	continue;
			if($Validation->isEmpty($option['page_navigation_bar_icon'])) continue;
			
			$title=NLThemeOption::getOption('navigation_bar_item_title_enable')==1 ? ' title="'.get_the_title().'"' : null;
			
			$element.='<li><a href="#'.$post->post_name.'" class="navigation-bar-icon-'.$option['page_navigation_bar_icon'].'"'.$title.'></a></li>';
		}
		
		$post=$bPost;
		
		if(!is_null($element))
			$output='<div id="navigation-bar" class="navigation-bar navigation-bar-position-'.NLThemeOption::getOption('navigation_bar_position').'"><ul>'.$element.'</ul></div>';
		
		return($output);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/