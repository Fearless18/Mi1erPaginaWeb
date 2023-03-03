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

  <script type="text/javascript">

function Filtrar(valor) {
  var filtrarpor = valor.value;
  
  if (filtrarpor=="todos") {
     $('.contenidobusqueda tr').show();
  } else {
    $('.contenidobusqueda tr').hide();
    $('.contenidobusqueda #'+filtrarpor).show();
    //$('.contenidobusqueda tr').css('display','none');
    //$('.contenidobusqueda #'+filtrarpor).css('display','block');
    
  }
  
}
</script>
<!-- otro script JQ -- 
<script type="text/javascript">
$(document).ready(function () {
  $('#residuo').on('change', function () {
    $('.contenidobusqueda #residuo').show();
    $('.contenidobusqueda #consorcio').show();

    switch (this.value) {
      case 'residuo':
        $('.contenidobusqueda #residuo').hide(); 
        break;
      case 'consorcio':
        $('.contenidobusqueda #consorcio').hide(); 
        break;
      default:
        break;
     }

    
  });
});

</script> -->


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
      <li class="nav-item active">
        <a class="nav-link" href="#">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactos.php">Contactos</a>
      </li>
    </ul>
  </div><!--/.container -->
</nav>

    <!-- Main jumbotron for a primary marketing message -->
<div class="jumbotron">
  <div class="container">
    <h1>Productos</h1>
  </div>
</div>
<section id="seccionprincipal" class="Tcentrado Ocentrado" >
<div class="container-fluid">
  <!-- Example row of columns -->
  <div class="row-fluid"><h2>Artículos destacados</h2>
    <article>
      Filtrar por: 
      <select id="residuo" onchange="Filtrar(this);"> <!--  -->
        <option value="todos">Todos</option>
        <option value="residuo">Residuo</option>
        <option value="consorcio">Consorcio</option>
      </select>
    </article>
    <div id="mensaje_residuo"></div>
    <article class="art2"> 
      
    <?php 
      $registros=$consultas->listarProd('bolsas_articulos');
      echo "<table class='table table-bordered table-hover table-striped'>
      <thead><tr id='th'><th>Código</th><th>Descripción</th>
        <th>Precio sin Iva</th><th>Precio con Iva</th></tr></thead>
        <tbody class='contenidobusqueda'>";
      
      while ($reg=mysqli_fetch_array($registros)){
        echo "<tr id='$reg[tipo]'><td>$reg[codigo]</td><td>$reg[descripcion]</td>
        <td>$reg[sin_iva]</td><td>$reg[con_iva]</td></tr>";
      }
      echo "</tbody></table>";
    ?> 
    </article>
  </div>

  <hr>

  <footer class="footer">
    <div class="row-fluid">

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
