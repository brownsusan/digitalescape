<?php

	$Theme=new NLTheme();

?>

		<!-- Background overlay -->
		<div id="background-overlay" class="background-overlay-<?php echo (int)NLThemeOption::getOption('background_overlay'); ?>"></div>
		<!-- /Background overlay -->

<?php

	$NavigationBar=new NLThemeNavigationBar();
	echo $NavigationBar->create();

	wp_footer();

?>
		
	</body>

</html>