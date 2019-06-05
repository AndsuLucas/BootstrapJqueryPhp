<?php
//include das funções classes etc.
	require_once "./funcoes/carregarPagina.php";
?>
<html>
	<head>
		
		<title>
		</title>
		
		<?php require_once "includes/head.html" ?>
		
	</head>
	<body style="padding:0; margin:0;  background-color: #add8e636;">
		<header class="jumbotron" style="padding: 3rem 2rem; font-family: 'Montaga', serif; border-radius: 0; margin-bottom:0; background-color: #130648 " id="cabeçalho">
			<h1 class="text-center" style="font-family: 'Montaga', serif !important; color: white !important;">
			Anderson Lucas & Estevão Gabriel
			</h1>
		</header>
		
		<div class="container-fluid" >
			<div class="modal" tabindex="-1" role="dialog"  >
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title text-center">Sobre o projeto</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Projeto acadêmico desenvolvido pelos alunos <strong>Anderson Lucas Silva de Oliveira e Estevão Gabriel</strong></p>
						</div>
					
					</div>
				</div>
			</div>
			<div class="row" style="height: 100%;">
				<?php require_once "./includes/menulateral.html" ?>
				<main role="main" class="col-md-10 ml-sm-auto pt-3 px-4 text-justify container" 	id="principal">
					
					<a id="menuAçao" class="btn btn-outline-primary" alt="hello" style="border-color: #130648;">
						<p id="icone-feather" data-feather="arrow-left"></p>
						<small id="desc-button">Esconder Menu</small>
					</a>
					<br>
					<br>
					
					<?php
						//função responsável por carregar os tamplates aqui.
					
						require_once carregarPagina();
					?>
					
				</main>
			</div>
		</div>
		<?php require_once "./includes/footer.html"; ?>
		<script>
			$(document).ready(function(){
				
				feather.replace()
				//escondendo o botão conforme o scroll abaixa.
				$(window).scroll(function() {
						if($("#menu-lateral").css("visibility") === "hidden"){
						if ($(window).scrollTop()>10 ){
							
							$("#menuAçao").css("left",-35);
						}else{
							$("#menuAçao").css("left",25);
							
						}
					}
				});
				
				$("#menuAçao").click(function(){
					//tornando menu-lateral invisível
					if($("#menu-lateral").css("visibility") === "visible"){
						$("#menu-lateral").css("visibility","hidden");
							
						$("#principal").css("position","absolute")
							.removeClass()
							.addClass("col-md-12 ml-sm-auto pt-3 px-4 text-justify");
						$("#menuAçao").empty()
							.append("<p id='icone-feather' data-feather='arrow-right'></p>")
							.append("<small id='desc-button'>Ver Menu</small>");
						feather.replace();
					//tornando menu-lateral visível
					}else{
																
						$("#menu-lateral").css("visibility","visible");
							
						$("#principal")
							.css("position","relative")
							.removeClass()
							.addClass("col-md-10 ml-sm-auto pt-3 px-4 text-justify");
						$("#menuAçao")
							.empty()
							.append("<p id='icone-feather' data-feather='arrow-left'></p>")
							.append("<small id='desc-button'>Esconder Menu</small>")
							.css("left","13rem");
						feather.replace();
					}
					
				});
				$("#sobre").click(function(){
					$(".modal").fadeIn(1000);
				});
				$(".close").click(function(){

					$(".modal").fadeOut(1000);

				});
			});
		</script>
		
	</body>
	
</html>