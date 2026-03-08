<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Ensure CType exists
if (!is_array($GLOBALS['TCA']['tt_content']['types']['n2tswiperbanner'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['n2tswiperbanner'] = [];
}

// Register PageTSConfig
ExtensionManagementUtility::registerPageTSConfigFile(
    'kindergartensitepackage',
    'Configuration/TsConfig/Page/Elements/n2tSwiperBanner.tsconfig',
    'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tswiperbanner'
);

// Add CType
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tswiperbanner',
        'description' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tswiperbanner.description',
        'value' => 'n2tswiperbanner',
        'icon' => 'content-kindergartensitepackage-n2tswiperbanner',
        'group' => 'kindergartensitepackage',
    ]
);

// Correct icon assignment
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['n2tswiperbanner']
    = 'content-kindergartensitepackage-n2tswiperbanner';

/**
 * --------------------------------------------------
 * Backend form layout
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['types']['n2tswiperbanner'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['n2tswiperbanner'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                n2tswiperbanner_title,
                tx_kindergartensitepackage_n2tswiperbanner_item,
                floating_icons_images,

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
/**
 * --------------------------------------------------
 * Register custom fields
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['columns'],
    [

        // MAIN TITLE
        'n2tswiperbanner_title' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tswiperbanner.title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
                'max' => 255,
            ],
        ],

        // INLINE CHILD RECORDS (SWIPER ITEMS)
        'tx_kindergartensitepackage_n2tswiperbanner_item' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:tx_kindergartensitepackage_n2tswiperbanner_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_kindergartensitepackage_n2tswiperbanner_item',
                'foreign_field' => 'tt_content',
                'appearance' => [
                    'useSortable' => true,
                    'expandSingle' => true,
                    'showAllLocalizationLink' => true,
                    'showSynchronizationLink' => true,
                ],
            ],
        ],

        // FLOATING ICONS
        'floating_icons_images' => [
            'label' => 'Floating Icons',
            'config' => [
                'type' => 'file',

                // allow only images
                'allowed' => 'svg,png,webp,jpg,jpeg',

                // number of images
                'minitems' => 0,
                'maxitems' => 10,

                // backend UI behavior
                'appearance' => [
                    'createNewRelationLinkTitle' => 'Add Floating Icon',
                    'useSortable' => true,
                    'fileUploadAllowed' => true,
                    'fileByUrlAllowed' => false,
                ],
            ],
        ],

    ]
);
