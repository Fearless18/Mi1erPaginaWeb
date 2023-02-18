<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>página</title>
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
  <span class="buscar"><a href="#" id="divbuscar" onclick="alternar();">Ocultar Buscar</a></span>
</nav>
<main>
<section id="seccionprincipal">

  <article id="detallesbanda">
    <p class="nombrebanda">Aerosmith</br></br></br></p>
    <article id="logobanda"><img class="logobanda" src="img/logoaerosmith.png"></article>
    <ul>
      <li><a href="#tabs-1">Historia</a></li>
      <li><a href="#tabs-2">Discografía</a></li>
      <li><a href="#tabs-3">Multimedia</a></li>
    </ul></br></br>

    <div id="tabs-1">
      <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
    </div>
    <div id="tabs-2">
      <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
    </div>
    <div id="tabs-3">
      <div id="imagenesbanda"><img class="imagenesbanda" src="img/aerosmith01.jpg"></div>
      <div id="imagenesbanda"><img class="imagenesbanda" src="img/aerosmith02.jpg"></div>
      <div id="imagenesbanda"><img class="imagenesbanda" src="img/aerosmith03.jpg"></div>
      <div id="imagenesbanda"><img class="imagenesbanda" src="img/aerosmith04.jpg"></div>
    </div>
  </article>
</section>
  <aside id="costado">
    <label for="buscar">Buscar: </label>
    <input type"search" id="buscar"></br></br></br>
    
      <label for="genero"><h2>Buscar por género</h2></label>
      <select name="genero" id="genero">
        <option>AOR</option>
        <option>Hard Rock</option>
        <option selected="selected">Metal</option>
        <option>Pop</option>
        <option>Rock</option>
      </select> 
      <button>Ir</button>
  </br></br></br></br>
  <h2>Buscar por orden alfabético</h2>
      <select name="alfabeticoAF" id="alfabeticoAF">
        <option selected="selected">A-F</option>
        <option>Aerosmith</option>
        <option>Apocalyptica</option>
        <option>Avantasia</option>
        <option>Bon Jovi</option>
        <option>Bryan Adams</option>
        <option>Foo Fighters</option>
      </select></br></br>
      <select name="alfabeticoGO" id="alfabeticoGO">
        <option selected="selected">G-O</option>
        <option>Garbage</option>
        <option>Gotthard</option>
        <option>Guns N' Roses</option>
        <option>Mr. Big</option>
      </select></br></br>
      <select name="alfabeticoPZ" id="alfabeticoPZ">
        <option selected="selected">P-Z</option>
        <option>Paul Gilbert</option>
        <option>Slash</option>
        <option>Van Halen</option>
        <option>Whitesnake</option>
      </select>
  </div>
  </aside>
</main>
<footer>pie</footer>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</body>
</html>