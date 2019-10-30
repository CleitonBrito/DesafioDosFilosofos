<!DOCTYPE html>
<html>
<head>
	<title>Projeto SO</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/ojantar.css'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	
</head>
<body onload="focus()">
	<div id="fundo" class="container">
		<h1>O Jantar dos Filósofos</h1>
		<div class="row">
			<div class="jantar col-7">
				<div class="imags">
					<img class="jantar" src="<?= base_url('imagens/Ojantar.png'); ?>">
					<img class="jantar" id="filo1_pensando" style="display: block;" src="<?= base_url('imagens/filo1_pensando.png'); ?>">
					<img class="jantar" id="filo2_pensando" style="display: block;" src="<?= base_url('imagens/filo2_pensando.png'); ?>">
					<img class="jantar" id="filo3_pensando" style="display: block;" src="<?= base_url('imagens/filo3_pensando.png'); ?>">
					<img class="jantar" id="filo4_pensando" style="display: block;" src="<?= base_url('imagens/filo4_pensando.png'); ?>">
					<img class="jantar" id="filo5_pensando" style="display: block;" src="<?= base_url('imagens/filo5_pensando.png'); ?>">

					<img class="jantar" id="filo1_comendo" style="display: contents;" src="<?= base_url('imagens/filo1_comendo.png'); ?>">
					<img class="jantar" id="filo2_comendo" style="display: contents;" src="<?= base_url('imagens/filo2_comendo.png'); ?>">
					<img class="jantar" id="filo3_comendo" style="display: contents;" src="<?= base_url('imagens/filo3_comendo.png'); ?>">
					<img class="jantar" id="filo4_comendo" style="display: contents;" src="<?= base_url('imagens/filo4_comendo.png'); ?>">
					<img class="jantar" id="filo5_comendo" style="display: contents;" src="<?= base_url('imagens/filo5_comendo.png'); ?>">

					<img class="jantar" id="garfo1" style="display: contents;" src="<?= base_url('imagens/garfo1.png'); ?>">
					<img class="jantar" id="garfo2" style="display: contents;" src="<?= base_url('imagens/garfo2.png'); ?>">
					<img class="jantar" id="garfo3" style="display: contents;" src="<?= base_url('imagens/garfo3.png'); ?>">
					<img class="jantar" id="garfo4" style="display: contents;" src="<?= base_url('imagens/garfo4.png'); ?>">
					<img class="jantar" id="garfo5" style="display: contents;" src="<?= base_url('imagens/garfo5.png'); ?>">
				</div>
			</div>
			<div class="col-4">
				<h2>Soluções: </h2>
				<ul>
					<li><button class="btn">Espera Ocupada</button></li>
					<li><button class="btn">Semáforos</button></li>
					<li><button class="btn">Monitores</button></li>
					<li><button class="btn">Produtor e Consumidor</button></li>
				</ul>
				<div class="div-quest">Resposta:<input min="0" max="9" id="quest" class="form-control shadow-none" type="tel" name="unidades-quest" maxlength="1" required></div>
				</div>
				</div>

		</div>
	</div>
	<script src="<?= base_url('js/jantar.js'); ?>"></script>
</body>
</html>