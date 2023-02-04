<!DOCTYPE html>
<html>
<head>
	<title>Desafio 1</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(PUBLIC_LINK.'css/geral.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url(PUBLIC_LINK.'css/jogo01.css'); ?>">
	<link rel="icon" href="<?= base_url(PUBLIC_LINK.'imagens/Deadlock-Jantar.png'); ?>">
	<link rel="stylesheet" href="<?= base_url(PUBLIC_LINK.'css/bootstrap.min.css'); ?>">
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
					<img class="img-jantar" src="<?= base_url(PUBLIC_LINK.'imagens/ojantar.png'); ?>">

					<img class="img-jantar" id="filo1" style="display: block;" src="<?= base_url(PUBLIC_LINK.'imagens/filo1.png'); ?>">
					<img class="img-jantar" id="filo2" style="display: block;" src="<?= base_url(PUBLIC_LINK.'imagens/filo2.png'); ?>">
					<img class="img-jantar" id="filo3" style="display: block;" src="<?= base_url(PUBLIC_LINK.'imagens/filo3.png'); ?>">
					<img class="img-jantar" id="filo4" style="display: block;" src="<?= base_url(PUBLIC_LINK.'imagens/filo4.png'); ?>">
					<img class="img-jantar" id="filo5" style="display: block;" src="<?= base_url(PUBLIC_LINK.'imagens/filo5.png'); ?>">

					<img class="img-jantar" id="filo1_pensando" style="display: contents;" src="<?= base_url('/public/imagens/filo1_pensando.png'); ?>">
					<img class="img-jantar" id="filo2_pensando" style="display: contents;" src="<?= base_url('/public/imagens/filo2_pensando.png'); ?>">
					<img class="img-jantar" id="filo3_pensando" style="display: contents;" src="<?= base_url('/public/imagens/filo3_pensando.png'); ?>">
					<img class="img-jantar" id="filo4_pensando" style="display: contents;" src="<?= base_url('/public/imagens/filo4_pensando.png'); ?>">
					<img class="img-jantar" id="filo5_pensando" style="display: contents;" src="<?= base_url('/public/imagens/filo5_pensando.png'); ?>">

					<img class="img-jantar" id="filo1_comendo" style="display: contents;" src="<?= base_url('/public/imagens/filo1_comendo.png'); ?>">
					<img class="img-jantar" id="filo2_comendo" style="display: contents;" src="<?= base_url('/public/imagens/filo2_comendo.png'); ?>">
					<img class="img-jantar" id="filo3_comendo" style="display: contents;" src="<?= base_url('/public/imagens/filo3_comendo.png'); ?>">
					<img class="img-jantar" id="filo4_comendo" style="display: contents;" src="<?= base_url('/public/imagens/filo4_comendo.png'); ?>">
					<img class="img-jantar" id="filo5_comendo" style="display: contents;" src="<?= base_url('/public/imagens/filo5_comendo.png'); ?>">

					<img class="img-jantar" id="filo1_garfoEsquerdo" style="display: contents;" src="<?= base_url('/public/imagens/filo1_garfoEsquerdo.png'); ?>">
					<img class="img-jantar" id="filo2_garfoEsquerdo" style="display: contents;" src="<?= base_url('/public/imagens/filo2_garfoEsquerdo.png'); ?>">
					<img class="img-jantar" id="filo3_garfoEsquerdo" style="display: contents;" src="<?= base_url('/public/imagens/filo3_garfoEsquerdo.png'); ?>">
					<img class="img-jantar" id="filo4_garfoEsquerdo" style="display: contents;" src="<?= base_url('/public/imagens/filo4_garfoEsquerdo.png'); ?>">
					<img class="img-jantar" id="filo5_garfoEsquerdo" style="display: contents;" src="<?= base_url('/public/imagens/filo5_garfoEsquerdo.png'); ?>">

					<img class="img-jantar" id="filo1_garfoDireito" style="display: contents;" src="<?= base_url('/public/imagens/filo1_garfoDireito.png'); ?>">
					<img class="img-jantar" id="filo2_garfoDireito" style="display: contents;" src="<?= base_url('/public/imagens/filo2_garfoDireito.png'); ?>">
					<img class="img-jantar" id="filo3_garfoDireito" style="display: contents;" src="<?= base_url('/public/imagens/filo3_garfoDireito.png'); ?>">
					<img class="img-jantar" id="filo4_garfoDireito" style="display: contents;" src="<?= base_url('/public/imagens/filo4_garfoDireito.png'); ?>">
					<img class="img-jantar" id="filo5_garfoDireito" style="display: contents;" src="<?= base_url('/public/imagens/filo5_garfoDireito.png'); ?>">

					<img class="img-jantar" id="garfo1" style="display: block;" src="<?= base_url('/public/imagens/garfo1.png'); ?>">
					<img class="img-jantar" id="garfo2" style="display: block;" src="<?= base_url('/public/imagens/garfo2.png'); ?>">
					<img class="img-jantar" id="garfo3" style="display: block;" src="<?= base_url('/public/imagens/garfo3.png'); ?>">
					<img class="img-jantar" id="garfo4" style="display: block;" src="<?= base_url('/public/imagens/garfo4.png'); ?>">
					<img class="img-jantar" id="garfo5" style="display: block;" src="<?= base_url('/public/imagens/garfo5.png'); ?>">
				</div>
				<div class="informacoes">
					<div class="alert alert-dark acoes" role="alert">
					<h5 id="titulo-mensagem">Ações</h6>
					<h6 id="mensagem">Acompanhe suas ações aqui!</h6>
					</div>
				</div>
			</div>
			<div class="col-5">
				<div class="introducao">
					<h2>Desafio 1</h2>
					<div class="row">
						<div id="contador">
							<div class="div-relogio">
							<img class="relogio-1" src="<?= base_url(PUBLIC_LINK.'imagens/relogio.png'); ?>">
							</div>
				            <div class="reloj" id="Minutos">00</div>
				            <div class="reloj" id="Segundos">:30</div>
			        	</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo1.png'); ?>">
							</div>
							<div class="col-9">
								<div class="btn-group btn-group-toggle botoes-filosofos" data-toggle="buttons">
									<label id="f1-comendo" class="btn shadow-none botao-comer" for="f1-comer">
										<input type="radio" name="Filosofo" id="f1-comer">Comer
									</label>
									<label id="f1-pensando" class="btn shadow-none botao-pensar" for="f1-pensar">
										<input type="radio" name="Filosofo" id="f1-pensar">Pensar
									</label>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo2.png'); ?>">
							</div>
							<div class="col-9">
								<div class="btn-group btn-group-toggle botoes-filosofos" data-toggle="buttons">
									<label id="f2-comendo" class="btn shadow-none botao-comer" for="f1-comer">
										<input type="radio" name="Filosofo" id="f2-comer">Comer
									</label>
									<label id="f2-pensando" class="btn shadow-none botao-pensar" for="f1-pensar">
										<input type="radio" name="Filosofo" id="f2-pensar">Pensar
									</label>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo3.png'); ?>">
							</div>
							<div class="col-9">
								<div class="btn-group btn-group-toggle botoes-filosofos" data-toggle="buttons">
									<label id="f3-comendo" class="btn shadow-none botao-comer" for="f1-comer">
										<input type="radio" name="Filosofo" id="f3-comer">Comer
									</label>
									<label id="f3-pensando" class="btn shadow-none botao-pensar" for="f1-pensar">
										<input type="radio" name="Filosofo" id="f3-pensar">Pensar
									</label>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo4.png'); ?>">
							</div>
							<div class="col-9">
								<div class="btn-group btn-group-toggle botoes-filosofos" data-toggle="buttons">
									<label id="f4-comendo" class="btn shadow-none botao-comer" for="f1-comer">
										<input type="radio" name="Filosofo" id="f4-comer">Comer
									</label>
									<label id="f4-pensando" class="btn shadow-none botao-pensar" for="f1-pensar">
										<input type="radio" name="Filosofo" id="f4-pensar">Pensar
									</label>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo5.png'); ?>">
							</div>
							<div class="col-9">
								<div class="btn-group btn-group-toggle botoes-filosofos" data-toggle="buttons">
									<label id="f5-comendo" class="btn shadow-none botao-comer" for="f1-comer">
										<input type="radio" name="Filosofo" id="f5-comer">Comer
									</label>
									<label id="f5-pensando" class="btn shadow-none botao-pensar" for="f1-pensar">
										<input type="radio" name="Filosofo" id="f5-pensar">Pensar
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="introducao">
					<div class="row">
						<div class="col-4">
							<img id="sombra-0" style="display: block" class="filosofo_sombra" src="<?= base_url(PUBLIC_LINK.'imagens/filosofo_sombra.png') ?>">
							<img id="sombra-1" style="display: contents;" class="filosofo_sombra" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo1.png'); ?>">
							<img id="sombra-2" style="display: contents;" class="filosofo_sombra" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo2.png'); ?>">
							<img id="sombra-3" style="display: contents;" class="filosofo_sombra" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo3.png'); ?>">
							<img id="sombra-4" style="display: contents;" class="filosofo_sombra" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo4.png'); ?>">
							<img id="sombra-5" style="display: contents;" class="filosofo_sombra" src="<?= base_url(PUBLIC_LINK.'imagens/Filosofo5.png'); ?>">
						</div>
						<div class="col-8">
							<h2 id="qtd-comeu">Comeu: 0</h2>
							<h2 id="qtd-pensou">Pensou: 0</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="row">
			<div class="col">
      			<a class="link" onclick="voltar();"><img class="seta" src="<?= base_url(PUBLIC_LINK.'imagens/seta_voltar.png'); ?>"></a>
      			<a class="link" onclick="home();"><img class="icon_home" src="<?= base_url(PUBLIC_LINK.'imagens/icon_home.png'); ?>"></a>
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
	        			<img class="dev01" src="<?= base_url(PUBLIC_LINK.'imagens/desenvolvedor01.jpg'); ?>">
	        		</div>
	        		<div class="col-md text-center">
	        			<img class="dev02" src="<?= base_url(PUBLIC_LINK.'imagens/desenvolvedor02.jpg'); ?>">
	        		</div>
	        		<div class="col-md text-center">
	        			<img class="dev03" src="<?= base_url(PUBLIC_LINK.'imagens/desenvolvedor03.jpg'); ?>">
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="col text-center">
	        			<a href="mailto:cleytonbritto3003@gmail.com"><img class="icon-email" src="<?= base_url(PUBLIC_LINK.'imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/CleitonBrito" target="_black"><img class="icon-github" src="<?= base_url(PUBLIC_LINK.'imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
	        		</div>
	        		<div class="col-md text-center">
	        			<a href="mailto:dhavidy0800@gmail.com"><img class="icon-email" src="<?= base_url(PUBLIC_LINK.'imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/DhavidyAlmeida12" target="_black"><img class="icon-github" src="<?= base_url(PUBLIC_LINK.'imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
	        		</div>
	        		<div class="col-md text-center">
	        			<a href="mailto:dhevidy08000@gmail.com"><img class="icon-email" src="<?= base_url(PUBLIC_LINK.'imagens/icon_email.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="E-mail"></a>
	        			<a href="https://github.com/dhevidy" target="_black"><img class="icon-github" src="<?= base_url(PUBLIC_LINK.'imagens/icon_github.png'); ?>" data-toggle="tooltip" data-placement="bottom" title="GitHub"></a>
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
	<script id="link"
        type="text/javascript" src="<?= base_url(PUBLIC_LINK.'js/regra_01.js'); ?>"
        baselink="<?= base_url() ?>"
    ></script>
	<script type="text/javascript" src="<?= base_url(PUBLIC_LINK.'js/cronometro_jogo1.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url(PUBLIC_LINK.'js/jogo01.js'); ?>"></script>
	<script>
		function home(){
			window.location.href = "<?= base_url(); ?>";
		}

		function voltar(){
			window.location.href = "<?= base_url('Jantar/Desafio/1'); ?>";
		}
	</script>
</body>
</html>