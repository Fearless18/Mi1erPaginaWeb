<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8" http-equiv="Refresh" content="1;url=index.php">
</head>
<body>
<?php
	session_destroy(); 
	echo "Deslogueado!"
?>
</body>
</html>
