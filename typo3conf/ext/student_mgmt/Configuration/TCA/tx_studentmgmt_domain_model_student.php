<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'Student',
        'label' => 'first_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'first_name,last_name,email',
        'iconfile' => 'EXT:student_mgmt/Resources/Public/Icons/student.svg',
    ],

    'types' => [
        '1' => [
            'showitem' => '
                hidden,
                first_name,
                last_name,
                email,
                image,
                color
            ',
        ],
    ],

    'columns' => [

        'hidden' => [
            'exclude' => true,
            'label' => 'Hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
            ],
        ],

        'first_name' => [
            'exclude' => true,
            'label' => 'First Name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],

        'last_name' => [
            'exclude' => true,
            'label' => 'Last Name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],

        'email' => [
            'exclude' => true,
            'label' => 'Email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,email,required',
            ],
        ],

        'image' => [
            'exclude' => true,
            'label' => 'Image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1, // Matches your Domain Model (single FileReference)
                'allowed' => 'common-image-types',
                'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                'showPossibleLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                ],
           ],
        ],

        'color' => [
            'exclude' => true,
            'label' => 'Color',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
                'size' => 10,
            ],
        ],
    ],
];