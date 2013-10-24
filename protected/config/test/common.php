<?php

return CMap::mergeArray(
    require(dirname(__FILE__) . '/../frontend/common.php'), // merge with main config file
    array(
        'components' => array(
            'fixture' => array(
                'class' => 'system.test.CDbFixtureManager',
            ),
        ),
    )
);
