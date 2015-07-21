<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

define('ROOT', '/belfw'); //define('ROOT', '/belfw');



include_once('fw/version.php');
include_once('fw/db_config.php');

define('BFW_AUTHOR', 'Matija Belec');
define('BFW_AUTHOR_WEBSITE', 'matijabelec.com');
define('BFW_CREATION_DATE', '27 Jun 2015');



define('ROOT_TPL', __DIR__.'/templates');
define('ROOT_LANG', __DIR__.'/lang-data');

define('ROOT_GFX', ROOT.'/site/gfx');
define('ROOT_CSS', ROOT.'/site/css');
define('ROOT_JS', ROOT.'/site/js');
define('ROOT_ICONS', ROOT_GFX.'/famfamfam_silk_icons_v013/icons');



define('BFW_ROUTE_NOT_FOUND', -801);

define('BFW_CONTROLLER_NOT_FOUND', -1001);
define('BFW_CONTROLLER_RETURN_OK', -1401);
define('BFW_CONTROLLER_RETURN_ERR', -1404);


define('RET_OK', BFW_CONTROLLER_RETURN_OK);
define('RET_ERR', BFW_CONTROLLER_RETURN_ERR);


define('BFW_ARGUMENTS_ALL', 100);

?>