<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script>
		var f1_comendo = document.getElementById('f1-comer');
		var f1_pensando = document.getElementById('f1-pensar');
		var f2_comendo = document.getElementById('f2-comer');
		var f2_pensando = document.getElementById('f2-pensar');

		$(document).on('click', function(){
			
			console.clear();
			if($('#f1-comendo').hasClass('active')){
				console.log("Filosofo 1 Comendo");
			}
			if($('#f1-pensando').hasClass('active')){
				console.log("Filosofo 1 Pensando");
			}
			if($('#f2-comendo').hasClass('active')){
				console.log("Filosofo 2 Comendo");
			}
			if($('#f2-pensando').hasClass('active')){
				console.log("Filosofo 2 Pensando");
			}
		});

	</script>
	<style>
		.active {
			filter: brightness(60%);
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<h5>Filosofo1</h5>
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label id="f1-comendo" class="btn btn-primary shadow-none" for="f1-comer">
					<input type="radio" name="Filosofo1" id="f1-comer">Comer
				</label>
				<label id="f1-pensando" class="btn btn-success shadow-none" for="f1-pensar">
					<input type="radio" name="Filosofo1" id="f1-pensar">Pensar
				</label>
			</div>
		</div>
		<div class="row">
			<h5>Filosofo2</h5>
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label id="f2-comendo" class="btn btn-primary shadow-none" for="f2-comer">
					<input type="radio" name="Filosofo2" id="f1-comer">Comer
				</label>
				<label id="f2-pensando" class="btn btn-success shadow-none" for="f2-pensar">
					<input type="radio" name="Filosofo2" id="f2-pensar">Pensar
				</label>
			</div>
		</div>
	</div>
</body>
</html>