<?php
class Consultas {
	private $columna;
	private $tabla;
	private $conexion;

	public function __construct() {
		$this->conexion="hola!";
	}

	public function cantidadvotos($col,$tab) {
		$this->columna=$col;
		$this->tabla=$tab;
		$votos=$this->conexion.$col.$tab;
		
		return $votos;
	}
}

$hola = new Consultas();
echo $hola->cantidadvotos(" como"," estás?");

?>