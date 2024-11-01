<?php 

/*
Plugin Name: WP Instant Search
Plugin URI: http://www.jayminkapish.com/2010/09/30/wordpress-instant-search-plugin/
Description: WordPress Instant Search looks for matched tags and categories on your blog and suggest to readers which improves search experiece.
Version: 1.1
Author: Jaymin Patel
Author URI: mailto:jayminkapish@yahoo.com
*/

function _wp_instant_load_jquery() {
	$plugin_url = plugin_dir_url(__FILE__);
	wp_enqueue_script('jquery');
	wp_enqueue_script('suggest');
	wp_enqueue_script('wp_instant_search',  $plugin_url . 'instant_search.js', array('jquery', 'suggest'));
}

function _wp_instant_search_css() {
	echo <<<EOF
<style type="text/css">
.instant-search-results{background-color:#FFFFFF;border-color:#808080;border-style:solid;border-width:1px;display:none;list-style-image:none;list-style-position:outside;list-style-type:none;margin:0;padding:0;position:absolute;z-index:10000;}
.instant-search-results li{cursor:pointer;padding:2px 5px;text-align:left;white-space:nowrap;color:#101010;line-height:140%;margin-bottom:6px;font-size:14px;}
.instant-search-select{background-color:#FFFEEB;}
</style>
EOF;
}

add_action('wp_enqueue_scripts', '_wp_instant_load_jquery');
add_action('wp_head', '_wp_instant_search_css');

?>
