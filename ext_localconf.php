<?php
defined('TYPO3_MODE') || die ('Access denied.');

$init = function ($extKey) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['flexible_pages']['tx_flexiblepages_pagelist']['templates']['news'] = 'News';

    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('headless')) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
            lib.doktypeName {
                87 = TEXT
                87.value = News
            }
        ');
    }
};

$init(\ITplusX\FlexiblePages\Utilities\ExtensionConfigurationUtility::EXTKEY);
unset($init);
