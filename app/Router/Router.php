<?php
namespace app\Routes;

class Router
{
    private $controller = 'Page';
    private $method = 'index';
    private $param = [];
    public function __construct()
    {
        $url = $this->getUrl();

        if (isset($url[0])) {
            $controllerClass = ucwords($url[0]);
          var_dump(PROJECT_ROOTS.'\\Controllers\\' . $controllerClass . 'Controller');
            var_dump($controllerClass); 
            $class=class_exists(PROJECT_ROOTS.'\\Controllers\\' . $controllerClass . 'Controller');
          var_dump($class);
            if ($class) {
                $this->controller = $controllerClass;
            }


            $controllerClass = '\\app\\controllers\\' . $this->controller . 'Controller';
            $this->controller = new $controllerClass;

            if (isset($url[1])) {

                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                }
            }
            if (!empty($_REQUEST)) {
                $this->convertArray($_REQUEST);
            } else {
                $this->param = [];
            }
        } else {
            $this->controller = new $this->controller;
        }
        call_user_func_array([$this->controller, $this->method], $this->param);
    }
    private function getUrl()
    {
        $uri = $_SERVER['PATH_INFO'] ?? '/';
        $uri = explode('/', trim($uri, '/'));
return $uri;
    }
    private function convertArray($array)
    {

        foreach ($array as $value) {
            array_push($this->param, $value);
        }
    }
    private function getBasePaths()
    {
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path ");
    }
}
