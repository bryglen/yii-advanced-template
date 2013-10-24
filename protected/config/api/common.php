<?php

return array(
    'name' => 'Api',
    'import' => array(
        'application.models.api.*',
        'application.components.api.*',
    ),
    // application components
    'components' => array(
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'class' => 'UrlManager',
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => require(dirname(__FILE__) . '/routes.php'),
        ),
    ),
    'params' => require(dirname(__FILE__) . '/params.php'),
);