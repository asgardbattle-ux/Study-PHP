<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
/*
// When having query params like in http://study-php.test/contact?name=check, $_SERVER['REQUEST_URI'] is the whole string '/contact?name=check' and does not match the else-if statements. PHP function 'parse_url()' extracts path from the query params.
parse_url($uri) of the above URL will have:
array(2) {
  ["path"]=>
  string(8) "/contact"
  ["query"]=>
  string(10) "name=check"
}
*/

/*
// else-if approach
if ($uri === '/') {
    require 'controllers/index.php';
} else if ($uri === '/about') {
    require 'controllers/about.php';
} else if ($uri === '/contact') {
    require 'controllers/contact.php';
}
*/

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) // setting default value for $code to 404, for the scenarios where abort() is called without a code
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
