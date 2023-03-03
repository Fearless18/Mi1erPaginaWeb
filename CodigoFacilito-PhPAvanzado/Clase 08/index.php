<?php 


// Conversion a números enteros

// contextos
$nro1= 10;
$nro2= 3;

// Operador <=> (php7)
echo '// Operador <=> (php7)<br><br>';
echo 'var_dump($nro1<=>$nro2); // si $nro1 > $nro2, devuelve 1 <br>';
var_dump($nro1<=>$nro2); // si $nro1 > $nro2, devuelve 1

echo '<br> var_dump($nro2<=>$nro1); // si $nro2 < $nro1, devuelve -1<br>';
var_dump($nro2<=>$nro1); // si $nro2 < $nro1, devuelve -1

echo '<br>var_dump($nro1<=>$nro1); // si $nro1 = $nro2, devuelve 0<br>';
var_dump($nro1<=>$nro1); // si $nro1 = $nro2, devuelve 0
echo "<br><br><br>";


// Operador ?: 
echo '// Operador ternario de comparación  " ?: " ("elvis")<br><br>';


echo  "var1 ? var2 : var3 <br> Si el valor es TRUE, le da el valor var2. Si es falso, se le da el valor definido luego de los dos puntos <br>;";
// Operador var1 ? var 2 : var3
echo "\$nro3=4<br>\$nro3 = \$nro3 ? '6' : '8';<br>var_dump(\$nro3);<br>";
$nro3= 4;
$nro3 = $nro3 ? '6' : '8';
var_dump($nro3);
echo "<br><br>";

echo  "var1 ? : var3 <br> Si el valor es TRUE, se mantiene. Si es falso, se le da el valor definido luego de los dos puntos <br>;";
// Operador var1 ?: var 3
echo "\$nro4=null<br>var_dump(\$nro4 ?: '5') <br>";
$nro4=null;
var_dump($nro4 ?: '5'); //
echo "<br><br><br>";


// Operador ?? 
echo '// Operador ternario fusión null " ?? " (php7)<br><br>';
echo  "var1 ?? var2 <br> Si el valor es FALSE, le da el valor var2.<br>";
// Operador var1 ?? var2 
echo "\$nro5;<br>\$nro5 = \$nro5 ?? 'No hay datos';<br>var_dump(\$nro5);<br>";
$nro5; 
$nro5 = $nro5 ?? 'No hay datos';
var_dump($nro5);

 ?>