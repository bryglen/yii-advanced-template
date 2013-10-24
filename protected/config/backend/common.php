<?php

return array(
    'name' => 'Backend',
    'theme' => 'backend',
    // autoloading model and component classes
    'import' => array(
        'application.models.backend.*',
        'application.components.backend.*',
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