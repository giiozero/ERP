<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Usado no Layout Principal - Ativa o MENU atual
if ( ! function_exists('cmenu'))
{
    function cmenu($menu, $menu2)
    {
        if ($menu == $menu2) {
			return 'active';
		} else {
			return 'none';
		}
    }   
}
if ( ! function_exists('issetor'))
{
	function issetor(&$var, $default = false) 
	{
		return isset($var) ? $var : $default;
	}
}
	
if ( ! function_exists('cxml'))
{
    function cxml($_FILE)
    {
		$a = array();
		$arquivo = simplexml_load_file($_FILE);
		foreach($arquivo->NFe as $key => $xml)
		{
			//######### NF ##########
			$a['NUMERO']=$xml->infNFe->ide->nNF; //NUMERO NFE
			$a['NAT_OP'] = $xml->infNFe->ide->natOp; // NATUREZA DE OPERAÇÃO
			$a['CHAVE'] = $arquivo->protNFe->infProt->chNFe; // CHAVE
			$D1 = $xml->infNFe->ide->dEmi;$D2=substr($xml->infNFe->ide->dhEmi,0,10); // DATA EMISSÃO P1
			$a['DATA_EMIT'] = ($D1==null)?$D1:$D2; // DATA EMISSÃO P2
			$a['VALOR_TOT'] = $xml->infNFe->total ->ICMSTot->vNF;//VALOR NF-E
			
			//######### EMITENTE ##########
			$a['RZ_EMITENTE'] = $xml->infNFe->emit->xNome; //RAZÃO EMITENTE
			$a['CNPJ_EMIT'] = $xml->infNFe->emit->CNPJ; // CNPJ EMITENTE
			$a['IE_EMIT'] = $xml->infNFe->emit->IE; // CNPJ EMITENTE
			
			//######### ENDEREÇO ##########
			$a['CEP_EMIT'] = $xml->infNFe->emit->enderEmit->CEP; // CNPJ DESTINATÁRIO
		
		
			//######### DESTINATÁRIO ##########
			$a['RZ_DEST'] = $xml->infNFe->dest->xNome; // RAZÃO DESTINATÁRIO
			$a['CNPJ_DEST'] = $xml->infNFe->dest->CNPJ; // CNPJ DESTINATÁRIO
		
			/* exibindo os dados coletados
				echo '<td><b>'.substr($RZ_EMITENTE,0,30).'</b></td>';
				echo '<td> '.$CNPJ_EMIT.' </td> ';
				echo '<td><b>'.$NUMERO.'</b></td>';
				echo '<td><b>'.$DATA_EMIT.'</b></td>';
				//echo '<td> '.$VALOR_TOT.'</td>';
				//echo '<td>'.$CHAVE.'</td>';
				//echo '<td> '.substr($NAT_OP,0,10).' </td>';
				//echo '<td> '.substr($RZ_DESTIN,0,16).' </td>';
				echo '<td> '.$CNPJ_DEST.' </td>';
			echo '</tr>';
			echo (!empty($arquivo->evento->infEvento->detEvento->descEvento))?'<span style="color:#F71;">'.$arquivo->evento->infEvento->detEvento->descEvento.' - <b>ESSE ARQUIVO NÃO É UMA NOTA FISCAL</b></span>':'.';*/
			return $a;
		}// For - Contagem de itens
	}// Function
}// if