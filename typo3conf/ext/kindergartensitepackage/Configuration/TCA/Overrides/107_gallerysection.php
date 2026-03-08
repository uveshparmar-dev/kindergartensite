<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Ensure CType exists
if (!is_array($GLOBALS['TCA']['tt_content']['types']['n2tgallerysection'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['n2tgallerysection'] = [];
}

// Register PageTSConfig
ExtensionManagementUtility::registerPageTSConfigFile(
    'kindergartensitepackage',
    'Configuration/TsConfig/Page/Elements/n2tGallerysection.tsconfig',
    'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tgallerysection'
);

// Add CType
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tgallerysection',
        'description' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tgallerysection.description',
        'value' => 'n2tgallerysection',
        'icon' => 'content-kindergartensitepackage-n2tgallerysection',
        'group' => 'kindergartensitepackage',
    ]
);

// Correct icon assignment
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['n2tgallerysection']
    = 'content-kindergartensitepackage-n2tgallerysection';


/**
 * --------------------------------------------------
 * Add Custom Fields To tt_content
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['columns'],
    [

        'buttontext' => [
            'label' => 'Button text',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
            ],
        ],

        'button_link' => [
            'exclude' => true,
            'label' => 'Button link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'eval' => 'trim',
                'softref' => 'typolink',
            ],
        ],

        'tx_kindergartensitepackage_n2tgallerysection_item' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:tx_kindergartensitepackage_n2tgallerysection_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_kindergartensitepackage_n2tgallerysection_item',
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


/**
 * --------------------------------------------------
 * Backend Form Layout
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['types']['n2tgallerysection'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['n2tgallerysection'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                n2tgallerysection_title,
                tx_kindergartensitepackage_n2tgallerysection_item,
                buttontext,
                button_link,

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
