<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon">
	<style type="text/css" media="screen">
	@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<!--[if gte IE 6]>
		<style type="text/css" media="screen">
			#sidebar {width: 201px;}
		</style>
		<![endif]-->
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_get_archives('type=monthly&format=link'); ?>
		<?php //comments_popup_script(); // off by default ?>
		<?php wp_head(); ?>
	</head>

	<body>
		<div id="page">
			<div id="container">   
				<div id="wrap">
					<div id="header">
						
						<div class="header_contenitore_left">
							<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
							<p><small><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('description'); ?></a></small></p>
						</div>
							<?php 
							wp_nav_menu( array( 'container' => 'false', 'name' => 'MainMenu', 'menu_class' => 'navigation' ) );

						if (is_active_widget("sidebarssuck_widget_search")) {
							sidebarssuck_widget_search();
						}
						?>
				</div>
					<!-- end header -->