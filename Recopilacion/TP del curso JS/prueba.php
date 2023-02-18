
<form action="ingresavotacion.php" method="get">
	<label for="resp1"><input type="radio" value="voto_bien" name="votacion"> Muy bueno</label> <br>
	<label for="resp2"><input type="radio" value="voto_maso" name="votacion"> Aceptable</label> <br>
	<label for="resp3"><input type="radio" value="voto_mal" name="votacion"> Horrible</label> <br><br>
	<input type="submit" name="submit" value="Votar">					 
</form>

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

print_r($maxvotos); 
print_r($voto_bien);
print_r($voto_maso);
print_r($voto_mal);
// último ID del último pedido

?>
			<div id="encuestaresultados" style="">
				<meter min="0" low="<?php echo $maxvotos[0]/3;?>" 
				high="<?php echo $maxvotos[0]/2;?>" 
				max="<?php echo $maxvotos[0];?>" 
				optimum="<?php echo $maxvotos[0]/1.5;?>" 
				value="<?php echo $voto_bien[0];?>" 
				title="<?php echo $voto_bien[0];?> votos"></meter>
				Muy bueno</br>
				</br>
	            <meter min="0" low="<?php echo $maxvotos[0]/3;?>" 
	            high="<?php echo $maxvotos[0]/2;?>" 
	            max="<?php echo $maxvotos[0];?>" 
	            optimum="<?php echo $maxvotos[0]/1.5;?>" 
	            value="<?php echo $voto_maso[0];?>" 
	            title="<?php echo $voto_maso[0];?> votos"></meter> 
	            Aceptable</br></br>
	            <meter min="0" low="<?php echo $maxvotos[0]/3;?>" 
	            high="<?php echo $maxvotos[0]/2;?>" 
	            max="<?php echo $maxvotos[0];?>" 
	            optimum="<?php echo $maxvotos[0]/1.5;?>" 
	            value="<?php echo $voto_mal[0];?>" 
	            title="<?php echo $voto_mal[0];?> votos"></meter> 
	            Horrible</br></br>