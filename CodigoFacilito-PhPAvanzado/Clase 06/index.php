<?php 

// Conversion a números enteros

// contextos
$variable= "20.3 holamundo";
$variable2= "holamundo 20.3";
$suma = 20 + $variable;
$suma2 = 20 + $variable2;
//forzado
$entero=(int)$variable;
// funcion intval(), floatval()
$funcionInt=intval($variable);

echo "Variable 1 = ".$variable. " Tipo ". gettype($variable). "<br>";
echo "suma = ".$suma."<br>";
echo " Tipo ".gettype($suma)."<br>";
echo "suma2 = ".$suma2;
echo " Tipo ".gettype($suma2)."<br>";
echo "Variable 1 a entero = ".$entero. " Tipo ". gettype($entero)."<br>";
echo "Variable 1 = ".$funcionInt. " (funcionInt)<br><br>";

// funcion Explode()

$cadena = "1,3, 5.4,333";
$miarray = explode(",", $cadena, 4); // "4" límite
echo '// funcion Explode(), convierte a array una string, separando por el caracter indicado<br>';
echo '$cadena = "1,3, 5.4,333"<br>';
echo '$miarray = explode(",", $cadena, 4);<br>';
echo 'echo $miarray[2] = ';
echo $miarray[2]."<br><br>";


// funcion Implode()

$cadena = array("rojo", "verde", "azul");
$miarray = implode(" - ", $cadena);
echo '// funcion Implode(), convierte un array a string, separando por el caracter indicado<br>';
echo '$cadena = array("rojo", "verde", "azul");<br>';
echo '$miarray = implode(" - ", $cadena);<br>';
echo 'echo $miarray = ';
echo $miarray;
 ?>