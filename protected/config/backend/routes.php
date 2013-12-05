<?php

return array(
    'backend/gii'=>'gii',
    'backend/gii/<_c>'=>'gii/<_c>',
    'backend/gii/<_c>/<_a>'=>'gii/<_c>/<_a>',
    'backend' => 'site/index',
    'backend/<controller:\w+>/<id:\d+>' => '<controller>/view',
    'backend/<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    'backend/<controller:[\w\-]+>/<action:[\w\-]+>' => '<controller>/<action>',
);