<?php

/******************************************************************************/
/******************************************************************************/

global $content_width;
if(!isset($content_width)) $content_width=970;

require_once('include.php');

if(is_admin()) require_once('admin/functions.php');
else require_once('public/functions.php');

$Theme=new NLTheme();

add_action('switch_theme',array($Theme,'switchTheme'));
add_action('after_setup_theme',array($Theme,'setupTheme'));

/******************************************************************************/
/******************************************************************************/