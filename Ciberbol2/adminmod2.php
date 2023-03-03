<!DOCTYPE html>
<html>
<head>
	<title>Modificar artículos</title>
	<meta charset="utf-8" http-equiv="Refresh" content="420;url=admin.php">
</head>
<body>

<?php
session_start();
include "funciones.php";
//modificar precios
@$Tipo=$_POST['Tipo'];
@$Negro=$_POST['Negro'];
@$Color=$_POST['Color'];
@$Rojo=$_POST['Rojo'];
@$Cristal=$_POST['Cristal'];
@$Comentario=$_POST['Comentario'];
//modificar articulos
@$codigo=$_POST['codigo'];
@$descripcion=$_POST['descripcion'];
@$ancho=$_POST['ancho'];
@$largo=$_POST['largo'];
@$micrones=$_POST['micrones'];
@$unidades=$_POST['unidades'];
@$tipo=$_POST['tipo'];
@$colores=$_POST['colores'];
@$imagen=$_POST['imagen'];
@$mostrar=$_POST['mostrar'];
// Agregar articulos
@$Agregar=$_POST['Agregar'];
@$codigo1=$_POST['codigo1'];
@$descripcion1=$_POST['descripcion1'];
@$ancho1=$_POST['ancho1'];
@$largo1=$_POST['largo1'];
@$micrones1=$_POST['micrones1'];
@$unidades1=$_POST['unidades1'];
@$tipo1=$_POST['tipo1'];
@$colores1=$_POST['colores1'];
@$imagen1=$_POST['imagen1'];
@$mostrar1=$_POST['mostrar1'];
@$codigo2=$_POST['codigo2'];
@$descripcion2=$_POST['descripcion2'];
@$ancho2=$_POST['ancho2'];
@$largo2=$_POST['largo2'];
@$micrones2=$_POST['micrones2'];
@$unidades2=$_POST['unidades2'];
@$tipo2=$_POST['tipo2'];
@$colores2=$_POST['colores2'];
@$imagen2=$_POST['imagen2'];
@$mostrar2=$_POST['mostrar2'];
@$codigo3=$_POST['codigo3'];
@$descripcion3=$_POST['descripcion3'];
@$ancho3=$_POST['ancho3'];
@$largo3=$_POST['largo3'];
@$micrones3=$_POST['micrones3'];
@$unidades3=$_POST['unidades3'];
@$tipo3=$_POST['tipo3'];
@$colores3=$_POST['colores3'];
@$imagen3=$_POST['imagen3'];
@$mostrar3=$_POST['mostrar3'];
@$codigo4=$_POST['codigo4'];
@$descripcion4=$_POST['descripcion4'];
@$ancho4=$_POST['ancho4'];
@$largo4=$_POST['largo4'];
@$micrones4=$_POST['micrones4'];
@$unidades4=$_POST['unidades4'];
@$tipo4=$_POST['tipo4'];
@$colores4=$_POST['colores4'];
@$imagen4=$_POST['imagen4'];
@$mostrar4=$_POST['mostrar4'];
@$codigo5=$_POST['codigo5'];
@$descripcion5=$_POST['descripcion5'];
@$ancho5=$_POST['ancho5'];
@$largo5=$_POST['largo5'];
@$micrones5=$_POST['micrones5'];
@$unidades5=$_POST['unidades5'];
@$tipo5=$_POST['tipo5'];
@$colores5=$_POST['colores5'];
@$imagen5=$_POST['imagen5'];
@$mostrar5=$_POST['mostrar5'];


