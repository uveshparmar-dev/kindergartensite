<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * --------------------------------------------------
 * Ensure CType exists
 * --------------------------------------------------
 */
if (!is_array($GLOBALS['TCA']['tt_content']['types']['classes'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['classes'] = [];
}

/**
 * --------------------------------------------------
 * Register PageTSConfig
 * --------------------------------------------------
 */
ExtensionManagementUtility::registerPageTSConfigFile(
    'kindergartensitepackage',
    'Configuration/TsConfig/Page/Elements/n2tclasses.tsconfig',
    'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.classes'
);

/**
 * --------------------------------------------------
 * Add CType
 * --------------------------------------------------
 */
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tclasses',
        'description' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tclasses.description',
        'value' => 'classes',
        'icon' => 'content-kindergartensitepackage-classes',
        'group' => 'kindergartensitepackage',
    ]
);

/**
 * --------------------------------------------------
 * Icon
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['classes']
    = 'content-kindergartensitepackage-classes';


/**
 * --------------------------------------------------
 * Add Fields
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['columns'],
    [

        // Inline slider items
        'tx_kindergartensitepackage_n2tclasses_item' => [
            'label' => 'Classes Items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_kindergartensitepackage_n2tclasses_item',
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
$GLOBALS['TCA']['tt_content']['types']['classes'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['classes'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_kindergartensitepackage_n2tclasses_item,

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
