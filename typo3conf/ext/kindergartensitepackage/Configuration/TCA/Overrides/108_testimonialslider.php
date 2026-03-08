<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * --------------------------------------------------
 * Ensure CType exists
 * --------------------------------------------------
 */
if (!is_array($GLOBALS['TCA']['tt_content']['types']['testimonialslider'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['testimonialslider'] = [];
}

/**
 * --------------------------------------------------
 * Register PageTSConfig
 * --------------------------------------------------
 */
ExtensionManagementUtility::registerPageTSConfigFile(
    'kindergartensitepackage',
    'Configuration/TsConfig/Page/Elements/n2tTestimonialslider.tsconfig',
    'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.testimonialslider'
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
        'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2ttestimonialslider',
        'description' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:kindergartensitepackage.n2ttestimonialslider.description',
        'value' => 'testimonialslider',
        'icon' => 'content-kindergartensitepackage-testimonialslider',
        'group' => 'kindergartensitepackage',
    ]
);

/**
 * --------------------------------------------------
 * Icon
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['testimonialslider']
    = 'content-kindergartensitepackage-testimonialslider';


/**
 * --------------------------------------------------
 * Add Fields
 * --------------------------------------------------
 */
$GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['columns'],
    [

        /**
         * Background Image (Modern TYPO3 v13 way)
         */
        'bg_image' => [
            'exclude' => true,
            'label' => 'Background Image',
            'config' => [
                'type' => 'file',
                'allowed' => 'common-image-types',
                'maxitems' => 1,
            ],
        ],
        // Inline slider items
        'tx_kindergartensitepackage_n2ttestimonialslider_item' => [
            'label' => 'Testimonial Slider',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_kindergartensitepackage_n2ttestimonialslider_item',
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
$GLOBALS['TCA']['tt_content']['types']['testimonialslider'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['testimonialslider'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                bg_image,
                tx_kindergartensitepackage_n2ttestimonialslider_item,

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
