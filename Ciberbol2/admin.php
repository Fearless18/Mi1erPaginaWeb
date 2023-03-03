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
  <script>
$(document).ready(function() {

    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "Delete all items": function() {
          $( this ).dialog( "close" );
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });
});
	</script>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body>


<section id="contenedormenu">
	<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
  <a class="navbar-brand" href="#" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Navegación</span>
  </button>
<!--/.navbar-header -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
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
 
  <?php
      if ($_SESSION['admin']) {
        echo "<div class='nav navbar-nav navbar-right'>
                  <a class='btn btn-success' href='admin.php'>Admin</a>
                </div>
              <div class='nav navbar-nav navbar-right'>
                <form action='login/logout.php'>
                  <input type='submit' class='btn' value='Desloguear'>
                </form>
              </div>";
      } 
    ?>
		
	</div><!--/.container -->
</nav>
</section>


<main>
<section id="seccionprincipal" class="Tcentrado Ocentrado" >


<?php
      if ($_SESSION['admin']) { // SI ESTOY LOGUEADO
?>


<!-- PRECIOS -->
	<article>
		<h1><br>Listado de Precios<br></h1>
		<form action="adminmod1.php" method="post">
			<table class='table table-bordered table-hover table-striped'>
				<tr>
					<th>Tipo</th><th>negro</th><th>color</th><th>rojo</th><th>cristal</th><th>Comentario</th><th>Modificar</th>
				</tr>
		<?php
						// ($tabla,    $col,   $valor)
			$regs=$consultas->listarPrecios('bolsas_precios');
			while ($reg=mysqli_fetch_array($regs)){
				echo "<tr><td>$reg[tipo]</td><td>$reg[negro]</td><td>$reg[color]</td>
				<td>$reg[rojo]</td><td>$reg[cristal]</td><td>$reg[comentario]</td>
				<td><input type='submit' name='tipo' value='$reg[tipo]'></td></tr>";
			}
			echo "</table>";
		?>
		</form>
	</article>


<!-- ARTICULOS - Listar, modificar, eliminar -->
	<article>
		<h1><br>Listado de artículos<br></h1>
		<form action="adminmod1.php" method="post">
			<table class='table table-bordered table-hover table-striped'>
				<tr>
					<th>Código</th><th>Precio sin Iva</th><th>Precio con Iva</th><th>Descripción</th><th>Ancho</th><th>Largo</th><th>Micrones</th><th>Unidades</th><th>Tipo</th><th>Color</th><th>Imagen</th><th>Mostrar</th>
				</tr>
		<?php
						// ($tabla,    $col,   $valor)
			$registros=$consultas->listarProd('bolsas_articulos');
// $colorfila="#fff";
			while ($reg=mysqli_fetch_array($registros)){
				// if ($colorfila=="#fff") {$colorfila="#eee";} else {$colorfila="#fff";}
				echo "<tr><td>$reg[codigo]</td><td>$reg[sin_iva]</td><td>$reg[con_iva]</td>
				<td>$reg[descripcion]</td><td>$reg[ancho]</td><td>$reg[largo]</td><td>$reg[micrones]</td>
				<td>$reg[unidades]</td><td>$reg[tipo]</td><td>$reg[color]</td><td>"; 
					if (file_exists($reg['imagen'])) {
					echo "<a href=".$reg['imagen']." target='_blank'><img src=".$reg['imagen']." width='50px'></a><br>";
					echo "<input type='hidden' name='imagen' value='".$reg['imagen']."'>";
					} else {
						echo "Sin imagen.";
					}
				echo "</td><td>"; 
					if ($reg['mostrar']==1) {echo "Si";} else { echo "No";};
				echo "</td>
				<td style='color:blue;'>modificar<br><input type='submit' name='codigo' value='$reg[codigo]'></td>
				<td style='color:red;'>eliminar<br><input type='submit' formaction='admineliminar.php' name='codigo' value='$reg[codigo]'></td></tr>";
			}
			echo "<tr><td colspan='12' align='right' style='border-bottom:none;'><input type='submit' formaction='adminagregar.php' value='Agregar nuevo'></td></tr></table>";
		?>
		</form>
	</article>

		
	<?php } else { ?> <!-- NO SESIÓN iniciada * muestro los botones para iniciar/registrar -->
	 </div>
	 </div><!--/.container -->
	</nav>
</section>

</main>
	<section id="seccionprincipal" class="Tcentrado Ocentrado" >
		<form class="form-signin art1" action="index.php" method="POST">
	    <h2 class="form-signin-heading">¡Ups!</h2>

	    <p>No tenés permiso para acceder a esta sección.</p>

	    <button class="btn btn-lg btn-primary btn-block" type="submit">Volver</button>
	  </form>

	<?php } ?>
	</section>

</main>


</body>
</html>
