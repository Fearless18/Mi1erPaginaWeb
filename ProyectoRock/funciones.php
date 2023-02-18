<?php
$conexion=mysqli_connect("localhost","root","liketoday","test")
//$conexion=mysqli_connect("mysql.hostinger.com.ar","u862037669_ale","liketoday","u862037669_test")
or die ("Problemas en la conexión: " . mysqli_error($this->conexion));

$consultas=new consultas();

class Consultas {
	private $columna;
	private $tabla;
	private $conexion;

	public function __construct() {
		$this->conexion=mysqli_connect("localhost","root","liketoday","test")
		//$this->conexion=mysqli_connect("mysql.hostinger.com.ar","u862037669_ale","liketoday","u862037669_test")
		or die ("Problemas en la conexión: " . mysqli_error($this->conexion));
	}

	public function cantidadVotos($col,$tab) {
		$this->columna=$col;
		$this->tabla=$tab;
		$query="SELECT COUNT(".$this->columna.") FROM ".$this->tabla.";";
		
		$cantidad=mysqli_query($this->conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		$resultados=mysqli_fetch_array($cantidad); // Guardo en $resultados[0].
		return $resultados;
	}

	public function cantidadVotosUser($col,$tab,$valor) {
		$this->columna=$col;
		$this->tabla=$tab;
		$this->usuario=$valor;
		$query="SELECT COUNT(".$this->columna.") FROM ".$this->tabla." WHERE usuario=".$this->usuario.";";
		$cantidad=mysqli_query($this->conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		$resultados=mysqli_fetch_array($cantidad); // Guardo en $resultados[0].
		return $resultados;
	}

	public function borrarRegistro($tabla,$columna,$valor,$imagen) {
		if ($imagen) {
			$query="SELECT ".$imagen." FROM ".$tabla." WHERE ".$columna."=".$valor.";";
			$registro=mysqli_query($this->conexion, $query) 
			or die ("Problemas con la DB: " . mysqli_error($this->conexion));
			$resultados=mysqli_fetch_array($registro);
			if (file_exists($resultados[0])) {
				unlink($resultados[0]);
			}
			
		}
		$query="DELETE FROM ".$tabla." WHERE ".$columna."=".$valor.";";
		mysqli_query($this->conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		echo "Registro '".$valor."' ha sido eliminado<br>";
	}

	public function generarDivs($tabla,$col,$valor,$col2,$modo,$cont_i,$cont_f){
		$query="SELECT * FROM $tabla WHERE $col=$valor ORDER BY $col2 $modo;";

		$registros=mysqli_query($this->conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		
		while ($reg=mysqli_fetch_array($registros)){
			if ($cont_i<$cont_f) {
				echo "<article id='artnoti1'><a class='titulonoticia' href='#' onclick='mostrar(`noticia$reg[id]`)' >$reg[titulo]</a>";
				echo "<div id='noticia$reg[id]' style='display:none;' class='textonormal'>";
				if (file_exists("noticias/$reg[id].jpg")) {
					echo "<img src=noticias/$reg[id].jpg  width='120px'>";
					}
				echo "$reg[texto]</div></br></article>";
				$cont_i++;
			}
		}
		return $cont_i;
	}

	public function __destruct() {
		mysqli_close($this->conexion);
	}

/*$conexion=mysqli_connect("localhost","root","liketoday","test")
//$conexion=mysqli_connect("mysql.hostinger.com.ar","u862037669_ale","liketoday","u862037669_test")
or die ("Problemas en la conexión: " . mysqli_error($conexion));
*/
/*class Consultas {
	private $columna;
	private $tabla;
	public function cantidadvotos($col,$tab)
	{
		$this->columna=$col;
		$this->tabla=$tab;
		
		$conexion=mysqli_connect("localhost","root","liketoday","test")
		//$conexion=mysqli_connect("mysql.hostinger.com.ar","u862037669_ale","liketoday","u862037669_test")
		or die ("Problemas en la conexión: " . mysqli_error($conexion));
		$query="SELECT COUNT(".$this->columna.") FROM ".$this->tabla.";";
		$cantidad=mysqli_query($conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));
		$votos=mysqli_fetch_array($cantidad); // Guardo en $maxvotos[0].
		return $votos;

	}*/
	
	/*public function graficar()
	{
		for ($a=0; $a< $this->cantidad ; $a++) { 
			echo '<div id="estilo" style="margin:5px; text-align:'.$this->ubicacion.';color:';
			echo $this->colorFuente.';background-color:'.$this->colorFondo.'">';
			echo $this->titulo;
			echo '</div>';
		}
	}*/
}

?>