<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8" http-equiv="Refresh" content="3;url=index.php">
</head>
<body>
<?php
echo '$_SESSION = ', print_r($_SESSION), "<br>";
echo 'Página 4 <br><br>';
	session_unset(); 
	echo "Deslogueado!"
?>
</body>
</html>
