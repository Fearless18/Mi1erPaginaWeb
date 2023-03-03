<?php 
session_start();

?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (!isset($_SESSION['login']) && !isset($_COOKIE['usuario'])) {
	echo "Por favor, loguee:";
?>
<form method="post" action="login.php">
		Usuario <input type="text" name="usuario"> <br>
		Password <input type="password" name="pass"> <br>
		<input type="submit" name="submit"> <br>
	</form>

<?php
} else if (isset($_SESSION['login'])) {
	echo "Hola $_SESSION[login] (sesión) <br><br>
	<a href='login.php?logout=sesion'>Desloguear (sesión)</a><br>
	";

} else if(isset($_COOKIE['usuario'])) {
	echo "<br>Bienvenido ". $_COOKIE['usuario'] . " (cookie)<br><br>
	<a href='login.php?logout=cookie'>Desloguear (cookie)</a><br>";
}
?>
<br>



</body>
</html>

