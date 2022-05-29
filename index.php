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
    $router->get('/logout', function(){
        require('App/scripts/logout.php');
    });
    $router->get('/like', function(){
        require('App/scripts/likes.php');
    });
    
    $router->get('/updateuser', function(){
        require('App/pages/updateuser.php');
    });
    $router->get('/students', function(){
        require('apanel/students.php');
    });
    $router->get('/newstudent', function(){
        require('apanel/newstudent.php');
    });
    $router->get('/news', function(){
        require('App/pages/news.php');
    });
    $router->get('/gallery', function(){
        require('App/pages/gallery.php');
    });
    $router->get('/office', function(){
        require('App/pages/office.php');
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
    $router->get('/updatenews', function(){
        require('apanel/scripts/updatenews.php');
    });
    $router->get('/info', function(){
        require('App/pages/info.php');
    });
    $router->post('auth', function(){
        require('App/scripts/auth.php');
    });
    $router->post('updateusers', function(){
        require('App/scripts/updateusers.php');
    });
    $router->post('addnews', function(){
        require('apanel/scripts/addnews.php');
    });
    $router->post('updates', function(){
        require('apanel/scripts/updates.php');
    });
    $router->post('adduser', function(){
        require('apanel/scripts/adduser.php');
    });
    $router->post('addgallery', function(){
        require('apanel/scripts/addgallery.php');
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