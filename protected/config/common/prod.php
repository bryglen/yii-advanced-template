<?php
/**
 * production configuration file with different tier
 */
return CMap::mergeArray(
    require(dirname(__FILE__) . '/common.php'), array(
        'components' => array(
            'db' => require(dirname(__FILE__) . '/../dbconnect.prod.php'),
        ),
        'params' => array(),
    )
);