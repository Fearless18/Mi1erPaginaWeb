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
<?php
echo '$_SESSION = ', print_r($_SESSION), "<br>";
echo 'Página 1 <br><br>';

if ($_SESSION != null) { 
?>
	<h2> Bienvenido <?php echo $_SESSION['user']; ?> </h2>
	<form action="log_in3.php">
	<input type="submit" value="página 3"/>
	</form>
	<form action="log_out.php">
	<input type="submit" value="desloguear"/>
	</form>
<?php 
} else { 
?>
	<h2>Inicie Sesión:</h2>
	<form action="log_in2.php">
	<input type="text" name="user" /> Usuario </br>
	<input type="text" name="pass" /> Pass </br>
	<input type="submit" value="Entrar"/>
	</form>
<?php 
} 
?>

</body>
</html>
