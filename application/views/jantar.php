<!DOCTYPE html>
<html>
<head>
	<title>Projeto SO</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/ojantar.css'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>
<body>
	<div id="fundo" class="container">
		<div class="row">
			<div class="jantar col-7">
				<div class="imags">
					<img src="<?= base_url('imagens/OJantar-Filosofos.png'); ?>">

				<a href="<?= base_url('Jantar/desafio/1'); ?>"><button class="btn btn-sucess">Iniciar</button></a>
				</div>
			</div>
			<div class="col-5">
				<div class="introducao">
					<h2>Introdução</h2>
					<p style="margin-top: 8%">O jantar dos Filósofos foi proposto por Dijkstra em 1965 como um problema de sincronização. A partir de então todos os algoritmos propostos como soluções de sincronização acabaram sendo relacionados ou testados contra o problema do Jantar dos Filósofos.
					</p>
					<p>Nesse sentido, cada filósofo alterna entre duas tarefas: comer ou pensar.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>