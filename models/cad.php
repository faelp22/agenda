<?php
	$dados = $_POST;
	
	
	$projeto = "/agenda";
	$caminho = $_SERVER['DOCUMENT_ROOT'].$projeto;
	$index = "http://localhost".$projeto;
	
	//abrindo arquivo para guardar os dados
	$arquivo = fopen($caminho."/database/contatos.txt", "a+");
	

	//funcao que escreve dentro do arquivo
	$linha = implode("#", $dados);
	fwrite($arquivo, $linha."\n");
	
	
	//fecha arquivo..
	fclose($arquivo);
	
	header("location: $index?msg=contato_inserido");