<?php
return array (
  'net2typo/about-us' => 
  array (
    'name' => 'net2typo/about-us',
    'yaml' => 
    array (
      'name' => 'net2typo/about-us',
      'typeName' => 'net2typo_about-us',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
          'label' => 'Main Heading',
        ),
        1 => 
        array (
          'identifier' => 'bodytext',
          'useExistingField' => true,
          'enableRichtext' => true,
          'label' => 'Description',
        ),
        2 => 
        array (
          'identifier' => 'subheader',
          'useExistingField' => true,
          'label' => 'Button Text',
        ),
        3 => 
        array (
          'identifier' => 'header_link',
          'useExistingField' => true,
          'label' => 'Button Link',
        ),
        4 => 
        array (
          'identifier' => 'background_image',
          'type' => 'File',
          'label' => 'Background Image',
          'maxitems' => 1,
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/about-us/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_about-us-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/about-us',
  ),
  'net2typo/classes' => 
  array (
    'name' => 'net2typo/classes',
    'yaml' => 
    array (
      'name' => 'net2typo/classes',
      'typeName' => 'net2typo_classes',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'type' => 'Text',
          'label' => 'Section Heading',
        ),
        1 => 
        array (
          'identifier' => 'classes',
          'type' => 'Collection',
          'label' => 'Classes',
          'appearance' => 
          array (
            'collapseAll' => true,
          ),
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'title',
              'type' => 'Text',
              'label' => 'Class Title',
            ),
            1 => 
            array (
              'identifier' => 'image',
              'type' => 'File',
              'label' => 'Class Image',
              'maxitems' => 1,
            ),
            2 => 
            array (
              'identifier' => 'age',
              'type' => 'Text',
              'label' => 'Age Range',
            ),
            3 => 
            array (
              'identifier' => 'class_size',
              'type' => 'Text',
              'label' => 'Class Size',
            ),
            4 => 
            array (
              'identifier' => 'price',
              'type' => 'Text',
              'label' => 'Price',
            ),
          ),
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/classes/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_classes-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/classes',
  ),
  'net2typo/cta-section' => 
  array (
    'name' => 'net2typo/cta-section',
    'yaml' => 
    array (
      'name' => 'net2typo/cta-section',
      'typeName' => 'net2typo_cta-section',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
          'label' => 'Main Heading',
        ),
        1 => 
        array (
          'identifier' => 'bodytext',
          'useExistingField' => true,
          'enableRichtext' => true,
          'label' => 'Description',
        ),
        2 => 
        array (
          'identifier' => 'subheader',
          'useExistingField' => true,
          'label' => 'Button Text',
        ),
        3 => 
        array (
          'identifier' => 'header_link',
          'useExistingField' => true,
          'label' => 'Button Link',
        ),
        4 => 
        array (
          'identifier' => 'background_image',
          'type' => 'File',
          'label' => 'Background Image',
          'maxitems' => 1,
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/cta-section/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_cta-section-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/cta-section',
  ),
  'net2typo/events' => 
  array (
    'name' => 'net2typo/events',
    'yaml' => 
    array (
      'name' => 'net2typo/events',
      'typeName' => 'net2typo_events',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
          'label' => 'Section Heading',
        ),
        1 => 
        array (
          'identifier' => 'right_image',
          'type' => 'File',
          'label' => 'Right Side Image',
          'maxitems' => 1,
        ),
        2 => 
        array (
          'identifier' => 'event_items',
          'type' => 'Collection',
          'label' => 'Event Items',
          'appearance' => 
          array (
            'collapseAll' => true,
          ),
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'event_day',
              'type' => 'Text',
              'label' => 'Day',
            ),
            1 => 
            array (
              'identifier' => 'event_month',
              'type' => 'Text',
              'label' => 'Month',
            ),
            2 => 
            array (
              'identifier' => 'event_title',
              'type' => 'Text',
              'label' => 'Event Title',
            ),
            3 => 
            array (
              'identifier' => 'event_time',
              'type' => 'Text',
              'label' => 'Event Time',
            ),
            4 => 
            array (
              'identifier' => 'event_link',
              'type' => 'Link',
              'label' => 'Event Link',
            ),
            5 => 
            array (
              'identifier' => 'arrow_icon',
              'type' => 'File',
              'label' => 'Arrow Icon',
              'maxitems' => 10,
            ),
          ),
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/events/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_events-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/events',
  ),
  'net2typo/gallery-section' => 
  array (
    'name' => 'net2typo/gallery-section',
    'yaml' => 
    array (
      'name' => 'net2typo/gallery-section',
      'typeName' => 'net2typo_gallery_section',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
          'label' => 'Section Title',
        ),
        1 => 
        array (
          'identifier' => 'gallery_images',
          'type' => 'File',
          'label' => 'Gallery Images',
          'maxitems' => 12,
        ),
        2 => 
        array (
          'identifier' => 'subheader',
          'useExistingField' => true,
          'label' => 'Button Text',
        ),
        3 => 
        array (
          'identifier' => 'header_link',
          'useExistingField' => true,
          'label' => 'Button Link',
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/gallery-section/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_gallery_section-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/gallery-section',
  ),
  'net2typo/heroimage' => 
  array (
    'name' => 'net2typo/heroimage',
    'yaml' => 
    array (
      'name' => 'net2typo/heroimage',
      'typeName' => 'net2typo_heroimage',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
        ),
        1 => 
        array (
          'identifier' => 'bodytext',
          'useExistingField' => true,
          'enableRichtext' => true,
        ),
        2 => 
        array (
          'identifier' => 'image',
          'useExistingField' => true,
        ),
        3 => 
        array (
          'identifier' => 'herolinks',
          'type' => 'Link',
          'label' => 'Link',
        ),
        4 => 
        array (
          'identifier' => 'subheader',
          'useExistingField' => true,
          'label' => 'Button Text',
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/heroimage/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_heroimage-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/heroimage',
  ),
  'net2typo/keyfeature' => 
  array (
    'name' => 'net2typo/keyfeature',
    'yaml' => 
    array (
      'name' => 'net2typo/keyfeature',
      'typeName' => 'net2typo_keyfeature',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'keyfeature',
          'type' => 'Collection',
          'label' => 'Key Feature Items',
          'appearance' => 
          array (
            'collapseAll' => true,
          ),
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'header',
              'type' => 'Text',
              'label' => 'Header',
            ),
            1 => 
            array (
              'identifier' => 'image',
              'type' => 'File',
              'label' => 'Image',
              'maxitems' => 1,
            ),
            2 => 
            array (
              'identifier' => 'background_color',
              'type' => 'Color',
              'label' => 'Background Color',
            ),
          ),
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:content_blocks/Resources/Public/Icons/DefaultContentElementIcon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_keyfeature-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/keyfeature',
  ),
  'net2typo/swiperbanner' => 
  array (
    'name' => 'net2typo/swiperbanner',
    'yaml' => 
    array (
      'name' => 'net2typo/swiperbanner',
      'typeName' => 'net2typo_swiperbanner',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
        ),
        1 => 
        array (
          'identifier' => 'bodytext',
          'useExistingField' => true,
          'enableRichtext' => true,
        ),
        2 => 
        array (
          'identifier' => 'image',
          'useExistingField' => true,
          'override' => 
          array (
            'maxitems' => 10,
          ),
        ),
        3 => 
        array (
          'identifier' => 'subheader',
          'useExistingField' => true,
          'label' => 'Button Text',
        ),
        4 => 
        array (
          'identifier' => 'header_link',
          'useExistingField' => true,
          'label' => 'Button Link',
        ),
        5 => 
        array (
          'identifier' => 'floating_icons_images',
          'type' => 'File',
          'label' => 'Floating Image',
          'maxitems' => 10,
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/swiperbanner/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_swiperbanner-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/swiperbanner',
  ),
  'net2typo/teacher-section' => 
  array (
    'name' => 'net2typo/teacher-section',
    'yaml' => 
    array (
      'name' => 'net2typo/teacher-section',
      'typeName' => 'net2typo_educators',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'type' => 'Text',
          'label' => 'Section Heading',
        ),
        1 => 
        array (
          'identifier' => 'educator_items',
          'type' => 'Collection',
          'label' => 'Educators',
          'maxitems' => 12,
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'image',
              'type' => 'File',
              'label' => 'Educator Image',
              'allowed' => 'common-image-types',
              'maxitems' => 1,
            ),
            1 => 
            array (
              'identifier' => 'header',
              'type' => 'Text',
              'label' => 'Educator Name',
            ),
            2 => 
            array (
              'identifier' => 'subheader',
              'type' => 'Text',
              'label' => 'Designation',
            ),
            3 => 
            array (
              'identifier' => 'link',
              'type' => 'Link',
              'label' => 'Profile Link',
            ),
          ),
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/teacher-section/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_educators-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/teacher-section',
  ),
  'net2typo/test' => 
  array (
    'name' => 'net2typo/test',
    'yaml' => 
    array (
      'name' => 'net2typo/test',
      'typeName' => 'net2typo_test',
      'group' => 'default',
      'prefixFields' => true,
      'prefixType' => 'full',
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/test/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_test-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/test',
  ),
  'net2typo/testimonial-section' => 
  array (
    'name' => 'net2typo/testimonial-section',
    'yaml' => 
    array (
      'name' => 'net2typo/testimonial-section',
      'typeName' => 'net2typo_testimonial_section',
      'group' => 'default',
      'prefixFields' => true,
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'background_image',
          'type' => 'File',
          'label' => 'Background Image',
          'maxitems' => 1,
        ),
        1 => 
        array (
          'identifier' => 'testimonials',
          'type' => 'Collection',
          'label' => 'Testimonials',
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'person_image',
              'type' => 'File',
              'label' => 'Person Image',
              'maxitems' => 10,
            ),
            1 => 
            array (
              'identifier' => 'description',
              'type' => 'Textarea',
              'enableRichtext' => true,
              'label' => 'Description',
            ),
            2 => 
            array (
              'identifier' => 'name',
              'type' => 'Text',
              'label' => 'Name',
            ),
            3 => 
            array (
              'identifier' => 'role',
              'type' => 'Text',
              'label' => 'Role',
            ),
          ),
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => 
    array (
      'iconPath' => 'EXT:kindergartensitepackage/Resources/Public/ContentBlocks/net2typo/testimonial-section/icon.svg',
      'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
      'iconIdentifier' => 'tt_content-net2typo_testimonial_section-116cf86',
    ),
    'iconHideInMenu' => NULL,
    'iconRoot' => NULL,
    'hostExtension' => 'kindergartensitepackage',
    'extPath' => 'EXT:kindergartensitepackage/ContentBlocks/ContentElements/testimonial-section',
  ),
);
#