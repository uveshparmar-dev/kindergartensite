<?php

return [
    'ctrl' => [
        'label' => 'title',
      
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'slider',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'typeicon_classes' => [
            'default' => 'content-kindergartensitepackage-n2ttestimonialslider',
        ],
    ],

    'types' => [
        '1' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                day,
                month,
                title,
                time,
                icon_file,
                link,

                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            ',
        ],
    ],

    'columns' => [

        /* =========================
         * SYSTEM FIELDS
         * ========================= */

        'pid' => [
            'config' => ['type' => 'passthrough'],
        ],

        'sorting' => [
            'config' => ['type' => 'passthrough'],
        ],

        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
            ],
        ],

        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'datetime',
                'default' => 0,
            ],
        ],

        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'datetime',
                'default' => 0,
            ],
        ],

        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],

        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_kindergartensitepackage_n2tupcomingevent_item',
                'foreign_table_where' =>
                    'AND tx_kindergartensitepackage_n2tupcomingevent_item.pid=###CURRENT_PID###
                     AND tx_kindergartensitepackage_n2tupcomingevent_item.sys_language_uid IN (-1,0)',
                'default' => 0,
            ],
        ],

        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        /* =========================
         * CONTENT FIELDS
         * ========================= */

        'day' => [
            'exclude' => true,
            'label' => 'Day',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
            ],
        ],

        'month' => [
            'label' => 'Month',
           'config' => [
              'type' => 'input',
               'size' => 50,
              'eval' => 'trim',
                
            ],
        ],
        
        'title' => [
            'label' => 'title',
           'config' => [
              'type' => 'input',
               'size' => 50,
              'eval' => 'trim',
                
            ],
        ],
        
        'time' => [
            'label' => 'Time',
           'config' => [
              'type' => 'input',
               'size' => 50,
              'eval' => 'trim',
                
            ],
        ],
        'link' => [
            'exclude' => true,
            'label' => 'Link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'eval' => 'trim',
                'softref' => 'typolink',
            ],
        ],


    

     

     

           'icon_file' => [
            'label' => 'LLL:EXT:kindergartensitepackage/Resources/Private/Language/locallang_db.xlf:upcomingevent_icon_group_item.icon_file',
            'config' => [
                'type' => 'file',
                 'allowed' => 'common-image-types',
                'minitems' => 0,
                'maxitems' => 1,
            ],
            'l10n_mode' => 'exclude',
        ],

       
    


        


    ],
];
