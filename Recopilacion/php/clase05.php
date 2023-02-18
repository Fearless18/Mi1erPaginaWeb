<meta charset='utf-8'>
<?php

// VECTORES - ARRAYS
$numeros[0]=1;
$nombres[0]='Juan';
$numeros[1]=2;
$nombres[1]='Jose';
$numeros[2]=3;
$nombres[2]='Jimena';
$numeros[3]=4;
$nombres[3]='Jordana';
$numeros[4]=5;
$nombres[4]='Jorge';

// Los vectores en PHP son dinámicos, es decir, de longitud variables.
// La primer posición de un vector tiene índice 0.
// La última posición tiene índice N-1.

echo $numeros[2].' ',$nombres[2].'<br/>';

$numeros[5]=6;
$nombres[5]="Javier";

// Recorrido del vector
for ($a=0;$a<6;$a++){
	echo $numeros[$a].' '. $nombres[$a],'<br/>';
}

// funcion Count, informa la longitud del vector
echo '<br/> Longitud del vector $numeros= '. count($numeros),'<br/>';
// recorrido usando Count
for ($a=0;$a<count($numeros);$a++){
	echo $numeros[$a].' '. $nombres[$a],'<br/>';
}
echo '----------<br/>';
// recorrido inverso
for ($a=count($numeros)-1;$a>=0;$a--){
	echo $numeros[$a].' '. $nombres[$a],'<br/>';
}

// definición abreviada
$vec=array (12,13,10,18,8,7,15,3,10,14,15,10,5,16,10);
echo '<br/> Longitud vec= '. count($vec),'<br/>';
for ($a=0;$a<count($vec);$a++){
	echo $vec[$a].' ';}
echo '<br/>';

// totalizar y promediar un vector
$suma=0;
for ($a=0;$a<count($vec);$a++) {
	$suma+=$vec[$a];}
echo 'Total = '.$suma.'<br/>';
echo 'Promedio = '.($suma/count($vec)),'<br/>';

// Calcular máximos y mínimos.
$max=$vec[0];
$min=$vec[0];
for ($a=0;$a<count($vec);$a++){
	if ($max<$vec[$a]) {
		$max=$vec[$a]; 
	}
	if ($min>$vec[$a]) {
		$min=$vec[$a];
	}
}
echo 'Valor máximo = '. $max. '<br/>';
echo 'Valor mínimo = '. $min. '<br/>';

// contar cantidad de números pares e impares.
// contar cuantas veces aparece el numero 10.
$contPar=0;
$contImpar=0;
$cont10=0;
for ($a=0; $a<count($vec);$a++){
	if ($vec[$a]%2==0){
		$contPar++;
	} else {
		$contImpar++;
	}
	if ($vec[$a]==10){
		$cont10++;
	}
}
echo 'Cantidad de pares = '.$contPar.'<br/>';
echo 'Cantidad de impares = '.$contImpar.'<br/>';
echo 'Cantidad de números 10 = '.$cont10.'<br/>';

// Copiar Vectores
$pares=array (2,4,6,8,10);
$impares[0]=0;
for ($a=0;$a<count($pares);$a++){
	$impares[$a]=$pares[$a]-1;
}
for ($a=0;$a<count($pares);$a++){
	echo $impares[$a].' '.$pares[$a].'<br/>';
}

// Copiar Vectores sin recorrer
$pares2[0]=0;
$pares2=&$pares;

for ($a=0;$a<count($pares);$a++){
	echo $pares[$a].' '.$pares[$a].'<br/>';
}


// Recorro $vec
for ($a=0;$a<count($vec);$a++){
	echo $vec[$a].' ';
}
echo '<br/>';
// ordeno vec 			// Sort
sort($vec);
// recorro $vec
for ($a=0;$a<count($vec);$a++){
	echo $vec[$a].' ';
}
echo '<br/>';
// ordenamiento inverso // Rsort
rsort($vec);
for ($a=0;$a<count($vec);$a++){
	echo $vec[$a].' ';
}
echo '<br/>';
// Vectores asociativos
/* Este tipo de vectores no es comun en otro tipo de lenguaje,
pero son indispensables en PHP.
Nos permiten acceder a una posición del vector por medio de un
índice de tipo string.

Ejemplo */
echo '<br/>Vectores asociativos<br/>';
$registro['dni']='12345621';
$registro['nombre']='Martinez Pablo';
$registro['direccion']='Colon 342';
// en el vector asociativo los indice no son enteros, son string.

// impresion de un vector asociativo.
echo $registro['dni']. ' '.$registro['nombre']. ' '.$registro['direccion'].'<br/>';

// Los formularios devuelven datos en vector asociativo, comunmente
// llamado $_REQUEST (en mayúsculas)

// Otra forma de definir un vector asociativo.
$registro=array ('dni'=>'12345621', 'nombre'=>'Martinez Pablo', 'direccion'=>'Colon 342');
echo $registro['dni']. ' '.$registro['nombre']. ' '.$registro['direccion'].'<br/>';

?>

<form>
	Nombre:
	<input type="text" name="nombre"/><br/>
	Apellido:
	<input type="text" name="apellido"/><br/>
	Edad:
	<input type="text" name="edad"/><br/>
	<input type="submit" value="Aceptar"/>
</form>

<?PHP

if(count($_REQUEST)!=0){ // para que no salga error en la 1er ejecución donde no
	// existe el vector $_REQUEST, consulto que si es diferente a cero (o sea, q ya se
	// creó) se ejecute el código siguiente.
	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$edad=$_REQUEST['edad'];
	echo $nombre.' '.$apellido.' '.$edad.'<br/>';
}
?>