<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
$tempColumns = array(
	'tx_pkincludepages_pages' => array(
		'exclude' => 0,
		'label' => 'Pages included in this element:',
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'pages',
			'size' => '5',
			'maxitems' => 50,
			'minitems' => 0,
			'show_thumbs' => 1,
		)
	),
	'tx_pkincludepages_column' => array(
		'exclude' => 0,
		'label' => 'Included Column',
		'config' => array(
			'type' => 'input',
			'size' => '5',
			'eval' => 'int'
		)
	)
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $tempColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        'tx_pkincludepages_pages, tx_pkincludepages_column'
);