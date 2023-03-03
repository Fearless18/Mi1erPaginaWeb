<?php 

// Return

echo "// Return<br><br>";
echo 'function restar($numero){ <br> ';
echo '&nbsp; $numero=100-$numero; <br> &nbsp return $numero;<br>}<br> ';
echo '$valor=20;<br> ';
echo 'echo restar($valor); <br><br> ';

function restar($numero){
	$numero=100-$numero;
	return $numero;
}
$valor=20;
echo restar($valor)."<br> <br> <br> ";


// Devolver un array - List()
function cuenta($a,$b,$c){
	$total= $a*$b*$c;
	return array($a,$b,$c,$total);
}

echo "// Devolver un array - List()<br><br>";
echo 'function cuenta($a,$b,$c){ <br> ';
echo '&nbsp; $total= $a*$b*$c; <br> &nbsp return array($a,$b,$c,$total);<br>}<br> ';
echo 'list($n,$e,$f,$t)=cuenta(2,3,2);<br> ';
echo 'echo "Hola! Si multiplicás $n por $e, y luego por $f, da como resultado = $t"; <br><br> ';

list($n,$e,$f,$t)=cuenta(2,3,2);
echo "Hola! Si multiplicás $n por $e, y luego por $f, da como resultado = $t<br>";
 ?>