<?php 

// Arrays

echo "// Arrays, indexado <br><br>";
echo '$miArray=array(1,2,"hola",4,5); <br> ';

echo 'for ($i=0; $i < count($miArray); $i++):<br> ';
echo '&nbsp; echo $miArray[$i];<br>endfor;<br><br> ';

$miArray=array(1,2,"hola",4,5);
for ($i=0; $i < count($miArray); $i++):
	echo $miArray[$i]."<br>";
endfor;
echo "<br><br>";


echo "// Arrays, asociativo <br><br>";
echo "\$miArray = array('Nombre'=>'Ale', 'Color'=>'Azul', 'Comida'=>'Ravioles'); <br>";

echo 'foreach ($miArray as $key => $value) {<br> ';
echo '&nbsp; echo "Clave $key -> valor $value"; <Br> }<br><br> ';

$miArray=array('Nombre'=>'Ale','Color'=>'Azul','Comida'=>'Ravioles');
foreach ($miArray as $key => $value) {
	echo "Clave $key -> valor $value <Br>";

	
}
 ?>