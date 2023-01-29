<?php
session_start();
$routes = [];

route('/', function(){
    include 'blocks/menu.php';
    include 'blocks/template.php';
});

route('/start', function(){
    include 'startGame/index.php';
});

route('/repeat', function(){
    include 'playGame/repeat.php';
});


route('/red', function(){
    echo $getColor = substr($_SERVER['REQUEST_URI'],1);
    $_SESSION[color] = $getColor;
    compareColor();
});

route('/yellow', function(){
    echo $getColor = substr($_SERVER['REQUEST_URI'],1);
    $_SESSION[color] = $getColor;
    compareColor();
});

route('/green', function(){
    echo $getColor = substr($_SERVER['REQUEST_URI'],1);
    $_SESSION[color] = $getColor;
    compareColor();
});

route('/blue', function(){
    echo $getColor = substr($_SERVER['REQUEST_URI'],1);
    $_SESSION[color] = $getColor;
    compareColor();
});

function compareColor()
{
    include 'playGame/compare.php';
}


function route(string $path, callable $callback)
{
    global $routes;
    $routes[$path] = $callback;
}



run();
function run()
{
    global $routes;
    $uri = $_SERVER['REQUEST_URI'];
    $found = false;
    foreach ($routes as $path => $callback){
        if($path !== $uri) continue;
        $found = true;
        $callback();
    }
    if(!$found){
        $notFoundCallback = $routes['/404'];
        $notFoundCallback();
    }
}