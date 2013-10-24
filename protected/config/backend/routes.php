<?php

return array(
    'gii'=>'gii',
    'gii/<_c>'=>'gii/<_c>',
    'gii/<_c>/<_a>'=>'gii/<_c>/<_a>',
    'backend' => 'site/index',
    'backend/<controller:\w+>/<id:\d+>' => '<controller>/view',
    'backend/<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    'backend/<controller:[\w\-]+>/<action:[\w\-]+>' => '<controller>/<action>',
);