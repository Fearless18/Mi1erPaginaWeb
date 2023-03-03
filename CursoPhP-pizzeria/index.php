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
<h1>Pizzeria</h1>
<?php
if ($_SESSION != null) { 
?>
	<h2> Bienvenido <?php echo $_SESSION['user']; ?> </h2>
	<form action="ingr_ped.php">
	<input type="submit" value="Ingresar Pedido">
	<input type="submit" value="desloguear" formaction="log_out.php">
	</form>
<?php 
} else { 
?>
	<form action="log_in.php">
	<input type="submit" value="Loguear">
	<input type="submit" value="Registrarse" formaction="registrarse.php">
</form>
<?php 
} 
?>

</body>
</html>