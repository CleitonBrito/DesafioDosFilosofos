<!DOCTYPE html>
<html>
<head>
	<title>Projeto SO</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/carrossel.css'); ?>">
	<link rel="icon" href="<?= base_url('imagens/Deadlock-Jantar.png'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div id="fundo" class="container">
				<div data-interval="8000" id="carousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel" data-slide-to="1"></li>
				    <li data-target="#carousel" data-slide-to="2"></li>
				    <li data-target="#carousel" data-slide-to="3"></li>
				    <li data-target="#carousel" data-slide-to="4"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div id="primeiro" class="carousel-item active">
				      <img class="d-block w-100" src="<?= base_url('imagens/teste.png'); ?>" alt="Primeiro Slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?= base_url('imagens/teste1.gif'); ?>" alt="Segundo Slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?= base_url('imagens/teste2.gif'); ?>" alt="Terceiro Slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?= base_url('imagens/teste3.gif'); ?>" alt="Quarto Slide">
				    </div>
				    <div id="ultimo" class="carousel-item">
				      <img class="d-block w-100" src="<?= base_url('imagens/teste4.png'); ?>" alt="Quinto Slide">
				    </div>
				  </div>
				<div class="botoes">
						<div style="display: none;" id="volta-slide" class="col-5 botoes"><a href="#carousel" data-slide="prev"><button class="botao-anterior btn btn-sucess">Anterior</button></a></div>
						<div style="display: flex;" id="volta-pg" class="col-5 botoes"><a href="<?= base_url(); ?>"><button class="botao-anterior btn btn-sucess">Anterior</button></a></div>
						<div style="display: flex;" id="passa-slide" class="col-5 botoes"><a href="#carousel" data-slide="next"><button class="botao-proximo btn btn-sucess">Próximo</button></a></div>
						<div style="display: none;" id="passa-pg" class="col-5 botoes"><a href="<?= base_url('/Jantar/Desafio/1'); ?>"><button class="botao-proximo btn btn-sucess">Próximo</button></a></div>
					</div>
				</div>
	</div>
	<script src="<?= base_url('js/carrossel.js'); ?>"></script>
</body>
</html>