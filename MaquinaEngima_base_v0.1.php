<?php


class Enigma{
	var $claveNumerica;
	private $clavePublica = array();
	private $semilla;
	private $msj_original;
	private $msj_codificado;
	
	function __construct($numero){
		$this->claveNumerica = intval($numero);
		$this->semilla = 'abcdefghijklmnñopqrstuvwxyz ';
			
		$total_letras = strlen($this->semilla) -1;
		$posicion_init = 0;
		$posicion_ref = 0;
		
		for($i=0; $i < $this->claveNumerica; $i++) {
			if($posicion_init < $total_letras ) $posicion_init++; 
			else $posicion_init=0;		}
		
		for($i=$posicion_init; $i < ($total_letras + $posicion_init);$i++) {

			if( $i <  $total_letras && $posicion_ref < $total_letras ) $posicion_ref=$i;
			else if( $posicion_ref < $total_letras ) $posicion_ref++;
			else $posicion_ref=0;
			
			$this->clavePublica[] = $this->semilla[$posicion_ref];
		}
		for($i=0; $i < count($this->clavePublica); $i++) { echo $this->clavePublica[$i]." \n"; }
	}
	
	function Codificar($mensaje){
		$this->msj_original = $mensaje;
		$c_Ori = strlen($this->msj_original);
		$c_Cla = count($this->clavePublica);
		
		for($i=0;$i < $c_Ori; $i++){ 
			for($j=0;$j < $c_Cla; $j++) {
				if( $this->msj_original[$i] == $this->clavePublica[$j] ) 
					$this->msj_codificado[] = $this->clavePublica[$j];
			}
		}
		echo "<br />  Codificado <br /> ";
		for($i=0; $i < $c_Ori ;$i++) echo $this->msj_codificado[$i];
		echo "<br /> Original <br /> ";
		for($i=0; $i < $c_Ori ;$i++) echo $this->msj_original[$i];
	}
	function Decodificar($mensaje){
		$this->msj_codificado = $mensaje;
	}
}//fin-class

$test = new Enigma(5);
$test->Codificar('jorge comia alfajores abajo de un arbol');
//
//GPG KeyID 80FEA850
//80FEA850 D3A8 D50C 17D8 91EC 0E0E AB16 67F7 E997 80FE A850
//sebastianarca@riseup.net
?>