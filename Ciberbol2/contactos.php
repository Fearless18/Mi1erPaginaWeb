<?php
session_start();
include "funciones.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Ciberbol bolsas de polietileno">
  <meta name="author" content="Alejandro Biondi">
  <link rel="icon" href="favicon.ico">
  <title>Ciberbol</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!-- <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -- >
  <!-- Custom styles for this template -->
  <link href="css/estilos.css" type="text/css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <!-- <script src="js/ie-emulation-modes-warning.js"></script> -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="jquery/jquery-ui.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
  <a class="navbar-brand" href="#" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Navegación</span>
  </button>
<!--/.navbar-header -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contactos</a>
      </li>
    </ul>
  </div><!--/.container -->
</nav>

    <!-- Main jumbotron for a primary marketing message -->
<div class="jumbotron">
  <div class="container">
    <h1>Contactanos</h1>
    <p class="celeste">Respondemos tus dudas y consultas</p>
  </div>
</div>

<section id="seccionprincipal" class="Tcentrado Ocentrado" >
<div class="container-fluid">
  <!-- Example row of columns -->
  <div class="row-fluid">
    <div class="col-md-3"></div>
  
    <div class="col-sm-12 col-md-6">
      <!-- form>input[type=text]*3+input[type=submit] -->
      <form action="">
        <legend>Envianos un e-mail</legend>
        <label for="name">Nombre</label><input name="name" type="text" class="input" placeholder="Tu nombre" id="name" REQUIERED/><br/><br/>
        <label for="email">E-mail</label><input name="email" type="text" class="input" id="email" placeholder="Correo a donde te respondemos" REQUIERED/><br/>
        <label for="mensaje">Mensaje</label><textarea name="text" class="input" id="mensaje" placeholder="Tu mensaje" REQUIERED></textarea>
        <br/><br/>
        <input type="submit" class="btn" value="Enviar mensaje">
      </form>
    </div>
    <div class="col-md-3"> </div>
  </div>

  

  <footer class="footer">
    <div class="row-fluid"><hr>

      <div class="col-md-2"><a href="index.php" title="Ciberbol" id="logo"></a></div>
      <div class="col-md-8 footer" style=" margin: 1% 0px">
        <ul><li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="contactos.php">Contactos</a></li></ul>
      </div><!-- /container -->
      <div class="col-md-2 footer tipoChica" style="float:right;text-align:right;bottom:10px;margin-right:10px;">Diseño
          <a href="mailto:badfan18@yahoo.com.ar">Alejandro Biondi</a>
      </div><!-- /tipoChica -->
    </div><!-- /row-fluid -->
  </footer>
</div> <!-- /container -->
</section>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
  <script src="js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
<?php
if (@$_REQUEST['text']!=NULL) {
  $to      = 'badfan18@yahoo.com.ar';
  $subject = 'Prueba';
  $message = $_REQUEST['text'];
  $headers = 'From: '.$_REQUEST['email']. " " . $_REQUEST['name'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();

    //$message = str_replace("\n.", "\n..", $message);
  echo "<br><br><br>".$to." ".$subject." ".$message." ".$headers;
  mail($to, $subject, $message, $headers);
  $_REQUEST['text']=NULL;


}
?>