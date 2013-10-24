<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '../..',
    'name' => 'My Console App',
    'preload' => array('log'),
    'charset' => 'utf-8',
    // application components
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.helpers.*',
    ),
    'components' => array(),
);