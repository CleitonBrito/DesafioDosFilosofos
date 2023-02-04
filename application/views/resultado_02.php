<!DOCTYPE html>
<html>
<head>
	<title>Desafio 2 - Resultado</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/geral.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/css/resultado_02.css'); ?>">
	<link rel="icon" href="<?= base_url('public/imagens/Deadlock-Jantar.png'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>
<body>
	<div id="fundo" class="container">
		<div class="row">
			<div class="jantar col-7">
				<div class="imags">
					<img class="img-jantar" src="<?= base_url('public/imagens/Mesa_garfos.png'); ?>">

					<img class="img-jantar" id="filo1" src="<?= base_url('public/imagens/filo1.png'); ?>">
					<img class="img-jantar" id="filo2" src="<?= base_url('public/imagens/filo2.png'); ?>">
					<img class="img-jantar" id="filo3" src="<?= base_url('public/imagens/filo3.png'); ?>">
					<img class="img-jantar" id="filo4" src="<?= base_url('public/imagens/filo4.png'); ?>">
					<img class="img-jantar" id="filo5" src="<?= base_url('public/imagens/filo5.png'); ?>">

					<?php if(isset($_GET['filo1_comeu']) && $_GET['filo1_comeu'] == 0){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/f1_morreu.png'); ?>">
						<img class="img-jantar" src="<?= base_url('public/imagens/Comida_f1.png'); ?>">
					<?php }if(isset($_GET['filo2_comeu']) && $_GET['filo2_comeu'] == 0){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/f2_morreu.png'); ?>">
						<img class="img-jantar" src="<?= base_url('public/imagens/Comida_f2.png'); ?>">
					<?php }if(isset($_GET['filo3_comeu']) && $_GET['filo3_comeu'] == 0){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/f3_morreu.png'); ?>">
						<img class="img-jantar" src="<?= base_url('public/imagens/Comida_f3.png'); ?>">
					<?php }if(isset($_GET['filo4_comeu']) && $_GET['filo4_comeu'] == 0){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/f4_morreu.png'); ?>">
						<img class="img-jantar" src="<?= base_url('public/imagens/Comida_f4.png'); ?>">
					<?php }if(isset($_GET['filo5_comeu']) && $_GET['filo5_comeu'] == 0){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/f5_morreu.png'); ?>">
						<img class="img-jantar" src="<?= base_url('public/imagens/Comida_f5.png'); ?>">
					<?php }if(isset($_GET['filo1_comeu']) && $_GET['filo1_comeu'] < 5){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/comeu_pouco_f1.png'); ?>">
					<?php }if(isset($_GET['filo2_comeu']) && $_GET['filo2_comeu'] < 3){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/comeu_pouco_f2.png'); ?>">
					<?php }if(isset($_GET['filo3_comeu']) && $_GET['filo3_comeu'] < 5){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/comeu_pouco_f3.png'); ?>">
					<?php }if(isset($_GET['filo4_comeu']) && $_GET['filo4_comeu'] < 3){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/comeu_pouco_f4.png'); ?>">
					<?php }if(isset($_GET['filo5_comeu']) && $_GET['filo5_comeu'] < 5){ ?>
						<img class="img-jantar" src="<?= base_url('public/imagens/comeu_pouco_f5.png'); ?>">
					<?php } ?>

				</div>
				<?php if(isset($_GET['acertou']) && $_GET['acertou'] == 0){ ?>
					<div class="informacoes">
						<div class="alert errou" role="alert">
						<h5 id="titulo-mensagem">Starvation</h6>
						<?php if(isset($_GET['filo1_comeu']) && $_GET['filo1_comeu'] == 0){ ?>
							<h6 id="mensagem">O Filósofo 1 morreu de fome!</h6>
						<?php }if(isset($_GET['filo2_comeu']) && $_GET['filo2_comeu'] == 0){ ?>
							<h6 id="mensagem">O Filósofo 2 morreu de fome!</h6>
						<?php }if(isset($_GET['filo3_comeu']) && $_GET['filo3_comeu'] == 0){ ?>
							<h6 id="mensagem">O Filósofo 3 morreu de fome!</h6>
						<?php }if(isset($_GET['filo4_comeu']) && $_GET['filo4_comeu'] == 0){ ?>
							<h6 id="mensagem">O Filósofo 4 morreu de fome!</h6>
						<?php }if(isset($_GET['filo5_comeu']) && $_GET['filo5_comeu'] == 0){ ?>
							<h6 id="mensagem">O Filósofo 5 morreu de fome!</h6>
						<?php } ?>
						<br>
						<h6 id="mensagem">Parece que o tempo está sendo seu grande inimigo. É preciso ser ágil para não deixar os filósofos sem comer. Um Sistema Operacional precisar ser rápido para gerenciar seus processos.</h6>
						</div>
					</div>
				<?php } if(isset($_GET['acertou']) && $_GET['acertou'] == 1){ ?>
					<div class="informacoes">
						<div class="alert acertou" role="alert">
						<h5 id="titulo-mensagem">Objetivo Alcançado!</h6>
						<h6 id="mensagem">Dessa vez, além da corrida contra o tempo você conseguiu fugir do chamado Deadlock, que é o impasse dos Filósofos ao ficarem tentando pegar garfos já ocupados.</h6>
						</div>
					</div>
				<?php } if(isset($_GET['dead']) && $_GET['dead'] == 1){ ?>
					<div class="informacoes">
						<div class="alert dead" role="alert">
						<h5 id="titulo-mensagem">DeadLock</h6>
						<h6 id="mensagem">Ocorreram impasses no qual o Filósofo não pôde pegar o garfo, pois já estava sendo usado por outro Filósofo e ele foi obrigado a devolver o garfo à mesa.</h6>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="col-5">
				<div class="introducao">
					<?php
					if(isset($_GET['acertou']) && $_GET['acertou'] == 1){ ?>
						<img id="resultado-certo" class="resultado" src="<?= base_url('public/imagens/resultado_certo.png'); ?>">
					<?php }else{ ?>
						<img id="resultado-errado" class="resultado" src="<?= base_url('public/imagens/resultado_errado.png'); ?>">
					<?php } ?>
					<h2>Desafio 2 – Resultado</h2>
					<div class="row">
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url('public/imagens/Filosofo1.png'); ?>">
							</div>
							<div class="col-4 comeu">
								<h6 id="f1-comeu">Comeu<br><?php if(isset($_GET['filo1_comeu'])) echo $_GET['filo1_comeu']; ?> de 5</h6>
							</div>
							<div class="col-4 pensou">
								<h6 id="f1-pensou">Pensou<br><?php if(isset($_GET['filo1_pensou'])) echo $_GET['filo1_pensou']; ?> de 5</h6>
							</div>
						</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url('public/imagens/Filosofo2.png'); ?>">
							</div>
							<div class="col-4 comeu">
								<h6 id="f2-comeu">Comeu<br><?php if(isset($_GET['filo2_comeu'])) echo $_GET['filo2_comeu']; ?> de 3</h6>
							</div>
							<div class="col-4 pensou">
								<h6 id="f2-pensou">Pensou<br><?php if(isset($_GET['filo2_pensou'])) echo $_GET['filo2_pensou']; ?> de 3</h6>
							</div>
						</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url('public/imagens/Filosofo3.png'); ?>">
							</div>
							<div class="col-4 comeu">
								<h6 id="f3-comeu">Comeu<br><?php if(isset($_GET['filo3_comeu'])) echo $_GET['filo3_comeu']; ?> de 5</h6>
							</div>
							<div class="col-4 pensou">
								<h6 id="f3-pensou">Pensou<br><?php if(isset($_GET['filo3_pensou'])) echo $_GET['filo3_pensou']; ?> de 5</h6>
							</div>
						</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url('public/imagens/Filosofo4.png'); ?>">
							</div>
							<div class="col-4 comeu">
								<h6 id="f4-comeu">Comeu<br><?php if(isset($_GET['filo4_comeu'])) echo $_GET['filo4_comeu']; ?> de 3</h6>
							</div>
							<div class="col-4 pensou">
								<h6 id="f4-pensou">Pensou<br><?php if(isset($_GET['filo4_pensou'])) echo $_GET['filo4_pensou']; ?> de 3</h6>
							</div>
						</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url('public/imagens/Filosofo5.png'); ?>">
							</div>
							<div class="col-4 comeu">
								<h6 id="f5-comeu">Comeu<br><?php if(isset($_GET['filo5_comeu'])) echo $_GET['filo5_comeu']; ?> de 5</h6>
							</div>
							<div class="col-4 pensou">
								<h6 id="f5-pensou">Pensou<br><?php if(isset($_GET['filo5_pensou'])) echo $_GET['filo5_pensou']; ?> de 5</h6>
							</div>
						</div>
						<div class="col-12 botao">
								<a href="<?= base_url('Jantar/jogo/2'); ?>"><button class="btn btn-danger">Jogar Novamente</button></a>
								<?php if(isset($_GET['acertou']) && $_GET['acertou'] == 1){ ?>
								<a href="<?= base_url('Jantar/desafio/3'); ?>"><button class="btn btn-success">Próximo</button></a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="row">
			<div class="col">
      			<a class="link" onclick="voltar();"><img class="seta" src="<?= base_url('public/imagens/seta_voltar.png'); ?>"></a>
      			<a class="link" onclick="home();"><img class="icon_home" src="<?= base_url('public/imagens/icon_home.png'); ?>"></a>
			</div>
			<div class="col">
				<h6 class="creditos">Desenvolvido por <a class="link" data-target="#ExemploModalCentralizado" data-toggle="modal">Alunos de Computação</a></h6>
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
	        			<img class="dev01" src="<?= base_url('public/imagens/desenvolvedor01.jpg'); ?>">
	        		</div>
	        		<div class="col-md text-center">
	        			<img class="dev02" src="<?= base_url('public/imagens/desenvolvedor02.jpg'); ?>">
	        		</div>
	        		<div class="col-md text-center">
	        			<img class="dev03" src="<?= base_url('public/imagens/desenvolvedor03.jpg'); ?>">
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="col text-center">
	        			<a href="mailto:cleytonbritto3003@gmail.com"><img class="icon-email" src="<?= base_url('public/imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/CleitonBrito" target="_black"><img class="icon-github" src="<?= base_url('public/imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
	        		</div>
	        		<div class="col-md text-center">
	        			<a href="mailto:dhavidy0800@gmail.com"><img class="icon-email" src="<?= base_url('public/imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/DhavidyAlmeida12" target="_black"><img class="icon-github" src="<?= base_url('public/imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
	        		</div>
	        		<div class="col-md text-center">
	        			<a href="mailto:dhevidy08000@gmail.com"><img class="icon-email" src="<?= base_url('public/imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/dhevidy" target="_black"><img class="icon-github" src="<?= base_url('public/imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
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
	<script>
		function home(){
			window.location.href = "<?= base_url(); ?>";
		}

		function voltar(){
			window.location.href = "<?= base_url('Jantar/Desafio/2'); ?>";
		}
	</script>
</body>
</html>