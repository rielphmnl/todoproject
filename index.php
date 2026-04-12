<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
	'/' => 'controllers/index.php',
	
	'/create-todo' => 'controllers/new.php',
	'/edit-todo' => 'controllers/task.php',

	'/login' => 'controllers/login.php',
	'/register' => 'controllers/register.php',

	'/wtf' => 'controllers/wtf.php',
];

if (!isset($routes[$uri])) {
	require 'controllers/404.php';
} else {
	require $routes[$uri];
}

