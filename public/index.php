<?php
define('PROJECT_ROOT', dirname(__DIR__));

// require_once PROJECT_ROOT . '/vendor/autoload.php';
require '../vendor/autoload.php';

use app\Routes\Router;
use app\Core\config\Database;
$core = new Router();
$Database = new Database();
var_dump($Database);

?>