<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/sessions.php';

require $_SERVER['DOCUMENT_ROOT'] . '/partials/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';
$config = require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$db = new Database($config['database'], 'root', 'root');


$tasks = $db->query('SELECT * FROM multiPageTodo WHERE isDeleted = 0')
->fetchAll();

// var_dump($tasks);

goToLocation('index.php');
