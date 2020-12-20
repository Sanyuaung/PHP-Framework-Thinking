<?php

class Router
{
    public $ss=[
        "GET"=>[
            // "about"=>"Controllers/AboutController.php"
            
        ],
        "POST"=>[
            // "names"=>"Controllers/add-name.php"

        ],
    ];

    public static function load($filename)
    {
        $router=new Router;
        require $filename;
        return $router;
    }

    public function register($routes)
    {
        $this->ss=$routes;      
    }

    public function get($uri,$controller)
    {
        $this->ss['GET'][$uri]=$controller;
    }

    public function post($uri,$controller)
    {
        $this->ss['POST'][$uri]=$controller;
    }
    public function direct($uri,$method)
    {
        if (!array_key_exists($uri,$this->ss[$method])){
            die("404-Page");
        }
        $explosion=explode("@",$this->ss[$method][$uri]);
        $this->callMethod($explosion[0],$explosion[1]);
    }
    public function callMethod($class,$method)
    {
       $myclass=new $class;
       $myclass->$method();
    }
}


?>