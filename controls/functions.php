<?php
	/**
	 * Funçoes do sistema v-0.1
	 */
	
	 function conteudo(){
		$index = "http://localhost/agenda/";
		
		if(isset($_SESSION['user'])):
			if(isset($_GET['op']) == 'logout'):
				session_destroy();
				header("location: $index");
			endif;
			
			if(isset($_GET['op']) == 'list'):
				include_once 'views/list.html';
			endif;
				
			if(isset($_GET['op']) == 'cad'):
				include_once 'views/cad.html';
				
			endif;
		endif;
		
	 }
?>