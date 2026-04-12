<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/sessions.php';

require $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';
$config = require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
$db = new Database($config['database'], 'root', 'root');

$query = "SELECT * FROM multiPageToDo WHERE isDeleted = 0";
$todos = $db->query($query)->fetchALL();

$title = 'Todo list';

require $_SERVER['DOCUMENT_ROOT'] . '/views/index.view.php';
