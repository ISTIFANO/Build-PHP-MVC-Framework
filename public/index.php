<?php   define('PROJECT_ROOT', dirname(dirname(__DIR__ . '/../')));
require_once PROJECT_ROOT.'\vendor\autoload.php';

use app\Routes\Router;
$core = new Router();
$core->getUrl();














?>