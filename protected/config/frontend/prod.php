<?php

return CMap::mergeArray(
    CMap::mergeArray(require(dirname(__FILE__) . '/common.php'),require(dirname(__FILE__) . '/../common/prod.php')), array(
        'components' => array(
            'cache'=>array(
                'class'=>'system.caching.CFileCache',
            ),
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error, warning',
                    ),
                ),
            ),
        ),
        'params'=> array(

        ),
    )
);