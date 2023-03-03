<?php 

//  

echo "// Class<br><br>";

echo '
class Persona { <br>
	private $nombre;<br>
	private $apellido;<br>
	public static $año=2018;<br><br>

	public function __construct(){<br>
		$this->nombre="";<br>
		$this->apellido="";<br>
	}<br>
	public function __set($propiedad, $valor){<br>
		$this->$propiedad=$valor;<br>
	}<br>
	public function __get($propiedad){<br>
		return $this->propiedad;<br>
	}<br>
	public function obtenerEdad($f){<br>
		echo "Tu edad es: ". $this->fecha($f). "<br>";<br>
	}<br>
	protected function fecha($f){<br>
		return self::$año-$f;<br>
	}<br>
	// protected -> pueden acceder a él esta clase y sus hijos/herencia.<br>
<br>
	public function __destruct(){<br>
		echo "Fin.";<br>
	}<br>
<br>
} <br>
';

 ?>