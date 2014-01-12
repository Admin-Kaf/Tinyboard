<?php
	$theme = array();
	
	// Theme name
	$theme['name'] = 'rules';
	// Description (you can use Tinyboard markup here)
	$theme['description'] = 'List all rules.';
	$theme['version'] = 'v0.1';
	
	// Theme configuration	
	$theme['config'] = Array();
	
	$theme['config'][] = Array(
		'title' => 'Title',
		'name' => 'title',
		'type' => 'text'
	);
	
	$theme['build_function'] = 'rules_build';
?>
