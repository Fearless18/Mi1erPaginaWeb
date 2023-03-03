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

<h2>cliente Nº <?php echo $_SESSION['id_cliente']; ?> - <?php echo $_SESSION['user']; ?> <br></h2>

<?php
$total=0;
	$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

// cantidad de gustos de pizzas que hay
	$query="SELECT COUNT(id_pizza) FROM pizzas;";
	$cantidad=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	$maxpizzas=mysqli_fetch_array($cantidad); // Guardo en $maxpizzas[0].

// último ID del último pedido
	$query="SELECT max(id_pedido) FROM pedidos;"; 
	$cantidad=mysqli_query($conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));
	$idmaximo=mysqli_fetch_array($cantidad); // Guardo en $idmaximo[0].
?>

<table border="1">
<?php
// $i = es el input de cuantas pizzas quieren de cada una.
for ($i=1; $i <= $maxpizzas[0]; $i++) { 
	// si el input $i no es cero.. (o sea, se ingresó una cantidad de pizza)
	if ($_REQUEST[$i]!=0) { 
		$query="SELECT precio FROM pizzas where id_pizza=".$i.";"; // tomo el precio de esa pizza
		$cantidad=mysqli_query($conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));
		$preciospizzas=mysqli_fetch_array($cantidad);
		// agrego el detalle del pedido de esa pizza.
		$querydetalles="INSERT INTO detalles (id_pedido,id_pizza,cantidad) VALUES 
		(".($idmaximo[0]+1).",".$i.",".$_REQUEST[$i].");";
		mysqli_query($conexion, $querydetalles) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));
		echo '<tr><td> Pizza: ',$i,'</td><td> Cantidad: ',$_REQUEST[$i],'</td><td> Valor unitario: ',$preciospizzas[0],'</td><td> Total: ',($_REQUEST[$i]*$preciospizzas[0]),'</td></tr>';
		// sumo los importes de cada gusto de pizza
		$total = $total + ($_REQUEST[$i]*$preciospizzas[0]);
	}
}
// agrego el pedido a la tabla correspondiente.
$querypedidos="INSERT INTO pedidos (id_cliente,fecha,hora,importe) VALUES
(".$_SESSION['id_cliente'].",curdate(),curtime(),".$total.");";
echo '<tr><td></td><td></td><td></td><td> Total: ',$total,'</td></tr>';
mysqli_query($conexion, $querypedidos) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));

?>
</table>
<form action="index.php">

	<input type="submit" value="volver"/>
</form>
</body>
</html>