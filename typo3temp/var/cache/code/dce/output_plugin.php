<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod.wizards.newContentElement.wizardItems.dce.header = LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce_long
     mod.wizards.newContentElement.wizardItems.dce.after = default'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'dce',
    'dceuid3',
    [
        \T3\Dce\Controller\DceController::class => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_dceuid3.20
     tt_content.dce_dceuid3 >
     tt_content.dce_dceuid3 < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_dceuid3
     tt_content.dce_dceuid3.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid3 {
        iconIdentifier = content-header
        title = Lorem
        description = 
        tt_content_defValues {
            CType = dce_dceuid3
        }
    }
    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid3)
    TCEFORM.tt_content.pi_flexform.types.dce_dceuid3.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce.flexformLabel.default
    "
);


#
