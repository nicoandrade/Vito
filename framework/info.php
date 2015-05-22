<?php
$ql_theme_data = wp_get_theme();
return array(
	'theme_name' => $ql_theme_data['Name'], 
	'theme_slug' => sanitize_title($ql_theme_data['Name']),
	'theme_author' => $ql_theme_data['Author'],
	'theme_author_uri' => $ql_theme_data['AuthorURI'],
	'theme_version' => $ql_theme_data['Version'],
	'required_wp_version' => '3.1'
);