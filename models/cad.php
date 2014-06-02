<?php
	require_once dirname(__DIR__).'/controls/urls.php';
	
	$dados = $_POST;
		
	//abrindo arquivo para guardar os dados
	$arquivo = fopen($raiz."/database/contatos.txt", "a+");
	

	//funcao que escreve dentro do arquivo
	$linha = implode("#", $dados);
	fwrite($arquivo, $linha."\n");
	
	
	//fecha arquivo..
	fclose($arquivo);
	
	header("location: $index?msg=contato_inserido");
