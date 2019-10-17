$(document).ready(function (){
	/* 
		Função: Calcular Preços quando alterados
			- Autor: Giovanni Silva
			- Versao: 0
			- Iniciada: 01/05/2019
			- Concluída em: 15/05/2019
		Objetivo: 
			- Atualizar os valores e descontos automaticamente quando qualquer valor for alterado
	*/
	var verificador=0;
	var global_porcLucro=0;
	var global_valorLucro=0;
	
	function calcPorc(valorLucro, custo) {
		return ((valorLucro/custo)*100);	
	}
	function calcValor(custo, porcLucro){
		return ((custo*porcLucro)/100);
	}

	function putTotal(total) {
		$('#txtPrecoFinal').html("R$ "+total.toFixed(2).replace(".", ","));
	}

	$('#txtPLucro').keypress(function() {
		global_porcLucro=0;
	});
	$('#txtLucro').keypress(function() {
		global_valorLucro=0;
	});
	$('#txtPLucro').blur(function () {
		var total = 0;
		var porcLucro = parseFloat($(this).val().replace(",", "."));
		var custo =  parseFloat($('#txtPrecoCusto').val().replace(",", "."));
		if (porcLucro > 0) {
			if (custo > 0) {
				verificador=1;
				if (global_porcLucro == 0) {
					global_porcLucro = porcLucro;
					global_valorLucro = calcValor(custo,porcLucro);
				} else { 
					global_valorLucro = calcValor(custo, global_porcLucro);
				}
				$('#txtLucro').val(global_valorLucro.toFixed(2).replace(".", ","));
				total = custo+global_valorLucro;
				putTotal(total);
			} else { alert('Insira o valor de custo para que o cálculo seja feito.');$('#txtPrecoCusto').focus();} 
		}
	});
	$('#txtLucro').blur(function () {
		var total = 0;
		var valorLucro = parseFloat($(this).val().replace(",", "."));
		var custo =  parseFloat($('#txtPrecoCusto').val().replace(",", "."));
		if (valorLucro > 0) {
			if (custo > 0) {
				verificador=1;
				if (global_valorLucro == 0) {
					global_valorLucro = valorLucro;
					global_porcLucro = calcPorc(valorLucro, custo);
				} else { 
					global_porcLucro = calcPorc(global_valorLucro ,custo);
				}
				$('#txtPLucro').val(global_porcLucro.toFixed(2));
				total = custo + global_valorLucro;
				putTotal(total);
			} else { alert('Insira o valor de custo para que o cálculo seja feito.');$('#txtPrecoCusto').focus();} 
		}
	});
	$('#txtPrecoCusto').blur(function () {
		var PrecoCusto = parseFloat($(this).val());
		if (verificador == 1 && PrecoCusto > 0) {
			$("#txtPLucro").select();
			$("#txtPrecoCusto").select();
			verificador=0;
		}
	});
	$('#txtPrecoCusto').change(function() { 
		verificador=1;
	});
});