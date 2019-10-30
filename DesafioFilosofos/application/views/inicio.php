<!DOCTYPE html>
<html>
<head>
	<title>Projeto SO</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/inicio.css'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
</head>
<body>
	<div id="fundo" class="container">
		<h1>Comunicação entre Processos</h1>
		<h4>O Desafio dos Filósofos</h4>
		<div class="botao">
			<a href="<?= base_url('Inicio/Jantar/'); ?>"><button id="botaoComecar" class="btn">Start!</button></a>
		</div>
	</div>
	<script type="text/javascript">
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