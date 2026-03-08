<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'student_mgmt',        // Extension Key
    'Configuration/TypoScript', // TypoScript files ka rasta
    'Student Management'   // List mein dikhne wala naam
);
