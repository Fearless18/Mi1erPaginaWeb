<?php 

require_once "persona.php";
use clases\persona\persona;
// Class

echo "// Serialize() Unserialize()<br><br>";
echo 'require_once "persona.php"; <br>
use clases\persona\persona;<br> <br>';

$array= array('Nombre' => 'Alejandro', 'Edad' => 33, 'Color' => 'Azul');

echo '$array= array("Nombre" => "Alejandro", "Edad" => 33, "Color" => "Azul");<br>
$serializado=serialize($array);<br>';
$serializado=serialize($array);
var_dump($serializado); echo "<br><br>";

echo '$array2=unserialize($serializado);<br>';
$array2=unserialize($serializado);
var_dump($array2); echo "<br><br>";

$persona1 = new Persona();
$persona1->nombre="Alejandro";
$objeto=serialize($persona1);
$listablanca=["clases\persona\persona"];
$desobjeto=unserialize($objeto,['allowed_classes'=>$listablanca]);

echo '$persona1 = new Persona(); <br>
$persona1->nombre="Alejandro"; <br>
$objeto=serialize($persona1); <br>';
var_dump($objeto); echo "<br><br>";

echo '// al usar unserialize() se puede aclarar si se aceptan clases (true (default, no recomendado)), no se aceptan (false), o solo aceptar las que indiquemos (recomendado) - Solo Php7<br>
$listablanca=["clases\persona\persona"]; <br>
$desserial=unserialize($objeto,["allowed_classes"=>$listablanca]); <br>';
var_dump($desobjeto);
echo '<br><br><br><br>';

 ?>