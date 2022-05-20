<?php
include __DIR__ . '/vendor/autoload.php';

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

    function processInput($uri){
        $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

            return $uri;
    }

    function processOutput($response){
        echo json_encode($response);
    }

    // function getPDOInstance(){
    //     return new PDO('mysql:host=localhost;dbname=booksapi;charset=utf8', 'root', '');
    // }

    $router = new RouteCollector();

    $router->get('/', function(){
        require('App/pages/home.php');
    });

    $router->get('/news', function(){
        require('App/pages/news.php');
    });
    $router->get('/gallery', function(){
        require('App/pages/gallery.php');
    });
    
    $router->get('/admin', function(){
        require('apanel/apanel.php');
    });
    $router->get('/admin_gallery', function(){
        require('apanel/admin_gallery.php');
    });

    $router->get('/deletenews', function(){
        require('apanel/scripts/deletenews.php');
    });
    $router->post('auth', function(){
        require('App/scripts/auth.php');
    });
    $router->post('addnews', function(){
        require('apanel/scripts/addnews.php');
    });
  $dispatcher =  new Dispatcher($router->getData());

    try {

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], processInput($_SERVER['REQUEST_URI']));

    } catch (Phroute\Exception\HttpRouteNotFoundException $e) {

        var_dump($e);
        die();

    } catch (Phroute\Exception\HttpMethodNotAllowedException $e) {

        var_dump($e);
        die();

    }



?>