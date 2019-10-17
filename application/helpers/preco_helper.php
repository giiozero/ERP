<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Usado no Layout Principal - Ativa o MENU atual
if ( ! function_exists('verificaPreco'))
{
	
	function verificaPreco ($custo, $lucro, $porcentagem) {
		//Conta pra validar se o preço tá certo.
		$valor1 = round($custo+$lucro,2);		
		$valor2 = (($custo * $porcentagem)/100)+$custo;
		$valor2 = round($valor2-0.001,2); //Problema com arredondamento 
		
		//echo '<br/><br/>Custo:'.$custo.'<br/>Lucro: '.$lucro.'</br>Porcentagem'.$porcentagem.'<br/>Preço1: '.$valor1.'<br/>Preço2: '.$valor2;
		
		if ($valor1==$valor2) {
			return $valor1;
		} else {
			return "Erro";
		}
	}
}