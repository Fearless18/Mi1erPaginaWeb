<?php include('conexion.php'); ?>
<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Perfil de usuario...</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
 
<body>
<div id="form1">
<div>
<?php
user_login();
    echo '<p>Usuario :   ' . $_SESSION['nick'] . '</p>';
    echo '<p>Usted se encuentra en esta página de usuarios registrados donde solo ingresaran usarios que se hayan registrado y logeado correctamente ....</p>';
    echo '<p>Usted podrá hacer uso de página bloqueada usando user_login(); para bloquear dichas páginas a las cuales desea que solo usuarios registrados y logeados accedan a ellas.....</p>';
 
    echo '<a href="index.php?modo=desconectar">desconectar</a>';
?>
</div>
</div>
</body>
</html>