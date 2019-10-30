var count_cronometro = 0;
	
	$('.botoes-filosofos').on('click', function(){
		count_cronometro++;
		if(count_cronometro == 1)
		inicio();
		tempo_ocioso();
		if(filo1_comeu == 6 && filo2_comeu == 4 && filo3_comeu == 6 && filo4_comeu == 6 && filo5_comeu == 3 &&
			filo1_pensou >= 5 && filo2_pensou >= 3 && filo3_pensou >= 5 && filo4_pensou >= 5 && filo5_pensou >= 2){
				resultado = "?filo1_comeu="+filo1_comeu+"&filo1_pensou="+filo1_pensou+"&filo2_comeu="+filo2_comeu+
				"&filo2_pensou="+filo2_pensou+"&filo3_comeu="+filo3_comeu+"&filo3_pensou="+filo3_pensou+
				"&filo4_comeu="+filo4_comeu+"&filo4_pensou="+filo4_pensou+"&filo5_comeu="+filo5_comeu+
				"&filo5_pensou="+filo5_pensou+"&acertou="+1;
				window.location.href = "https://desafiofilosofos.herokuapp.com/Jantar/resultado/3"+resultado;
		}else if(filo1_comeu > 6 || filo2_comeu > 4 || filo3_comeu > 6 || filo4_comeu > 6 || filo5_comeu > 3){
				resultado = "?filo1_comeu="+filo1_comeu+"&filo1_pensou="+filo1_pensou+"&filo2_comeu="+filo2_comeu+
				"&filo2_pensou="+filo2_pensou+"&filo3_comeu="+filo3_comeu+"&filo3_pensou="+filo3_pensou+
				"&filo4_comeu="+filo4_comeu+"&filo4_pensou="+filo4_pensou+"&filo5_comeu="+filo5_comeu+
				"&filo5_pensou="+filo5_pensou+"&";
				if(filo1_comeu > 6){ resultado += "filo1_excedeu=1&"; }
				if(filo2_comeu > 4){ resultado += "filo2_excedeu=1&"; }
				if(filo3_comeu > 6){ resultado += "filo3_excedeu=1&"; }
				if(filo4_comeu > 6){ resultado += "filo4_excedeu=1&"; }
				if(filo5_comeu > 3){ resultado += "filo5_excedeu=1&"; }

				window.location.href = "https://desafiofilosofos.herokuapp.com/Jantar/resultado/3"+resultado+"excedeu=1";	
		}

	});