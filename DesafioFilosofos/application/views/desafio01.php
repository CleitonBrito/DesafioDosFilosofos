<!DOCTYPE html>
<html>
<head>
	<title>Desafio 1</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/desafio01.css'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>
<body>
	<div id="fundo" class="container">
		<div class="row">
			<div class="jantar col-7">
				<div class="imags">
					<img src="<?= base_url('imagens/OJantar-Filosofos.png'); ?>">
				</div>
			</div>
			<div class="col-5">
				<div class="introducao">
					<h2>Desafio 1</h2>
					<p style="margin-top: 8%">Em uma dada situação faça com que cada filósofo coma e pense pelo menos uma vez.</p>
					<p style="font-weight: bold; text-align: left; text-indent: 0px;">Tempo: 30 seg</p>
					<div class="text-center"><a href="<?= base_url('Jantar/jogo/1'); ?>"><button class="btn btn-sucess">Iniciar</button></a></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>