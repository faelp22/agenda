<?php
	/**
	 * Funçoes do sistema v-0.1
	 */
	require_once 'urls.php';
	function conteudo(){
			global $raiz, $index;

			if(isset($_GET["op"]) && $_GET["op"] == "logout"):
				session_destroy();
				header("location: $index");
				
			elseif(isset($_GET['op']) && $_GET['op'] == "list"):
				$contatos = file($raiz."/database/contatos.txt");
				
				//titulos da tabela
				$titulos = array("Nome", "Email", "Telefone", "Endereço", "Sexo");
					
				foreach($contatos as $cada_linha){
					$dados[] = explode("#", $cada_linha);
				}
					
				include_once $raiz.'/views/list.html';
				
			elseif(isset($_GET["op"]) && $_GET['op'] == "cad"):
				include_once $raiz.'/views/cad.html';
			endif;
		
	 }
?>
