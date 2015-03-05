<?php

/******************************************************************************/

global $shortCodeData;

$ShortCodeManager=new NLThemeShortCodeManager();

/******************************************************************************/

$Layout=new NLThemeLayout();
$Window=new NLThemeWindow();
$GoogleMap=new NLThemeGoogleMap();
$Gallery=new NLThemeGalleryPost();

/******************************************************************************/

$galleryType=NLThemeHelper::extractDictionary(array_combine(array_keys($Gallery->galleryType),array_values($Gallery->galleryType)),array('useDefault'),0);
$galleryCategory=NLThemeHelper::createTermDictionary(THEME_CONTEXT.'_gallery_category',array(),array(),array('useNone'));

/******************************************************************************/

$testimonialCategory=NLThemeHelper::createTermDictionary(THEME_CONTEXT.'_testimonial_category',array(),array(),array('useNone'));

/******************************************************************************/

$featureCategory=NLThemeHelper::createTermDictionary(THEME_CONTEXT.'_feature_category',array(),array(),array('useNone'));

/******************************************************************************/

$layoutData=NLThemeHelper::extractDictionary(array_combine(array_keys($Layout->layout),array_keys($Layout->layout)),array('useDefault'));
$layoutColumnData=NLThemeHelper::extractDictionary(array_combine(array_keys($Layout->layoutColumn),array_values($Layout->layoutColumn)),array('useDefault'));

/******************************************************************************/

$linkWindowTarget=NLThemeHelper::extractDictionary(array_combine(array_keys($Window->linkWindowTarget),array_values($Window->linkWindowTarget)),array('useDefault'),1);

/******************************************************************************/

$googleZoomLevel=array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN));
for($i=0;$i<=21;$i++) $googleZoomLevel[$i]=$i;

/******************************************************************************/

