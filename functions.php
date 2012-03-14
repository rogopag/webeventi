<?php

if (function_exists('add_theme_support')) { 
// to use wp_nav_menu() in WordPress3.0
add_theme_support( 'nav-menus' );
// adds support for the thumbnails / featured images.
add_theme_support( 'post-thumbnails' );
};

if ( function_exists('register_sidebar') )
    register_sidebar();	

function sidebarssuck_widget_search() {
	if (get_search_query()) {
		$search = get_search_query(); 
	} else { 
		$search = __("Search");
	}
	?>
		<form method="get" action="<?php bloginfo('home');?>">
			<input type="text" name="s" id="s" onclick="if(this.value == '<?=$search;?>'){this.value=''}" value="<?=$search;?>" />
		</form>
	<?php
}
register_sidebar_widget(__('Search'), 'sidebarssuck_widget_search');

function hide_widgets() { 
	unregister_sidebar_widget("search");
	unregister_sidebar_widget("pages");
	unregister_sidebar_widget("calendar");
	unregister_sidebar_widget("archives");
	unregister_sidebar_widget("links");
	unregister_sidebar_widget("meta");
	unregister_sidebar_widget("recent-posts");
	unregister_sidebar_widget("tag_cloud");
	unregister_sidebar_widget("text-1");
	unregister_sidebar_widget("recent-comments");
	unregister_sidebar_widget("rss-1");
	unregister_sidebar_widget("categories-1");
}  
add_action('widgets_init','hide_widgets');


/*Theme specific javascript loads*/
function enqueue_handler()
{
	wp_register_style('scroll', get_bloginfo('template_url').'/js/css/style.css', '0.1');
	wp_enqueue_style('scroll');
	wp_register_style('lightbox', get_bloginfo('template_url').'/js/css/jquery.lightbox-0.5.css', '0.5');
	wp_enqueue_style('lightbox');
	wp_enqueue_script('corners', get_bloginfo('template_url').'/js/jquery.corner.js', array('jquery'), '0.1', false);
	wp_enqueue_script('scroll', get_bloginfo('template_url').'/js/gallery_scroll.js', array('jquery'), '0.1');
	wp_enqueue_script('lightbox', get_bloginfo('template_url').'/js/jquery.lightbox-0.5.min.js', array('jquery'), '0.5', false);
	wp_enqueue_script('scripts', get_bloginfo('template_url').'/js/script.js', array('jquery'), '0.1', false);
	if( is_page_template('contacts.php') )
	{
		wp_enqueue_script('maps', "http://maps.google.com/maps/api/js?sensor=true", array(), '0.1');	
	}
	wp_localize_script('scripts', 'Webeventi', array('site_url'=> get_bloginfo('url'), 'template_url' => get_bloginfo('template_url')));
}
add_action('wp_print_scripts', 'enqueue_handler');
?>
