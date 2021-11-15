<?php
defined('TYPO3_MODE') || die ('Access denied.');

$init = function ($extKey) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['flexible_pages']['tx_flexiblepages_pagelist']['templates']['news'] = 'News';
};

$init(\ITplusX\FlexiblePages\Utilities\ExtensionConfigurationUtility::EXTKEY);
unset($init);
