<?php
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
	 wp_enqueue_script('corners', get_bloginfo('template_url').'/js/jquery.corner.js', array('jquery'), '0.1', false);
	 wp_enqueue_script('scripts', get_bloginfo('template_url').'/js/script.js', array('jquery'), '0.1', false);
	wp_localize_script('scripts', 'Webeventi', array('site_url'=> get_bloginfo('url')));
}
add_action('wp_print_scripts', 'enqueue_handler');
?>
