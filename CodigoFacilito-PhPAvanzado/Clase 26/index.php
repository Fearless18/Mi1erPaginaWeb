<?php 

require_once "persona.php";

// Class

echo "// Crear instancias<br><br>";
echo 'require_once "persona.php"; <br>
// Agrego el archivo persona.php. Si no lo encuentra, produce error fatal.<br> <br>';

echo '$persona1 = new Persona(); <br> ';
echo '$persona1->nombre="Alejandro";<br> ';
echo '$persona2 = new Persona(); <br> ';
echo '$persona2->nombre="Tiburcio";<br> ';
echo '$persona2->apellido="Sol";<br><br> ';
echo 'Echo "Hola ". $persona1->nombre. "!." <br> $persona1->obtenerEdad(1982); <br>
echo "Año actual: ". $persona1::$año; <br>
echo "Otra persona: ". $persona2->nombre. " ". $persona2->apellido;<br><br>';

$persona1 = new Persona();
$persona1->nombre="Alejandro";
$persona2 = new Persona();
$persona2->nombre="Tiburcio";
$persona2->apellido="Sol";

Echo "Hola ". $persona1->nombre. "!.<br>";
$persona1->obtenerEdad(1982);
echo "Año actual: ". $persona1::$año ."<br>";
echo "Otra persona: ". $persona2->nombre. " ". $persona2->apellido;


echo '<br><br><br><br>';

 ?>