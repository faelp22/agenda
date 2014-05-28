<?php
    require_once 'controls/urls.php';
	session_start();
	if(!isset($_SESSION["user"])):
		if(isset($_GET["op"]) && $_GET["op"] == "erro"):
		echo "Usuario ou senha errado";
		endif;
		require_once $raiz.'/views/login.html';
	else:
		require_once $raiz.'/controls/functions.php';
		require_once $raiz.'/views/template.html';
	endif;
	
?>
