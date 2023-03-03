<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Registrarse</h1>
<form action="registrar.php">
<table>
	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre" maxlength="20" required></td>
	</tr>
	<tr>
		<td>Dirección:</td><td><input type="text" name="direccion" maxlength="50" required></td>
	</tr>
	<tr>
		<td>Teléfono</td><td><input type="tel" name="telefono" maxlength="20" required></td>
	</tr>
	<tr>
		<td>E-mail</td><td><input type="email" name="email" maxlength="50"></td>
	</tr>

</table>
<input type="submit" value="Registrarse">
</form>
<form action="index.php">
	<input type="submit" value="Volver">
</form>
<h2>Registrados</h2>
<?php
$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="Select * from clientes";
	$registros=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));

	echo '<table border=1>';
	echo "<tr><th>Id</th><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th>E-mail</th></tr>";

	while ($reg=mysqli_fetch_array($registros)){
		echo "<tr><td>$reg[id_cliente]</td>";
		echo "<td>$reg[nombre]</td>";
		echo "<td>$reg[direccion]</td>";
		echo "<td>$reg[telefono]</td>";
		echo "<td>$reg[email]</td></tr>";
	}
	echo "</table>";
	mysqli_close($conexion);
?>
</body>
</html>