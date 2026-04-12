<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/sessions.php';

require $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';
$config = require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
$db = new Database($config['database'], 'root', 'root');

$id = $_GET['id'];

$query = 'SELECT * FROM multiPageToDo WHERE id = :id';
$todo = $db->query($query, ['id' => $id])->fetch();

$title = $todo['task'];

require $_SERVER['DOCUMENT_ROOT'] . '/views/task.view.php';

