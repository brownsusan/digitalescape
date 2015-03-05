<!DOCTYPE html>

<?php
		$Validation=new NLThemeValidation();
		$NLThemeMetaTag=new NLThemeMetaTag();
?>

<html <?php language_attributes(); ?>>

	<head>
		
		<title><?php bloginfo('name'); ?></title>

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
		<meta name="format-detection" content="telephone=no"/>
<?php
		echo $NLThemeMetaTag->createMetaTag();
?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<?php
		if($Validation->isNotEmpty(NLThemeOption::getOption('favicon_url')))
		{
?>		
		<link rel="shortcut icon" href="<?php echo esc_attr(NLThemeOption::getOption('favicon_url')); ?>" />
<?php
		}
		if(NLThemeOption::getOption('responsive_mode_enable')==1)
		{
?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<?php
		}
			
		wp_head();
?>
	</head>
	
	<body <?php body_class(); ?>>