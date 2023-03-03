<?php 
declare(strict_types=1);

// Declaraciones de tipo escalar

echo "// Declaraciones de tipo escalar<br><br>";
echo 'declare(strict_types=1); <br>
// declaramos que las variables van a ser de tipo estricto. <br>
Si mandamos por ejemplo, una string a una variable que definimos como entera, saldrá error.<br> <br>';

echo 'function suma(int $a, int $b) { <br> ';
echo '&nbsp; return $a+$b;<br>}<br> ';
echo 'echo suma("5",6); // esto daría error (por agregar strict_types=1<br> ';
echo 'echo suma(5,6); // esto no da error (ejecución actual)<br><br> ';

function suma(int $a, int $b) {
	return $a+$b;
}
echo suma(5,6);

echo '<br><br><br><br>';
echo '// acá aclaramos que el resultado es de tipo entero<br><br>';
echo 'function multi($a,$b): int { <br> ';
echo '&nbsp; return $a*$b;;<br>}<br> ';
echo 'echo multi(5,6); <br><br> ';

function multi($a,$b): int {
	return $a*$b;
}
echo multi(5,6)."<br>";
echo '// en vez de poner ": int" en la función, se podria poner: return (int) ($a*$b);';



echo '<br><br><br><br>';

 ?>