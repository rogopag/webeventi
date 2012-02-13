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

?>
