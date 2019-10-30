	var count_cronometro = 0;

	$('.botoes-filosofos').on('click', function(){
		count_cronometro++;
		if(count_cronometro == 1)
		inicio();
		if(filo1_comeu >= 1 && filo2_comeu >= 1 && filo3_comeu >= 1 && filo4_comeu >= 1 && filo5_comeu >= 1 &&
			filo1_pensou >= 1 && filo2_pensou >= 1 && filo3_pensou >= 1 && filo4_pensou >= 1 && filo5_pensou >= 1){
				resultado = "?filo1_comeu="+filo1_comeu+"&filo1_pensou="+filo1_pensou+"&filo2_comeu="+filo2_comeu+
				"&filo2_pensou="+filo2_pensou+"&filo3_comeu="+filo3_comeu+"&filo3_pensou="+filo3_pensou+
				"&filo4_comeu="+filo4_comeu+"&filo4_pensou="+filo4_pensou+"&filo5_comeu="+filo5_comeu+
				"&filo5_pensou="+filo5_pensou+"&acertou="+1;
				window.location.href = "http://localhost/DesafioFilosofos/Jantar/resultado/1"+resultado;
		}

	});