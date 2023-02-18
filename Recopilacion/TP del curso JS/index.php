<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="jquery-2.1.4.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>

<header>
	<div id="divRegistro">
	<form action="#">
		Usuario: 
		<input type="text" id="usuario" title="Ingresá tu usuario" value="usuario" onfocus="limpiar(this);" /><br/>
		Contraseña:
		<input type="password" id="password"  onfocus="limpiar(this);"/><br/>
		<button type="submit" id="entrar" formaction="#">Ingresar</button><br/><br/>
		¿sos nuevo? 
		<button type="submit" id="registrarse" formaction="registrarse.html">Registrarse</button>

	</form>
	</div>
</header>
<nav>
	<ul  id="menu">
		<li><a href="index.html">Inicio</a></li>
		<li><a href="noticias.html">Noticias</a></li>
		<li><a href="bandas.html">Bandas</a></li>
	</ul>
</nav>
<main>
	<section id="seccionprincipal" >
		<article id="art1" ><!-- onmouseover="iluminar(this);" -->
			<h1>Título principal</h1>
			<img src="img/silouette.png" width="60px" align="left" hspace="10" vspace="10" >
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</article>
		<article id="art2">
			<h2>Título secundario</h2>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. </article>
		<article id="art2">
			<h2>Título secundario</h2>
			Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</article>
	</section>
	<aside id="costado">
		<article id="art1">
			<h1>Encuesta</h1>
			¿Te gusta ese sitio?</br></br>
			<div id="encuestapregunta">
				<form action="ingresavotacion.php"> <!--- onsubmit="encuestaresultados();"-->
					<label for="resp1"><input type="radio" id="resp1" value="voto_bien" name="votacion"> Muy bueno</label> <br>
					<label for="resp2"><input type="radio" id="resp2" value="voto_maso" name="votacion"> Aceptable</label> <br>
					<label for="resp3"><input type="radio" id="resp3" value="voto_mal" name="votacion"> Horrible</label> <br><br>
					<input type="submit" name="submit" value="Votar">			 
				</form>
				<form onsubmit="verresultados();">
					<input type="submit" value="Ver resultados">
				</form>
				<div id="encuestaerror"></div>
			</div>
<?php
$total=0;
	$conexion=mysqli_connect("localhost","root","","test")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

// cantidad de gustos de pizzas que hay
	$query="SELECT COUNT(id_voto) FROM encuesta;";
	$cantidad=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	$maxvotos=mysqli_fetch_array($cantidad); // Guardo en $maxvotos[0].

	$query="SELECT COUNT(voto_bien) FROM encuesta WHERE voto_bien='1';";
	$cantidad=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	$voto_bien=mysqli_fetch_array($cantidad); // Guardo en $voto_bien[0].

	$query="SELECT COUNT(voto_maso) FROM encuesta WHERE voto_maso='1';";
	$cantidad=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	$voto_maso=mysqli_fetch_array($cantidad); // Guardo en $voto_maso[0].

	$query="SELECT COUNT(voto_mal) FROM encuesta WHERE voto_mal='1';";
	$cantidad=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	$voto_mal=mysqli_fetch_array($cantidad); // Guardo en $voto_mal[0].


?>
			<div id="encuestaresultados" style="">
				<meter min="0" low="<?php echo $maxvotos[0]/3;?>" 
					high="<?php echo $maxvotos[0]/2;?>" max="<?php echo $maxvotos[0];?>" 
					optimum="<?php echo $maxvotos[0]/1.5;?>" value="<?php echo $voto_bien[0];?>" 
					title="<?php echo $voto_bien[0];?> votos"></meter> Muy bueno</br></br>
	            <meter min="0" low="<?php echo $maxvotos[0]/3;?>" 
		            high="<?php echo $maxvotos[0]/2;?>" max="<?php echo $maxvotos[0];?>" 
		            optimum="<?php echo $maxvotos[0]/1.5;?>" value="<?php echo $voto_maso[0];?>" 
		            title="<?php echo $voto_maso[0];?> votos"></meter> Aceptable</br></br>
	            <meter min="0" low="<?php echo $maxvotos[0]/3;?>" 
		            high="<?php echo $maxvotos[0]/2;?>" max="<?php echo $maxvotos[0];?>" 
		            optimum="<?php echo $maxvotos[0]/1.5;?>" value="<?php echo $voto_mal[0];?>" 
		            title="<?php echo $voto_mal[0];?> votos"></meter> Horrible</br></br>
	        </div>
		</article>
	</aside>
</main>

<footer>pie</footer>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</body>
</html>