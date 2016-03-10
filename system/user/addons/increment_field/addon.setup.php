<?php

defined('INCREMENT_FIELD_NAME') || define('INCREMENT_FIELD_NAME', 'Increment Field');
defined('INCREMENT_FIELD_VER') || define('INCREMENT_FIELD_VER', '1.0.0-b.1');

return array(
	'author' => 'TJ Draper',
	'author_url' => 'https://buzzingpixel.com',
	'description' => 'Increment Field for ExpressionEngine 3',
	// 'docs_url' => '',
	'name' => INCREMENT_FIELD_NAME,
	'namespace' => 'BuzzingPixel\IncrementField',
	'settings_exist' => false,
	'version' => INCREMENT_FIELD_VER,
	'fieldtypes' => array(
		'increment_field' => array(
			'name' => 'Increment Field',
			'compatibility' => 'text'
		)
	)
);
