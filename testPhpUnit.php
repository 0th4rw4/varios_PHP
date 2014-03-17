<?php
include_once(__DIR__.'/srcPhpUnit/autoloader.php');

class CondicionalTest extends PHPUnit_Framework_TestCase {
    

public function testHacerLlave() {
	$logica = new CifradoSimple();
	$llave = $logica->hacerLlave(5);
	$this->assertEquals('fghijklmnopqrstuvwxyzabcde', $llave);
}

public function testHacerLlaveConFrase() {
	$logica = new CifradoSimple();
	$llave = $logica->HacerLlaveConFrase('hola');
	$this->assertEquals('holabcdefgijkmnpqrstuvwxyz', $llave);
}


public function testEncriptarFrase() {
	$logica = new CifradoSimple();
	$llave = $logica->hacerLlaveConFrase('hola');
/*
	'holabcdefgijkmnpqrstuvwxyz'
	'abcdefghijklmnopqrstuvwxyz'
*/
	$this->assertEquals(
		'holabcdefgijkmnpqrstuvwxyz', 
		$llave);
	$mensaje = 'hola';
	$encriptado = $logica->encriptar($mensaje,$llave);
	$this->assertEquals('enjh', $encriptado);
}


public function testDescifrar() {
	$logica = new CifradoSimple();
	$llave = $logica->hacerLlaveConFrase('hola');
	$this->assertEquals(
		'holabcdefgijkmnpqrstuvwxyz', 
		$llave);
	$mensaje = 'enjh';
	$descifrado = $logica->descifrar($mensaje,$llave);
	$this->assertEquals('hola', $descifrado);

	}	

}

