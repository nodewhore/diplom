
<?php

class Router
{
    private $pages = array();
    
    function addRoute($url, $path){
        $this->pages[$url] = $path;
    } 

    function route($url){
        $path = $this->pages[$url];
        $file_dir = "App/pages/".$path;
        if($path == ""){
            require "App/pages/404.html";
            die();
        }
        if(file_exists($file_dir)){
            require $file_dir;
        }
        else{
            require "App/pages/404.html";
            die();
        }
    }
}
