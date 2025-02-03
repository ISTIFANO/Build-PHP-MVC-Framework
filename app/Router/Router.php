<?php

class Router {
    private $Controller = 'pages';
    private $methode = 'index';
    private $param=[];
    public function __construct()
    {
        $uri = $this->getUrl();    
        if(isset($uri[0])){
            if(file_exists('../app/controllers/'.ucwords($uri[0]).'Controller.php')){

             $this->Controller =ucwords($uri[0]) ;
                unset($uri[0]);

            }

        require_once PROJECT_ROOT .'\app\controlles'. $this->Controller;
        } else {
            include '../resources/views/error404.php';
            exit;
        }
    }
    public function getUrl()
    {
        // var_dump($_REQUEST);


        if (empty($_SERVER['REQUEST_URI'])) {
            $uri = '';
        } else {
            $uri = $_SERVER['REQUEST_URI'];
        }


    $uri = explode('/', trim($uri, '/'));
    //  var_dump( $uri);    
        // }

        return $uri;
    }
}













?>