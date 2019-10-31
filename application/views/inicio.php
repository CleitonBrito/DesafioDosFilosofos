<!DOCTYPE html>
<html>
<head>
	<title>Desafio dos Filósofos</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/inicio.css'); ?>">
	<link rel="icon" href="<?= base_url('imagens/Deadlock-Jantar.png'); ?>">
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>" crossorigin="anonymous">
	<script type="text/javascript" src="<?= base_url('js/jquery-1.10.0.min.js'); ?>"></script>
</head>
<body onload="exp()">
	<div id="fundo" class="container">
		<h1>Comunicação entre Processos</h1>
		<h4>O Desafio dos Filósofos</h4>
		<div class="botao">
			<a href="<?= base_url('Inicio/Jantar/'); ?>"><button id="botaoComecar" class="btn">Start!</button></a>
		</div>
	</div>

	<div class="footer">
		<div class="row">
			<div class="col">
				<h6 class="creditos">&copy; Desenvolvido por <a href="#" data-target="#ExemploModalCentralizado" data-toggle="modal">Alunos de Computação – 2019</a></h6>
			</div>
		</div>
	</div>

	<!-- Modal inicio -->
<div class="modal fade" id="ExemploModalCentralizado1" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h5 class="modal-title" id="TituloModalCentralizado">Desenvolvedores</h5>
      </div>
      <div class="modal-body text-justify">
        O software "Desafio dos Filósofos" foi desenvolvido pelos alunos da Licenciatura em Ciências da Computação, do Instituto Federal de Educação, Ciência e Tecnologia Baiano, campus Senhor do Bonfim–BA, e tem como objetivo abordar os conteúdos de Semáforos e Condições de Corrida, com foco em Starvation e Deadlock.
      </div>
      <div class="modal-body">
        <div class="container-fluid justify-content-center">
        	<div class="row">
        		<div class="col text-center">
        			Cleiton Brito
        		</div>
        		<div class="col-md text-center">
        			Dhavidy Almeida
        		</div>
        		<div class="col-md text-center">
        			Dhevidy Almeida
        		</div>
        	</div>
        	<div class="row">
        		<div class="col text-center">
        			<img class="dev01" src="<?= base_url('imagens/desenvolvedor01.jpg'); ?>">
        		</div>
        		<div class="col-md text-center">
        			<img class="dev02" src="<?= base_url('imagens/desenvolvedor02.jpg'); ?>">
        		</div>
        		<div class="col-md text-center">
        			<img class="dev03" src="<?= base_url('imagens/desenvolvedor03.jpg'); ?>">
        		</div>
        	</div>
        	<div class="row">
        		<div class="col text-center">
        			<a href="mailto:cleytonbritto3003@gmail.com"><img class="icon-email" src="<?= base_url('imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
        			<a href="https://github.com/CleitonBrito" target="_black"><img class="icon-github" src="<?= base_url('imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
        		</div>
        		<div class="col-md text-center">
        			<a href="mailto:dhavidy0800@gmail.com"><img class="icon-email" src="<?= base_url('imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
        			<a href="https://github.com/DhavidyAlmeida12" target="_black"><img class="icon-github" src="<?= base_url('imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
        		</div>
        		<div class="col-md text-center">
        			<a href="mailto:dhevidy08000@gmail.com"><img class="icon-email" src="<?= base_url('imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
        			<a href="https://github.com/dhevidy" target="_black"><img class="icon-github" src="<?= base_url('imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


	<!-- Modal desenvolvedores -->
	<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header justify-content-center">
	        <h5 class="modal-title" id="TituloModalCentralizado">Desenvolvedores</h5>
	      </div>
	      <div class="modal-body text-justify">
	        O software "Desafio dos Filósofos" foi desenvolvido pelos alunos da Licenciatura em Ciências da Computação, do Instituto Federal de Educação, Ciência e Tecnologia Baiano, campus Senhor do Bonfim–BA, e tem como objetivo abordar os conteúdos de Semáforos e Condições de Corrida, com foco em Starvation e Deadlock.
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid justify-content-center">
	        	<div class="row">
	        		<div class="col text-center">
	        			Cleiton Brito
	        		</div>
	        		<div class="col-md text-center">
	        			Dhavidy Almeida
	        		</div>
	        		<div class="col-md text-center">
	        			Dhevidy Almeida
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="col text-center">
	        			<img class="dev01" src="<?= base_url('imagens/desenvolvedor01.jpg'); ?>">
	        		</div>
	        		<div class="col-md text-center">
	        			<img class="dev02" src="<?= base_url('imagens/desenvolvedor02.jpg'); ?>">
	        		</div>
	        		<div class="col-md text-center">
	        			<img class="dev03" src="<?= base_url('imagens/desenvolvedor03.jpg'); ?>">
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="col text-center">
	        			<a href="mailto:cleytonbritto3003@gmail.com"><img class="icon-email" src="<?= base_url('imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/CleitonBrito" target="_black"><img class="icon-github" src="<?= base_url('imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
	        		</div>
	        		<div class="col-md text-center">
	        			<a href="mailto:dhavidy0800@gmail.com"><img class="icon-email" src="<?= base_url('imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/DhavidyAlmeida12" target="_black"><img class="icon-github" src="<?= base_url('imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
	        		</div>
	        		<div class="col-md text-center">
	        			<a href="mailto:dhevidy08000@gmail.com"><img class="icon-email" src="<?= base_url('imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/dhevidy" target="_black"><img class="icon-github" src="<?= base_url('imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
	        		</div>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
		    $('#ExemploModalCentralizado1').modal('show');
		})

		$(function(){
			var cores = ['#FFA500','#8B0000', '#228B22','#20B2AA','#003280'];
			var tamanhoArray = cores.length;
			var contador = 0;
			var botao = document.getElementById('botaoComecar');

			setInterval(function(){
				$("botaoComecar").css("background-color",cores[contador]);
				botao.style.background = cores[contador];
				contador++;
				if(contador>tamanhoArray){
				contador = 0;
				}
			},
			500);
		});
	</script>
</body>
</html>