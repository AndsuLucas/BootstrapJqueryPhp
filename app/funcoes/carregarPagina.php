<?php 

function carregarPagina(){


	if(isset($_GET["pagina"])){
		
		$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_SPECIAL_CHARS);
		$caminho = "./paginas/".$pagina.".php";
		if(file_exists($caminho)){
			return $caminho;

		}else{
			return "./paginas/curriculo_anderson.php";
		}


	}else{
		return "./paginas/curriculo_anderson.php";
	}






}


















?>