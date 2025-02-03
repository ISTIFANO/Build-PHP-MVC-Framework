<?php   define('PROJECT_ROOT', dirname(dirname(__DIR__ . '/../')));

require_once PROJECT_ROOT.'\app\Router\Router.php';

$core = new Router();
$core->getUrl();














?>