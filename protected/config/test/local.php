<?php

return CMap::mergeArray(
    require(dirname(__FILE__) . '/common.php'), array(
        'components' => array(
            'db'=>require(dirname(__FILE__) . '/../dbconnect.test.local.php'),
        ),
    )
);