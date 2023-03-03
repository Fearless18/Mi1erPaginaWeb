<?php 
namespace controladores\vendedor;

require_once "clases/persona.php";
use clases\persona\persona;

class Vendedor extends Persona {
	private $CodInterno;
	private $caja;

	public function __construct(){
		$this->CodInterno=0;
		$this->caja="";
	}

	public function edadFuturo(){
		$tiempo=parent::fecha(1994)+25;
		echo "Tu edad será: ".$tiempo."<br>";
	}

	public function prueba(){
		echo "Controladores/Vendedor <br>";
	}


}


 ?>