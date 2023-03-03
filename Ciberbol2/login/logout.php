<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ciberbol</title>
	<meta charset="utf-8" http-equiv="Refresh" content="5;url=../index.php">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="../css/estilos.css" type="text/css" rel="stylesheet">
  <?php include 'css/css.html'; ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
  <a class="navbar-brand" href="#" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--/.navbar-header -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactos.php">Contactos</a>
      </li>
    </ul>
  </div><!--/.container -->
</nav>
    <div class="form">
          <h1>Cerrando sesión</h1>
              
          <p>¡Esperamos que regreses pronto!</p>
          
          <a href="../index.php"><button class="button button-block"/>Inicio</button></a>

    </div>

</html>
