<?php 

// Operadores lógicos

// Operador Y &&
echo "// Operador Y && <br><br>";
echo '$bool = (5==5) && (4==4); // ambos verdaderos <br> ';
$bool = (5==5) && (4==4); // ambos verdaderos
var_dump($bool);

echo "<br><br><br>";

// Operador O ||
echo "// Operador O || <br>";
echo '$bool = (3==5) || (4==4); // alguno verdadero <br>';
$bool = (3==5) || (4==4); // alguno verdadero
var_dump($bool); 
echo "<br>";
echo '$bool = (3==3) || (4==4); // alguno verdadero <br>';
$bool = (3==3) || (4==4); // alguno verdadero
var_dump($bool);

echo "<br><br><br>";

// Operador O ||
echo "// Operador xor <br> OJO con los (), si no se ponen, evalua solo la primer comparación, luego tiene prioridad el '=' y luego el 'xor' <br>";
echo '$bool = ((5==5) xor (4==4)); // uno solo tiene que ser verdadero <br>';
$bool = ((5==5) xor (4==4)); // alguno verdadero
var_dump($bool);
echo "<br>";
echo '$bool = ((5==6) xor (4==4)); // uno solo tiene que ser verdadero <br>';
$bool = ((5==6) xor (4==4)); // alguno verdadero
var_dump($bool);


echo "<br><br><br>";

// Operador O ||
echo "// Operador O || <br>";
echo '$bool = (3==5) || (4==4); // alguno verdadero <br>';
$bool = (3==5) || (4==4); // alguno verdadero
var_dump($bool);

 ?>