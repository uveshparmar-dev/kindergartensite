<?php

    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['itemGroups']['dce'] =
        'LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce_long';\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content',
    'CType',
    'dce',
    'LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce.miscellaneous'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'Lorem',
        'value' => 'dce_dceuid3',
        'icon' => 'content-header',
        'group' => 'dce'
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_dceuid3'] = 'content-header';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid3'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,dce_dceuid3'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xlf:generaltab]]></sheetTitle><type>array</type><el><settings.section><title><![CDATA[Section]]></title><tx_templatevoila><title><![CDATA[Section]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_section><type>array</type><title><![CDATA[tag]]></title><tx_templatevoila><title><![CDATA[Section]]></title></tx_templatevoila><el><title><label><![CDATA[title]]></label><config>
    <type>input</type>
</config></title><description><label><![CDATA[Description]]></label><config>
    <type>text</type>
    <rows>5</rows>
    <cols>30</cols>
    <required>1</required>
    <eval>trim</eval>
</config>
</description></el></container_section></el></settings.section></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid3_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid3']['showitem'] = '--palette--;;dce_palette_dce_dceuid3_head,
--palette--;;dce_palette_dce_dceuid3,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid3']['previewRenderer'] =
    \T3\Dce\Components\BackendView\DcePreviewRenderer::class;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid3']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';



#
