<?php
defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'StudentMgmt',
    'StudentList',
    [
        \Net2Typo\StudentMgmt\Controller\StudentController::class =>
        'list, new, create, edit, update, delete'
    ],
    [
        \Net2Typo\StudentMgmt\Controller\StudentController::class =>
        'new, create, edit, update, delete'
    ]
);