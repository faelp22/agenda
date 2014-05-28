<?php
	$email = isset($_POST['email']);
	$senha = isset($_POST['senha']);
	
	$index = "http://localhost/agenda/";
	
	$m1 = "isael@email.com";
	$s1 = "123456";
	
	if($email == $m1 && $senha == $s1):
		session_start();
		$_SESSION['user'] = $email;
		header("location: $index");
	endif;
?>

