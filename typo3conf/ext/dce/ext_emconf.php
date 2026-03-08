<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "dce".
 *
 * Auto generated 01-01-2026 11:12
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Dynamic Content Elements (DCE)',
  'description' => 'Best flexform based content elements since 2012. With TCA mapping feature, simple backend view and much more features which makes it super easy to create own content element types.',
  'category' => 'Backend',
  'version' => '3.3.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Armin Vieweg',
  'author_email' => 'armin@v.ieweg.de',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '12.4.0-13.9.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'T3\\Dce\\' => 'Classes',
    ),
  ),
);

