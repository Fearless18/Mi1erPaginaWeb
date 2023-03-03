<?php 

// Funciones referencia

echo "// Funciones referencia (agregamos & delante de la variable)<br>
Modifica fuera de la función, el valor que ingresamos<br><br>";
echo 'function restar(&$numero){ <br> ';

echo '&nbsp; $numero=100-$numero; }<br> ';
echo '$valor=20;<br> ';
echo 'restar($valor); <br>echo $valor;<br><br> ';

function restar(&$numero){
	$numero=100-$numero;
}

$valor=20;
restar($valor);
echo $valor;

echo "<br><br> ";
echo "// Funciones recursivas <br>
Se llaman a si mismas<br><br>";

echo 'function lista($numero){ <br> ';
echo '&nbsp; if ($numero<=10) {<br> ';
echo '&nbsp; &nbsp; echo $numero;<br>';
echo '&nbsp; &nbsp; lista($numero+1);<br> &nbsp; } <br> } <br>';
echo 'lista(1);<br><br> ';

function lista($numero){
	if ($numero<=10) {
		echo $numero."<br>";
		lista($numero+1);
	}
}

lista(1);

 ?>