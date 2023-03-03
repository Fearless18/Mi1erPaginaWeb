<?php

class consultas extends PDO
{
	private $columna;
	private $tabla;
	private $conexion;

  public function __construct($file = 'config.ini')
    {
      if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');
       
        $dns = $settings['database']['driver'] .
        ':host=' . $settings['database']['host'] .
        ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
        ';dbname=' . $settings['database']['basedatos'];
       
        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    
    $conexion= new PDO ( $dns, $settings['database']['username'], $settings['database']['password'] )//mysqli_connect("localhost","root","liketoday","test")
		//$this->conexion=mysqli_connect("localhost","id6500284_root","libre","id6500284_test")
		or die ("Problemas en la conexión: " . mysqli_error($this->conexion));
		}

	public function actualizarPrecios() {
		$query="SELECT COUNT(".$this->columna.") FROM ".$this->tabla.";";
		
		$cantidad=mysqli_query($this->conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		$resultados=mysqli_fetch_array($cantidad); // Guardo en $resultados[0].
		return $resultados;
	}

	// public function cantidadVotosUser($col,$tab,$valor) {
	// 	$this->columna=$col;
	// 	$this->tabla=$tab;
	// 	$this->usuario=$valor;
	// 	$query="SELECT COUNT(".$this->columna.") FROM ".$this->tabla." WHERE usuario=".$this->usuario.";";
	// 	$cantidad=mysqli_query($this->conexion, $query) 
	// 	or die ("Problemas con la DB: " . mysqli_error($this->conexion));
	// 	$resultados=mysqli_fetch_array($cantidad); // Guardo en $resultados[0].
	// 	return $resultados;
	// }

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

	public function todoDeUnValor($tabla,$col,$valor){
		$query="SELECT * FROM $tabla WHERE $col=$valor;";
		$registros=mysqli_query($this->conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		return $registros;
	}

	public function listarProd($tabla){
		$query="SELECT * FROM $tabla ORDER BY codigo ASC;";
		$registros=mysqli_query($this->conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		return $registros;
	}

	public function listarPrecios($tabla){
		$query="SELECT * FROM $tabla;";
		$registros=mysqli_query($this->conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		return $registros;
		
	}
	public function updateArticulos($tipo,$color,$unidades,$ancho,$largo,$micrones,$precio,$siniva,$extra){
		$sin_iva=$ancho*$largo*$micrones*2*0.92/10000*$precio/$siniva+$extra;
		$con_iva=$sin_iva * 1.21;
		$query="UPDATE 
					bolsas_articulos 
				SET 
					sin_iva='$sin_iva',
					con_iva='$con_iva' 
				WHERE 
					ancho='$ancho' AND largo='$largo' AND micrones='$micrones' 
					AND tipo='$tipo' AND color='$color' AND unidades='$unidades';";

		mysqli_query($this->conexion, $query) or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		return $query;
	}

	public function agregarArticulo($codigo,$siniva,$coniva,$descripcion,$tipo,$colores,$unidades,$ancho,$largo,$micrones,$imagen,$mostrar) {
		if ($mostrar=="on") {$mostrar="1";} else {$mostrar="0";};
		$query="INSERT INTO bolsas_articulos (codigo,sin_iva,con_iva,descripcion,ancho,largo,micrones,unidades,tipo,color,imagen,mostrar) VALUES 
		($codigo,$siniva,$coniva,$descripcion,$ancho,$largo,$micrones,$unidades,$tipo,$colores,'$imagen',$mostrar);";
		mysqli_query($this->conexion, $query) or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		return $query;
	}
	
	public function eliminarArticulo($codigo) {
		$query="DELETE FROM bolsas_articulos WHERE codigo='$codigo';";
		$registros=mysqli_query($this->conexion, $query) or die ("Problemas con la DB: " . mysqli_error($this->conexion));
		$imagen="img/".$codigo.".png";
		if (file_exists($imagen)) {
				unlink($imagen);
			}
		return $query;
	}

	public function dividido($unidades){
		if ($unidades=="10") {$unidades="100"; return $unidades; }
		if ($unidades=="30") {$unidades="33"; return $unidades; }
		if ($unidades=="50") {$unidades="20"; return $unidades; }
		if ($unidades=="100") {$unidades="10"; return $unidades; }
	}
	public function extras($unidades){
		if ($unidades=="10") {$extra="0.20"; return $extra; }
		if ($unidades=="30") {$extra="0.10"; return $extra; }
		if ($unidades=="50") {$extra="0"; return $extra; }
		if ($unidades=="100") {$extra="0"; return $extra; }
	}


	public function __destruct() {
		mysqli_close($this->conexion);
	}
}

$consultas=new consultas();

?>