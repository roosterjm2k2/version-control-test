<?php
/**
 * Plugin Name: Version Control Test for Uptrending
 * Plugin URI: http://www.joshuamcdonald.info
 * Description: A version control plugin test, because you want me working for you!
 * Version: 0.1
 * Author: Joshua McDonald
 * Author URI: http://www.joshuamcdonald.info
 * License: GPL2
 */

// The primary template tag for this plugin.
function vct_display_version() {
 	$commits = get_option('vct_commit_count');
 	$version = $commits / 10;
 	print "<span class=\"version\">Version $version";
}

add_action('admin_init','vct_meta_init');
 
// Add the meta box to posts and pages
function vct_meta_init() {
	add_meta_box('vct_meta', 'Version Control', 'vct_meta_setup', 'page', 'side', 'high');
	add_meta_box('vct_meta', 'Version Control', 'vct_meta_setup', 'post', 'side', 'high');
    add_action('save_post','vct_meta_save');
}

// Build out the meta-box for the version control admin panel for pages 
function vct_meta_setup() {
    global $post;
    $meta = get_post_meta($post->ID,'_vct_version',TRUE);
 	$commits = get_option('vct_commit_count');
 	echo '<label>Applies to Version:</label> <select name="_vct_version"><option value="">Current</option>';
 	for($i=1; $i<=$commits; $i++) {
 		$selected = $meta == $i ? ' selected="selected"' : '';
 		echo '<option value="'.$i.'"'.$selected.'>'.($i / 10).'</option>';
 	}
 	echo '</select>';
}

// Update per-post version on admin form save
function vct_meta_save() {
	global $post;
	$post_id = $post->ID;
	$new_value = $_POST['_vct_version'];
	update_post_meta($post_id,'_vct_version',$new_value);
}

?>