<?php
	session_start();
	if(!isset($_SESSION['user'])):
		require_once 'views/login.html';
	else:
		require_once 'controls/functions.php';
		require_once 'views/template.html';
	endif;
	
?>