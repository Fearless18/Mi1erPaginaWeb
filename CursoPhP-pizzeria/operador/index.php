<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
	<style type="text/css">
	th{
		background-color: #ddd;
		padding: 5px 10px;
	}
	</style>
</head>
<body>
<h1>Interfaz Operador</h1>
<form action="listar_ped.php">
	<input type="submit" value="Listar Pedidos">
</form>
<h2>Sabores de pizzas</h2>
<?php
$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="Select * from pizzas";
	$registros=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));

	echo '<table border=1>';
	echo "<tr><th>Id</th><th>Nombre</th><th>ingredientes</th><th>precio</th></tr>";

	while ($reg=mysqli_fetch_array($registros)){
		echo "<tr><td>$reg[id_pizza]</td>";
		echo "<td>$reg[nombre]</td>";
		echo "<td>$reg[ingredientes]</td>";
		echo "<td>$reg[precio]</td></tr>";
	}
	echo "</table>";
	mysqli_close($conexion);
?>
</br>
<form action="creargusto.php">
	<table style="text-align:right;">
		<tr><th rowspan="4" style="width:120px;">Crear gusto</th></tr>
		<tr>
			<td style="width:100px;">nombre</td><td><input type="text" name="nombre" required></td>
		</tr>
		<tr>
			<td>ingredientes</td><td><input type="text" name="ingredientes" required></td>
		</tr>
		<tr>
			<td>precio</td><td><input type="text" name="precio" required></td>
		</tr>
		<tr><td></td><td><input type="submit" value="Crear"/></td></tr>
	</table>
</br>
</form>
<form action="borrargusto.php">
	<table style="text-align:right;">
		<tr><th rowspan="2" style="width:120px;">Borrar gusto</th></tr>
		<tr>
			<td style="width:100px;">Id pizza</td><td><input type="text" name="id_pizza" required></td>
		</tr>
		<tr><td></td><td><input type="submit" value="Borrar"/></td></tr>
	</table>
</br>
</form>
<form action="modificargusto.php">
	<table style="text-align:right;">
		<tr><th rowspan="5" style="width:120px;">Modificar gusto</th></tr>
		<tr>
			<td style="width:100px;">id</td><td><input type="text" name="id_pizza" required></td>
		</tr>
		<tr>
			<td>nombre</td><td><input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td>ingredientes</td><td><input type="text" name="ingredientes"></td>
		</tr>
		<tr>
			<td>precio</td><td><input type="text" name="precio"></td>
		</tr>
		<tr><td></td><td><input type="submit" value="Modificar"/></td></tr>
	</table>
	
</form>
</body>
</html>