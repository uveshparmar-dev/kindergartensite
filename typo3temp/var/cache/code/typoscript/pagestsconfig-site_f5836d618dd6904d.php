<?php
return array (
  'pageTsConfig-set-georgringer-news' => 
  array (
    'filename' => 'D:/xampp/htdocs/uvesh.t3template/typo3conf/ext/news/Configuration/Sets/News/page.tsconfig',
    'content' => 'TCEMAIN.preview {
    tx_news_domain_model_news {
        previewPageId = {$news.preview.page}
        useDefaultLanguageRecord = 0
        fieldToParameterMap {
            uid = tx_news_pi1[{$news.preview.mode}]
        }
        additionalGetParameters {
            tx_news_pi1.controller = News
            tx_news_pi1.action = detail
        }
    }
}
',
  ),
  'pageTsConfig-set-net2typo-kindergartensitepackage' => 
  array (
    'filename' => 'D:/xampp/htdocs/uvesh.t3template/typo3conf/ext/kindergartensitepackage/Configuration/Sets/SitePackage/page.tsconfig',
    'content' => '@import \'EXT:kindergartensitepackage/Configuration/Sets/SitePackage/PageTsConfig/BackendLayouts/default.tsconfig\'

RTE {
    default {
        preset = kindergartensitepackage
    }
}

TCEFORM {
    pages {

    }
    tt_content {
        frame_class {
            addItems {
                 padding-spacing = Small Container
                 col-md-6-offset-md-3 = Centered Box 
             }
        }

    }
}

TCEMAIN {

}




tx_news.templateLayouts{
    100 = Activities and Events
}

tx_news.templateLayouts{
    200 = News & Articles
}


',
  ),
  'pageTsConfig-site-lorem' => 
  array (
    'filename' => 'D:/xampp/htdocs/uvesh.t3template/typo3conf/sites/lorem/page.tsconfig',
    'content' => '',
  ),
);
#