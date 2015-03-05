<?php

/******************************************************************************/
/******************************************************************************/

require_once('define.php');

require_once(THEME_PATH_CLASS.'NLTheme.File.class.php');
require_once(THEME_PATH_CLASS.'NLTheme.Include.class.php');

NLThemeInclude::includeFileFromDir(THEME_PATH_CLASS);

NLThemeInclude::includeClass(THEME_PATH_LIBRARY.'mobileDetect/Mobile_Detect.php',array('Mobile_Detect'));
NLThemeInclude::includeClass(THEME_PATH_LIBRARY.'twitterOAuth/twitteroauth/twitteroauth.php',array('TwitterOAuth'));
NLThemeInclude::includeClass(THEME_PATH_LIBRARY.'tgm_plugin_activation/class-tgm-plugin-activation.php',array('TGM_Plugin_Activation'));

/******************************************************************************/
/******************************************************************************/