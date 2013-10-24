<?php

return array(
    'name' => 'Frontend',
    'theme' => 'frontend',
    // autoloading model and component classes
    'import' => array(
        'application.models.frontend.*',
        'application.components.frontend.*',
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
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
    ),
    'params' => require(dirname(__FILE__) . '/params.php'),
);