if ($Agregar) {
	$ubicacionimagen=NULL;
	if ($codigo1 && $descripcion1 && $ancho1 && $largo1 && $micrones1 && $unidades1 && $tipo1 && $colores1) {
		$dividido=$consultas->dividido($unidades1);
		$extra=$consultas->extras($unidades1);
		$registros=$consultas->todoDeUnValor('bolsas_precios','tipo','"'.$tipo1.'"');
		$reg=mysqli_fetch_array($registros);
		$colores1a=$colores1;
		if (!empty($_FILES['imagen1']['name'])) {
			$carpeta = "img/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagen1']['name'];
			copy($_FILES['imagen1']['tmp_name'],$destino);
			$ubicacionimagen=$carpeta.$codigo1.".png";
			rename($destino,$ubicacionimagen);
			echo "<img src=\"".$ubicacionimagen."\"><br>";
		}
		if ($colores1!="negro" && $colores1!="color" && $colores1!="cristal") {$colores1a="rojo";}
		$sin_iva=$ancho1*$largo1*$micrones1*2*0.92/10000*$reg[$colores1a]/$dividido+$extra;
		$con_iva=$sin_iva * 1.21;
		// 
		$query=$consultas->agregarArticulo($codigo1,$sin_iva,$con_iva,'"'.$descripcion1.'"','"'.$tipo1.'"','"'.$colores1.'"',$unidades1,$ancho1,$largo1,$micrones1,$ubicacionimagen,$mostrar1);
		echo $query."<br>";
	}
	if ($codigo2 && $descripcion2 && $ancho2 && $largo2 && $micrones2 && $unidades2 && $tipo2 && $colores2) {
		$dividido=$consultas->dividido($unidades2);
		$extra=$consultas->extras($unidades2);
		$registros=$consultas->todoDeUnValor('bolsas_precios','tipo','"'.$tipo2.'"');
		$reg=mysqli_fetch_array($registros);
		$colores2a=$colores2;
		if (!empty($_FILES['imagen2']['name'])) {
			$carpeta = "img/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagen2']['name'];
			copy($_FILES['imagen2']['tmp_name'],$destino);
			$ubicacionimagen=$carpeta.$codigo2.".png";
			rename($destino,$ubicacionimagen);
			echo "<img src=\"".$ubicacionimagen."\"><br>";
		}
		if ($colores2!="negro" && $colores2!="color" && $colores2!="cristal") {$colores2a="rojo";}
		$sin_iva=$ancho2*$largo2*$micrones2*2*0.92/10000*$reg[$colores2a]/$dividido+$extra;
		$con_iva=$sin_iva * 1.21;
		// 
		$query=$consultas->agregarArticulo($codigo2,$sin_iva,$con_iva,'"'.$descripcion2.'"','"'.$tipo2.'"','"'.$colores2.'"',$unidades2,$ancho2,$largo2,$micrones2,$ubicacionimagen,$mostrar2);
		echo $query."<br>";
	}
	if ($codigo3 && $descripcion3 && $ancho3 && $largo3 && $micrones3 && $unidades3 && $tipo3 && $colores3) {
		$dividido=$consultas->dividido($unidades3);
		$extra=$consultas->extras($unidades3);
		$registros=$consultas->todoDeUnValor('bolsas_precios','tipo','"'.$tipo3.'"');
		$reg=mysqli_fetch_array($registros);
		$colores3a=$colores3;
		if (!empty($_FILES['imagen3']['name'])) {
			$carpeta = "img/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagen3']['name'];
			copy($_FILES['imagen3']['tmp_name'],$destino);
			$ubicacionimagen=$carpeta.$codigo3.".png";
			rename($destino,$ubicacionimagen);
			echo "<img src=\"".$ubicacionimagen."\"><br>";
		}
		if ($colores3!="negro" && $colores3!="color" && $colores3!="cristal") {$colores3a="rojo";}
		$sin_iva=$ancho3*$largo3*$micrones3*2*0.92/10000*$reg[$colores3a]/$dividido+$extra;
		$con_iva=$sin_iva * 1.21;
		// 
		$query=$consultas->agregarArticulo($codigo3,$sin_iva,$con_iva,'"'.$descripcion3.'"','"'.$tipo3.'"','"'.$colores3.'"',$unidades3,$ancho3,$largo3,$micrones3,$ubicacionimagen,$mostrar3);
		echo $query."<br>";
	}
	if ($codigo4 && $descripcion4 && $ancho4 && $largo4 && $micrones4 && $unidades4 && $tipo4 && $colores4) {
		$dividido=$consultas->dividido($unidades4);
		$extra=$consultas->extras($unidades4);
		$registros=$consultas->todoDeUnValor('bolsas_precios','tipo','"'.$tipo4.'"');
		$reg=mysqli_fetch_array($registros);
		$colores4a=$colores4;
		if (!empty($_FILES['imagen4']['name'])) {
			$carpeta = "img/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagen4']['name'];
			copy($_FILES['imagen4']['tmp_name'],$destino);
			$ubicacionimagen=$carpeta.$codigo4.".png";
			rename($destino,$ubicacionimagen);
			echo "<img src=\"".$ubicacionimagen."\"><br>";
		}
		if ($colores4!="negro" && $colores4!="color" && $colores4!="cristal") {$colores4a="rojo";}
		$sin_iva=$ancho4*$largo4*$micrones4*2*0.92/10000*$reg[$colores4a]/$dividido+$extra;
		$con_iva=$sin_iva * 1.21;
		// 
		$query=$consultas->agregarArticulo($codigo4,$sin_iva,$con_iva,'"'.$descripcion4.'"','"'.$tipo4.'"','"'.$colores4.'"',$unidades4,$ancho4,$largo4,$micrones4,$ubicacionimagen,$mostrar4);
		echo $query."<br>";
	}
	if ($codigo5 && $descripcion5 && $ancho5 && $largo5 && $micrones5 && $unidades5 && $tipo5 && $colores5) {
		$dividido=$consultas->dividido($unidades5);
		$extra=$consultas->extras($unidades5);
		$registros=$consultas->todoDeUnValor('bolsas_precios','tipo','"'.$tipo5.'"');
		$reg=mysqli_fetch_array($registros);
		$colores5a=$colores5;
		if (!empty($_FILES['imagen5']['name'])) {
			$carpeta = "img/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagen5']['name'];
			copy($_FILES['imagen5']['tmp_name'],$destino);
			$ubicacionimagen=$carpeta.$codigo5.".png";
			rename($destino,$ubicacionimagen);
			echo "<img src=\"".$ubicacionimagen."\"><br>";
		}
		if ($colores5!="negro" && $colores5!="color" && $colores5!="cristal") {$colores5a="rojo";}
		$sin_iva=$ancho5*$largo5*$micrones5*2*0.92/10000*$reg[$colores5a]/$dividido+$extra;
		$con_iva=$sin_iva * 1.21;
		// 
		$query=$consultas->agregarArticulo($codigo5,$sin_iva,$con_iva,'"'.$descripcion5.'"','"'.$tipo5.'"','"'.$colores5.'"',$unidades5,$ancho5,$largo5,$micrones5,$ubicacionimagen,$mostrar5);
		echo $query."<br>";
	}

}


