<?php

defined('TYPO3') or die('Access denied.');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'N2T Text With Image',
        'n2ttextimage',
        'content-n2ttextimage'
    ],
    'CType',
    'kindergartensitepackage'
);
