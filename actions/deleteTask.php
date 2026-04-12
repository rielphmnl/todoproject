<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/sessions.php';

require $_SERVER['DOCUMENT_ROOT'] . '/partials/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';
$config = require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$db = new Database($config['database'], 'root', 'root');

$id = $_POST['id'];

$db->query('UPDATE multiPageToDo SET isDeleted = 1 WHERE id = ?', [$id]);

goToLocation('index.php');
