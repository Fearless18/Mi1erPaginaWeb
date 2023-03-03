<!DOCTYPE html>
<html>
<head>
	<title>Modificar artículos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<?php
session_start();
include "funciones.php";

@$tipo=$_POST['tipo'];
@$codigo=$_POST['codigo'];


echo "<article><form action='adminmod2.php' method='post'  enctype='multipart/form-data'><table>";

// Modifica Precios
if ($tipo) {
	echo "<tr><th>Tipo</th><th>Negro</th><th>Color</th><th>Rojo</th><th>Cristal</th><th>Comentario</th></tr>";
	$regs=$consultas->todoDeUnValor('bolsas_precios','tipo','"'.$tipo.'"');
	while ($reg=mysqli_fetch_array($regs)){
		echo "<tr><td><input type='text' name='Tipo' value='$reg[tipo]' readonly></td>
		<td><input type='text' name='Negro' value='$reg[negro]'></td>
		<td><input type='text' name='Color' value='$reg[color]'></td>
		<td><input type='text' name='Rojo' value='$reg[rojo]'></td>
		<td><input type='text' name='Cristal' value='$reg[cristal]'></td>
		<td><input type='text' name='Comentario' value='$reg[comentario]'></td></tr>";
	}
}

// Modifica Código
if ($codigo) {
	echo "<tr><th>codigo</th><th>descripcion</th><th>ancho</th><th>largo</th><th>micrones</th>
	<th>unidades</th><th>Tipo</th><th>Color</th><th>imagen</th><th>destacado</th></tr>";
	$regs=$consultas->todoDeUnValor('bolsas_articulos','codigo','"'.$codigo.'"');
	while ($reg=mysqli_fetch_array($regs)){
		echo "<tr><td><input type='text' name='codigo' size='4' value='$reg[codigo]' readonly></td>
		<td><input type='text' name='descripcion' size='50' value='$reg[descripcion]'></td>
		<td><input type='text' name='ancho' size='2' value='$reg[ancho]'></td>
		<td><input type='text' name='largo' size='2' value='$reg[largo]'></td>
		<td><input type='text' name='micrones' size='2' value='$reg[micrones]'></td>
		<td><input type='text' name='unidades' size='3' value='$reg[unidades]'></td>
		<td><select name='tipo'>
				<option value='residuo' ";
				if ($reg['tipo']=="residuo") {echo "selected ";};
			echo ">residuo</option>
				<option value='consorcio' ";
				if ($reg['tipo']=="consorcio") {echo "selected ";};
			echo ">consorcio</option>
			</select></td>
		<td><select name='colores'>
				<option value='negro' ";
				if ($reg['color']=="negro") {echo "selected ";};
			echo ">negro</option>
				<option value='color' ";
				if ($reg['color']=="color") {echo "selected ";};
			echo ">color</option>
				<option value='rojo' ";
				if ($reg['color']=="rojo"||$reg['color']=="verde"||$reg['color']=="blanco") {echo "selected ";};
			echo ">rojo, etc</option>
				<option value='cristal' ";
				if ($reg['color']=="cristal") {echo "selected ";};
			echo ">cristal</option>
			</select></td>
		<td>";
		if (file_exists($reg['imagen'])) {
						echo "<a href=".$reg['imagen']." target='_blank'><img src=".$reg['imagen']." width='50px'></a><br>";
						echo "<input type='hidden' name='imagen' value='".$reg['imagen']."'>";
						} else {
							echo "Sin imagen. Puede agregar una.";
						}
		echo "<input type='hidden' name='MAX_FILE_SIZE' value='300000' />
			<input type='file' name='imagenx'></td>
		<td><input type='checkbox' name='mostrar' ";
		if ($reg['mostrar']==1) {echo "checked";}
		echo "></td></tr>";
	}
}
	echo "<tr><td colspan='10' align='center' style='border-bottom: none'>
	<input type='submit' value='Volver' formaction='admin.php'/>
	<input type='submit' value='Actualizar'></td></tr>
	</table></form></article>";

?>

</body>
</html>