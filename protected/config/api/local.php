<?php

return CMap::mergeArray(
    CMap::mergeArray(require(dirname(__FILE__) . '/common.php'), require(dirname(__FILE__) . '/../common/local.php')), array(
        'components' => array(
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error, warning, trace, info',
                    ),
                ),
            ),
            'cache' => array(
                'class' => 'system.caching.CFileCache',
            ),
        ),
        'params' => array(),
    )
);