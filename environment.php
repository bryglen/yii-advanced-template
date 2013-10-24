<?php
$local_path=array(
    '/Library/WebServer/Documents/bryan_yii'
);
$dev_path=array(
);
$prod_path=array(

);

if (in_array(dirname(__FILE__),$local_path)){
    defined('YII_ENV') or define('YII_ENV','local');
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',7);
}
else if (in_array(dirname(__FILE__),$dev_path)){
    defined('YII_ENV') or define('YII_ENV','dev');
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',7);
}
else if (in_array(dirname(__FILE__),$prod_path)){
    error_reporting(0);
    defined('YII_ENV') or define('YII_ENV','prod');
    defined('YII_DEBUG') or define('YII_DEBUG',false);
}else{
    die('No Bootstrap has been defined');
}

defined('YII_ENV_LOCAL') or define('YII_ENV_LOCAL',YII_ENV == 'local');
defined('YII_ENV_DEV') or define('YII_ENV_DEV',YII_ENV == 'dev');
defined('YII_ENV_PROD') or define('YII_ENV_PROD',YII_ENV == 'prod');

return YII_ENV;
