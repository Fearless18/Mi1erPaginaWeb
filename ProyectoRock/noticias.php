<?php
session_start();
include "funciones.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Noticias</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="jquery-2.1.4.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>

<header>
	<div id="divRegistro">
	<?php
		if ($_SESSION != null) { 
	?>
		<p> Bienvenido <?php echo $_SESSION['user']; ?> </p>
		<form action="log_out.php">
			<input type="submit" value="desloguear">
		</form>
	<?php } else { ?>
		<form action="log_in.php">
			Usuario: 
			<input type="text" id="usuario" name="usuario" title="Ingresá tu usuario" value="usuario" onfocus="limpiar(this);" /><br/>
			Contraseña:
			<input type="password" id="password" name="password" onfocus="limpiar(this);"/><br/>
			<input type="submit" id="entrar" value="Ingresar"><br/><br/>
			¿sos nuevo? 
			<input type="submit" id="registrarse" formaction="registrarse.php" value="Registrarse">
		</form>
	<?php } ?>
	</div>
</header>
<nav>
	<ul  id="menu">
		<li><a href="index.php">Inicio</a></li>
		<li><a href="noticias.php">Noticias</a></li>
		<li><a href="bandas.php">Bandas</a></li>
	</ul>
</nav>
<main>
	<section id="noticias"></br>
		<p class="tituloseccion">Todas las noticias, las encontrarás aquí.</br></br></p>
		
			<?php
												// ($tabla,     $col,        $valor,$col2,$modo,$cont_i,$cont_f)
			$muestrasiempre=$consultas->generarDivs('articulos','mostrarsiempre','1','id','DESC','0','2');
			$consultas->generarDivs('articulos','mostrarsiempre','0','id','DESC','$muestrasiempre','5');

				// $contador=0;
				// $query="SELECT * FROM articulos WHERE mostrarsiempre=1 ORDER BY id DESC;";

				// $registros=mysqli_query($conexion, $query) 
				// or die ("Problemas con la DB: " . mysqli_error($conexion));
				
				// while ($reg=mysqli_fetch_array($registros)){
				// 	if ($contador<2) {
				// 		echo "<article id='artnoti1'><a class='titulonoticia' href='#' onclick='mostrar(`noticia$reg[id]`)' >$reg[titulo]</a>";
				// 		echo "<div id='noticia$reg[id]' style='display:none;' class='textonormal'>";
				// 		if (file_exists("noticias/$reg[id].jpg")) {
				// 			echo "<img src=noticias/$reg[id].jpg  width='120px'>";
				// 			}
				// 		echo "$reg[texto]</div></br></article>";
				// 		$contador++;
				// 	}
				// }
				// $query="SELECT * FROM articulos WHERE mostrarsiempre=0 ORDER BY id DESC;";
				// $registros=mysqli_query($conexion, $query) 
				// or die ("Problemas con la DB: " . mysqli_error($conexion));
				// while ($reg=mysqli_fetch_array($registros)){
				// 	if ($contador<5) {
				// 		echo "<article id='artnoti1'><a class='titulonoticia' href='#' onclick='mostrar(`noticia$reg[id]`)' >$reg[titulo]</a>";
				// 		echo "<div id='noticia$reg[id]' style='display:none;' class='textonormal'>";
				// 		if (file_exists("noticias/$reg[id].jpg")) {
				// 			echo "<img src=noticias/$reg[id].jpg  width='120px'>";
				// 			}
				// 		echo "$reg[texto]</div></br></article>";
				// 		$contador++;
				// 	}
				// }
				// mysqli_close($conexion);


			?>

		
	</section>
	<aside id="costado">
		<article id="art1">articulo 1</article>
		<article id="art2">articulo 2</article>
	</aside>
</main>
<footer>pie</footer>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</body>
</html>