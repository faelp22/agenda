<?php
	session_start();
	if(!isset($_SESSION["user"])):
		if(isset($_GET["op"]) && $_GET["op"] == "erro"):
		echo "Usuario ou senha errado";
		endif;
		require_once 'views/login.html';
	else:
		require_once 'controls/functions.php';
		require_once 'views/template.html';
	endif;
	
?>