if ($Tipo) {
	$query="UPDATE bolsas_precios SET 
	negro='$Negro', color='$Color', rojo='$Rojo', 
	cristal='$Cristal', comentario='$Comentario' 
	WHERE tipo='$Tipo';";
	mysqli_query($conexion, $query) or die ("Problemas con la DB: " . mysqli_error($conexion));

	echo "<br>Datos Actualiza2 :)<br><br>".$query;
	
	// Además, tiene que actualizar toda la lista de precios con los cambios realizados
	$registros=$consultas->todoDeUnValor('bolsas_articulos','tipo','"'.$Tipo.'"');
	while ($reg=mysqli_fetch_array($registros)){
			echo $reg['color'];
			if ($reg['color']=="negro") {
				
				if ($reg['unidades']==50) {
					//										$tipo,$color,	$unidades,	$ancho,
					//			$largo,	$micrones,	$precio,	$siniva,$coniva
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],'50',$reg['ancho'],
						$reg['largo'],$reg['micrones'],$Negro,'20','0');
					echo "<br>".$resultado;
				}
				if ($reg['unidades']==30) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Negro,'33','0.10');
					echo "<br>".$resultado;
					}
				if ($reg['unidades']==10) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Negro,'100','0.20');
					echo "<br>".$resultado;
				}
			}
			if ($reg['color']=="color") {
				if ($reg['unidades']==100) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Color,'10','0');
					echo "<br>".$resultado;				
				}
				if ($reg['unidades']==50) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Color,'20','0');
					echo "<br>".$resultado;
				}
				if ($reg['unidades']==30) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Color,'33','0.10');
					echo "<br>".$resultado;
				}
			}
			if ($reg['color']=="cristal") {
				if ($reg['unidades']==50) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Cristal,'20','0');
					echo "<br>".$resultado;
				}
				if ($reg['unidades']==30) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Cristal,'33','0.10');
					echo "<br>".$resultado;
				}
				if ($reg['unidades']==10) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Cristal,'100','0.20');
					echo "<br>".$resultado;
				}
			}
			
			if ($reg['color']!="color" && $reg['color']!="negro" && $reg['color']!="cristal") {
				if ($reg['unidades']==100) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Rojo,'10','0');
					echo "<br>".$resultado;
				}
				if ($reg['unidades']==50) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Rojo,'20','0');
					echo "<br>".$resultado;
				}
				if ($reg['unidades']==30) {
					$resultado=$consultas->updateArticulos($Tipo,$reg['color'],$reg['unidades'],
						$reg['ancho'],$reg['largo'],$reg['micrones'],$Rojo,'33','0.10');
					echo "<br>".$resultado;
				}
			}
		}
}
if ($codigo) {

	if ($mostrar=="on") {$mostrar=1;} else {$mostrar=0;}
	// $colores=strtolower($colores);
	// $tipo=strtolower($tipo);
	$dividido=$consultas->dividido($unidades);
	$extra=$consultas->extras($unidades);

	$registros=$consultas->todoDeUnValor('bolsas_precios','tipo','"'.$tipo.'"');
	$reg=mysqli_fetch_array($registros);
	$coloresa=$colores;
	// echo $ubicacionimagen="img/".$codigo.".png";
	if (!empty($_FILES['imagenx']['name'])) {
			// if (file_exists($ubicacionimagen)) {
			// 	unlink($ubicacionimagen);
			// }
			$carpeta = "img/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagenx']['name'];
			copy($_FILES['imagenx']['tmp_name'],$destino);
			$ubicacionimagen=$carpeta.$codigo.".png";
			rename($destino,$ubicacionimagen);
		}
	if ($colores!="negro" && $colores!="color" && $colores!="cristal") {$coloresa="rojo";}
	$sin_iva=$ancho*$largo*$micrones*2*0.92/10000*$reg[$coloresa]/$dividido+$extra;
	$con_iva=$sin_iva * 1.21;
	$query="UPDATE bolsas_articulos SET sin_iva=$sin_iva, con_iva=$con_iva, 
	descripcion='$descripcion', ancho='$ancho', largo='$largo', 
	micrones='$micrones', unidades='$unidades', tipo='$tipo',
	 color='$colores', imagen='$ubicacionimagen', mostrar='$mostrar' 
	WHERE codigo='$codigo';";
	mysqli_query($conexion, $query) or die ("Problemas con la DB: " . mysqli_error($conexion));

	echo "<br>Datos Actualiza2 :)<br><br>".$query;
	mysqli_close($conexion);
}
	
?>
<form action="admin.php">
	<input type="submit" value="volver"/>
</form>
</body>
</html>