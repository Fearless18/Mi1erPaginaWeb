<?php 

require_once "clases/persona.php";
require_once "clases/vendedor.php";
require_once "controladores/vendedor.php";

// Namespace

echo "// Namespace<br><br>";
echo '// en clases\vendedor.php agregamos<br>
namespace clases\vendedor;<br>
// en controladores\vendedor.php agregamos<br>
namespace controladores\vendedor;<br><br>

// la clase vendedor hereda de persona, así que al declararla, si persona no está en el namespace, debemos agregar una "\" delante de persona:<br>
class Vendedor extends \Persona {<br><br>

// declaro que cuando llamo a vendedor me refiero a la que está dentro de tal carpeta/namespace <br>
use clases\vendedor\Vendedor;<br>
use controladores\vendedor\Vendedor as Vender; <br><br>

// Ya puedo instanciar cada objeto <br>
$vendedor = new Vendedor();<br>
$vendedor->prueba();<br>
$vender = new Vender();<br>
$vender->prueba();
<br><br>';

use clases\vendedor\Vendedor;
use controladores\vendedor\Vendedor as Vender;

$vendedor = new Vendedor();
$vendedor->prueba();
$vender = new Vender();
$vender->prueba();





 ?>