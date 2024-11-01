<?php 

if(!defined('DOING_AJAX')) {
	define('DOING_AJAX', true);
}

if(!defined('WP_ADMIN')) {
	define('WP_ADMIN', false);
}

if('get' !== strtolower($_SERVER['REQUEST_METHOD'])) {
	die;
}

if('instant-search' !== trim($_GET["action"])) {
	die;
}

require_once('../../../wp-load.php');

$q = trim($_GET["q"]);

if(empty($q)) {
	die;
}

$instant_search_posts = array();
	
$instant_search = get_terms(array('post_tag', 'category'), array('fields' => 'names', 'name__like' => $q));

if(empty($instant_search)) {
	die;
}

echo implode($instant_search, "\n");
die;
?>