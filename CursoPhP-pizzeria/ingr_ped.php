<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Ingresar Pedido</h1>
<form action="ingresarpedido.php">
<?php
print_r($_SESSION); echo "<br>";
	$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="Select * from pizzas";
	$registros=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
?>

<table border=1>
	<tr><td style="width:100px;">Id Cliente</td>
	<td style="width:100px;"> <?php echo $_SESSION['id_cliente'];?> </td></tr>
</table></br>
<table border=1>
<tr><th>Pizza</td><td>Cantidad</td><td>Precio unidad</td></tr>

<?php

	while ($reg=mysqli_fetch_array($registros)){

		echo "<tr><td>$reg[nombre] ($reg[ingredientes])</td>
		<td><input type='number' min='0' max='20' name='$reg[id_pizza]'>";
		echo "<td><input type='text' name='10+$reg[id_pizza]' value='$reg[precio]' disabled></td></tr>";
	}
	echo "</table>";
	
	mysqli_close($conexion);
?>
</br></br></br>

	<input type="submit" value="Ingresar pedido"/>
</form>
<form action="index.php">
	<input type="submit" value="Volver"/>
</form>

</body>
</html>