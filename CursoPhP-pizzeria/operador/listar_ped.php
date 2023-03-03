<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
</head>
<body>

<?php  

$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="SELECT 		p.id_pedido 'Pedido_Nro', c.id_cliente id_cliente, c.nombre nombre_cliente, fecha, hora, importe, id_pizza, cantidad
			FROM 		pedidos p
			INNER JOIN 	detalles d
			ON 			p.id_pedido=d.id_pedido
			INNER JOIN 	clientes c
			ON 			p.id_cliente=c.id_cliente";
	$registros=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));

	echo '<table border=1>';
	echo "<tr><th>Pedido</th><th>Id Cliente</th><th>Nombre Cliente</th><th>Fecha</th><th>Hora</th>
	<th>Importe</th><th>Pizza</th><th>Cantidad</th></tr>";

	while ($reg=mysqli_fetch_array($registros)){
		echo "<tr><td>$reg[Pedido_Nro]</td>";
		echo "<td>$reg[id_cliente]</td>";
		echo "<td>$reg[nombre_cliente]</td>";
		echo "<td>$reg[fecha]</td>";
		echo "<td>$reg[hora]</td>";
		echo "<td>$reg[importe]</td>";
		echo "<td>$reg[id_pizza]</td>";
		echo "<td>$reg[cantidad]</td></tr>";
	}
	echo "</table>";
mysqli_close($conexion);

?>
<form action="index.php">

	<input type="submit" value="volver"/>
</form>
</body>
</html>
