<?php 

require_once "persona.php";
require_once "vendedor.php";

// Herencia

echo "// Herencia<br><br>";
echo 'class Vendedor extends Persona {<br>
	&nbsp; private $CodInterno;<br>
	&nbsp; private $caja;<br> <br>
&nbsp; public function edadFuturo(){ <br>
		&nbsp; &nbsp; $tiempo=parent::fecha(1994)+25; <br>
		&nbsp; &nbsp; echo "Tu edad será: ".$tiempo;<br>
	} }<br><br>';

echo '$vendedor = new Vendedor(); <br>
// utilizo la función heredada (persona->obtenerEdad()) <br>
 $vendedor->obtenerEdad(1982); <br>
// utilizo función propia, que usa fecha() heredada. <br>
$vendedor->edadFuturo();<br><br>';

$vendedor = new Vendedor();
$vendedor->obtenerEdad(1982);
$vendedor->edadFuturo();



 ?>