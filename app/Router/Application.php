<?php
 namespace app\Routing;

require_once __DIR__ .'../../vendor/autoload.php';
use App\Routing\router;


class Application{
    
    public Router $router;


    public function run()
    {
        echo $this->router->resolve();
    }









}













?>