<?php


function routeToController($uri, $routeMap): void
{
    if (array_key_exists($uri['path'], $routeMap)) {
        require 'controllers/' . $routeMap[$uri['path']];
    } else {
        abort();
    }
}

function abort($statusCode = 404): void
{
    http_response_code($statusCode);
    if (file_exists("views/$statusCode.php")) {
        require "views/$statusCode.php";
    } else {
        require "views/404.php";
    }
    die;
}

$uri = parse_url($_SERVER['REQUEST_URI']);

$routeMap = [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
    '/note' => 'note.php',
    '/notes' => 'notes.php',
];


routeToController($uri, $routeMap);