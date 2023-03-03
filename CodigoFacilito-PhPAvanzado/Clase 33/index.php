<?php 

// solo PHP7
Echo "// Solo PHP7<br>
// random_bytes() y random_int(), para generar números randoms. Se usa para tokens.<br>";
echo "bin2hex(random_bytes(4)) = ".bin2hex(random_bytes(4)). "<BR>";
echo "PHP_INT_MIN = ".PHP_INT_MIN. "<BR>";
echo "PHP_INT_MAX = ".PHP_INT_MAX. "<BR>";
echo "random_int(PHP_INT_MIN,PHP_INT_MAX) = ".random_int(PHP_INT_MIN,PHP_INT_MAX). "<BR>";
echo "random_int(22,454) = ".random_int(22,454). "<BR>";

Echo "<br>// Intdiv devuelve el cociente entero entre dividendo y divisor<br>";
echo "intdiv(15, 3) = ".intdiv(15, 3)."<br>";
echo "intdiv(15, 4) = ".intdiv(15, 4);
 ?>


