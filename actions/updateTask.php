<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/sessions.php';

require $_SERVER['DOCUMENT_ROOT'] . '/partials/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';
$config = require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$db = new Database($config['database'], 'root', 'root');

$id = $_POST['id'];
$isDone = $_POST['isDone'];
$task = $_POST['task'];

$db->query('UPDATE multiPageToDo SET isDone = :isDone, task = :task WHERE id = :id', 
	[
		'isDone' => $isDone,
		'task' => $task,
		'id' => $id,
	]);


$updatedtask = $db->query('SELECT * FROM multiPageToDo WHERE id = ?', [$id])
		->fetch();


var_dump($updatedtask);


// goToLocation('index.php');

