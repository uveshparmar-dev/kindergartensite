<?php
return array (
  'lorem' => 
  array (
    'base' => 'http://localhost/uvesh.t3template/',
    'dependencies' => 
    array (
      0 => 'mask/mask',
      1 => 'georgringer/news',
      2 => 'typo3/form',
      3 => 'typo3/indexed-search',
      4 => 'in2code/powermail-dropin-main',
      5 => 'in2code/powermail-dropin-marketing',
      6 => 'in2code/powermail-dropin-styling',
      7 => 'in2code/powermail-main',
      8 => 'in2code/powermail-marketing',
      9 => 'in2code/powermail-styling',
      10 => 'net2typo/kindergartensitepackage',
    ),
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'English',
        'enabled' => true,
        'languageId' => 0,
        'base' => '/',
        'locale' => 'en_US.UTF-8',
        'navigationTitle' => 'English',
        'flag' => 'us',
      ),
    ),
    'rootPageId' => 3,
    'routes' => 
    array (
      0 => 
      array (
        'route' => 'robots.txt',
        'type' => 'staticText',
        'content' => 'User-agent: *
Disallow: /typo3/
Disallow: /typo3_src/
Disallow: /fileadmin/user_upload/_temp_/importexport
# Uncomment the following line if you have a sitemap enabled. Replace the domain with your own.
# Sitemap: https://www.example.org/sitemap.xml
',
      ),
    ),
    'settings' => 
    array (
      'page.navigation.logo.file' => 'EXT:kindergartensitepackage/Resources/Public/Icons/main-logo.svg',
      'page.navigation.logo.alt' => 'Kindergarten Logo',
    ),
    'solr_enabled_read' => true,
    'solr_host_read' => 'localhost',
    'solr_path_read' => '/',
    'solr_port_read' => '8983',
    'solr_scheme_read' => '',
    'solr_use_write_connection' => false,
    'websiteTitle' => '',
  ),
);
#