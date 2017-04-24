<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Pottkinder: Included pages',
	'description' => 'Adds a new content Element ',
	'category' => 'fe',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'tt_content',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Bastian Bringenberg',
	'author_email' => 'bastian@agentur-pottkinder.de',
	'author_company' => 'Pottkinder UG',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.1.0-8.99.0',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	)
);