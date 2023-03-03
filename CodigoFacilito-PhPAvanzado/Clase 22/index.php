<?php 

// Funciones anónimas

echo "// Funciones anónimas<br><br>";
echo '$saludo = function($msj){ <br> ';
echo '&nbsp; echo "Bienvenido, $msj.";<br>}<br> ';
echo '$saludo("Raúl"); <br><br> ';

$saludo = function($msj){
	echo "Bienvenido, $msj.";
};

$saludo("Raúl");

echo '<br><br><br><br>';


// Funciones variables


echo "// Funciones variables<br> Php buscará una función con el nombre'saludo'.<br><br>";
echo 'function saludo($a){ <br> ';
echo '&nbsp; echo "Un saludo para $a.";<br>}<br> ';
echo '$variable = "saludo";<br> ';
echo 'echo $variable("Roberto");<br><br> ';

function saludo($a){
	echo "Un saludo para $a.";
}

$variable = "saludo";
echo $variable("Roberto");


 ?>