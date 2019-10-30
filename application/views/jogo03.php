<!DOCTYPE html>
<html>
<head>
	<title>Desafio 3</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/jogo01.css'); ?>">
	<link rel="icon" href="<?= base_url('imagens/Deadlock-Jantar.png'); ?>">
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
					<img class="img-jantar" src="<?= base_url('imagens/ojantar.png'); ?>">

					<img class="img-jantar" id="filo1" style="display: block;" src="<?= base_url('imagens/filo1.png'); ?>">
					<img class="img-jantar" id="filo2" style="display: block;" src="<?= base_url('imagens/filo2.png'); ?>">
					<img class="img-jantar" id="filo3" style="display: block;" src="<?= base_url('imagens/filo3.png'); ?>">
					<img class="img-jantar" id="filo4" style="display: block;" src="<?= base_url('imagens/filo4.png'); ?>">
					<img class="img-jantar" id="filo5" style="display: block;" src="<?= base_url('imagens/filo5.png'); ?>">

					<img class="img-jantar" id="filo1_pensando" style="display: contents;" src="<?= base_url('imagens/filo1_pensando.png'); ?>">
					<img class="img-jantar" id="filo2_pensando" style="display: contents;" src="<?= base_url('imagens/filo2_pensando.png'); ?>">
					<img class="img-jantar" id="filo3_pensando" style="display: contents;" src="<?= base_url('imagens/filo3_pensando.png'); ?>">
					<img class="img-jantar" id="filo4_pensando" style="display: contents;" src="<?= base_url('imagens/filo4_pensando.png'); ?>">
					<img class="img-jantar" id="filo5_pensando" style="display: contents;" src="<?= base_url('imagens/filo5_pensando.png'); ?>">

					<img class="img-jantar" id="filo1_comendo" style="display: contents;" src="<?= base_url('imagens/filo1_comendo.png'); ?>">
					<img class="img-jantar" id="filo2_comendo" style="display: contents;" src="<?= base_url('imagens/filo2_comendo.png'); ?>">
					<img class="img-jantar" id="filo3_comendo" style="display: contents;" src="<?= base_url('imagens/filo3_comendo.png'); ?>">
					<img class="img-jantar" id="filo4_comendo" style="display: contents;" src="<?= base_url('imagens/filo4_comendo.png'); ?>">
					<img class="img-jantar" id="filo5_comendo" style="display: contents;" src="<?= base_url('imagens/filo5_comendo.png'); ?>">

					<img class="img-jantar" id="filo1_garfoEsquerdo" style="display: contents;" src="<?= base_url('imagens/filo1_garfoEsquerdo.png'); ?>">
					<img class="img-jantar" id="filo2_garfoEsquerdo" style="display: contents;" src="<?= base_url('imagens/filo2_garfoEsquerdo.png'); ?>">
					<img class="img-jantar" id="filo3_garfoEsquerdo" style="display: contents;" src="<?= base_url('imagens/filo3_garfoEsquerdo.png'); ?>">
					<img class="img-jantar" id="filo4_garfoEsquerdo" style="display: contents;" src="<?= base_url('imagens/filo4_garfoEsquerdo.png'); ?>">
					<img class="img-jantar" id="filo5_garfoEsquerdo" style="display: contents;" src="<?= base_url('imagens/filo5_garfoEsquerdo.png'); ?>">

					<img class="img-jantar" id="filo1_garfoDireito" style="display: contents;" src="<?= base_url('imagens/filo1_garfoDireito.png'); ?>">
					<img class="img-jantar" id="filo2_garfoDireito" style="display: contents;" src="<?= base_url('imagens/filo2_garfoDireito.png'); ?>">
					<img class="img-jantar" id="filo3_garfoDireito" style="display: contents;" src="<?= base_url('imagens/filo3_garfoDireito.png'); ?>">
					<img class="img-jantar" id="filo4_garfoDireito" style="display: contents;" src="<?= base_url('imagens/filo4_garfoDireito.png'); ?>">
					<img class="img-jantar" id="filo5_garfoDireito" style="display: contents;" src="<?= base_url('imagens/filo5_garfoDireito.png'); ?>">

					<img class="img-jantar" id="garfo1" style="display: block;" src="<?= base_url('imagens/garfo1.png'); ?>">
					<img class="img-jantar" id="garfo2" style="display: block;" src="<?= base_url('imagens/garfo2.png'); ?>">
					<img class="img-jantar" id="garfo3" style="display: block;" src="<?= base_url('imagens/garfo3.png'); ?>">
					<img class="img-jantar" id="garfo4" style="display: block;" src="<?= base_url('imagens/garfo4.png'); ?>">
					<img class="img-jantar" id="garfo5" style="display: block;" src="<?= base_url('imagens/garfo5.png'); ?>">
				</div>
				<div class="informacoes">
					<div class="alert alert-dark" role="alert">
					<h5 id="titulo-mensagem">Ações</h6>
					<h6 id="mensagem">Acompanhe suas ações aqui!</h6>
					</div>
				</div>
			</div>
			<div class="col-5">

				<div class="introducao">
					<h2>Desafio 3</h2>
					<div class="row">
						<div class="col-6">
							<div id="contador">
								<img class="relogio" src="<?= base_url('imagens/relogio.png'); ?>">
					            <div class="reloj" id="Minutos">01</div>
					            <div class="reloj" id="Segundos">:45</div>
					        </div>
				        </div>
				        <div class="col-6 coracao">
				        	<img id="img-coracao" src="<?= base_url('imagens/coracao.png'); ?>">
				        	<h6 id="vidas">4</h6>
				        </div>
						<div class="col-12">
							<div class="col-3">
								<img class="img-filosofos" src="<?= base_url('imagens/Filosofo1.png'); ?>">
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
								<img class="img-filosofos" src="<?= base_url('imagens/Filosofo2.png'); ?>">
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
								<img class="img-filosofos" src="<?= base_url('imagens/Filosofo3.png'); ?>">
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
								<img class="img-filosofos" src="<?= base_url('imagens/Filosofo4.png'); ?>">
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
								<img class="img-filosofos" src="<?= base_url('imagens/Filosofo5.png'); ?>">
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
							<img id="sombra-0" style="display: block" class="filosofo_sombra" src="<?= base_url('imagens/filosofo_sombra.png') ?>">
							<img id="sombra-1" style="display: contents;" class="filosofo_sombra" src="<?= base_url('imagens/Filosofo1.png'); ?>">
							<img id="sombra-2" style="display: contents;" class="filosofo_sombra" src="<?= base_url('imagens/Filosofo2.png'); ?>">
							<img id="sombra-3" style="display: contents;" class="filosofo_sombra" src="<?= base_url('imagens/Filosofo3.png'); ?>">
							<img id="sombra-4" style="display: contents;" class="filosofo_sombra" src="<?= base_url('imagens/Filosofo4.png'); ?>">
							<img id="sombra-5" style="display: contents;" class="filosofo_sombra" src="<?= base_url('imagens/Filosofo5.png'); ?>">
						</div>
						<div class="col-8">
							<h2 id="qtd-comeu">Comeu: 0 de 0</h2>
							<h2 id="qtd-pensou">Pensou: 0 de 0</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?= base_url('js/regra_03.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/cronometro_jogo3.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/jogo03.js'); ?>"></script>
</body>
</html>