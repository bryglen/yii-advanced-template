<?php
return array(
    'api' => 'default/index',
    'api/<controller:\w+>/<id:\d+>' => '<controller>/view',
    'api/<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    'api/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
);