<?php 

// Foreach

echo "// Foreach <br><br>";
echo '$array=array(1,2,3,4,5); <br> ';
echo 'foreach ($array as $value) {<br> ';
echo '&nbsp; echo $value. " "; }<br><br> ';

$array=array(1,2,3,4,5);
echo "array original ";
foreach ($array as $value) {
	echo $value. " ";
}

echo "<br><br> // Para modificar el valor de un array, agregamos '&' delante de la variable <br><br>";

echo 'foreach ($array as &$value) {<br> ';
echo '&nbsp; $value = $value * 2; }<br><br> ';
echo 'foreach ($array as $key => $value ) {<br> ';
echo '&nbsp; echo "posición $key, valor $value <br>"; }<br><br> ';
foreach ($array as &$value) {
	$value = $value * 2;
}

echo "array modificado <br>";
foreach ($array as $key => $value ) {
	echo "posición $key, valor $value <br>";

}

echo "<br><br><br>";

 ?>