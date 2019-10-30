	var centesimas = 0;
	var segundos = 30;
	var minutos = 0;
	var count = 0;

	function inicio () {
	    control = setInterval(cronometro,10);
	}

	function cronometro () {

		Segundos.innerHTML = segundos < 10 ? ":0"+segundos : ":"+segundos;
		Minutos.innerHTML = minutos < 10 ? "0"+minutos : minutos;
		if(centesimas == 0 && segundos > 0){
			centesimas = 99;
			segundos--;
		}

		if(centesimas > 0){
			centesimas--;
		}

		if(segundos == 0 && minutos > 0){
			segundos = 59;
			minutos--;
		}else if(segundos == 0 && minutos == 0){
			segundos = 0;
		}

		if(minutos == 0 && segundos == 0){
			count++;
			if(count == 1){
				resultado = "?filo1_comeu="+filo1_comeu+"&filo1_pensou="+filo1_pensou+"&filo2_comeu="+filo2_comeu+
				"&filo2_pensou="+filo2_pensou+"&filo3_comeu="+filo3_comeu+"&filo3_pensou="+filo3_pensou+
				"&filo4_comeu="+filo4_comeu+"&filo4_pensou="+filo4_pensou+"&filo5_comeu="+filo5_comeu+
				"&filo5_pensou="+filo5_pensou+"&acertou="+0;
				window.location.href = "https://desafiofilosofos.herokuapp.com/Jantar/resultado/1"+resultado;
			}
		}

	}