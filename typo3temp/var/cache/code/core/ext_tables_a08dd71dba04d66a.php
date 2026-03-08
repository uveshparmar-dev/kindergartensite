<?php
/**
 * Compiled ext_tables.php cache file
 */
/**
 * Extension: setup
 * File: D:/xampp/htdocs/uvesh.t3template/typo3/sysext/setup/ext_tables.php
 */
namespace {




use TYPO3\CMS\Backend\Backend\ColorScheme;
use TYPO3\CMS\Setup\Controller\SetupModuleController;

defined('TYPO3') or die();

$GLOBALS['TYPO3_USER_SETTINGS'] = [
    'columns' => [
        'realName' => [
            'type' => 'text',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_realName',
            'table' => 'be_users',
            'max' => 80,
        ],
        'email' => [
            'type' => 'email',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_email',
            'table' => 'be_users',
            'max' => 255,
        ],
        'emailMeAtLogin' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:emailMeAtLogin',
        ],
        'password' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPassword',
            'table' => 'be_users',
        ],
        'password2' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPasswordAgain',
            'table' => 'be_users',
        ],
        'avatar' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
            'type' => 'avatar',
            'table' => 'be_users',
        ],
        'lang' => [
            'type' => 'language',
            'table' => 'be_users',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:language',
        ],
        'startModule' => [
            'type' => 'select',
            'itemsProcFunc' => SetupModuleController::class . '->renderStartModuleSelect',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:startModule',
        ],
        'titleLen' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:maxTitleLen',
        ],
        'edit_docModuleUpload' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_docModuleUpload',
        ],
        'showHiddenFilesAndFolders' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showHiddenFilesAndFolders',
        ],
        'copyLevels' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:copyLevels',
        ],
        'resetConfiguration' => [
            'type' => 'button',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfiguration',
            'buttonlabel' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfigurationButton',
            'confirm' => true,
            'confirmData' => [
                'message' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:setToStandardQuestion',
                'eventName' => 'setup:confirmation:response',
            ],
        ],
        'mfaProviders' => [
            'type' => 'mfa',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:mfaProviders',
        ],
        'backendTitleFormat' => [
            'type' => 'select',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat',
            'items' => [
                'titleFirst' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat.titleFirst',
                'sitenameFirst' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat.sitenameFirst',
            ],
        ],
        'colorScheme' => [
            'type' => 'select',
            'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:colorScheme',
            'items' => ColorScheme::getAvailableItemsForSelection(),
        ],
        'theme' => [
            'type' => 'select',
            'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:theme',
            'items' => [
                'modern' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:theme.modern',
                'classic' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:theme.classic',
            ],
        ],
    ],
    'showitem' => '--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:personal_data,realName,email,emailMeAtLogin,avatar,lang,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:accountSecurity,password,password2,mfaProviders,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:opening,colorScheme,theme,startModule,backendTitleFormat,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:editFunctionsTab,titleLen,edit_docModuleUpload,showHiddenFilesAndFolders,copyLevels,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetTab,resetConfiguration',
];
}


/**
 * Extension: bootstrap_package
 * File: D:/xampp/htdocs/uvesh.t3template/typo3conf/ext/bootstrap_package/ext_tables.php
 */
namespace {


/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');
}


/**
 * Extension: kindergartensitepackage
 * File: D:/xampp/htdocs/uvesh.t3template/typo3conf/ext/kindergartensitepackage/ext_tables.php
 */
namespace {


defined('TYPO3') or die('Access denied.');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'N2T Text With Image',
        'n2ttextimage',
        'content-n2ttextimage'
    ],
    'CType',
    'kindergartensitepackage'
);
}


/**
 * Extension: news
 * File: D:/xampp/htdocs/uvesh.t3template/typo3conf/ext/news/ext_tables.php
 */
namespace {


use GeorgRinger\News\Domain\Model\Dto\EmConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$boot = static function (): void {
    $configuration = GeneralUtility::makeInstance(EmConfiguration::class);

    // Add tables to livesearch (e.g. "#news:fo" or "#newscat:fo")
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['news'] = 'tx_news_domain_model_news';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['newstag'] = 'tx_news_domain_model_tag';

    /* ===========================================================================
        Default configuration
    =========================================================================== */
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByCategory'] = 'uid,title,tstamp,sorting';
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByNews'] = 'tstamp,datetime,crdate,title' . ($configuration->getManualSorting() ? ',sorting' : '');
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByTag'] = 'tstamp,crdate,title';
};

$boot();
unset($boot);
}


/**
 * Extension: powermail
 * File: D:/xampp/htdocs/uvesh.t3template/typo3conf/ext/powermail/ext_tables.php
 */
namespace {

if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(
    function () {

        /**
         * Table description files for localization and allowing powermail tables on pages of type default
         */
        $tables = [
            \In2code\Powermail\Domain\Model\Form::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Page::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Field::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Mail::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Answer::TABLE_NAME
        ];

        /**
         * Garbage Collector
         */
        $tgct = 'TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask';
        $tables = [
            \In2code\Powermail\Domain\Model\Mail::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Answer::TABLE_NAME
        ];
        foreach ($tables as $table) {
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][$tgct]['options']['tables'][$table] = [
                'dateField' => 'tstamp',
                'expirePeriod' => 30
            ];
        }

        /**
         * Search with TYPO3 backend search
         *      search for an email: "#mail:senderemail"
         *      search for a form: "#form:contactform"
         */
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['mail'] = 'tx_powermail_domain_model_mail';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['form'] = 'tx_powermail_domain_model_form';
    }
);
}


/**
 * Extension: student_mgmt
 * File: D:/xampp/htdocs/uvesh.t3template/typo3conf/ext/student_mgmt/ext_tables.php
 */
namespace {

defined('TYPO3') or die();

// // Ye line TYPO3 ko batati hai ki Student table ko "Standard Pages" par allow karna hai
// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_studentmgmt_domain_model_student');
}


#