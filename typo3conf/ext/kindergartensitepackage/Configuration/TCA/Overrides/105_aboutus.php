<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Ensure CType exists
if (!is_array($GLOBALS['TCA']['tt_content']['types']['n2taboutus'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['n2taboutus'] = [];
}

// Register PageTSConfig
ExtensionManagementUtility::registerPageTSConfigFile(
    'kindergartensitepackage',
    'Configuration/TsConfig/Page/Elements/n2tAboutus.tsconfig',
    'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2taboutus'
);

// Add CType
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2taboutus',
        'description' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2taboutus.description',
        'value' => 'n2taboutus',
        'icon' => 'content-kindergartensitepackage-n2taboutus',
        'group' => 'kindergartensitepackage',
    ]
);

// Correct icon assignment
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['n2taboutus']
    = 'content-kindergartensitepackage-n2taboutus';

/**
 * --------------------------------------------------
 * Backend form layout
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['types']['n2taboutus'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['n2taboutus'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                n2taboutus_title,
                tx_kindergartensitepackage_n2taboutus_item,
           

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
        'n2taboutus_title' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2taboutus.title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
                'max' => 255,
            ],
        ],

       
        'tx_kindergartensitepackage_n2taboutus_item' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:tx_kindergartensitepackage_n2taboutus_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_kindergartensitepackage_n2taboutus_item',
                'foreign_field' => 'tt_content',
                'appearance' => [
                    'useSortable' => true,
                    'expandSingle' => true,
                    'showAllLocalizationLink' => true,
                    'showSynchronizationLink' => true,
                ],
                'behaviour' => [
                    'mode' => 'select',
                ],
            ],
        ],

        

    ]
);