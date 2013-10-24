<?php
/**
 * common configuration with different tier
 */
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '../..',
    'preload' => array('log'),
    'import' => array(
        'application.components.*',
        'application.helpers.*',
    ),
    'components' => array(
        'curl' => array(
            'class' => 'ext.curl.Curl',
        ),
    ),
    'params' => require(dirname(__FILE__) . '/params.php'),
    'behaviors' => array(
        // separate frontend and backend
        'runEnd' => array(
            'class' => 'application.components.WebApplicationEndBehavior',
        ),
    ),
);