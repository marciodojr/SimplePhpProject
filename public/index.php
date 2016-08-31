<?php

// Everything is relative to the application root now.
chdir(dirname(__DIR__));

if(!file_exists('./vendor/autoload.php')) {
    throw new \Exception('Please run `composer install` first!');
}

$loader = include './vendor/autoload.php';

use SimpleProject\Router\SimpleRouter;
use SimpleProject\View\Hello;

SimpleRouter::add('/', function(){
    print 'index.php';
});

SimpleRouter::add('/say-hello/(\w{3,20})', function($name){
    $hello = new Hello($name);
    print $hello->sayHello();
});

SimpleRouter::match($_SERVER['REQUEST_URI']);
