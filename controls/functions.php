<?php
	/**
	 * Funçoes do sistema v-0.1
	 */
	
	 function conteudo(){
		$index = "http://localhost/agenda/";
		
			
				
			if(isset($_GET["op"]) && $_GET["op"] == "logout"):
				session_destroy();
				header("location: $index");
				
			elseif(isset($_GET['op']) && $_GET['op'] == "list"):
				$contatos = file("database/contatos.txt");
				
				//titulos da tabela
				$titulos = array("Nome", "Email", "Telefone", "Endereço", "Sexo");
					
				foreach($contatos as $cada_linha){
					$dados[] = explode("#", $cada_linha);
				}
					
				include_once '/var/www/agenda/views/list.html';
				
			elseif(isset($_GET["op"]) && $_GET['op'] == "cad"):
				include_once '/var/www/agenda/views/cad.html';
				
			endif;
		
	 }
?>