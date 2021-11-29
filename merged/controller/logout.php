<?php 

	session_start();

	setcookie('flag', 'abc', time()-10, '/');
	header('location: ../view/login.html');
?>