<?php 

class Persona {
	private $nombre;
	private $apellido;
	public static $año=2018;

	public function __construct(){
		$this->nombre="";
		$this->apellido="";
	}
	public function __set($propiedad, $valor){
		$this->$propiedad=$valor;
	}
	public function __get($propiedad){
		return $this->$propiedad;
	}
	public function obtenerEdad($f){
		echo "Tu edad es: ". $this->fecha($f). "<br>";
	}
	protected function fecha($f){
		return self::$año-$f;
	}
	public function __destruct(){
		echo "Fin. ";
	}

} 

?>
