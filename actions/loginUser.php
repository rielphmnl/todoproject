<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/sessions.php';

require $_SERVER['DOCUMENT_ROOT'] . '/partials/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';
$config = require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';


$db = new Database($config['database'], 'root', 'root');

$username = $_POST['username'];
$password = $_POST['password'];


$fetchedUser = $db->query('SELECT * FROM users WHERE username = (?);', [$username])->fetch();

if ($fetchedUser === false) {
	echo "wrong username or password\n";
	return;
}

if (!password_verify($password, $fetchedUser['password'])) {
	echo "wrong username or password\n";
	return;
}

unset($fetchedUser['password']);
$_SESSION['user'] = $fetchedUser;

//lastInsertId gets ID of last inserted 
// $newTodoId = $db->connection->lastInsertId();

//
// $query = $db->query('SELECT * FROM multiPageToDo WHERE id = ?', [$newTodoId]);

// $result = $query->fetch();

// var_dump($result);





goToLocation();
