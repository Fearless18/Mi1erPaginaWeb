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
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/estilos.css" type="text/css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">

function limpiar (entrada)
{
  if (entrada.value == 'Usuario') {
    entrada.style.color = 'black';
    entrada.value = '';
  }
  if (entrada.value == 'Password') {
    entrada.style.color = 'black';
    entrada.value = '';
    entrada.type = 'password';
  }
}
function evento () {
  var select = $("#residuo option:selected").val();
  
  if (select == "todos") {
    document.getElementById('mensaje').innerHTML=(' función activada todos');
  }
  if (select == "resi") {
    document.getElementById('mensaje').innerHTML=(' función activada resi');
  }
  if (select == "conso") {
    document.getElementById('mensaje').innerHTML=(' función activada conso');
  }
}
function llenar () {
  usu = document.getElementById('usuario');
  pass = document.getElementById('password');
  notificacion = document.getElementById('notificacion');

  if (usu.value == ''){
    usu.value = 'Usuario';
    usu.style.color = '#888';
    pass.value = 'Password';
    pass.style.color = '#888';
    pass.type = 'text';
    notificacion.innerHTML = 'Ingrese un usuario!';
  }
}
</script>
</head>

<body>
  <input type="text" id="usuario" value="Usuario" style="color:#888;"
  onfocus="limpiar(this);" onblur="llenar();"/>
<input type="text" id="password" value="Password" style="color:#888;"
  onfocus="limpiar(this);"/>
<div id='notificacion'></div>
<div class="row-fluid"><h2>Artículos destacados</h2>
    <article>
      Filtrar por: 
      <select id="residuo" onchange="evento();">
        <option value="todos">Todos</option>
        <option value="resi">Residuo</option>
        <option value="conso">Consorcio</option>
      </select>
    </article>
    <div id="mensaje"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
