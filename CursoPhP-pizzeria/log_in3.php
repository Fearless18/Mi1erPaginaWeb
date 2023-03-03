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
echo 'Página 3 <br><br>';

echo  "<br>","Bienvenido ",$_SESSION['user'], "<br>";


?>
<form action="log_in.php">
	<input type="submit" value="inicio"/>
</form>
<form action="log_in2.php">
	<input type="submit" value="página 2"/>
</form>
</body>
</html>
