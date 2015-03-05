<?php

/******************************************************************************/
/******************************************************************************/

$themeContext='nlt';
$themeOptionPrefix='nlt_option';

/***/

TIData::set('value','dummy_content_file',array
(
	array('path'=>get_template_directory().'/dummy_content/content.xml'),
));

TIData::set('path',$themeOptionPrefix.'_logo_image_url',array('title'=>'logo','postType'=>'attachment'));

/***/

TIData::set('option','blogname','Nostalgia - Responsive WordPress Landing Page');
TIData::set('option','blogdescription','');

/***/

function ti_complete()
{
	$Theme=new NLTheme();
	$Theme->createCSSFile();
}

/******************************************************************************/
/******************************************************************************/