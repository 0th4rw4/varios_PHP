<?php
//sebastianarca.com.ar
//sebastianarca@riseup.net
class CifradoSimple {
	function hacerLlave($key) {
		$semilla = 'abcdefghijklmnopqrstuvwxyz';
		$totalLetras = strlen($semilla);
		
		for ($i=0; $i<$key; $i++){
			$letra = $semilla[$i];
			$semilla[$i] = ' ';
			$pos = $totalLetras + $i;
			
			$semilla[$pos] = $letra;
		}
		$mostr =  trim($semilla);
		echo $mostr;
		return $mostr;
	}
	
	function HacerLlaveConFrase($string){
		$semilla = "abcdefghijklmnopqrstuvwxyz";
		$totalSting = strlen($string);
	
		for( $j=0 ; $j < $totalSting ; $j++ ){
			$letraKey = $string[$j];
			
			for($i=0; $i< strlen($semilla) ;$i++ ){
				$letraSem = $semilla[$i];
				if($letraKey == $letraSem){
					$semilla[$i] = " ";
				} } }
		$semilla = implode( explode(' ',$semilla));
		$semilla = $string.$semilla;
	
		echo $semilla;
		return  $semilla; 
	}
	
	function encriptar($mensaje,$llave){
		$semilla = "abcdefghijklmnopqrstuvwxyz";
		$encriptado = array();
		
		for($i=0; $i< strlen($mensaje); $i++){
			$queLetraReemplazo = $mensaje[$i];
			
			for($k=0; $k < strlen($semilla); $k++){
				if($queLetraReemplazo == $semilla[$k]){
					$encriptado[] = $llave[$k];
				} } }
			
		$encriptado2 = implode($encriptado);
		echo $encriptado2;
		return $encriptado2;
	}
	
	function Descifrar($mensaje,$llave){
		$semilla = "abcdefghijklmnopqrstuvwxyz";
		$desencriptado = array();
		
		for($i=0; $i< strlen($mensaje); $i++){
			$queLetraReemplazo = $mensaje[$i];
			
			for($k=0; $k < strlen($llave); $k++){
				if($queLetraReemplazo == $llave[$k]){
					$desencriptado[] = $semilla[$k];
				} } }
		$desencriptado2 = implode($desencriptado);

		echo $desencriptado2;
		return $desencriptado2;
	}
}