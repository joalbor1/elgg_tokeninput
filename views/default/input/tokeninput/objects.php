<?php

/**
 * Shortcut view to display objects picker
 * @uses $vars['subtype'] Subtype of objects to return
 */

$vars['callback'] = 'elgg_tokeninput_search_objects';

$subtype = elgg_extract('subtype', $vars, array());
$vars['query'] = array(
	'options' => array(
		'subtypes' => $subtype,
		)
);

echo elgg_view('input/tokeninput', $vars);
