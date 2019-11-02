<!DOCTYPE html>
<html>
<head>
	<title>Desafio 2</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/desafio01.css'); ?>">
	<link rel="icon" href="<?= base_url('imagens/Deadlock-Jantar.png'); ?>">
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
	<script src="<?= base_url('js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('js/popper.min.js'); ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
</head>
<body>
	<div id="fundo" class="container">
		<div class="row">
			<div class="jantar col-7">
				<div class="imags">
					<img src="<?= base_url('imagens/ojantar_filosofos.png'); ?>">
				</div>
			</div>
			<div class="col-5">
				<div class="introducao">
					<h2>Desafio 2</h2>
					<p style="margin-top: 8%">Faça com que os filósofos 1, 3 e 5 coma e pense 5 vezes; e filósofos 2 e 4 coma e pense 3 vezes.</p>
					<p style="font-weight: bold; text-align: left; text-indent: 0px;">Tempo: 1 min e 20 seg</p>
					<p style="font-weight: bold; text-align: left; text-indent: 0px;">Erros: 3</p>
					<div class="text-center"><a href="<?= base_url('Jantar/jogo/2'); ?>"><button class="btn btn-sucess">Iniciar</button></a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="row">
			<div class="col">
      			<a href="<?= base_url('Jantar/jogo/1'); ?>"><img class="seta" src="<?= base_url('imagens/seta_voltar.png'); ?>"></a>
      			<a href="<?= base_url(); ?>"><img class="icon_home" src="<?= base_url('imagens/icon_home.png'); ?>"></a>
			</div>
			<div class="col">
				<h6 class="creditos">Desenvolvido por <a href="#" data-target="#ExemploModalCentralizado" data-toggle="modal">Alunos de Computação</a></h6>
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
	        <button type="button" class="btn btn-primary fechar" data-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>