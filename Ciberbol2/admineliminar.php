<!DOCTYPE html>
<html>
<head>
	<title>Agregar artículo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<?php
session_start();
include "funciones.php";
@$codigo=$_POST['codigo'];
$query=$consultas->EliminarArticulo($codigo);
echo $query;


?>
	<form action="admin.php">
		<input type="submit" value="Volver"/>
	</form>


</body>
</html>