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

?>