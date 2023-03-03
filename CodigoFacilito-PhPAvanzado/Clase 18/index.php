<?php 

// Arrays Multidimensional

echo "// Arrays, Multidimensional <br><br>";
echo '$miArray=array( <br> &nbsp; array("Juan", "Pérez", 30),<br> &nbsp; array("María", "Pérez", 40),<br> &nbsp; array("Rodolfo", "García", 60) );<br>';

echo 'echo $miArray[2][2];<br> ';


$miArray=array(
	array("Juan", "Pérez", 30),
	array("María", "Pérez", 40),
	array("Rodolfo", "García", 60)
);

echo $miArray[2][2];

echo "<br><br>// Recorro array <br><br>";
echo 'for ($fila=0; $fila < count($miArray); $fila++):<br> ';
echo '&nbsp; for ($columna=0; $columna < count($miArray); $columna++):<br> ';
echo '&nbsp; &nbsp; echo $miArray[$fila][$columna]." ";<br> ';
echo '&nbsp; endfor; <br> endfor; <br>';

for ($fila=0; $fila < count($miArray); $fila++):
	for ($columna=0; $columna < count($miArray); $columna++):
		echo $miArray[$fila][$columna]." ";
	endfor;
	echo "<br>";
endfor;
echo "<br><br>";


// Arrays Multidimensional mixto
echo "// Arrays Multidimensional mixto<br><br>";

$barco=array('A'=>array("agua", "agua", "barco1"),
	'B'=>array("agua", "agua", "barco2"),
	'C'=>array("agua", "agua", "barco3"),
);

echo '$barco=array("A"=>array("agua", "agua", "barco1"),<br>
	&nbsp;"B"=>array("agua", "agua", "barco2"),<br>
	&nbsp;"C"=>array("agua", "agua", "barco3"),<br>
);<br>';

echo 'foreach ($barco as $key => $value) {<br>
	&nbsp;for ($i=0; $i < count($value); $i++) { <br>
	&nbsp;&nbsp;	echo "Fila $key, columna $i, valor: $value[$i].<br>";<br>
	&nbsp;}<br>
}<br>';

foreach ($barco as $key => $value) {
	for ($i=0; $i < count($value); $i++) { 
		echo "Fila $key, columna $i, valor: $value[$i].<br>";
	}
}
	

 ?>