<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="../css/estilos.css" type="text/css" rel="stylesheet">
  <?php include 'css/css.html'; ?>
  <script type="text/javascript" src="../js/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="../js/javascript.js"></script>
  <script type="text/javascript">
  var password = document.getElementById("password");
var confirm_password = document.getElementById("password2");

function validatePassword(){
  if(password.value != password2.value) {
    password2.setCustomValidity("Passwords Don't Match");
    return false;
  } else {
    password2.setCustomValidity('');
    return true;
  }
}

password.onchange = validatePassword();
confirm_password.onkeyup = validatePassword();
  </script>

</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in
        require 'login.php';
    }
    
    elseif (isset($_POST['register'])) { //user registering
        require 'register.php';
    }
}
?>
<body>
  <section id="contenedormenu">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
  <a class="navbar-brand" href="#" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--/.navbar-header -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../nosotros.php">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contactos.php">Contactos</a>
      </li>
    </ul>
  </div>
</nav>
</section>

  <div class="form">
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Registrarse</a></li>
        <li class="tab active"><a href="#login">Iniciar sesión</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>¡Bienvenido!</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Dirección de e-mail<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">¿Olvidó la contraseña?</a></p>
          
          <button class="button button-block" name="login" />Iniciar sesión</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Ingrese sus datos</h1>
          
          <form action="index.php" method="post" onSubmit="return validatePassword()" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellido<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Dirección de e-mail<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>Contraseña<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" id="password" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Registrarse</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>
