<?php

defined('TYPO3') or die('Access denied.');

// Ensure CType exists
if (!is_array($GLOBALS['TCA']['tt_content']['types']['n2tkeyfeature'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['n2tkeyfeature'] = [];
}

// Register PageTSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'kindergartensitepackage',
    'Configuration/TsConfig/Page/Elements/n2tKeyFeature.tsconfig',
    'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tkeyfeature'
);

// Add CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tkeyfeature',
        'description' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2tkeyfeature.description',
        'value' => 'n2tkeyfeature',
        'icon' => 'content-kindergartensitepackage-n2tkeyfeature',
        'group' => 'kindergartensitepackage',
    ]
);

// Correct icon assignment
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['n2tkeyfeature']
    = 'content-kindergartensitepackage-n2tkeyfeature';

// Backend form layout
$GLOBALS['TCA']['tt_content']['types']['n2tkeyfeature'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['n2tkeyfeature'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                n2tkeyfeature_title,
                tx_kindergartensitepackage_n2tkeyfeature_item,

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

// Register custom fields
$GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['columns'],
    [


        // INLINE CHILD RECORDS
        'tx_kindergartensitepackage_n2tkeyfeature_item' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:tx_kindergartensitepackage_n2tkeyfeature_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_kindergartensitepackage_n2tkeyfeature_item',
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
