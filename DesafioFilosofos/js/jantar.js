function focus(){
	valor.focus();
}

function limpa_campo(){
	var campo_quest = document.getElementById('quest');
	campo_quest.value = "";
}

function tempo_limpa(tempo){
	setTimeout(limpa_campo, tempo);
}

var valor = document.getElementById('quest');
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

var garfo1 = document.getElementById('garfo1');
var garfo2 = document.getElementById('garfo2');
var garfo3 = document.getElementById('garfo3');
var garfo4 = document.getElementById('garfo4');
var garfo5 = document.getElementById('garfo5');

function limpaTudo (){
	filo1_pensando.style.display = "contents";
	filo2_pensando.style.display = "contents";
	filo3_pensando.style.display = "contents";
	filo4_pensando.style.display = "contents";
	filo5_pensando.style.display = "contents";

	filo1_comendo.style.display = "contents";
	filo2_comendo.style.display = "contents";
	filo3_comendo.style.display = "contents";
	filo4_comendo.style.display = "contents";
	filo5_comendo.style.display = "contents";

	garfo1.style.display = "contents";
	garfo2.style.display = "contents";
	garfo3.style.display = "contents";
	garfo4.style.display = "contents";
	garfo5.style.display = "contents";
}

$(document).on('keyup', function(){
	tempo_limpa(500);
	limpaTudo();
	if(valor.value > 0 && valor.value < 6){
		console.log("Filósofo "+valor.value+" comendo...");
		if(valor.value == 1){
			filo1_comendo.style.display = "block";
			filo2_pensando.style.display = "block";
			filo3_pensando.style.display = "block";
			filo4_pensando.style.display = "block";
			filo5_pensando.style.display = "block";
			garfo3.style.display = "block";
			garfo4.style.display = "block";
			garfo5.style.display = "block";
		}else if(valor.value == 2){
			filo1_pensando.style.display = "block";
			filo2_comendo.style.display = "block";
			filo3_pensando.style.display = "block";
			filo4_pensando.style.display = "block";
			filo5_pensando.style.display = "block";
			garfo1.style.display = "block";
			garfo4.style.display = "block";
			garfo5.style.display = "block";
		}else if(valor.value == 3){
			filo1_pensando.style.display = "block";
			filo2_pensando.style.display = "block";
			filo3_comendo.style.display = "block";
			filo4_pensando.style.display = "block";
			filo5_pensando.style.display = "block";
			garfo1.style.display = "block";
			garfo2.style.display = "block";
			garfo5.style.display = "block";
		}else if(valor.value == 4){
			filo1_pensando.style.display = "block";
			filo2_pensando.style.display = "block";
			filo3_pensando.style.display = "block";
			filo4_comendo.style.display = "block";
			filo5_pensando.style.display = "block";
			garfo1.style.display = "block";
			garfo2.style.display = "block";
			garfo3.style.display = "block";
		}else if(valor.value == 5){
			filo1_pensando.style.display = "block";
			filo2_pensando.style.display = "block";
			filo3_pensando.style.display = "block";
			filo4_pensando.style.display = "block";
			filo5_comendo.style.display = "block";
			garfo2.style.display = "block";
			garfo3.style.display = "block";
			garfo4.style.display = "block";
		}
	}else{
			filo1_pensando.style.display = "block";
			filo2_pensando.style.display = "block";
			filo3_pensando.style.display = "block";
			filo4_pensando.style.display = "block";
			filo5_pensando.style.display = "block";
			garfo1.style.display = "block";
			garfo2.style.display = "block";
			garfo3.style.display = "block";
			garfo4.style.display = "block";
			garfo5.style.display = "block";
		}
});