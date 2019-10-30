<!DOCTYPE html>
<html>
<head>
	<title>Desafio 3</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/desafio01.css'); ?>">
	<link rel="icon" href="<?= base_url('imagens/Deadlock-Jantar.png'); ?>">
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
					<h2>Desafio 3</h2>
					<p style="margin-top: 8%; line-height: 1.2;">Faça os Filósofos 1, 3 e 4 comerem exatamente 6 vezes; e pensarem pelo menos 5 vezes.</p>
					<p style="line-height: 1.2;">O Filósofo 2 comer exatamente 4 vezes, e o filósofo 5 comer exatamente 3 vezes; o filósofo 2 pensar pelo menos 3 vezes, e o filósofo 5 pensar pelo menos 2 vezes.</p>
					<p style="font-weight: 100; text-align: justify; text-indent: 0px; line-height: 1.2;  font-size: 20px;">Extra: Um filósofo não poderá ficar sem comer por 3 rodadas, caso ele não tenha completado seu ciclo.</p>
					<p style="font-weight: bold; text-align: left; text-indent: 0px;">Tempo: 1 min e 45 seg</p>
					<p style="font-weight: bold; text-align: left; text-indent: 0px;">Erros: 4</p>
					<div class="text-center"><a href="<?= base_url('Jantar/jogo/3'); ?>"><button class="btn btn-sucess">Iniciar</button></a></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>