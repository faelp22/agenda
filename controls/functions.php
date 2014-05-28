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
				include_once '/var/www/agenda/views/list.html';
				
			elseif(isset($_GET["op"]) && $_GET['op'] == "cad"):
				include_once '/var/www/agenda/views/cad.html';
				
			endif;
		
	 }
?>