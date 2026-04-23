<?php

session_start();

function isLoggedIn() {
	if (!empty($_SESSION['user'])) {
		return true;
	}

	return false;
}

function goToLogin() {
	header('Location: /login');
}