$shortCodeData=array
(
	'accordion'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Accordion: Accordion',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates accordion.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Active',THEME_DOMAIN),
				'legend'														=>	array(esc_html__('The zero-based index of the panel that is active (open).',THEME_DOMAIN),esc_html__('Value \'false\' means that all items will be closed at start.',THEME_DOMAIN)),
				'field'															=>	array
				(
					'active'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	$ShortCodeManager->createShortCode('accordion_item',esc_html__('Content of first panel',THEME_DOMAIN),array('header'=>'Header #1',THEME_DOMAIN)).$ShortCodeManager->createShortCode('accordion_item',esc_html__('Content of second panel',THEME_DOMAIN),array('header'=>'Header #2',THEME_DOMAIN),array(null,'<br/>'))
	),
	'accordion_item'															=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Accordion: Accordion item',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates single panel of accordion.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Header',THEME_DOMAIN),
				'field'															=>	array
				(
					'header'													=>	array
					(	
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	esc_html__('Content of panel',THEME_DOMAIN)
	),
	'audio_player_button'														=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Buttons: Audio player',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates audio player button with on/off music option.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)			
		)
	),
	'box'																		=>	array
	(	
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Box: Box',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates box.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	esc_html__('Here you can add text.',THEME_DOMAIN)
	),
	'link_button'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Buttons: Link button',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates button.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Label',THEME_DOMAIN),
				'legend'														=>	esc_html__('Label of a button.',THEME_DOMAIN),
				'field'															=>	array
				(
					'content'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('URL',THEME_DOMAIN),
				'legend'														=>	esc_html__('URL address of a link.',THEME_DOMAIN),
				'field'															=>	array
				(
					'href'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Target',THEME_DOMAIN),
				'legend'														=>	esc_html__('Target of a link.',THEME_DOMAIN),
				'field'															=>	array
				(
					'target'													=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$linkWindowTarget
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Fancybox popup width',THEME_DOMAIN),
				'field'															=>	array
				(
					'width'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),	
			array
			(
				'header'														=>	esc_html__('Fancybox popup height',THEME_DOMAIN),
				'field'															=>	array
				(
					'height'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Show "Click here" arrow',THEME_DOMAIN),
				'legend'														=>	esc_html__('Show "Click here" arrow',THEME_DOMAIN),
				'field'															=>	array
				(
					'show_click_here'											=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>esc_html__('Yes',THEME_DOMAIN),0=>esc_html__('No',THEME_DOMAIN))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'features'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Features: Features',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates list of features.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Category',THEME_DOMAIN),
				'legend'														=>	esc_html__('Select categories from which features have to be retrieved.',THEME_DOMAIN),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$featureCategory
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Layout',THEME_DOMAIN),
				'legend'														=>	esc_html__('Select type of layout.',THEME_DOMAIN),
				'field'															=>	array
				(	
					'layout'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>esc_html__('Layout 1',THEME_DOMAIN),2=>esc_html__('Layout 2',THEME_DOMAIN))
					)
				)
			),							
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'contact_form'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Form: Contact Form',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates contact form based on theme settings.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'newsletter_form'															=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Form: Newsletter Form',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates newsletter form based on theme settings.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)			
		)
	),
	'gallery'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Galleries: Gallery')
		),
		'description'															=>	esc_html__('This shortcode creates gallery.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Gallery type'),
				'field'															=>	array
				(
					'type'														=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$galleryType
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Gallery categories'),
				'legend'														=>	esc_html__('Select categories from which images have to be displayed'),
				'field'															=>	array
				(
					'category'														=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$galleryCategory
					)
				)
			),			
			array
			(
				'header'														=>	esc_html__('Show category filter bar'),
				'field'															=>	array
				(
					'filter'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]'),1=>esc_html__('Yes'),0=>esc_html__('No'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Default category'),
				'legend'														=>	esc_html__('Specifies default selected category of gallery'),
				'field'															=>	array
				(
					'selected'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$galleryCategory
					)
				)
			),				
			array
			(
				'header'														=>	esc_html__('Show titles of gallery items'),
				'field'															=>	array
				(
					'show_title'												=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]'),1=>esc_html__('Yes'),0=>esc_html__('No'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Show descriptions of gallery items'),
				'field'															=>	array
				(
					'show_description'											=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]'),1=>esc_html__('Yes'),0=>esc_html__('No'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('CSS class'),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)			
		)
	),	
	'google_map'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Google Map: Google Map',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates google map.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Enable company info box',THEME_DOMAIN),
				'legend'														=>	esc_html__('Enable or disable company info box on Google Map',THEME_DOMAIN),
				'field'															=>	array
				(
					'company_info_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>esc_html__('Enable',THEME_DOMAIN),0=>esc_html__('Disable',THEME_DOMAIN))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Show company info at start',THEME_DOMAIN),
				'legend'														=>	esc_html__('EShow or hide company info box at start',THEME_DOMAIN),
				'field'															=>	array
				(
					'company_info_enable_start'									=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>esc_html__('Enable',THEME_DOMAIN),0=>esc_html__('Disable',THEME_DOMAIN))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Map type',THEME_DOMAIN),
				'field'															=>	array
				(
					'map_type_id'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	NLThemeHelper::extractDictionary($GoogleMap->mapTypeId,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Point coordinates',THEME_DOMAIN),
				'legend'														=>	esc_html__('Coordinates, in order: latitude, longitude.',THEME_DOMAIN),
				'field'															=>	array
				(
					'coordinate_lat'											=>	array
					(
						'legend'												=>	'Latitude',
						'type'													=>	'text'					
					),
					'coordinate_lng'											=>	array
					(
						'legend'												=>	'Longitude',
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Marker coordinates',THEME_DOMAIN),
				'legend'														=>	esc_html__('Coordinates, in order: latitude, longitude.',THEME_DOMAIN),
				'field'															=>	array
				(
					'coordinate_marker_lat'										=>	array
					(
						'legend'												=>	'Latitude',
						'type'													=>	'text'					
					),
					'coordinate_marker_lng'										=>	array
					(
						'legend'												=>	'Longitude',
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Width',THEME_DOMAIN),
				'legend'														=>	esc_html__('Width of the map (in % of the parent selector).',THEME_DOMAIN),
				'field'															=>	array
				(
					'width'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Height',THEME_DOMAIN),
				'legend'														=>	esc_html__('Height of the map (in px).',THEME_DOMAIN),
				'field'															=>	array
				(
					'height'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Map type control',THEME_DOMAIN),
				'legend'														=>	esc_html__('Enable or disable map type control.',THEME_DOMAIN),
				'field'															=>	array
				(
					'map_type_control_enable'									=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>esc_html__('Enable',THEME_DOMAIN),0=>esc_html__('Disable',THEME_DOMAIN))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Map type control style',THEME_DOMAIN),
				'field'															=>	array
				(
					'map_type_control_style'									=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	NLThemeHelper::extractDictionary($GoogleMap->mapTypeControlStyle,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Map type control position',THEME_DOMAIN),
				'field'															=>	array
				(
					'map_type_control_position'									=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	NLThemeHelper::extractDictionary($GoogleMap->mapPosition,array('useDefault'))
					)
				)
			),	
			array
			(
				'header'														=>	esc_html__('Zoom control',THEME_DOMAIN),
				'legend'														=>	esc_html__('Enable or disable zoom control.',THEME_DOMAIN),
				'field'															=>	array
				(
					'zoom_control_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>esc_html__('Enable',THEME_DOMAIN),0=>esc_html__('Disable',THEME_DOMAIN))
					)
				)
			),			
			array
			(
				'header'														=>	esc_html__('Zoom level',THEME_DOMAIN),
				'legend'														=>	esc_html__('Zoom level.',THEME_DOMAIN),
				'field'															=>	array
				(
					'zoom_level'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$googleZoomLevel
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Zoom style',THEME_DOMAIN),
				'field'															=>	array
				(
					'zoom_style'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	NLThemeHelper::extractDictionary($GoogleMap->zoomControlStyle,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Zoom position',THEME_DOMAIN),
				'field'															=>	array
				(
					'zoom_position'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	NLThemeHelper::extractDictionary($GoogleMap->mapPosition,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Pan control',THEME_DOMAIN),
				'legend'														=>	esc_html__('Enable or disable pan control.',THEME_DOMAIN),
				'field'															=>	array
				(
					'pan_control_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>esc_html__('Enable',THEME_DOMAIN),0=>esc_html__('Disable',THEME_DOMAIN))
					)
				)
			),	
			array
			(
				'header'														=>	esc_html__('Pan control position',THEME_DOMAIN),
				'field'															=>	array
				(
					'pan_control_position'										=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	NLThemeHelper::extractDictionary($GoogleMap->mapPosition,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Scale control',THEME_DOMAIN),
				'legend'														=>	esc_html__('Enable or disable scale control.',THEME_DOMAIN),
				'field'															=>	array
				(
					'scale_control_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use global settings]',THEME_DOMAIN),1=>esc_html__('Enable',THEME_DOMAIN),0=>esc_html__('Disable',THEME_DOMAIN))
					)
				)
			),	
			array
			(
				'header'														=>	esc_html__('Scale control position',THEME_DOMAIN),
				'field'															=>	array
				(
					'scale_control_position'									=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	NLThemeHelper::extractDictionary($GoogleMap->mapPosition,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Street view control',THEME_DOMAIN),
				'legend'														=>	esc_html__('Enable or disable street view control.',THEME_DOMAIN),
				'field'															=>	array
				(
					'street_view_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>esc_html__('Enable',THEME_DOMAIN),0=>esc_html__('Disable',THEME_DOMAIN))
					)
				)
			),	
			array
			(
				'header'														=>	esc_html__('Street view control position',THEME_DOMAIN),
				'field'															=>	array
				(
					'street_view_position'										=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	NLThemeHelper::extractDictionary($GoogleMap->mapPosition,array('useDefault'))
					)
				)
			)		
		)	
	),
	'layout'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Layouts: Layout',THEME_DOMAIN)
		),	
		'description'															=>	esc_html__('This shortcode creates layout.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Layout',THEME_DOMAIN),
				'legend'														=>	esc_html__('Select type of layout.',THEME_DOMAIN),
				'field'															=>	array
				(
					'layout'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$layoutData
					)
				)
			),			
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	esc_html__('Here you have to add columns.',THEME_DOMAIN)
	),
	'layout_column'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Layouts: Layout column',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates column.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Column',THEME_DOMAIN),
				'legend'														=>	esc_html__('Select column position.',THEME_DOMAIN),
				'field'															=>	array
				(
					'column'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$layoutColumnData
					)
				)
			)
		),
		'hidden_content'														=>	esc_html__('Here you can add content.',THEME_DOMAIN)
	),
	'logo'																		=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Logo: Logo',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates logo based on theme settings.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'social_profiles_list'														=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Social: Social profiles list',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates social profiles list on theme settings.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'twitter_carousel'															=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Social: Twitter carousel',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates latest tweets carousel based on settings from theme options.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'testimonials'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Testimonials: Testimonials',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates list of testimonials.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Category',THEME_DOMAIN),
				'legend'														=>	esc_html__('Select categories from which testimonials have to be retrieved.',THEME_DOMAIN),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$testimonialCategory
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'header'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Text: Header',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates header.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('Header',THEME_DOMAIN),
				'field'															=>	array
				(
					'content'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	esc_html__('Important',THEME_DOMAIN),
				'legend'														=>	esc_html__('Important of header.',THEME_DOMAIN),
				'field'															=>	array
				(
					'important'													=>	array
					(
						'legend'												=>	null,
						'type'													=>	'radio',
						'data'													=>	array(-1=>esc_html__('[Use default settings]',THEME_DOMAIN),1=>'H1',2=>'H2',3=>'H3',4=>'H4',5=>'H5',6=>'H6')
					)
				)
			),	
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),	
	'subheader'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	esc_html__('Text: Subheader',THEME_DOMAIN)
		),
		'description'															=>	esc_html__('This shortcode creates subheader.',THEME_DOMAIN),
		'section'																=>	array
		(
			array
			(
				'header'														=>	esc_html__('CSS class',THEME_DOMAIN),
				'legend'														=>	esc_html__('List of CSS classes defined in CSS files separated by space.',THEME_DOMAIN),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	esc_html__('Here you can add text.',THEME_DOMAIN)
	)
);