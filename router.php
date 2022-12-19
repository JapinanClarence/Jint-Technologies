<?php 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/index.php',
    '/services' => 'controllers/services.php',
    '/products' => 'controllers/products.php',
    '/about' => 'controllers/about.php',
    '/login' => 'controllers/login.php',
    '/signup' => 'controllers/signup.php'
];

function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort(404);
    }
}

routeToController($uri, $routes);

function abort($code = 404){
    http_response_code($code);
    echo "Sorry. Not Found";
    die();
}