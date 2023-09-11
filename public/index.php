<?php

spl_autoload_register(function ($className){
    
    $className = substr($className, 4);
    //var_dump($className);
    require_once __DIR__ . "/../src/$className.php";
});

use app\Router;

require __DIR__ . '/../routes.php';
include __DIR__ . '/views/helper.php';

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    if(is_callable($match['action'])){
    call_user_func($match['action']);
    } else if(is_array($match['action'])){
        $class = $match['action'][0]; // 'App\Controllers\PublicController'
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    }
} else {
    echo 404;
}





// //var_dump($_SERVER);
// switch($_SERVER['REQUEST_URI']) {
//     case '/':
//         echo 'Home page';
//         break;
//     case '/about':
//         echo 'About';
//         break;
//     default:
//         echo '404';
//         break;
// }