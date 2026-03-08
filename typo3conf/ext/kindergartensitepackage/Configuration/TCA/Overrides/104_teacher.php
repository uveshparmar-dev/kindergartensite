<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Ensure CType exists
if (!is_array($GLOBALS['TCA']['tt_content']['types']['n2tteacher'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['n2tteacher'] = [];
}

// Register PageTSConfig
ExtensionManagementUtility::registerPageTSConfigFile(
    'kindergartensitepackage',
    'Configuration/TsConfig/Page/Elements/n2tTeacher.tsconfig',
    'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tteacher'
);

// Add CType
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tteacher',
        'description' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tteacher.description',
        'value' => 'n2tteacher',
        'icon' => 'content-kindergartensitepackage-n2tteacher',
        'group' => 'kindergartensitepackage',
    ]
);

// Correct icon assignment
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['n2tteacher']
    = 'content-kindergartensitepackage-n2tteacher';

/**
 * --------------------------------------------------
 * Backend form layout
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['types']['n2tteacher'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['n2tteacher'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                n2tteacher_title,
                tx_kindergartensitepackage_n2tteacher_item,
           

            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,

            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,

            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        ',
    ]
);
$GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['columns'],
    [
        // MAIN TITLE
        'n2tteacher_title' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tteacher.title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
                'max' => 255,
            ],
        ],

        // INLINE CHILD RECORDS (SWIPER ITEMS)
        'tx_kindergartensitepackage_n2tteacher_item' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:tx_kindergartensitepackage_n2tteacher_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_kindergartensitepackage_n2tteacher_item',
                'foreign_field' => 'tt_content',
                'appearance' => [
                    'useSortable' => true,
                    'expandSingle' => true,
                    'showAllLocalizationLink' => true,
                    'showSynchronizationLink' => true,
                ],
            ],
        ],

        

    ]
);