<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/sessions.php';

require $_SERVER['DOCUMENT_ROOT'] . '/partials/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';
$config = require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';


$db = new Database($config['database'], 'root', 'root');

$username = $_POST['username'];
$password = $_POST['password'];

$password = password_hash($password, PASSWORD_BCRYPT);

$db->query('INSERT INTO users (username, password) VALUES (?,?);', [$username, $password]);


//lastInsertId gets ID of last inserted 
// $newTodoId = $db->connection->lastInsertId();

//
// $query = $db->query('SELECT * FROM multiPageToDo WHERE id = ?', [$newTodoId]);

// $result = $query->fetch();

// var_dump($result);





goToLocation('index.php');
