<?php
defined('TYPO3_MODE') or die();

$boot = function () {
    $_EXTKEY = 'pk_include_pages';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/ContentElement.ts">'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Pottkinder.' . $_EXTKEY,
        'pi1',
        array(
            'Page' => 'include',
        ),
        array(
        )
    );
};
$boot();
unset($boot);