<?php

/******************************************************************************/
/******************************************************************************/

class NLTheme
{
	/**************************************************************************/
	/**************************************************************************/
	
	function __construct()
	{

	}
	
	/**************************************************************************/
	/**************************************************************************/
	
	function prepareLibrary()
	{
		$this->libraryDefault=array
		(
			'script'															=>	array
			(
				'use'															=>	1,
				'inc'															=>	true,
				'path'															=>	THEME_URL_SCRIPT,
				'file'															=>	'',
				'in_footer'														=>	true,				
				'dependencies'													=>	array('jquery')
			),
			'style'																=>	array
			(
				'use'															=>	1,
				'inc'															=>	true,
				'path'															=>	THEME_URL_STYLE,
				'file'															=>	'',
				'dependencies'													=>	array()
			)			
		);
		
		$this->library=array
		(
			'script'															=>	array
			(
				'jquery'														=>	array
				(
					'use'														=>	3,
					'in_footer'													=>	false,
					'dependencies'												=>	array()
				),
				'jquery-ui-core'												=>	array
				(
					'use'														=>	3,
					'in_footer'													=>	false
				),		
				'jquery-ui-button'												=>	array
				(
					'dependencies'												=>	array('jquery','jquery-ui-core')
				),
				'jquery-ui-slider'												=>	array
				(
					'dependencies'												=>	array('jquery','jquery-ui-core')
				),
				'jquery-ui-accordion'											=>	array
				(
					'use'														=>	3,
					'dependencies'												=>	array('jquery','jquery-ui-core')
				),
				'jquery-ui-autocomplete'										=>	array
				(
					'dependencies'												=>	array('jquery','jquery-ui-core')
				),	
				'thickbox'														=>	array
				(
				),
				'jquery-qtip'													=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.qtip.min.js'
				),
				'jquery-dropkick'												=>	array
				(
					'file'														=>	'jquery.dropkick.min.js'
				),				
				'jquery-colorpicker'											=>	array
				(
					'file'														=>	'jquery.colorpicker.js'
				),
				'jquery-infieldlabel'											=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.infieldlabel.min.js'
				),			
				'jquery-blockUI'												=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.blockUI.js'
				),					
				'jquery-easing'													=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.easing.js'
				),	
				'jquery-actual'													=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.actual.min.js'
				),
				'jquery-fancybox'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.fancybox.js'
				),					
				'jquery-fancybox-media'											=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.fancybox-media.js'
				),	
				'jquery-fancybox-buttons'										=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.fancybox-buttons.js'
				),			
				'jquery-isotope'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.isotope.min.js'
				),				
				'jquery-scrollTo'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.scrollTo.min.js'
				),
				'jquery-carouFredSel'											=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.carouFredSel.packed.js'
				),			
				'jquery-touchSwipe'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.touchSwipe.min.js'
				),					
				'jquery-jplayer'												=>	array
				(
					'use'														=>	2,
					'inc'														=>	false,
					'file'														=>	'jquery.jplayer.min.js'
				),						
				'jquery-supersized'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.supersized.min.js'
				),
				'jquery-videoBackground'										=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.videoBackground.js'
				),		
				'jquery-ba-bbq'													=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.bbq.min.js'
				),	
				'linkify'														=>	array
				(
					'use'														=>	2,
					'file'														=>	'linkify.js'
				),
				'base64'														=>	array
				(
					'file'														=>	'base64.js'
				),
				'contact-form'													=>	array
				(
					'use'														=>	2,
					'file'														=>	'contactForm.class.js'
				),	
				'newsletter-form'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'newsletterForm.class.js'
				),				
				'google-map'													=>	array
				(
					'use'														=>	2,
					'path'														=>	'//maps.google.com/maps/api/js?sensor=false',
					'file'														=>	''
				),	
				'shortcode-manager'												=>	array
				(
					'file'														=>	'shortCodeManager.class.js'
				),				
				'jquery-themeOption'											=>	array
				(
					'file'														=>	'jquery.themeOption.js'
				),
				'jquery-themeOptionElement'										=>	array
				(
					'file'														=>	'jquery.themeOptionElement.js'
				),
				'theme'															=>	array
				(
					'use'														=>	2,
					'file'														=>	'theme.class.js'
				),					
				'public'														=>	array
				(
					'use'														=>	2,
					'file'														=>	'public.js'
				)
			),
			'style'																=>	array
			(
				'jquery-ui'														=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.ui.min.css'
				),				
				'jquery-dropkick'												=>	array
				(
					'file'														=>	'jquery.dropkick.css'
				),
				'jquery-colorpicker'											=>	array
				(
					'file'														=>	'jquery.colorpicker.css'
				),	
				'jquery-qtip'													=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.qtip.min.css'
				),	
				'jquery-fancybox'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'fancybox/jquery.fancybox.css'
				),
				'jquery-fancybox-buttons'										=>	array
				(
					'use'														=>	2,
					'file'														=>	'fancybox/helpers/jquery.fancybox-buttons.css'
				),	
				'jquery-supersized'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.supersized.css'
				),
				'thickbox'														=>	array
				(
					'path'														=>	null,
					'file'														=>	'/'.WPINC.'/js/thickbox/thickbox.css'
				),
				'jquery-themeOption'											=>	array
				(
					'file'														=>	'jquery.themeOption.css'
				),
				'jquery-themeOption-overwrite'									=>	array
				(
					'file'														=>	'jquery.themeOption.overwrite.css'
				),
				'admin'															=>	array
				(
					'file'														=>	'admin.css'
				),
				'style'															=>	array
				(
					'use'														=>	2,
					'path'														=>	THEME_URL,
					'file'														=>	'style.css'
				),					
				'style-dynamic'													=>	array
				(
					'use'														=>	2,
					'path'														=>	THEME_URL_MULTISITE_SITE_STYLE,
					'file'														=>	'style.css'
				),
				'style-custom'													=>	array
				(
					'use'														=>	2,
					'path'														=>	THEME_URL,
					'file'														=>	'custom.css'
				),					
				'style-responsive'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'responsive.css'
				)
			)
		);
		
		foreach($this->library as $libraryType=>$libraryTypeData)
		{
			$library=array_keys($libraryTypeData);
			
			foreach($library as $libraryName)
				$this->library[$libraryType][$libraryName]=array_merge($this->libraryDefault[$libraryType],$this->library[$libraryType][$libraryName]);
		}
	}
	
	/**************************************************************************/
	
	function addLibrary($type,$use)
	{
		foreach($this->library[$type] as $index=>$data)
		{
			if(!$data['inc']) continue;
			
			if($data['use']!=3)
			{
				if($data['use']!=$use) continue;
			}
			
			if($type=='script')
			{
				wp_enqueue_script($index,$data['path'].$data['file'],$data['dependencies'],false,$data['in_footer']);
			}
			else 
			{
				wp_enqueue_style($index,$data['path'].$data['file'],$data['dependencies'],false);
			}
		}
	}
	
	/**************************************************************************/
	
	function includeLibrary($test,$script=array(),$style=array())
	{
		if($test!=1) return;

		foreach((array)$script as $value)
		{
			if(array_key_exists($value,$this->library['script']))
				$this->library['script'][$value]['inc']=true;
		}
		foreach((array)$style as $value)
		{
			if(array_key_exists($value,$this->library['style']))
				$this->library['style'][$value]['inc']=true;	
		}
	}
	
	/**************************************************************************/
	/**************************************************************************/
	
	function adminInit()
	{
		$this->prepareLibrary();
		
		$this->addLibrary('style',1);
		$this->addLibrary('script',1);
	}	
	
	/**************************************************************************/
	
	function adminMenuInit()
	{
		add_theme_page(__('Theme Options',THEME_DOMAIN),__('Theme Options',THEME_DOMAIN),'edit_theme_options','ThemeOptions',array($this,'adminOptionPanelCreate'));
	}
	
	/**************************************************************************/
	
	function adminOptionPanelCreate()
	{
		$CSS=new NLThemeCSS();
		$Easing=new NLThemeEasing();
		$MetaTag=new NLThemeMetaTag();
		$FancyBox=new NLThemeFancyBox();
		$GoogleMap=new NLThemeGoogleMap();
		$Background=new NLThemeBackground();
		$Supersized=new NLThemeSupersized();
		$ContactForm=new NLThemeContactForm();
		$CarouFredSel=new NLThemeCarouFredSel();
		$SocialNetwork=new NLThemeSocialNetwork();
		
		$NavigationBar=new NLThemeNavigationBar();
		
		$data=array();
		
		$data['option']=NLThemeOption::getOptionObject();
				
		$data['dictionary']['easing']['type']=$Easing->easing;
		
		$data['dictionary']['contactForm']['SMTPSecureType']=$ContactForm->SMTPSecureType;
		
		$data['dictionary']['socialNetwork']['type']=$SocialNetwork->type;
		
		$data['dictionary']['supersized']['transition']=$Supersized->transition;
		$data['dictionary']['supersized']['performance']=$Supersized->performance;
		
		$data['dictionary']['fancybox']['transition']=$FancyBox->transition;
		
		$data['dictionary']['googleMap']['position']=$GoogleMap->mapPosition;
		$data['dictionary']['googleMap']['zoomControlStyle']=$GoogleMap->zoomControlStyle;
		
		$data['dictionary']['googleMap']['mapTypeId']=$GoogleMap->mapTypeId;
		$data['dictionary']['googleMap']['mapTypeControlStyle']=$GoogleMap->mapTypeControlStyle;
		
		$data['dictionary']['background']['type']=$Background->backgroundType;
		$data['dictionary']['background']['repeat']=$Background->backgroundRepeat;
		$data['dictionary']['background']['overlay']=$Background->backgroundOverlay;
		
		$data['dictionary']['carouFredSel']['effect']=$CarouFredSel->effect;
		$data['dictionary']['carouFredSel']['direction']=$CarouFredSel->direction;
		
		$data['dictionary']['navigationBar']['position']=$NavigationBar->position;
		
		$data['dictionary']['metaTag']=$MetaTag->metaTag;
		
		$data['dictionary']['font']['style']=$CSS->fontStyle;
		$data['dictionary']['font']['weight']=$CSS->fontWeight;
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/admin.php');
		echo $Template->output();			
	}

	/**************************************************************************/
	
	function adminOptionPanelSave()
	{
		$option=NLThemeHelper::getPostOption();
		$response=array('global'=>array('error'=>1));

		$CSS=new NLThemeCSS();
		$Easing=new NLThemeEasing();
		$Notice=new NLThemeNotice();
		$FancyBox=new NLThemeFancyBox();
		$GoogleMap=new NLThemeGoogleMap();
		$Supersized=new NLThemeSupersized();
		$Background=new NLThemeBackground();
		$ContactForm=new NLThemeContactForm();
		$CarouFredSel=new NLThemeCarouFredSel();
		$SocialNetwork=new NLThemeSocialNetwork();
		$NavigationBar=new NLThemeNavigationBar();
		
		$Validation=new NLThemeValidation($Notice);
		
		$invalidValue=__('Invalid value',THEME_DOMAIN);
		$invalidValueEmpty=__('This field cannot be empty',THEME_DOMAIN);
		
		/* Page */
		$Validation->notice('isNumber',array($option['page_margin'],0,999),NLThemeHelper::getFormName('page_margin',false),$invalidValue);
		$Validation->notice('isNumber',array($option['page_first_margin_top'],0,999),NLThemeHelper::getFormName('page_first_margin_top',false),$invalidValue);
		$Validation->notice('isNumber',array($option['page_last_margin_bottom'],0,999),NLThemeHelper::getFormName('page_last_margin_bottom',false),$invalidValue);
		
		/* Responsive mode */
		$Validation->notice('isNumber',array($option['responsive_mode_enable'],0,1),NLThemeHelper::getFormName('responsive_mode_enable',false),$invalidValue);
		
		/* Content copying */
		$Validation->notice('isNumber',array($option['right_click_enable'],0,1),NLThemeHelper::getFormName('right_click_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['text_select_enable'],0,1),NLThemeHelper::getFormName('text_select_enable',false),$invalidValue);

		/* Background settings */
		if(!in_array($option['background_type'],array_keys($Background->backgroundType)))
			$Notice->addError(NLThemeHelper::getFormName('background_type',false),$invalidValue);
		if(!in_array($option['background_overlay'],array_keys($Background->backgroundOverlay)))
			$Notice->addError(NLThemeHelper::getFormName('background_overlay',false),$invalidValue);
		$Validation->notice('isHexColor',array($option['background_color']),NLThemeHelper::getFormName('background_color',false),$invalidValue);
		if(!in_array($option['background_repeat'],array_keys($Background->backgroundRepeat)))
			$Notice->addError(NLThemeHelper::getFormName('background_repeat',false),$invalidValue);	
		
		/* Fonts */
		$fontTag=array('base','h1','h2','h3','h4','h5','h6','subheader','link_button');
		$fontMode=array('4','2','2','1');
		foreach($fontTag as $fontTagValue)
		{
			foreach($fontMode as $fontModeValue)
				$Validation->notice('isNumber',array($option['font_font_size_'.$fontTagValue.'_responsive_'.$fontModeValue],1,100),array(NLThemeHelper::getFormName('font_font_size_'.$fontTagValue.'_responsive_'.$fontModeValue,false),$invalidValue));
			
			if(!in_array($option['font_font_style_'.$fontTagValue],array_keys($CSS->fontStyle)))
				$Notice->addError(NLThemeHelper::getFormName('font_font_style_'.$fontTagValue,false),$invalidValue);	
			if(!in_array($option['font_font_weight_'.$fontTagValue],array_keys($CSS->fontWeight)))
				$Notice->addError(NLThemeHelper::getFormName('font_font_weight_'.$fontTagValue,false),$invalidValue);	
		}

		/* Social network */
		foreach($SocialNetwork->type as $socialNetworkIndex=>$socialNetworkValue)
			$Validation->notice('isNumber',array($option['social_network_'.$socialNetworkIndex.'_order'],0,999,true),NLThemeHelper::getFormName('social_network_'.$socialNetworkIndex.'_order',false),$invalidValue);
		$Validation->notice('isNumber',array($option['social_network_twitter_carousel_enable'],0,1),NLThemeHelper::getFormName('social_network_twitter_carousel_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['social_network_twitter_count'],0,999),NLThemeHelper::getFormName('social_network_twitter_count',false),$invalidValue);

		/* Galleries */
		$Validation->notice('isNumber',array($option['gallery_excerpt_limit'],0,999),NLThemeHelper::getFormName('gallery_excerpt_limit',false),$invalidValue);

		/* Audio player */
		$Validation->notice('isNumber',array($option['audio_player_enable'],0,1),NLThemeHelper::getFormName('audio_player_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['audio_player_mobile_tablet_enable'],0,1),NLThemeHelper::getFormName('audio_player_mobile_tablet_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['audio_player_autostart'],0,1),NLThemeHelper::getFormName('audio_player_autostart',false),$invalidValue);
		$Validation->notice('isNumber',array($option['audio_player_loop'],0,1),NLThemeHelper::getFormName('audio_player_loop',false),$invalidValue);
		$Validation->notice('isNumber',array($option['audio_player_volume'],0,100),NLThemeHelper::getFormName('audio_player_volume',false),$invalidValue);

		/* Google Map */
		$Validation->notice('isNumber',array($option['google_map_enable'],0,1),NLThemeHelper::getFormName('google_map_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['google_map_company_info_enable'],0,1),NLThemeHelper::getFormName('google_map_company_info_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['google_map_company_info_enable_start'],0,1),NLThemeHelper::getFormName('google_map_company_info_enable_start',false),$invalidValue);
		if(!array_key_exists($option['google_map_map_type_id'],$GoogleMap->mapTypeId))
			$Notice->addError(NLThemeHelper::getFormName('google_map_map_type_id',false),$invalidValue);				
		if($option['google_map_enable']==1)
		{
			$Validation->notice('isNotEmpty',array($option['google_map_coordinate_lat']),NLThemeHelper::getFormName('google_map_coordinate_lat',false),$invalidValueEmpty);
			$Validation->notice('isNotEmpty',array($option['google_map_coordinate_lng']),NLThemeHelper::getFormName('google_map_coordinate_lng',false),$invalidValueEmpty);
		}
		$Validation->notice('isNumber',array($option['google_map_width'],0,100),NLThemeHelper::getFormName('google_map_width',false),$invalidValue);
		$Validation->notice('isNumber',array($option['google_map_height'],0,999),NLThemeHelper::getFormName('google_map_height',false),$invalidValue);
		$Validation->notice('isNumber',array($option['google_map_map_type_control_enable'],0,1),NLThemeHelper::getFormName('google_map_map_type_control_enable',false),$invalidValue);
		if(!array_key_exists($option['google_map_map_type_control_style'],$GoogleMap->mapTypeControlStyle))
			$Notice->addError(NLThemeHelper::getFormName('google_map_map_type_control_style',false),$invalidValue);	
		if(!array_key_exists($option['google_map_map_type_control_position'],$GoogleMap->mapPosition))
			$Notice->addError(NLThemeHelper::getFormName('google_map_map_type_control_position',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['google_map_zoom_control_enable'],0,1),NLThemeHelper::getFormName('google_map_zoom_control_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['google_map_zoom_level'],0,21),NLThemeHelper::getFormName('google_map_zoom_level',false),$invalidValue);
		if(!array_key_exists($option['google_map_zoom_style'],$GoogleMap->zoomControlStyle))
			$Notice->addError(NLThemeHelper::getFormName('google_map_zoom_style',false),$invalidValue);	
		if(!array_key_exists($option['google_map_zoom_position'],$GoogleMap->mapPosition))
			$Notice->addError(NLThemeHelper::getFormName('google_map_zoom_position',false),$invalidValue);			
		$Validation->notice('isNumber',array($option['google_map_pan_control_enable'],0,1),NLThemeHelper::getFormName('google_map_pan_control_enable',false),$invalidValue);
		if(!array_key_exists($option['google_map_pan_control_position'],$GoogleMap->mapPosition))
			$Notice->addError(NLThemeHelper::getFormName('google_map_pan_control_position',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['google_map_scale_control_enable'],0,1),NLThemeHelper::getFormName('google_map_scale_control_enable',false),$invalidValue);
		if(!array_key_exists($option['google_map_scale_control_position'],$GoogleMap->mapPosition))
			$Notice->addError(NLThemeHelper::getFormName('google_map_scale_control_position',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['google_map_street_view_enable'],0,1),NLThemeHelper::getFormName('google_map_street_view_enable',false),$invalidValue);
		if(!array_key_exists($option['google_map_street_view_position'],$GoogleMap->mapPosition))
			$Notice->addError(NLThemeHelper::getFormName('google_map_street_view_position',false),$invalidValue);	
		
		/* Contact form */
		$Validation->notice('isNumber',array($option['contact_form_enable'],0,1),NLThemeHelper::getFormName('contact_form_enable',false),$invalidValue);
		$Validation->notice('isNotEmpty',array($option['contact_form_recipient_name']),NLThemeHelper::getFormName('contact_form_recipient_name',false),$invalidValueEmpty);
		$Validation->notice('isEmailAddress',array($option['contact_form_recipient_address']),NLThemeHelper::getFormName('contact_form_recipient_address',false),$invalidValue);
		$Validation->notice('isNumber',array($option['contact_form_smtp_enable'],0,1),NLThemeHelper::getFormName('contact_form_smtp_enable',false),$invalidValue);
		if($option['contact_form_smtp_enable']==1)
		{
			$Validation->notice('isNotEmpty',array($option['contact_form_smtp_username']),NLThemeHelper::getFormName('contact_form_smtp_username',false),$invalidValueEmpty);
			
			if($Validation->isEmpty($option['contact_form_smtp_password'])) $option['contact_form_smtp_password']=NLThemeOption::getOption('contact_form_smtp_password');
			$Validation->notice('isNotEmpty',array($option['contact_form_smtp_host']),NLThemeHelper::getFormName('contact_form_smtp_host',false),$invalidValueEmpty);
			$Validation->notice('isNotEmpty',array($option['contact_form_smtp_port']),NLThemeHelper::getFormName('contact_form_smtp_port',false),$invalidValueEmpty);
	
			if(!array_key_exists($option['contact_form_smtp_secure_type'],$ContactForm->SMTPSecureType))
				$Notice->addError(NLThemeHelper::getFormName('contact_form_smtp_secure_type',false),$invalidValue);
		}
		else
		{
			$option['contact_form_smtp_host']='';
			$option['contact_form_smtp_port']='';
			$option['contact_form_smtp_username']='';
			$option['contact_form_smtp_password']='';
			$option['contact_form_smtp_secure_type']='ssl';
		}
		$Validation->notice('isNumber',array($option['contact_form_debug_enable'],0,1),NLThemeHelper::getFormName('contact_form_debug_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['contact_form_reset_enable'],0,1),NLThemeHelper::getFormName('contact_form_reset_enable',false),$invalidValue);

		/* Navigation bar */
		$Validation->notice('isNumber',array($option['navigation_bar_enable'],0,1),NLThemeHelper::getFormName('navigation_bar_enable',false),$invalidValue);
		if(!array_key_exists($option['navigation_bar_position'],$NavigationBar->position))
			$Notice->addError(NLThemeHelper::getFormName('navigation_bar_position',false),$invalidValue);
		$Validation->notice('isHexColor',array($option['navigation_bar_background_color']),NLThemeHelper::getFormName('navigation_bar_background_color',false),$invalidValue);
		$Validation->notice('isNumber',array($option['navigation_bar_background_color_opacity'],0,100),NLThemeHelper::getFormName('navigation_bar_background_color_opacity',false),$invalidValue);
		$Validation->notice('isHexColor',array($option['navigation_bar_background_color_hover']),NLThemeHelper::getFormName('navigation_bar_background_color_hover',false),$invalidValue);
		$Validation->notice('isNumber',array($option['navigation_bar_background_color_hover_opacity'],0,100),NLThemeHelper::getFormName('navigation_bar_background_color_hover_opacity',false),$invalidValue);		
		$Validation->notice('isHexColor',array($option['navigation_bar_background_color_selected']),NLThemeHelper::getFormName('navigation_bar_background_color_selected',false),$invalidValue);
		$Validation->notice('isNumber',array($option['navigation_bar_background_color_selected_opacity'],0,100),NLThemeHelper::getFormName('navigation_bar_background_color_selected_opacity',false),$invalidValue);		
		$Validation->notice('isHexColor',array($option['navigation_bar_background_color_visible']),NLThemeHelper::getFormName('navigation_bar_background_color_visible',false),$invalidValue);
		$Validation->notice('isNumber',array($option['navigation_bar_background_color_visible_opacity'],0,100),NLThemeHelper::getFormName('navigation_bar_background_color_visible_opacity',false),$invalidValue);		
		if(!array_key_exists($option['navigation_bar_animation_easing'],$Easing->easing))
			$Notice->addError(NLThemeHelper::getFormName('navigation_bar_animation_easing',false),$invalidValue);		
		$Validation->notice('isNumber',array($option['navigation_bar_animation_speed'],0,99999),NLThemeHelper::getFormName('navigation_bar_animation_speed',false),$invalidValue);
		$Validation->notice('isNumber',array($option['navigation_bar_item_animation_enable'],0,1),NLThemeHelper::getFormName('navigation_bar_item_animation_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['navigation_bar_full_width_hide'],0,1),NLThemeHelper::getFormName('navigation_bar_full_width_hide',false),$invalidValue);
		$Validation->notice('isNumber',array($option['navigation_bar_item_title_enable'],0,1),NLThemeHelper::getFormName('navigation_bar_item_title_enable',false),$invalidValue);
	
		/* Newsletter form */
		$Validation->notice('isNumber',array($option['newsletter_form_enable'],0,1),NLThemeHelper::getFormName('newsletter_form_enable',false),$invalidValue);
		
		/* Gallery Carousel */
		$Validation->notice('isNumber',array($option['gallery_carousel_circular'],0,1),NLThemeHelper::getFormName('gallery_carousel_circular',false),$invalidValue);
		$Validation->notice('isNumber',array($option['gallery_carousel_infinite'],0,1),NLThemeHelper::getFormName('gallery_carousel_infinite',false),$invalidValue);
		if(!array_key_exists($option['gallery_carousel_direction'],$CarouFredSel->direction))
			$Notice->addError(NLThemeHelper::getFormName('gallery_carousel_direction',false),$invalidValue);
		$Validation->notice('isNumber',array($option['gallery_carousel_item_visible'],1,999),NLThemeHelper::getFormName('gallery_carousel_item_visible',false),$invalidValue);
		$Validation->notice('isNumber',array($option['gallery_carousel_item_minimum'],1,999),NLThemeHelper::getFormName('gallery_carousel_item_minimum',false),$invalidValue);
		$Validation->notice('isNumber',array($option['gallery_carousel_item_start'],0,999),NLThemeHelper::getFormName('gallery_carousel_item_start',false),$invalidValue);
		$Validation->notice('isNumber',array($option['gallery_carousel_scroll_item'],1,999),NLThemeHelper::getFormName('gallery_carousel_scroll_item',false),$invalidValue);
		if(!array_key_exists($option['gallery_carousel_scroll_effect'],$CarouFredSel->effect))
			$Notice->addError(NLThemeHelper::getFormName('gallery_carousel_scroll_effect',false),$invalidValue);		
		if(!array_key_exists($option['gallery_carousel_scroll_easing'],$Easing->easing))
			$Notice->addError(NLThemeHelper::getFormName('gallery_carousel_scroll_easing',false),$invalidValue);		
		$Validation->notice('isNumber',array($option['gallery_carousel_scroll_duration'],1,99999),NLThemeHelper::getFormName('gallery_carousel_scroll_duration',false),$invalidValue);
		
		/* Plugin / Fancybox for videos */
		$Validation->notice('isNumber',array($option['fancybox_video_padding'],0,999),array(NLThemeHelper::getFormName('fancybox_video_padding',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_margin'],0,999),array(NLThemeHelper::getFormName('fancybox_video_margin',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_min_width'],1,9999),array(NLThemeHelper::getFormName('fancybox_video_min_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_min_height'],1,9999),array(NLThemeHelper::getFormName('fancybox_video_min_height',false),$invalidValue));		
		$Validation->notice('isNumber',array($option['fancybox_video_max_width'],1,9999),array(NLThemeHelper::getFormName('fancybox_video_max_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_max_height'],1,9999),array(NLThemeHelper::getFormName('fancybox_video_max_height',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_autoresize'],0,1),array(NLThemeHelper::getFormName('fancybox_video_autoresize_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_autocenter'],0,1),array(NLThemeHelper::getFormName('fancybox_video_autocenter_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_fittoview'],0,1),array(NLThemeHelper::getFormName('fancybox_video_fittoview_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_close_button'],0,1),array(NLThemeHelper::getFormName('fancybox_video_close_button_1',false),$invalidValue));
		
		/* Plugin / Fancybox for images */
		$Validation->notice('isNumber',array($option['fancybox_image_padding'],0,999),array(NLThemeHelper::getFormName('fancybox_image_padding',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_margin'],0,999),array(NLThemeHelper::getFormName('fancybox_image_margin',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_min_width'],1,9999),array(NLThemeHelper::getFormName('fancybox_image_min_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_min_height'],1,9999),array(NLThemeHelper::getFormName('fancybox_image_min_height',false),$invalidValue));		
		$Validation->notice('isNumber',array($option['fancybox_image_max_width'],1,9999),array(NLThemeHelper::getFormName('fancybox_image_max_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_max_height'],1,9999),array(NLThemeHelper::getFormName('fancybox_image_max_height',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_helper_button_enable'],0,1),array(NLThemeHelper::getFormName('fancybox_image_helper_button_enable_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autoresize'],0,1),array(NLThemeHelper::getFormName('fancybox_image_autoresize_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autocenter'],0,1),array(NLThemeHelper::getFormName('fancybox_image_autocenter_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_fittoview'],0,1),array(NLThemeHelper::getFormName('fancybox_image_fittoview_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_arrow'],0,1),array(NLThemeHelper::getFormName('fancybox_image_arrow_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_close_button'],0,1),array(NLThemeHelper::getFormName('fancybox_image_close_button_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_close_click'],0,1),array(NLThemeHelper::getFormName('fancybox_image_close_click_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_next_click'],0,1),array(NLThemeHelper::getFormName('fancybox_image_next_click_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_mouse_wheel'],0,1),array(NLThemeHelper::getFormName('fancybox_image_mouse_wheel_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autoplay'],0,1),array(NLThemeHelper::getFormName('fancybox_image_autoplay_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_loop'],0,1),array(NLThemeHelper::getFormName('fancybox_image_loop_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_playspeed'],1,99999),array(NLThemeHelper::getFormName('fancybox_image_playspeed',false),$invalidValue));
		if(!array_key_exists($option['fancybox_image_animation_effect_open'],$FancyBox->transition))
			$Notice->addError(NLThemeHelper::getFormName('fancybox_image_animation_effect_open',false),$invalidValue);	
		if(!array_key_exists($option['fancybox_image_animation_effect_close'],$FancyBox->transition))
			$Notice->addError(NLThemeHelper::getFormName('fancybox_image_animation_effect_close',false),$invalidValue);	
		if(!array_key_exists($option['fancybox_image_animation_effect_next'],$FancyBox->transition))
			$Notice->addError(NLThemeHelper::getFormName('fancybox_image_animation_effect_next',false),$invalidValue);	
		if(!array_key_exists($option['fancybox_image_animation_effect_previous'],$FancyBox->transition))
			$Notice->addError(NLThemeHelper::getFormName('fancybox_image_animation_effect_previous',false),$invalidValue);	
		if(!array_key_exists($option['fancybox_image_easing_open'],$Easing->easing))
			$Notice->addError(NLThemeHelper::getFormName('fancybox_image_easing_open',false),$invalidValue);	
		if(!array_key_exists($option['fancybox_image_easing_close'],$Easing->easing))
			$Notice->addError(NLThemeHelper::getFormName('fancybox_image_easing_close',false),$invalidValue);	
		if(!array_key_exists($option['fancybox_image_easing_next'],$Easing->easing))
			$Notice->addError(NLThemeHelper::getFormName('fancybox_image_easing_next',false),$invalidValue);	
		if(!array_key_exists($option['fancybox_image_easing_previous'],$Easing->easing))
			$Notice->addError(NLThemeHelper::getFormName('fancybox_image_easing_previous',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['fancybox_image_speed_open'],1,99999),array(NLThemeHelper::getFormName('fancybox_image_speed_open',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_close'],1,99999),array(NLThemeHelper::getFormName('fancybox_image_speed_close',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_next'],1,99999),array(NLThemeHelper::getFormName('fancybox_image_speed_next',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_previous'],1,99999),array(NLThemeHelper::getFormName('fancybox_image_speed_previous',false),$invalidValue));
		
		/* Image slider */
		$Validation->notice('isNumber',array($option['background_slider_mobile_tablet_enable'],0,1),NLThemeHelper::getFormName('background_slider_mobile_tablet_enable',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_autoplay'],0,1),NLThemeHelper::getFormName('background_slider_autoplay',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_slide_interval'],0,99999),NLThemeHelper::getFormName('background_slider_slide_interval',false),$invalidValue);		
		$Validation->notice('isNumber',array($option['background_slider_start_slide'],0,99999),NLThemeHelper::getFormName('background_slider_start_slide',false),$invalidValue);		
		$Validation->notice('isNumber',array($option['background_slider_stop_loop'],0,1),NLThemeHelper::getFormName('background_slider_stop_loop',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_random'],0,1),NLThemeHelper::getFormName('background_slider_random',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_slideshow'],0,1),NLThemeHelper::getFormName('background_slider_slideshow',false),$invalidValue);
		if(!array_key_exists($option['background_slider_transition'],$Supersized->transition))
			$Notice->addError(NLThemeHelper::getFormName('background_slider_transition',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_transition_speed'],0,99999),NLThemeHelper::getFormName('background_slider_transition_speed',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_fit_always'],0,1),NLThemeHelper::getFormName('background_slider_fit_always',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_fit_landscape'],0,1),NLThemeHelper::getFormName('background_slider_fit_landscape',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_fit_portrait'],0,1),NLThemeHelper::getFormName('background_slider_fit_portrait',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_horizontal_center'],0,1),NLThemeHelper::getFormName('background_slider_horizontal_center',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_vertical_center'],0,1),NLThemeHelper::getFormName('background_slider_vertical_center',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_slider_keyboard_nav'],0,1),NLThemeHelper::getFormName('background_slider_keyboard_nav',false),$invalidValue);
		if(!array_key_exists($option['background_slider_performance'],$Supersized->performance))
			$Notice->addError(NLThemeHelper::getFormName('background_slider_performance',false),$invalidValue);		
		
		/* Video background */
		$Validation->notice('isNumber',array($option['background_video_loop'],0,1),NLThemeHelper::getFormName('background_video_loop',false),$invalidValue);
		$Validation->notice('isNumber',array($option['background_video_mobile_tablet_enable'],0,1),NLThemeHelper::getFormName('background_video_mobile_tablet_enable',false),$invalidValue);
		
		if($Notice->isError())
		{
			$response['local']=$Notice->getError();
		}
		else
		{
			$response['global']['error']=0;
			NLThemeOption::updateOption($option);
			
			$this->createCSSFile();
		}

		$response['global']['notice']=$Notice->createHTML(THEME_PATH_TEMPLATE.'notice.php');

		echo json_encode($response);
		exit;
	}
	
	/**************************************************************************/
	
	function setupTheme()
	{
		/***/
		
		add_theme_support('post-thumbnails'); 

		add_image_size('single-image',425,300,true);
		add_image_size('gallery-thumbnail',280,200,true);

		/***/

		$Page=new NLThemePage();
		$Layout=new NLThemeLayout();
		$Accordion=new NLThemeAccordion();
		$Shortcode=new NLThemeShortcode();
		$GoogleMap=new NLThemeGoogleMap();
		$ContactForm=new NLThemeContactForm();
		$GalleryPost=new NLThemeGalleryPost();
		$FeaturePost=new NLThemeFeaturePost();
		$SocialNetwork=new NLThemeSocialNetwork();
		$NewsletterForm=new NLThemeNewsletterForm();
		$PageSchemaPost=new NLThemePageSchemaPost();
		$TwitterCarousel=new NLThemeTwitterCarousel();
		$TestimonialPost=new NLThemeTestimonialPost();
		$AudioPlayerPost=new NLThemeAudioPlayerPost();
		$EmailAddressPost=new NLThemeEmailAddressPost();
		$BackgroundVideoPost=new NLThemeBackgroundVideoPost();
		$BackgroundSliderPost=new NLThemeBackgroundSliderPost();
		
		/***/
		
		add_action('wp_ajax_contact_form',array($ContactForm,'createContactFormResponse'));
		add_action('wp_ajax_newsletter_form',array($NewsletterForm,'createNewsletterFormResponse'));
		
		add_action('init',array($BackgroundSliderPost,'adminInit')); 
		add_action('save_post',array($BackgroundSliderPost,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($BackgroundSliderPost,'adminInitMetaBox'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_bg_slider_columns',array($BackgroundSliderPost,'adminManageEditColumn')); 
		add_action('manage_'.THEME_CONTEXT.'_bg_slider_posts_custom_column',array($BackgroundSliderPost,'adminManageColumn'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_bg_slider_sortable_columns',array($BackgroundSliderPost,'adminManageEditSortableColumn'));

		add_action('init',array($PageSchemaPost,'adminInit')); 
		add_action('save_post',array($PageSchemaPost,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($PageSchemaPost,'adminInitMetaBox'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_page_schema_columns',array($PageSchemaPost,'adminManageEditColumn')); 
		add_action('manage_'.THEME_CONTEXT.'_page_schema_posts_custom_column',array($PageSchemaPost,'adminManageColumn'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_page_schema_sortable_columns',array($PageSchemaPost,'adminManageEditSortableColumn'));

		add_action('init',array($TestimonialPost,'adminInit')); 
		add_action('save_post',array($TestimonialPost,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($TestimonialPost,'adminInitMetaBox'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_testimonial_columns',array($TestimonialPost,'adminManageEditColumn')); 
		add_action('manage_'.THEME_CONTEXT.'_testimonial_posts_custom_column',array($TestimonialPost,'adminManageColumn'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_testimonial_sortable_columns',array($TestimonialPost,'adminManageEditSortableColumn'));

		add_action('init',array($GalleryPost,'adminInit')); 
		add_action('save_post',array($GalleryPost,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($GalleryPost,'adminInitMetaBox'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_gallery_columns',array($GalleryPost,'adminManageEditColumn')); 
		add_action('manage_'.THEME_CONTEXT.'_gallery_posts_custom_column',array($GalleryPost,'adminManageColumn'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_gallery_sortable_columns',array($GalleryPost,'adminManageEditSortableColumn'));

		add_action('init',array($FeaturePost,'adminInit')); 
		add_action('save_post',array($FeaturePost,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($FeaturePost,'adminInitMetaBox'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_feature_columns',array($FeaturePost,'adminManageEditColumn')); 
		add_action('manage_'.THEME_CONTEXT.'_feature_posts_custom_column',array($FeaturePost,'adminManageColumn'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_feature_sortable_columns',array($FeaturePost,'adminManageEditSortableColumn'));

		add_action('init',array($AudioPlayerPost,'adminInit')); 
		add_action('save_post',array($AudioPlayerPost,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($AudioPlayerPost,'adminInitMetaBox'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_audio_player_columns',array($AudioPlayerPost,'adminManageEditColumn')); 
		add_action('manage_'.THEME_CONTEXT.'_audio_player_posts_custom_column',array($AudioPlayerPost,'adminManageColumn'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_audio_player_sortable_columns',array($AudioPlayerPost,'adminManageEditSortableColumn'));

		add_action('init',array($BackgroundVideoPost,'adminInit')); 
		add_action('save_post',array($BackgroundVideoPost,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($BackgroundVideoPost,'adminInitMetaBox'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_bg_video_columns',array($BackgroundVideoPost,'adminManageEditColumn')); 
		add_action('manage_'.THEME_CONTEXT.'_bg_video_posts_custom_column',array($BackgroundVideoPost,'adminManageColumn'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_bg_video_sortable_columns',array($BackgroundVideoPost,'adminManageEditSortableColumn'));

		add_action('init',array($EmailAddressPost,'adminInit')); 
		add_action('save_post',array($EmailAddressPost,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($EmailAddressPost,'adminInitMetaBox'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_email_address_columns',array($EmailAddressPost,'adminManageEditColumn')); 
		add_action('manage_'.THEME_CONTEXT.'_email_address_posts_custom_column',array($EmailAddressPost,'adminManageColumn'));
		add_filter('manage_edit-'.THEME_CONTEXT.'_email_address_sortable_columns',array($EmailAddressPost,'adminManageEditSortableColumn'));

		add_action('save_post',array($Page,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($Page,'adminInitMetaBox'));
		add_filter('image_size_names_choose',array($this,'addImageSupport'));

		load_theme_textdomain(THEME_DOMAIN,THEME_PATH.'languages/');
		
		/***/
		
		add_shortcode(THEME_CONTEXT.'_layout',array($Layout,'createLayout'));
		add_shortcode(THEME_CONTEXT.'_layout_column',array($Layout,'createLayoutColumn'));
		
		add_shortcode(THEME_CONTEXT.'_accordion',array($Accordion,'createAccordion'));
		add_shortcode(THEME_CONTEXT.'_accordion_item',array($Accordion,'createAccordionItem'));

		add_shortcode(THEME_CONTEXT.'_features',array($FeaturePost,'createFeature'));
		add_shortcode(THEME_CONTEXT.'_testimonials',array($TestimonialPost,'createTestimonial'));

		add_shortcode(THEME_CONTEXT.'_twitter_carousel',array($TwitterCarousel,'createTwitterCarousel'));
		
		add_shortcode(THEME_CONTEXT.'_gallery',array($GalleryPost,'createGallery'));
		add_shortcode(THEME_CONTEXT.'_single_image',array($GalleryPost,'createSingleImage'));

		add_shortcode(THEME_CONTEXT.'_audio_player_button',array($AudioPlayerPost,'createAudioPlayerButton'));

		add_shortcode(THEME_CONTEXT.'_social_profiles_list',array($SocialNetwork,'createSocialProfileList'));
		
		add_shortcode(THEME_CONTEXT.'_google_map',array($GoogleMap,'createGoogleMap'));
		
		add_shortcode(THEME_CONTEXT.'_box',array($Shortcode,'box'));
		add_shortcode(THEME_CONTEXT.'_logo',array($Shortcode,'logo'));
		add_shortcode(THEME_CONTEXT.'_link_button',array($Shortcode,'link_button'));

		add_shortcode(THEME_CONTEXT.'_header',array($Shortcode,'header'));
		add_shortcode(THEME_CONTEXT.'_subheader',array($Shortcode,'subheader'));
		
		add_shortcode(THEME_CONTEXT.'_contact_form',array($ContactForm,'createContactForm'));
		add_shortcode(THEME_CONTEXT.'_newsletter_form',array($NewsletterForm,'createNewsletterForm'));
		
		/***/
		
		add_action('tgmpa_register',array($this,'addPlugin'));
		add_action('admin_notices',array($this,'adminNotice'));
		
		/***/
		
		$ShortCodeManager=new NLThemeShortCodeManager();
		$ShortCodeManager->register();
		
		/***/
		
		$install=(int)NLThemeOption::getOption('install');
		if($install==1) return;

		$data=array();
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'email_body.php');
		$message=$Template->output();		
		
		$optionDefault=array
		(
			'logo_image_url'													=>	'',
			'logo_link_url'														=>	get_home_url(),
			'page_margin'														=>	'40',
			'page_first_margin_top'												=>	'40',
			'page_last_margin_bottom'											=>	'40',
			'right_click_enable'												=>	'1',
			'text_select_enable'												=>	'1',
			'favicon_url'														=>	'',
			'responsive_mode_enable'											=>	'1',
			'google_analytics_code'												=>	'',
			'company_info_company_name'											=>	'QuanticaLabs',
			'company_info_company_street'										=>	'Quai Henri IV',
			'company_info_company_postcode'										=>	'75004',
			'company_info_company_city'											=>	'Paris',
			'company_info_company_country'										=>	'France',
			'company_info_company_phone'										=>	'877 123 0223',
			'company_info_company_fax'											=>	'877 123 0224',
			'company_info_company_email'										=>	'nostalgia@mail.com',
			'background_type'													=>	'2',
			'background_overlay'												=>	'13',
			'background_color'													=>	'000000',
			'background_image'													=>	'',
			'background_position'												=>	'',
			'background_repeat'													=>	'no-repeat',
			'social_network_twitter_url'										=>	'https://twitter.com/quanticalabs',
			'social_network_twitter_order'										=>	'1',
			'social_network_facebook_url'										=>	'http://www.facebook.com/pages/QuanticaLabs/364777863576878',
			'social_network_facebook_order'										=>	'2',
			'social_network_googleplus_url'										=>	'https://plus.google.com',
			'social_network_googleplus_order'									=>	'3',
			'social_network_flickr_url'											=>	'',
			'social_network_flickr_order'										=>	'',			
			'social_network_forrst_url'											=>	'',
			'social_network_forrst_order'										=>	'',	
			'social_network_linkedin_url'										=>	'',
			'social_network_linkedin_order'										=>	'',	
			'social_network_skype_url'											=>	'',
			'social_network_skype_order'										=>	'',				
			'social_network_soundcloud_url'										=>	'',
			'social_network_soundcloud_order'									=>	'',	
			'social_network_xing_url'											=>	'',
			'social_network_xing_order'											=>	'',	
			'social_network_youtube_url'										=>	'',
			'social_network_youtube_order'										=>	'',	
			'social_network_twitter_carousel_enable'							=>	'1',
			'social_network_twitter_name'										=>	'quanticalabs',
			'social_network_twitter_consumer_key'								=>	'',
			'social_network_twitter_consumer_secret_key'						=>	'',
			'social_network_twitter_access_token'								=>	'',
			'social_network_twitter_access_secret_token'						=>	'',
			'social_network_twitter_count'										=>	'5',
			'contact_form_enable'												=>	'1',
			'contact_form_recipient_name'										=>	'QuanticaLabs',
			'contact_form_recipient_address'									=>	'quanticalabs@gmail.com',
			'contact_form_smtp_enable'											=>	'0',
			'contact_form_smtp_username'										=>	'',
			'contact_form_smtp_password'										=>	'',
			'contact_form_smtp_host'											=>	'',
			'contact_form_smtp_port'											=>	'',
			'contact_form_smtp_secure_type'										=>	'SSL',
			'contact_form_subject'												=>	'Message from WWW',
			'contact_form_message'												=>	$message,
			'contact_form_debug_enable'											=>	'0',
			'contact_form_reset_enable'											=>	'0',
			'newsletter_form_enable'											=>	'1',
			'font_font_family_google_base'										=>	'',
			'font_font_family_system_base'										=>	'Arial',
			'font_font_size_base_responsive_1'									=>	'13',
			'font_font_size_base_responsive_2'									=>	'14',
			'font_font_size_base_responsive_3'									=>	'14',
			'font_font_size_base_responsive_4'									=>	'14',
			'font_font_style_base'												=>	'normal',
			'font_font_weight_base'												=>	'normal',
			'font_font_family_google_h1'										=>	'Dosis',
			'font_font_family_system_h1'										=>	'',
			'font_font_size_h1_responsive_1'									=>	'40',
			'font_font_size_h1_responsive_2'									=>	'50',
			'font_font_size_h1_responsive_3'									=>	'60',
			'font_font_size_h1_responsive_4'									=>	'70',
			'font_font_style_h1'												=>	'normal',
			'font_font_weight_h1'												=>	'normal',
			'font_font_family_google_h2'										=>	'Dosis',
			'font_font_family_system_h2'										=>	'',
			'font_font_size_h2_responsive_1'									=>	'30',
			'font_font_size_h2_responsive_2'									=>	'40',
			'font_font_size_h2_responsive_3'									=>	'50',
			'font_font_size_h2_responsive_4'									=>	'60',
			'font_font_style_h2'												=>	'normal',
			'font_font_weight_h2'												=>	'normal',			
			'font_font_family_google_h3'										=>	'Dosis',
			'font_font_family_system_h3'										=>	'',
			'font_font_size_h3_responsive_1'									=>	'24',
			'font_font_size_h3_responsive_2'									=>	'28',
			'font_font_size_h3_responsive_3'									=>	'28',
			'font_font_size_h3_responsive_4'									=>	'30',
			'font_font_style_h3'												=>	'normal',
			'font_font_weight_h3'												=>	'normal',			
			'font_font_family_google_h4'										=>	'Dosis',
			'font_font_family_system_h4'										=>	'',
			'font_font_size_h4_responsive_1'									=>	'18',
			'font_font_size_h4_responsive_2'									=>	'20',
			'font_font_size_h4_responsive_3'									=>	'20',
			'font_font_size_h4_responsive_4'									=>	'20',
			'font_font_style_h4'												=>	'normal',
			'font_font_weight_h4'												=>	'normal',			
			'font_font_family_google_h5'										=>	'Dosis',
			'font_font_family_system_h5'										=>	'',
			'font_font_size_h5_responsive_1'									=>	'16',
			'font_font_size_h5_responsive_2'									=>	'18',
			'font_font_size_h5_responsive_3'									=>	'18',
			'font_font_size_h5_responsive_4'									=>	'18',
			'font_font_style_h5'												=>	'normal',
			'font_font_weight_h5'												=>	'normal',			
			'font_font_family_google_h6'										=>	'Dosis',
			'font_font_family_system_h6'										=>	'',
			'font_font_size_h6_responsive_1'									=>	'14',
			'font_font_size_h6_responsive_2'									=>	'14',
			'font_font_size_h6_responsive_3'									=>	'14',
			'font_font_size_h6_responsive_4'									=>	'14',
			'font_font_style_h6'												=>	'normal',
			'font_font_weight_h6'												=>	'normal',			
			'font_font_family_google_subheader'									=>	'Dosis',
			'font_font_family_system_subheader'									=>	'',
			'font_font_size_subheader_responsive_1'								=>	'18',
			'font_font_size_subheader_responsive_2'								=>	'20',
			'font_font_size_subheader_responsive_3'								=>	'22',
			'font_font_size_subheader_responsive_4'								=>	'24',
			'font_font_style_subheader'											=>	'normal',
			'font_font_weight_subheader'										=>	'normal',			
			'font_font_family_google_link_button'								=>	'Dosis',
			'font_font_family_system_link_button'								=>	'',
			'font_font_size_link_button_responsive_1'							=>	'16',
			'font_font_size_link_button_responsive_2'							=>	'20',
			'font_font_size_link_button_responsive_3'							=>	'26',
			'font_font_size_link_button_responsive_4'							=>	'30',
			'font_font_style_link_button'										=>	'normal',
			'font_font_weight_link_button'										=>	'normal',			
			'background_slider_mobile_tablet_enable'							=>	'1',
			'background_slider_autoplay'										=>	'1',
			'background_slider_slide_interval'									=>	'5000',
			'background_slider_start_slide'										=>	'1',
			'background_slider_stop_loop'										=>	'0',
			'background_slider_random'											=>	'0',
			'background_slider_slideshow'										=>	'1',
			'background_slider_transition'										=>	'fade',
			'background_slider_transition_speed'								=>	'750',
			'background_slider_fit_always'										=>	'0',
			'background_slider_fit_landscape'									=>	'0',
			'background_slider_fit_portrait'									=>	'1',
			'background_slider_horizontal_center'								=>	'0',
			'background_slider_vertical_center'									=>	'1',
			'background_slider_keyboard_nav'									=>	'1',
			'background_slider_performance'										=>	'1',
			'fancybox_image_padding'											=>	'10',
			'fancybox_image_margin'												=>	'20',
			'fancybox_image_min_width'											=>	'100',
			'fancybox_image_min_height'											=>	'100',
			'fancybox_image_max_width'											=>	'9999',
			'fancybox_image_max_height'											=>	'9999',
			'fancybox_image_helper_button_enable'								=>	'1',
			'fancybox_image_autoresize'											=>	'1',
			'fancybox_image_autocenter'											=>	'1',
			'fancybox_image_fittoview'											=>	'1',
			'fancybox_image_arrow'												=>	'1',
			'fancybox_image_close_button'										=>	'1',
			'fancybox_image_close_click'										=>	'0',
			'fancybox_image_next_click'											=>	'0',
			'fancybox_image_mouse_wheel'										=>	'1',
			'fancybox_image_autoplay'											=>	'0',
			'fancybox_image_loop'												=>	'1',
			'fancybox_image_playspeed'											=>	'3000',
			'fancybox_image_animation_effect_open'								=>	'fade',
			'fancybox_image_animation_effect_close'								=>	'fade',
			'fancybox_image_animation_effect_next'								=>	'elastic',
			'fancybox_image_animation_effect_previous'							=>	'elastic',
			'fancybox_image_easing_open'										=>	'swing',
			'fancybox_image_easing_close'										=>	'swing',
			'fancybox_image_easing_next'										=>	'swing',
			'fancybox_image_easing_previous'									=>	'swing',
			'fancybox_image_speed_open'											=>	'250',
			'fancybox_image_speed_close'										=>	'250',
			'fancybox_image_speed_next'											=>	'250',
			'fancybox_image_speed_previous'										=>	'250',
			'fancybox_video_padding'											=>	'10',
			'fancybox_video_margin'												=>	'20',
			'fancybox_video_min_width'											=>	'100',
			'fancybox_video_min_height'											=>	'100',
			'fancybox_video_max_width'											=>	'9999',
			'fancybox_video_max_height'											=>	'9999',
			'fancybox_video_autoresize'											=>	'1',
			'fancybox_video_autocenter'											=>	'1',
			'fancybox_video_fittoview'											=>	'1',
			'fancybox_video_close_button'										=>	'1',
			'gallery_excerpt_limit'												=>	'25',
			'gallery_excerpt_limit_character'									=>	'...',
			'gallery_carousel_autoplay'											=>	'1',
			'gallery_carousel_circular'											=>	'1',
			'gallery_carousel_infinite'											=>	'1',
			'gallery_carousel_direction'										=>	'left',
			'gallery_carousel_item_visible'										=>	'4',
			'gallery_carousel_item_minimum'										=>	'1',
			'gallery_carousel_item_start'										=>	'1',
			'gallery_carousel_scroll_item'										=>	'1',
			'gallery_carousel_scroll_effect'									=>	'scroll',
			'gallery_carousel_scroll_easing'									=>	'easeInQuint',
			'gallery_carousel_scroll_duration'									=>	'750',
			'google_map_enable'													=>	'1',
			'google_map_company_info_enable'									=>	'1',
			'google_map_company_info_enable_start'								=>	'0',
			'google_map_map_type_id'											=>	'ROADMAP',
			'google_map_coordinate_lat'											=>	'53.276698',
			'google_map_coordinate_lng'											=>	'-6.12562',
			'google_map_coordinate_marker_lat'									=>	'53.276698',
			'google_map_coordinate_marker_lng'									=>	'-6.12562',
			'google_map_width'													=>	'100',
			'google_map_height'													=>	'232',
			'google_map_map_type_control_enable'								=>	'0',
			'google_map_map_type_control_style'									=>	'DEFAULT',
			'google_map_map_type_control_position'								=>	'TOP_CENTER',
			'google_map_zoom_control_enable'									=>	'1',
			'google_map_zoom_level'												=>	'15',
			'google_map_zoom_style'												=>	'SMALL',
			'google_map_zoom_position'											=>	'RIGHT_TOP',
			'google_map_pan_control_enable'										=>	'0',
			'google_map_pan_control_position'									=>	'TOP_CENTER',
			'google_map_scale_control_enable'									=>	'0',
			'google_map_scale_control_position'									=>	'TOP_CENTER',
			'google_map_street_view_enable'										=>	'0',
			'google_map_street_view_position'									=>	'TOP_CENTER',
			'audio_player_enable'												=>	'1',
			'audio_player_mobile_tablet_enable'									=>	'1',
			'audio_player_autostart'											=>	'1',
			'audio_player_loop'													=>	'1',
			'audio_player_volume'												=>	'80',
			'background_video_mobile_tablet_enable'								=>	'1',
			'background_video_poster'											=>	'',
			'background_video_loop'												=>	'1',
			'navigation_bar_enable'												=>	'1',
			'navigation_bar_position'											=>	'right-center',
			'navigation_bar_background_color'									=>	'000000',
			'navigation_bar_background_color_opacity'							=>	'40',
			'navigation_bar_background_color_hover'								=>	'FFC000',
			'navigation_bar_background_color_hover_opacity'						=>	'100',
			'navigation_bar_background_color_selected'							=>	'FFC000',
			'navigation_bar_background_color_selected_opacity'					=>	'100',
			'navigation_bar_background_color_visible'							=>	'000000',
			'navigation_bar_background_color_visible_opacity'					=>	'100',	
			'navigation_bar_animation_easing'									=>	'easeInQuad',
			'navigation_bar_animation_speed'									=>	'600',
			'navigation_bar_item_animation_enable'								=>	'1',
			'navigation_bar_full_width_hide'									=>	'1',
			'navigation_bar_item_title_enable'									=>	'0',
			'meta_tag_keywords'													=>	'',
			'meta_tag_description'												=>	'',
			'meta_tag_subject'													=>	'',
			'meta_tag_copyright'												=>	'',
			'meta_tag_language'													=>	'',
			'meta_tag_robots'													=>	'',
			'meta_tag_revised'													=>	'',
			'meta_tag_abstract'													=>	'',
			'meta_tag_topic'													=>	'',
			'meta_tag_summary'													=>	'',
			'meta_tag_classification'											=>	'',
			'meta_tag_author'													=>	'',
			'meta_tag_designer'													=>	'',
			'meta_tag_replyto'													=>	'',
			'meta_tag_owner'													=>	'',
			'meta_tag_url'														=>	'',
			'meta_tag_identifierurl'											=>	'',
			'meta_tag_directory'												=>	'',
			'meta_tag_category'													=>	'',
			'meta_tag_coverage'													=>	'',
			'meta_tag_distribution'												=>	'',
			'meta_tag_rating'													=>	'',
			'meta_tag_revisitafter'												=>	'',
			'meta_tag_expires'													=>	'',
			'meta_tag_pragma'													=>	'',
			'meta_tag_cachecontrol'												=>	'',
			'custom_css_responsive_1'											=>	'',
			'custom_css_responsive_2'											=>	'',
			'custom_css_responsive_3'											=>	'',
			'custom_css_responsive_4'											=>	'',
			'install'															=>	'1'
		);
		
		$optionSave=array();
		$optionCurrent=NLThemeOption::getOptionObject();

		foreach($optionDefault as $index=>$value)
		{
			if(!array_key_exists($index,$optionCurrent))
				$optionSave[$index]=$value;
		}
		
		$optionSave=array_merge($optionSave,$optionCurrent);
		foreach($optionSave as $index=>$value)
		{
			if(!array_key_exists($index,$optionDefault))
				unset($optionSave[$index]);
		}
		
		$optionSave['install']=1;
		
		NLThemeOption::updateOption($optionSave);
		
		$GoogleFont=new NLThemeGoogleFont();
		$GoogleFont->download();
		
		$this->createCSSFile();
	}
	
	/**************************************************************************/
	
	function switchTheme()
	{
		NLThemeOption::updateOption(array('install'=>0));
	}
	
	/**************************************************************************/
	/**************************************************************************/
	
	function addImageSupport($size)
	{
		$addsize=array
		(
			'single-image'			=>	__('Single image',THEME_CONTEXT),
			'gallery-thumbnail'		=>	__('Gallery thumbnail',THEME_CONTEXT)
		);
		$newsize=array_merge($size,$addsize);
		return($newsize);
	}
	
	/**************************************************************************/
	
	function isMobileTablet()
	{
		$Mobile=new Mobile_Detect();
		return(($Mobile->isTablet()) || ($Mobile->isMobile()));
	}
	
	/**************************************************************************/
	
	function addPlugin()
	{
		$plugin=array
		(
			array
			(
				'name'								=>	'Theme Demo Data Installer',
				'slug'								=>	'theme-demo-data-installer',
				'source'							=>	THEME_PATH_SOURCE.'theme-demo-data-installer.zip',
				'required'							=>	false,
				'version'							=>	'2.3',
				'force_activation'					=>	false,
				'force_deactivation'				=>	true
			)			
		);
	
		$config=array
		(
			'default_path'							=>	'',                      
			'menu'									=>	'tgmpa-install-plugins', 
			'has_notices'							=>	true,
			'dismissable'							=>	true,
			'dismiss_msg'							=>	'',
			'is_automatic'							=>	true,
			'message'								=>	'', 
			'strings'								=>	array
			(
				'page_title'						=>	__('Install Required Plugins','tgmpa'),
				'menu_title'						=>	__('Install Plugins','tgmpa'),
				'installing'						=>	__('Installing Plugin: %s','tgmpa'),
				'oops'								=>	__('Something went wrong with the plugin API.','tgmpa'),
				'notice_can_install_required'		=>	_n_noop('This theme requires the following plugin: %1$s.','This theme requires the following plugins: %1$s.','tgmpa'),
				'notice_can_install_recommended'	=>	_n_noop('This theme recommends the following plugin: %1$s.','This theme recommends the following plugins: %1$s.', 'tgmpa' ),
				'notice_cannot_install'				=>	_n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','tgmpa'),
				'notice_can_activate_required'		=>	_n_noop('The following required plugin is currently inactive: %1$s.','The following required plugins are currently inactive: %1$s.', 'tgmpa' ),
				'notice_can_activate_recommended'	=>	_n_noop('The following recommended plugin is currently inactive: %1$s.','The following recommended plugins are currently inactive: %1$s.', 'tgmpa' ),
				'notice_cannot_activate'			=>	_n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','tgmpa'),
				'notice_ask_to_update'				=>	_n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'tgmpa' ),
				'notice_cannot_update'				=>	_n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','tgmpa'),
				'install_link'						=>	_n_noop('Begin installing plugin','Begin installing plugins','tgmpa'),
				'activate_link'						=>	_n_noop('Begin activating plugin','Begin activating plugins','tgmpa'),
				'return'							=>	__('Return to Required Plugins Installer','tgmpa'),
				'plugin_activated'					=>	__('Plugin activated successfully.','tgmpa' ),
				'complete'							=>	__('All plugins installed and activated successfully. %s','tgmpa'),
				'nag_type'							=>	'updated'
			)
		);

		tgmpa($plugin,$config);
	}
	
	/**************************************************************************/
	
	function createCSSFile()
	{
		if($this->createMultisitePath()===false) return;
		
		/***/
		
		$content=null;
		
		$CSS=new NLThemeCSS();
		$Validation=new NLThemeValidation();
		$PageSchemaPost=new NLThemePageSchemaPost();

		$pageSchema=$PageSchemaPost->getPageSchema();

		$media=array
		(
			4	=>	array(),
			3	=>	array('min-width'=>768,'max-width'=>969),
			2	=>	array('min-width'=>480,'max-width'=>767),
			1	=>	array('max-width'=>479)
		);

		if(NLThemeOption::getOption('responsive_mode_enable')!=1)
			unset($media[3],$media[2],$media[1]);

		/***/
		
		$content.=$CSS->create(array
		(
			'selector'	=>	array('body'),
			'property'	=>	array
			(
				'background-color'			=>	NLThemeOption::getOption('background_color'),
				'background-position'		=>	NLThemeOption::getOption('background_position'),
				'background-repeat'			=>	NLThemeOption::getOption('background_repeat'),
				'background-image'			=>	NLThemeOption::getOption('background_image')
			)
		),true);
		
		/***/

		$selector=array
		(
			'base'			=>	array
			(
				'a',
				'body',
				'input',
				'label',
				'textarea',
				'.nostalgia-accordion.ui-widget',
				'.nostalgia-accordion.ui-widget p'
			),	
			'h1'			=>	array
			(
				'h1',
				'h1 a'
			),
			'h2'			=>	array
			(
				'h2',
				'h2 a'		
			),
			'h3'			=>	array
			(
				'h3',
				'h3 a'		
			),
			'h4'			=>	array
			(
				'h4',
				'h4 a'		
			),
			'h5'			=>	array
			(
				'h5',
				'h5 a',
				'ul.feature-list-1 li .icon-1',
				'ul.feature-list-1 li .icon-2',
				'ul.feature-list-2 li .icon-1',
				'ul.feature-list-2 li .icon-2'
			),
			'h6'			=>	array
			(
				'h6',
				'h6 a'
			),
			'subheader'		=>	array
			(
				'div.subheader'
			),
			'link_button'	=>	array
			(
				'.link-button'
			)
		);

		foreach($selector as $index=>$value)
		{
			$content.=$CSS->create(array
			(
				'selector'	=>	$value,
				'property'	=>	array
				(
					'font-family'	=>	array(NLThemeOption::getOption('font_font_family_google_'.$index),NLThemeOption::getOption('font_font_family_system_'.$index)),
					'font-style'	=>	NLThemeOption::getOption('font_font_style_'.$index),
					'font-weight'	=>	NLThemeOption::getOption('font_font_weight_'.$index)
				)
			),true);
		}

		/***/
		
		foreach($pageSchema as $index=>$value)
		{
			NLThemeHelper::removeUIndex($value['option'],'page_schema_text_color_base','page_schema_text_color_header','page_schema_background_color','page_schema_background_opacity','page_schema_padding_top','page_schema_padding_right','page_schema_padding_bottom','page_schema_padding_left','page_schema_min_height','page_schema_custom_class');

			$content.=$CSS->create(array
			(
				'selector'	=>	array('.page-schema-'.$index),
				'property'	=>	array
				(
					'min-height'				=> $value['option']['page_schema_min_height'],
					'background-color-rgba'		=> array('background-color'=>$value['option']['page_schema_background_color'],'opacity'=>$value['option']['page_schema_background_opacity'])	
				)
			),true);

			$content.=$CSS->create(array
			(
				'selector'	=>	array('.page-schema-'.$index.'>div'),
				'property'	=>	array
				(
					'padding-top'		=>	$value['option']['page_schema_padding_top'],
					'padding-left'		=>	$value['option']['page_schema_padding_left'],
					'padding-right'		=>	$value['option']['page_schema_padding_right'],
					'padding-bottom'	=>	$value['option']['page_schema_padding_bottom']
				)
			),true);

			if(isset($media[1]))
			{
				$content.=$CSS->create(array
				(
					'media'		=>	$media[1],
					'selector'	=>	array('.page-schema-'.$index.'>div'),
					'property'	=>	array
					(
						'padding-top'		=>	$value['option']['page_schema_padding_top']/2,
						'padding-left'		=>	$value['option']['page_schema_padding_left']/2,
						'padding-right'		=>	$value['option']['page_schema_padding_right']/2,
						'padding-bottom'	=>	$value['option']['page_schema_padding_bottom']/2
					)
				),true);		
			}

			$content.=$CSS->create(array
			(
				'selector'	=>	array
				(
					'.page-schema-'.$index.'>div ',
					'.page-schema-'.$index.'>div .nostalgia-accordion.ui-widget',
					'.page-schema-'.$index.'>div .nostalgia-accordion.ui-widget p'
				),
				'property'	=>	array
				(
					'color'		=>	$value['option']['page_schema_text_color_base'],
				)
			),true);	

			$content.=$CSS->create(array
			(
				'selector'	=>	array
				(
					'.page-schema-'.$index.' h1',
					'.page-schema-'.$index.' h2',
					'.page-schema-'.$index.' h3',
					'.page-schema-'.$index.' h4',
					'.page-schema-'.$index.' h5',
					'.page-schema-'.$index.' h6',
					'.page-schema-'.$index.' h1 a',
					'.page-schema-'.$index.' h2 a',
					'.page-schema-'.$index.' h3 a',
					'.page-schema-'.$index.' h4 a',
					'.page-schema-'.$index.' h5 a',
					'.page-schema-'.$index.' h6 a'
				),
				'property'	=>	array
				(
					'color'		=>	$value['option']['page_schema_text_color_header'],
				)
			),true);	

			$content.=$value['option']['page_schema_custom_class']; 
		}

		/***/

		$content.=$CSS->create(array
		(
			'selector'	=>	array('ul.page-list>li'),
			'property'	=>	array('margin-top'=>NLThemeOption::getOption('page_margin'))
		),true);	

		$content.=$CSS->create(array
		(
			'selector'	=>	array('ul.page-list>li:first-child'),
			'property'	=>	array('margin-top'=>NLThemeOption::getOption('page_first_margin_top'))
		),true);

		$content.=$CSS->create(array
		(
			'selector'	=>	array('ul.page-list'),
			'property'	=>	array('margin-bottom'=>NLThemeOption::getOption('page_last_margin_bottom'))
		),true);

		/***/

		foreach($media as $step=>$property)
		{
			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array
				(
					'a','body','input','label','textarea',
					'.nostalgia-accordion.ui-widget',
					'.nostalgia-accordion.ui-widget p'		
				),
				'property'	=>	array
				(
					'font-size'		=>	NLThemeOption::getOption('font_font_size_base_responsive_'.$step)
				)
			),true);	

			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array('h1','h1 a'),
				'property'	=>	array('font-size'=>NLThemeOption::getOption('font_font_size_h1_responsive_'.$step))
			),true);

			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array('h2','h2 a'),
				'property'	=>	array('font-size'=>NLThemeOption::getOption('font_font_size_h2_responsive_'.$step))
			),true);

			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array('h3','h3 a'),
				'property'	=>	array('font-size'=>NLThemeOption::getOption('font_font_size_h3_responsive_'.$step))
			),true);

			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array('h4','h4 a'),
				'property'	=>	array('font-size'=>NLThemeOption::getOption('font_font_size_h4_responsive_'.$step))
			),true);

			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array('h5','h5 a'),
				'property'	=>	array('font-size'=>NLThemeOption::getOption('font_font_size_h5_responsive_'.$step))
			),true);

			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array('h6','h6 a'),
				'property'	=>	array('font-size'=>NLThemeOption::getOption('font_font_size_h6_responsive_'.$step))
			),true);

			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array
				(
					'div.subheader',
					'div.subheader b',
					'div.subheader strong'
				),
				'property'	=>	array('font-size'=>NLThemeOption::getOption('font_font_size_subheader_responsive_'.$step))
			),true);

			$content.=$CSS->create(array
			(
				'media'		=>	$property,
				'selector'	=>	array('a.link-button'),
				'property'	=>	array('font-size'=>NLThemeOption::getOption('font_font_size_link_button_responsive_'.$step))
			),true);
		}
		
		/***/
		
		$content.=$CSS->create(array
		(
			'selector'	=>	array('div.navigation-bar li'),
			'property'	=>	array('background-color-rgba'=>array('background-color'=>NLThemeOption::getOption('navigation_bar_background_color'),'opacity'=>NLThemeOption::getOption('navigation_bar_background_color_opacity')))
		),true);	

		$content.=$CSS->create(array
		(
			'selector'	=>	array('div.navigation-bar li.visible'),
			'property'	=>	array('background-color-rgba'=>array('background-color'=>NLThemeOption::getOption('navigation_bar_background_color_visible'),'opacity'=>NLThemeOption::getOption('navigation_bar_background_color_visible_opacity')))
		),true);	

		$content.=$CSS->create(array
		(
			'selector'	=>	array('div.navigation-bar li:hover'),
			'property'	=>	array('background-color-rgba'=>array('background-color'=>NLThemeOption::getOption('navigation_bar_background_color_hover'),'opacity'=>NLThemeOption::getOption('navigation_bar_background_color_hover_opacity')))
		),true);	

		$content.=$CSS->create(array
		(
			'selector'	=>	array('div.navigation-bar li.selected'),
			'property'	=>	array('background-color-rgba'=>array('background-color'=>NLThemeOption::getOption('navigation_bar_background_color_selected'),'opacity'=>NLThemeOption::getOption('navigation_bar_background_color_selected_opacity')))
		),true);
		
		/***/

		if(NLThemeOption::getOption('navigation_bar_item_animation_enable')==1)
		{
			$content.=
			'
				div.navigation-bar ul li,
				div.navigation-bar ul li a
				{
					transition:all 0.3s ease-in-out;
					-o-transition:all 0.3s ease-in-out;
					-ms-transition:all 0.3s ease-in-out;
					-moz-transition:all 0.3s ease-in-out;
					-webkit-transition:all 0.3s ease-in-out;  
				}				
			';
		}
		
		if((isset($media[1])) && ($Validation->isNotEmpty(NLThemeOption::getOption('custom_css_responsive_1')))) 
			$content.=NLThemeOption::getOption('custom_css_responsive_1');

		if((isset($media[2])) && ($Validation->isNotEmpty(NLThemeOption::getOption('custom_css_responsive_2'))))
		{
			$content.=
			'
			@media only screen  and (min-width:768px) and (max-width:969px)
			{
			'.NLThemeOption::getOption('custom_css_responsive_2').'
			}
			';
		}

		if((isset($media[3])) && ($Validation->isNotEmpty(NLThemeOption::getOption('custom_css_responsive_3'))))
		{
			$content.=
			'
			@media only screen  and (min-width:480px) and (max-width:767px)
			{
			'.NLThemeOption::getOption('custom_css_responsive_3').'
			}
			';
		}

		if((isset($media[4])) && ($Validation->isNotEmpty(NLThemeOption::getOption('custom_css_responsive_4'))))
		{
			$content.=
			'
			@media only screen  and (max-width:479px)
			{
			'.NLThemeOption::getOption('custom_css_responsive_4').'
			}
			';
		}
		
		$file=THEME_PATH_MULTISITE_SITE_STYLE.'style.css';
		
		if(file_put_contents($file,$content)===false) return(false);
		
		return(true);
	}
	
	/**************************************************************************/
	
	function createMultisitePath()
	{
		$data=array
		(
			THEME_PATH_MULTISITE_SITE,
			THEME_PATH_MULTISITE_SITE_STYLE
		);
		
		foreach($data as $path)
		{
			if(!NLThemeFile::dirExist($path)) @mkdir($path);			
			if(!NLThemeFile::dirExist($path)) return(false);
		}
		
		return(true);
	}
	
	/**************************************************************************/
	
	function adminNotice()
	{
		/***/
		
		$file=array(THEME_PATH_MULTISITE_SITE_STYLE.'style.css');
		foreach($file as $path)
		{
			if(!is_writable($path))
			{
				echo 
				'
					<div class="error">
						<p>'.sprintf(__('<b>File %s cannot be created. Please make sure that this location is writable.</b>',THEME_DOMAIN),str_replace('\\','/',$path)).'</p>
					</div>				
				';				
			}
		}
		
		/***/
	}
		
	/**************************************************************************/
	/**************************************************************************/
	
	function publicInit()
	{
		$AudioPlayerPost=new NLThemeAudioPlayerPost();
		$BackgroundVideoPost=new NLThemeBackgroundVideoPost();
		$BackgroundSliderPost=new NLThemeBackgroundSliderPost();
		
		$data=array();
		$pattern=array
		(
			'rightClick'				=>	'/^right_click_/',
			'textSelect'				=>	'/^text_select_/',
			'audioPlayer'				=>	'/^audio_player_/',
			'navigationBar'				=>	'/^navigation_bar_/',
			'fancyboxImage'				=>	'/^fancybox_image_/',
			'fancyboxVideo'				=>	'/^fancybox_video_/',
			'galleryCarousel'			=>	'/^gallery_carousel_/',
			'backgroundVideo'			=>	'/^background_video_/',
			'backgroundSlider'			=>	'/^background_slider_/',
			'googleMapCompanyInfo'		=>	'/^google_map_company_info_/'
		);
		
		$this->prepareLibrary();
		
		$GoogleFont=new NLThemeGoogleFont();
		$GoogleFont->setToStyle($this->library['style']);
		
		$this->includeLibrary(NLThemeOption::getOption('google_map_enable'),array('google-map'));
		$this->includeLibrary(NLThemeOption::getOption('contact_form_enable'),array('contact-form'));
		$this->includeLibrary(NLThemeOption::getOption('newsletter_form_enable'),array('newsletter-form'));
		$this->includeLibrary(NLThemeOption::getOption('responsive_mode_enable'),array('style-responsive'));
				
		if($BackgroundVideoPost->isEnableBackgroundVideo())
		{
			unset($pattern['backgroundSlider']);
			$this->includeLibrary(1,array('jquery-videoBackground'));
			$data['backgroundVideo']['file']=$BackgroundVideoPost->getVideoFile();	
		}
		elseif($BackgroundSliderPost->isEnableBackgroundSlider())
		{
			unset($pattern['backgroundVideo']);
			$this->includeLibrary(1,array('jquery-supersized'),array('jquery-supersized'));
			$data['backgroundSlider']['file']=$BackgroundSliderPost->getImage();		
		}
		else
		{
			unset($pattern['backgroundVideo']);
			unset($pattern['backgroundSlider']);
		}

		if($AudioPlayerPost->isEnableAudioPlayer())
		{
			$this->includeLibrary(1,array('jquery-jplayer'));
			$data['audioPlayer']['file']=$AudioPlayerPost->getAudioFile();
		}
		else unset($pattern['audioPlayer']);
		
		$this->addLibrary('style',2);
		$this->addLibrary('script',2);
		
		$result=array();
		
		$option=NLThemeOption::createOptionObject();
		foreach($pattern as $patternIndex=>$patternValue)
		{
			foreach($option as $optionIndex=>$optionValue)
			{
				if(preg_match($patternValue,$optionIndex,$result))
				{
					$index=preg_replace($patternValue,'',$optionIndex);
					$data[$patternIndex][$index]=$optionValue;
				}
			}
		}

		$data['config']['theme_url']=THEME_URL;
		$data['config']['ajax_url']=admin_url('admin-ajax.php');
	
		$text=array();
		
		$text['fancybox']['next']=esc_html__('Next',THEME_DOMAIN);
		$text['fancybox']['close']=esc_html__('Close',THEME_DOMAIN);
		$text['fancybox']['toggle']=esc_html__('Toggle size',THEME_DOMAIN);
		$text['fancybox']['previous']=esc_html__('Previous',THEME_DOMAIN);
		$text['fancybox']['start_slideshow']=esc_html__('Start slideshow',THEME_DOMAIN);
		$text['fancybox']['error']=esc_html__('The requested content cannot be loaded.<br/>Please try again later.',THEME_DOMAIN);
		
		$param=array
		(
			'l10n_print_after'=>'themeOption='.json_encode($data).';themeText='.json_encode($text).';'
		);
		
		wp_localize_script('public','themeOption',$param);
	}
	
	/**************************************************************************/
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/