<!DOCTYPE html>
<html>
<head>
	<title>Agregar artículo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<?php
session_start();
include "funciones.php";?>
<article>
	<form action='adminmod2.php' method='post' enctype="multipart/form-data">
		<table>
			<tr><th>codigo</th><th>descripción</th><th>ancho</th><th>largo</th><th>micrones</th>
			<th>unidades</th><th>tipo</th><th>color</th><th>imagen</th><th>destacado</th></tr>
			<?php 
			$contador=1;
			while ($contador<=5) {
			?>
			<tr><td><input type='text' name='codigo<?php echo $contador?>' size='4'></td>
			<td><input type='text' name='descripcion<?php echo $contador?>' size='50'></td>
			<td><input type='text' name='ancho<?php echo $contador?>' size='2'></td>
			<td><input type='text' name='largo<?php echo $contador?>' size='2'></td>
			<td><input type='text' name='micrones<?php echo $contador?>' size='2'></td>
			<td><input type='text' name='unidades<?php echo $contador?>' size='3'></td>
			<td><select name='tipo<?php echo $contador?>'>
				<option value="residuo">Residuo</option>
				<option value="consorcio">Consorcio</option>
			</select></td>
			<td><select name='colores<?php echo $contador?>'>
				<option value="negro">Negro</option>
				<option value="color">Color</option>
				<option value="rojo">Rojo, etc</option>
				<option value="cristal">Cristal</option>
			</select></td>
			<td>
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input type="file" name='imagen<?php echo $contador?>'></td>
			</td>
			<td><input type='checkbox' name='mostrar<?php echo $contador?>'></td></tr>
			<?php 
			$contador++;
			}
			?>
			<tr><td></td></tr>
			<tr><td colspan="10" align="center" style="border-bottom:none;">
				<input type="submit" formaction="admin.php" value="Volver"/>
				<input type="submit" name="Agregar" value="Agregar"/>
			<td></tr>
	</table>
	</form>
</article>

</body>
</html>