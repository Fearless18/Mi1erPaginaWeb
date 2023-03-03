<?php 
session_start();

if (isset($_SESSION['login'])) {
	echo "Hola $_SESSION[login]";
} else {
	echo "Por favor, loguee:";
}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Session</p>
	<form method="post" action="login.php">
		Usuario <input type="text" name="usuario"> <br>
		Password <input type="password" name="pass"> <br>
		<input type="submit" name="submit"> <br>

	</form>
</body>
</html>

