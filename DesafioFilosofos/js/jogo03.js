
	var valor = document.getElementById('quest');
	var mensagem = document.getElementById('mensagem');
	var titulo_mensagem = document.getElementById('titulo-mensagem');

	var qtd_comeu = document.getElementById('qtd-comeu');
	var qtd_pensou = document.getElementById('qtd-pensou');
	var vidas = document.getElementById('vidas');
	var vidas_jogo = 4;

	var filo1_comeu = 0, filo2_comeu = 0, filo3_comeu =0,filo4_comeu=0, filo5_comeu=0,
		filo1_pensou =0, filo2_pensou =0, filo3_pensou=0, filo4_pensou=0, filo5_pensou =0;

	var ocioso_f1 = 0, ocioso_f2 = 0, ocioso_f3 = 0, ocioso_f4 = 0, ocioso_f4 = 0, ocioso_f5 = 0;

	var filo1 = document.getElementById('filo1');
	var filo2 = document.getElementById('filo2');
	var filo3 = document.getElementById('filo3');
	var filo4 = document.getElementById('filo4');
	var filo5 = document.getElementById('filo5');

	var sombra_0 = document.getElementById('sombra-0');
	var sombra_1 = document.getElementById('sombra-1');
	var sombra_2 = document.getElementById('sombra-2');
	var sombra_3 = document.getElementById('sombra-3');
	var sombra_4 = document.getElementById('sombra-4');
	var sombra_5 = document.getElementById('sombra-5');

	var filo1_pensando = document.getElementById('filo1_pensando');
	var filo2_pensando = document.getElementById('filo2_pensando');
	var filo3_pensando = document.getElementById('filo3_pensando');
	var filo4_pensando = document.getElementById('filo4_pensando');
	var filo5_pensando = document.getElementById('filo5_pensando');

	var filo1_comendo = document.getElementById('filo1_comendo');
	var filo2_comendo = document.getElementById('filo2_comendo');
	var filo3_comendo = document.getElementById('filo3_comendo');
	var filo4_comendo = document.getElementById('filo4_comendo');
	var filo5_comendo = document.getElementById('filo5_comendo');

	var filo1_garfoEsquerdo = document.getElementById('filo1_garfoEsquerdo');
	var filo2_garfoEsquerdo = document.getElementById('filo2_garfoEsquerdo');
	var filo3_garfoEsquerdo = document.getElementById('filo3_garfoEsquerdo');
	var filo4_garfoEsquerdo = document.getElementById('filo4_garfoEsquerdo');
	var filo5_garfoEsquerdo = document.getElementById('filo5_garfoEsquerdo');

	var filo1_garfoDireito = document.getElementById('filo1_garfoDireito');
	var filo2_garfoDireito = document.getElementById('filo2_garfoDireito');
	var filo3_garfoDireito = document.getElementById('filo3_garfoDireito');
	var filo4_garfoDireito = document.getElementById('filo4_garfoDireito');
	var filo5_garfoDireito = document.getElementById('filo5_garfoDireito');

	var garfo1 = document.getElementById('garfo1');
	var garfo2 = document.getElementById('garfo2');
	var garfo3 = document.getElementById('garfo3');
	var garfo4 = document.getElementById('garfo4');
	var garfo5 = document.getElementById('garfo5');

	var bt_f1_comendo = document.getElementById('f1-comendo');
	var bt_f2_comendo = document.getElementById('f2-comendo');
	var bt_f3_comendo = document.getElementById('f3-comendo');
	var bt_f4_comendo = document.getElementById('f4-comendo');
	var bt_f5_comendo = document.getElementById('f4-comendo');

	var bt_f1_pensando = document.getElementById('f1-pensar');
	var bt_f2_pensando = document.getElementById('f2-pensar');
	var bt_f3_pensando = document.getElementById('f3-pensar');
	var bt_f4_pensando = document.getElementById('f4-pensar');
	var bt_f5_pensando = document.getElementById('f5-pensar');

	function Garfo(){
		var id_garfo = 0;
		var filosofo = null;
		this.getId = getId;
		this.getFilosofo = getFilosofo;
		this.setFilosofo = setFilosofo;

		function getId(){
			return id_garfo;
		}

		function getFilosofo(){
			return filosofo;
		}

		function setFilosofo(filo){
			filosofo = filo;
		}
	}

	function tempo_largar(tempo, filo, garfo){
		erro(filo, garfo);
		setTimeout(function(){largar_garfo(filo,garfo)}, tempo);
	}

	function largar_garfo(filo,garfo){

		if(filo == 1){
			$('label#f1-comendo').removeClass('active');
			filo1_garfoDireito.style.display = "contents";
			filo1_garfoEsquerdo.style.display = "contents";
			if(garfo1_obj.getFilosofo() != 5){
				garfo1_obj.setFilosofo(null);
				garfo1.style.display = "block";
			}
			if(garfo2_obj.getFilosofo() != 2){
				garfo2_obj.setFilosofo(null);
				garfo2.style.display = "block";
			}

		}else if(filo == 2){
			$('label#f2-comendo').removeClass('active');
			filo2_garfoDireito.style.display = "contents";
			filo2_garfoEsquerdo.style.display = "contents";
			if(garfo2_obj.getFilosofo() != 1){
				garfo2_obj.setFilosofo(null);
				garfo2.style.display = "block";
			}
			if(garfo3_obj.getFilosofo() != 3){
				garfo3_obj.setFilosofo(null);
				garfo3.style.display = "block";
			}
			
		}else if(filo == 3){
			$('label#f3-comendo').removeClass('active');
			filo3_garfoDireito.style.display = "contents";
			filo3_garfoEsquerdo.style.display = "contents";
			if(garfo3_obj.getFilosofo() != 2){
				garfo3_obj.setFilosofo(null);
				garfo3.style.display = "block";
			}
			if(garfo4_obj.getFilosofo() != 4){
				garfo4_obj.setFilosofo(null);
				garfo4.style.display = "block";
			}

		}else if(filo == 4){
			$('label#f4-comendo').removeClass('active');
			filo4_garfoDireito.style.display = "contents";
			filo4_garfoEsquerdo.style.display = "contents";
			if(garfo4_obj.getFilosofo() != 3){
				garfo4_obj.setFilosofo(null);
				garfo4.style.display = "block";
			}
			if(garfo5_obj.getFilosofo() != 5){
				garfo5_obj.setFilosofo(null);
				garfo5.style.display = "block";
			}

		}else if(filo == 5){
			$('label#f5-comendo').removeClass('active');
			filo5_garfoDireito.style.display = "contents";
			filo5_garfoEsquerdo.style.display = "contents";
			if(garfo5_obj.getFilosofo() != 4){
				garfo5_obj.setFilosofo(null);
				garfo5.style.display = "block";
			}
			if(garfo1_obj.getFilosofo() != 1){
				garfo1_obj.setFilosofo(null);
				garfo1.style.display = "block";
			}
		}

	}

	function erro(filo, garfo){
		$('.alert').removeClass('alert-dark');
		$('.alert').addClass('alert-danger');
		titulo_mensagem.innerHTML = "Erro:";
		mensagem.innerHTML = "O filósofo "+filo+" não pôde pegar o garfo "+garfo+".";
	}

	function perdeu_vidas(){
		if(vidas != undefined){
			vidas_jogo--;
			vidas.innerHTML = vidas_jogo;
			if(vidas_jogo < 1){
				resultado = "?filo1_comeu="+filo1_comeu+"&filo1_pensou="+filo1_pensou+"&filo2_comeu="+filo2_comeu+
				"&filo2_pensou="+filo2_pensou+"&filo3_comeu="+filo3_comeu+"&filo3_pensou="+filo3_pensou+
				"&filo4_comeu="+filo4_comeu+"&filo4_pensou="+filo4_pensou+"&filo5_comeu="+filo5_comeu+
				"&filo5_pensou="+filo5_pensou+"&dead="+1;
				window.location.href = "http://localhost/DesafioFilosofos/Jantar/resultado/3"+resultado;
			}
		}
	}

	function tempo_ocioso(){

		var count = 0;
		var resultado = "?filo1_comeu="+filo1_comeu+"&filo1_pensou="+filo1_pensou+"&filo2_comeu="+filo2_comeu+
				"&filo2_pensou="+filo2_pensou+"&filo3_comeu="+filo3_comeu+"&filo3_pensou="+filo3_pensou+
				"&filo4_comeu="+filo4_comeu+"&filo4_pensou="+filo4_pensou+"&filo5_comeu="+filo5_comeu+
				"&filo5_pensou="+filo5_pensou+"&";

		if(filo1_comeu-filo2_comeu >= 3 && filo2_comeu < 4){ resultado+="filo2_morreu=1&"; count++;}
		if(filo1_comeu-filo3_comeu >= 3 && filo3_comeu < 6){ resultado+="filo3_morreu=1&"; count++;}
		if(filo1_comeu-filo4_comeu >= 3 && filo4_comeu < 6){ resultado+="filo4_morreu=1&"; count++;}
		if(filo1_comeu-filo5_comeu >= 3 && filo5_comeu < 3){ resultado+="filo5_morreu=1&"; count++;}

		if(filo2_comeu-filo1_comeu >= 3 && filo1_comeu < 6){ resultado+="filo1_morreu=1&"; count++;}
		if(filo2_comeu-filo3_comeu >= 3 && filo3_comeu < 6){ resultado+="filo3_morreu=1&"; count++;}
		if(filo2_comeu-filo4_comeu >= 3 && filo4_comeu < 6){ resultado+="filo4_morreu=1&"; count++;}
		if(filo2_comeu-filo5_comeu >= 3 && filo5_comeu < 3){ resultado+="filo5_morreu=1&"; count++;}

		if(filo3_comeu-filo1_comeu >= 3 && filo1_comeu < 6){ resultado+="filo1_morreu=1&"; count++;}
		if(filo3_comeu-filo2_comeu >= 3 && filo2_comeu < 4){ resultado+="filo2_morreu=1&"; count++;}
		if(filo3_comeu-filo4_comeu >= 3 && filo4_comeu < 6){ resultado+="filo4_morreu=1&"; count++;}
		if(filo3_comeu-filo5_comeu >= 3 && filo5_comeu < 3){ resultado+="filo5_morreu=1&"; count++;}

		if(filo4_comeu-filo1_comeu >= 3 && filo1_comeu < 6){ resultado+="filo1_morreu=1&"; count++;}
		if(filo4_comeu-filo2_comeu >= 3 && filo2_comeu < 4){ resultado+="filo2_morreu=1&"; count++;}
		if(filo4_comeu-filo3_comeu >= 3 && filo3_comeu < 6){ resultado+="filo3_morreu=1&"; count++;}
		if(filo4_comeu-filo5_comeu >= 3 && filo5_comeu < 3){ resultado+="filo5_morreu=1&"; count++;}

		if(filo5_comeu-filo1_comeu >= 3 && filo1_comeu < 6){ resultado+="filo1_morreu=1&"; count++;}
		if(filo5_comeu-filo2_comeu >= 3 && filo2_comeu < 4){ resultado+="filo2_morreu=1&"; count++;}
		if(filo5_comeu-filo3_comeu >= 3 && filo3_comeu < 6){ resultado+="filo3_morreu=1&"; count++;}
		if(filo5_comeu-filo4_comeu >= 3 && filo4_comeu < 6){ resultado+="filo4_morreu=1&"; count++;}

		
		if(count > 0){
			window.location.href = "http://localhost/DesafioFilosofos/Jantar/resultado/3"+resultado+"limite=1";
		}

	}

	function acao(filo, acao){
		$('.alert').removeClass('alert-danger');
		$('.alert').addClass('alert-dark');
		titulo_mensagem.innerHTML = "Ação:";
		if(acao == 1)
			mensagem.innerHTML = "O filósofo "+filo+" está comendo.";
		else if(acao == 2)
			mensagem.innerHTML = "O filósofo "+filo+" está pensando.";
	}

	function contabiliza(filo, acao){

		sombra_0.style.display = "contents";
		sombra_1.style.display = "contents";
		sombra_2.style.display = "contents";
		sombra_3.style.display = "contents";
		sombra_4.style.display = "contents";
		sombra_5.style.display = "contents";

		if(filo == 1){
			sombra_1.style.display = "block";
		}
		else if(filo == 2){
			sombra_2.style.display = "block";
		}
		else if(filo == 3){
			sombra_3.style.display = "block";
		}
		else if(filo == 4){
			sombra_4.style.display = "block";
		}
		else if(filo == 5){
			sombra_5.style.display = "block";
		}

		if(acao == 1){
			if(filo == 1){
				$('#qtd-comeu').innerHTML = filo1_comeu++;
				qtd_comeu.innerHTML = "Comeu: "+filo1_comeu+" de 6";
				qtd_pensou.innerHTML = "Pensou: "+filo1_pensou+" de 5";
			}else if(filo == 2){
				$('#qtd-comeu').innerHTML = filo2_comeu++;
				qtd_comeu.innerHTML = "Comeu: "+filo2_comeu+" de 4";
				qtd_pensou.innerHTML = "Pensou: "+filo2_pensou+" de 3";
			}
			else if(filo == 3){
				$('#qtd-comeu').innerHTML = filo3_comeu++;
				qtd_comeu.innerHTML = "Comeu: "+filo3_comeu+" de 6";
				qtd_pensou.innerHTML = "Pensou: "+filo3_pensou+" de 5";
			}
			else if(filo == 4){
				$('#qtd-comeu').innerHTML = filo4_comeu++;
				qtd_comeu.innerHTML = "Comeu: "+filo4_comeu+" de 6";
				qtd_pensou.innerHTML = "Pensou: "+filo4_pensou+" de 5";
			}
			else if(filo == 5){
				$('#qtd-comeu').innerHTML = filo5_comeu++;
				qtd_comeu.innerHTML = "Comeu: "+filo5_comeu+" de 3";
				qtd_pensou.innerHTML = "Pensou: "+filo5_pensou+" de 2";
			}
		}else if(acao == 2){
			if(filo == 1){
				$('#qtd-pensou').innerHTML = filo1_pensou++;
				qtd_comeu.innerHTML = "Comeu: "+filo1_comeu+" de 6";
				qtd_pensou.innerHTML = "Pensou: "+filo1_pensou+" de 5";
			}else if(filo == 2){
				$('#qtd-pensou').innerHTML = filo2_pensou++;
				qtd_comeu.innerHTML = "Comeu: "+filo2_comeu+" de 4";
				qtd_pensou.innerHTML = "Pensou: "+filo2_pensou+" de 3";
			}
			else if(filo == 3){
				$('#qtd-pensou').innerHTML = filo3_pensou++;
				qtd_comeu.innerHTML = "Comeu: "+filo3_comeu+" de 6";
				qtd_pensou.innerHTML = "Pensou: "+filo3_pensou+" de 5";
			}
			else if(filo == 4){
				$('#qtd-pensou').innerHTML = filo4_pensou++;
				qtd_comeu.innerHTML = "Comeu: "+filo4_comeu+" de 6";
				qtd_pensou.innerHTML = "Pensou: "+filo4_pensou+" de 5";
			}
			else if(filo == 5){
				$('#qtd-pensou').innerHTML = filo5_pensou++;
				qtd_comeu.innerHTML = "Comeu: "+filo5_comeu+" de 3";
				qtd_pensou.innerHTML = "Pensou: "+filo5_pensou+" de 2";
			}
		}

	}

	garfo1_obj = new Garfo();
	garfo2_obj = new Garfo();
	garfo3_obj = new Garfo();
	garfo4_obj = new Garfo();
	garfo5_obj = new Garfo();

	$('#f1-comendo').on('click', function(){
		if(garfo1_obj.getFilosofo() == null){
			garfo1_obj.setFilosofo(1);
		}
		if(garfo2_obj.getFilosofo() == null){
			garfo2_obj.setFilosofo(1);
		}
	});	

	$('#f1-pensando').on('click', function(){
		if(garfo1_obj.getFilosofo() == 1)
			garfo1_obj.setFilosofo(null);
		if(garfo2_obj.getFilosofo() == 1)
			garfo2_obj.setFilosofo(null);
	});

	$('#f2-comendo').on('click', function(){
		if(garfo2_obj.getFilosofo() == null){
			garfo2_obj.setFilosofo(2);
		}
		if(garfo3_obj.getFilosofo() == null){
			garfo3_obj.setFilosofo(2);
		}
	});

	$('#f2-pensando').on('click', function(){
		if(garfo2_obj.getFilosofo() == 2)
			garfo2_obj.setFilosofo(null);
		if(garfo3_obj.getFilosofo() == 2)
			garfo3_obj.setFilosofo(null);
	});


	$('#f3-comendo').on('click', function(){
		if(garfo3_obj.getFilosofo() == null){
			garfo3_obj.setFilosofo(3);
		}
		if(garfo4_obj.getFilosofo() == null){
			garfo4_obj.setFilosofo(3);
		}
	});

	$('#f3-pensando').on('click', function(){
		if(garfo3_obj.getFilosofo() == 3)
			garfo3_obj.setFilosofo(null);
		if(garfo4_obj.getFilosofo() == 3)
		garfo4_obj.setFilosofo(null);
	});

	$('#f4-comendo').on('click', function(){
		if(garfo4_obj.getFilosofo() == null){
			garfo4_obj.setFilosofo(4);
		}
		if(garfo5_obj.getFilosofo() == null){
			garfo5_obj.setFilosofo(4);
		}
	});

	$('#f4-pensando').on('click', function(){
		if(garfo4_obj.getFilosofo() == 4)
			garfo4_obj.setFilosofo(null);
		if(garfo5_obj.getFilosofo() == 4)
		garfo5_obj.setFilosofo(null);
	});

	$('#f5-comendo').on('click', function(){
		if(garfo5_obj.getFilosofo() == null){
			garfo5_obj.setFilosofo(5);
		}
		if(garfo1_obj.getFilosofo() == null){
			garfo1_obj.setFilosofo(5);
		}
	});

	$('#f5-pensando').on('click', function(){
		if(garfo5_obj.getFilosofo() == 5)
			garfo5_obj.setFilosofo(null);
		if(garfo1_obj.getFilosofo() == 5)
			garfo1_obj.setFilosofo(null);
	});

	$('label#f1-comendo').on('click', function(){
		acao(1,1);
		filo1_pensando.style.display = "contents";
		if(garfo1_obj.getFilosofo() != 1 || garfo2_obj.getFilosofo() != 1){
			perdeu_vidas();
		}

		if(garfo1_obj.getFilosofo() == 1){
			garfo1.style.display = "contents";
			filo1_garfoEsquerdo.style.display = "block";
		}else{
			tempo_largar(500,1,2);
			$('label#f1-pensando').removeClass('desabilita-click');
		}
		if(garfo2_obj.getFilosofo() == 1){
			garfo2.style.display = "contents";
			filo1_garfoDireito.style.display = "block";
		}else{
			tempo_largar(500,1,1);
			$('label#f1-pensando').removeClass('desabilita-click');
		}

		if(garfo1_obj.getFilosofo() == 1 && garfo2_obj.getFilosofo() == 1){
			contabiliza(1,1);
			$('label#f1-comendo').addClass('desabilita-click');
			$('label#f1-pensando').removeClass('desabilita-click');
		}

	});

	$('label#f1-pensando').on('click', function(){
		acao(1,2);
		contabiliza(1,2);
		$('label#f1-comendo').removeClass('desabilita-click');
		$('label#f1-pensando').addClass('desabilita-click');
		filo1_pensando.style.display = "block";
		filo1_garfoEsquerdo.style.display = "contents";
		filo1_garfoDireito.style.display = "contents";
		if(garfo1_obj.getFilosofo() == null)
			garfo1.style.display = "block";
		if(garfo2_obj.getFilosofo() == null)
			garfo2.style.display = "block";	
	});

	$('label#f2-comendo').on('click', function(){
		acao(2,1);
		filo2_pensando.style.display = "contents";
		if(garfo2_obj.getFilosofo() != 2 || garfo3_obj.getFilosofo() != 2){
			perdeu_vidas();
		}
		if(garfo2_obj.getFilosofo() == 2){
			garfo2.style.display = "contents";
			filo2_garfoEsquerdo.style.display = "block";
		}else{
			tempo_largar(500,2,3);
			$('label#f2-pensando').removeClass('desabilita-click');
		}
		if(garfo3_obj.getFilosofo() == 2){
			garfo3.style.display = "contents";
			filo2_garfoDireito.style.display = "block";
		}else{
			tempo_largar(500,2,2);
			$('label#f2-pensando').removeClass('desabilita-click');
		}

		if(garfo2_obj.getFilosofo() == 2 && garfo3_obj.getFilosofo() == 2){
			contabiliza(2,1);
			$('label#f2-comendo').addClass('desabilita-click');
			$('label#f2-pensando').removeClass('desabilita-click');
		}

	});

	$('label#f2-pensando').on('click', function(){
		acao(2,2);
		contabiliza(2,2);
		$('label#f2-comendo').removeClass('desabilita-click');
		$('label#f2-pensando').addClass('desabilita-click');
		filo2_pensando.style.display = "block";
		filo2_garfoEsquerdo.style.display = "contents";
		filo2_garfoDireito.style.display = "contents";
		if(garfo2_obj.getFilosofo() == null)
			garfo2.style.display = "block";
		if(garfo3_obj.getFilosofo() == null)
			garfo3.style.display = "block";
	});

	$('label#f3-comendo').on('click', function(){
		acao(3,1);
		filo3_pensando.style.display = "contents";
		if(garfo3_obj.getFilosofo() != 3 || garfo4_obj.getFilosofo() != 3){
			perdeu_vidas();
		}
		if(garfo3_obj.getFilosofo() == 3){
			garfo3.style.display = "contents";
			filo3_garfoEsquerdo.style.display = "block";
		}else{
			tempo_largar(500,3,4);
			$('label#f3-pensando').removeClass('desabilita-click');
		}
		if(garfo4_obj.getFilosofo() == 3){
			garfo4.style.display = "contents";
			filo3_garfoDireito.style.display = "block";
		}else{
			tempo_largar(500,3,3);
			$('label#f3-pensando').removeClass('desabilita-click');
		}

		if(garfo3_obj.getFilosofo() == 3 && garfo4_obj.getFilosofo() == 3){
			contabiliza(3,1);
			$('label#f3-comendo').addClass('desabilita-click');
			$('label#f3-pensando').removeClass('desabilita-click');
		}

	});

	$('label#f3-pensando').on('click', function(){
		acao(3,2);
		contabiliza(3,2);
		$('label#f3-comendo').removeClass('desabilita-click');
		$('label#f3-pensando').addClass('desabilita-click');
		filo3_pensando.style.display = "block";
		filo3_garfoEsquerdo.style.display = "contents";
		filo3_garfoDireito.style.display = "contents";
		if(garfo3_obj.getFilosofo() == null)
			garfo3.style.display = "block";
		if(garfo4_obj.getFilosofo() == null)
			garfo4.style.display = "block";
	});

	$('label#f4-comendo').on('click', function(){
		acao(4,1);
		filo4_pensando.style.display = "contents";
		if(garfo4_obj.getFilosofo() != 4 || garfo5_obj.getFilosofo() != 4){
			perdeu_vidas();
		}
		if(garfo4_obj.getFilosofo() == 4){
			garfo4.style.display = "contents";
			filo4_garfoEsquerdo.style.display = "block";
		}else{
			tempo_largar(500,4,5);
			$('label#f4-pensando').removeClass('desabilita-click');
		}
		if(garfo5_obj.getFilosofo() == 4){
			garfo5.style.display = "contents";
			filo4_garfoDireito.style.display = "block";
		}else{
			tempo_largar(500,4,4);
			$('label#f4-pensando').removeClass('desabilita-click');
		}

		if(garfo4_obj.getFilosofo() == 4 && garfo5_obj.getFilosofo() == 4){
			contabiliza(4,1);
			$('label#f4-comendo').addClass('desabilita-click');
			$('label#f4-pensando').removeClass('desabilita-click');
		}

	});

	$('label#f4-pensando').on('click', function(){
		acao(4,2);
		contabiliza(4,2);
		$('label#f4-comendo').removeClass('desabilita-click');
		$('label#f4-pensando').addClass('desabilita-click');
		filo4_pensando.style.display = "block";
		filo4_garfoEsquerdo.style.display = "contents";
		filo4_garfoDireito.style.display = "contents";
		if(garfo4_obj.getFilosofo() == null)
			garfo4.style.display = "block";
		if(garfo5_obj.getFilosofo() == null)
			garfo5.style.display = "block";
	});

	$('label#f5-comendo').on('click', function(){
		acao(5,1);
		filo5_pensando.style.display = "contents";
		if(garfo5_obj.getFilosofo() != 5 || garfo1_obj.getFilosofo() != 5){
			perdeu_vidas();
		}
		if(garfo5_obj.getFilosofo() == 5){
			garfo5.style.display = "contents";
			filo5_garfoEsquerdo.style.display = "block";
		}else{
			tempo_largar(500,5,1);
			$('label#f5-pensando').removeClass('desabilita-click');
		}
		if(garfo1_obj.getFilosofo() == 5){
			garfo1.style.display = "contents";
			filo5_garfoDireito.style.display = "block";
		}else{
			tempo_largar(500,5,5);
			$('label#f5-pensando').removeClass('desabilita-click');
		}

		if(garfo5_obj.getFilosofo() == 5 && garfo1_obj.getFilosofo() == 5){
			contabiliza(5,1);
			$('label#f5-comendo').addClass('desabilita-click');
			$('label#f5-pensando').removeClass('desabilita-click');
		}

	});

	$('label#f5-pensando').on('click', function(){
		acao(5,2);
		contabiliza(5,2);
		$('label#f5-comendo').removeClass('desabilita-click');
		$('label#f5-pensando').addClass('desabilita-click');
		filo5_pensando.style.display = "block";
		filo5_garfoEsquerdo.style.display = "contents";
		filo5_garfoDireito.style.display = "contents";
		if(garfo5_obj.getFilosofo() == null)
			garfo5.style.display = "block";
		if(garfo1_obj.getFilosofo() == null)
			garfo1.style.display = "block";
	});