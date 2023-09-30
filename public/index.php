<?php

$request_uri = $_SERVER['REQUEST_URI'];

/* main routes */
$routes = [
    '/' => 'home_controller',
    '/exercises' => 'exercises_controller',
];

$code = router($request_uri, $routes);
if ($code != 0){
    header('HTTP/1.0 404 Not Found');
    echo '404 - oops, we did not found the page you are asking for';
}

function router($request_uri, $routes) {

    /* route is a top level one */
    if (array_key_exists($request_uri, $routes)) {
        $controller = $routes[$request_uri];
        include_once('../src/controllers/' . $controller . '.php');

        $controller_instance = new $controller();
        $controller_instance->index();
        return 0;
    }

    /* route may not exist or is a dynamic one */
    $parts = explode('/', trim($request_uri, '/'), 2);
    //echo '<pre>'; print_r($parts); echo '</pre>';
    if (array_key_exists('/' . $parts[0], $routes)) {
        $controller = $routes['/' . $parts[0]];
        include_once('../src/controllers/'. $controller . '.php');
        $controller_instance = new $controller();
        $controller_instance->show($parts[1]);
        return 0;
    }

    return -1;
}

?>
