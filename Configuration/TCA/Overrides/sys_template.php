<?php
defined('TYPO3_MODE') or die ('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'flexible_news',
    'Configuration/TypoScript/',
    'Flexible News Content Elements'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'flexible_news',
    'Configuration/TypoScript/Styling/',
    'Flexible News CSS (optional)'
);
