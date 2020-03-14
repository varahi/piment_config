<?php

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Piment Config');

/**
 * Page TS Config
 */
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:piment_config/Configuration/TsConfig/page.tsconfig">');