<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeAccordion
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function createAccordion($attr,$content)
	{
		$default=array
		(
			'active'		=>	'0',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$id='accordion-'.NLThemeHelper::createId();
		
		$output=
		'
			<ul class="nostalgia-accordion '.esc_attr($attribute['css_class']).'" id="'.esc_attr($id).'">'.do_shortcode($content).'</ul>
			<script type="text/javascript">
				jQuery(document).ready(function() 
				{
					var theme=new NLTheme();
					theme.createAccordion(\'#'.$id.'\',{active:'.$attribute['active'].'});
				});
			</script>
		';
		
		return($output);	
	}
	
	/**************************************************************************/
	
	function createAccordionItem($attr,$content)
	{
		$default=array
		(
			'header'		=>	__('Header',THEME_DOMAIN),
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$output='<li><div><h3><a href="#">'.esc_html($attribute['header']).'</a></h3></div><div class="clear-fix"><div>'.do_shortcode($content).'</div></div></li>';

		return($output);	
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/