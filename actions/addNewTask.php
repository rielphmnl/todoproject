<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/sessions.php';

require $_SERVER['DOCUMENT_ROOT'] . '/partials/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';
$config = require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';


$db = new Database($config['database'], 'root', 'root');

$newTask = $_POST['newTask'];
$isDone = $_POST['isDone'];


$db->query('INSERT INTO multiPageToDo (task, isDone) VALUES (?,?);', [$newTask, $isDone]);


//lastInsertId gets ID of last inserted 
$newTodoId = $db->connection->lastInsertId();

//
$query = $db->query('SELECT * FROM multiPageToDo WHERE id = ?', [$newTodoId]);

$result = $query->fetch();

var_dump($result);



// goToLocation('index.php');
