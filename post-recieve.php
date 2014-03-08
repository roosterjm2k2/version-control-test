<?php

/* 
	Post Receive script for the github hook.
*/

include '../../../wp-blog-header.php'; // we need the WP environment to load on this

// #TODO: make these options on the options page
$GH_REPO = 'roosterjm2k2/version-control-test';
$GH_BRANCH = 'feature_product';

// URL For GH Commits API
$COMMIT_API = "https://api.github.com/repos/$GH_REPO/commits?sha=$GH_BRANCH";

// Fetch the result with some CURL magic
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $COMMIT_API);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');

$response = curl_exec($ch);
curl_close($ch);

$commits = count(json_decode($response));

// Finally, save the count to the database
update_option("vct_commit_count", $commits);

print "Updated Commit Count: $commits";

?>