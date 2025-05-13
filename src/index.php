<?php 

spl_autoload_register(function ($class) 
{
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require $class . '.php';
});

$router = new Core\Router();

$routes = require 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);