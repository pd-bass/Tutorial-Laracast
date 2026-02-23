<?php


// This function takes a URI (e.g., "/home") and a list of routes,
// and loads the appropriate controller file if it exists.
function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        // If it exists, include/require the corresponding controller file
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    require ("views/{$code}.php");
    die();
}
// Load all route definitions from the routes.php file
$routes = require('routes.php');

// Get the current URI from the browser request
// parse_url breaks it into components, and ['path'] gets the path part
// Example: if URL is "http://example.com/about?foo=bar", $uri becomes "/about"
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Call the router function to handle the request
routeToController($uri, $routes);
