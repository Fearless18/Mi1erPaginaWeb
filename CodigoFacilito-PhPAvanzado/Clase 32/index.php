<?php 

require_once "clases/persona.php";
require_once "clases/vendedor.php";
require_once "controladores/vendedor.php";

// Namespace

echo "// Funciones anónimas<br><br>";
echo '
// declaro que cuando llamo a Persona me refiero a la que está dentro de tal carpeta/namespace <br>
use clases\persona\persona;<br><br>

new class(1982) extends Persona{<br>
	&nbsp; private $num;<br>
	<br>
	&nbsp;public function __construct($num){<br>
	&nbsp;&nbsp;	echo "Naciste en el año ".$num; <br>
	&nbsp;&nbsp;	parent::obtenerEdad(1994);<br>
	&nbsp;}<br>

}
<br><br>';

use clases\persona\persona;

new class(1982) extends Persona{
	private $num;
	
	public function __construct($num){
		echo "Naciste en el año ".$num. "<br>";
		parent::obtenerEdad(1994);
	}

}



 ?>