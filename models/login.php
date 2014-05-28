<?php
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$index = "http://localhost/agenda/";
	
	$usuarios = file(dirname(dirname(__FILE__))."/database/users.txt");
	
	foreach ($usuarios as $cada_linha):
		$dados = explode("#", $cada_linha);
	
		if($dados[1] == $email && $dados[2] == $senha):
			session_start();
			$_SESSION['user'] = $dados;
			header("location: $index");
		endif;
	endforeach;
	
	header("location: $index?op=erro");
?>