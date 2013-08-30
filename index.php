<?php
// The following will detect what location you are accessing the webapp from.
// This is based on a loc.main.php file within the same folder as this one.
// Make sure not to have changed you hosts file on your dev system.
if (file_exists('protected/config/loc.main.php'))
{ 
	if (file_exists('prod.location'))
	{
		$config=dirname(__FILE__).'/protected/config/main.php';
	}else
	{
		$config=dirname(__FILE__).'/protected/config/loc.main.php';
	}
}else{
	$config=dirname(__FILE__).'/protected/config/main.php';
}



// change the following paths if necessary
$yii=dirname(__FILE__).'/../../yii/framework/yii.php';


// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
