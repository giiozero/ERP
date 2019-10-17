$(document).ready(function() {
	$('#txtCep').trigger('click');
});
$('#txtCep').on('change click', function() {
		// Se o campo CEP não estiver vazio
		if($.trim($("#txtCep").val()) != ""){
			/*
				Para conectar no serviço e executar o json, precisamos usar a função
				getScript do jQuery, o getScript e o dataType:"jsonp" conseguem fazer o cross-domain, os outros
				dataTypes não possibilitam esta interação entre domínios diferentes
				Estou chamando a url do serviço passando o parâmetro "formato=javascript" e o CEP digitado no formulário
				http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#txtCep").val()
			*/
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$(this).val(), function(){
					//Se o resultado for igual a 1
					if(resultadoCEP["resultado"]){
						// troca o valor dos elementos
						$("#txtLogradouro").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
						$("#txtBairro").val(unescape(resultadoCEP["bairro"]));
						$("#txtCidade").val(unescape(resultadoCEP["cidade"]));
						$("#txtEstado").val(unescape(resultadoCEP["uf"]));
					}else{
						alert("Endereço não encontrado");
					}
				}
			);
		}
	});
// ## Valida Telefone digitado
jQuery(".txtTelefone")
	.mask("(99) 9999-9999?9")
	.focusout(function (event) {  
		var target, phone, element;  
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
		phone = target.value.replace(/\D/g, '');
		element = $(target);  
		element.unmask();
		if(phone.length > 10) {  
			element.mask("(99) 99999-999?9");  
		} else {
			element.mask("(99) 9999-9999?9");  
		}
	var filtro = /^(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4,5}))$/;
	if (filtro.test($(this).val())) {
		// Filtro para números iguais
		var filtro2 = /(\d)\1{7}/g;
		// Retirar o que não for número da String
		var N = $(this).val().replace(/[-_)( ]/g,'');
		// Tirar os 3 primeiros e último número da String.
		N = N.substr(3,9);
		if (!filtro2.test(N)) {
			$(this).get(0).setCustomValidity('');
		} else {
			$(this).get(0).setCustomValidity('Por favor, digite um número de telefone válido');
		}
	} else {
		$(this).get(0).setCustomValidity('O número de telefone digitado é inválido.');
	}
});
//## Valida e-mail digitado
$('#txtEmail').change(function(e) {
	var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	// Campo não pode estar vazio
	if ($.trim($(this).val()).length == 0) { 
		$(this).get(0).setCustomValidity("Nenhum e-mail digitado - Este é um campo obrigatório");
		return false;
	}
	// Valida conforme REGEX acima.
	if (filter.test($(this).val())) { 
		$(this).get(0).setCustomValidity('');
	}
	else {
		$(this)[0].setCustomValidity('Endereço de e-mail incorreto - Utilizar no mínimo "exemplo@exemplo.com"');
		e.preventDefault();
	}
});