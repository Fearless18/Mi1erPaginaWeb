
<?php include('conexion.php'); ?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<title>Registro - Login php mysql</title>
</head>
 
<body>
   <form name="login_user" id="form1" method="POST" action=""> 
   <div>
   <?php
 
if(isset($_POST['login']))
{
    /*Validamos que todos los campos esten llenos correctamente*/
    if(($_POST['nick'] != '') && ($_POST['pass'] != '') )
    {
 
    $nick= $_POST['nick'];
    $pass= md5(md5($_POST['pass']));
    $b_user=mysql_query("SELECT * FROM usuarios WHERE nick='$nick'");   
    $ses = @mysql_fetch_assoc($b_user) ;
    if(@mysql_num_rows($b_user))
    {
        if($ses['pass'] == $pass)
        {   
            $_SESSION['id']=        $ses["id"];
            $_SESSION['fecha']= $ses["fecha"];
            $_SESSION['nick']=  $ses["nick"];
            $_SESSION['mail']=  $ses["mail"];
            $_SESSION['ip']=        $ses["ip"];
        }
        else
        {
            echo '<h5>Contraseña incorrecta.</h5>';
        }
    }
    else
    {
        echo '<h5>Nombre de Usuario incorrecto.</h5>';
    }
    }
    else
     
    echo '<h5>Deberas llenar todos los campos.</h5>';
     
    }
     
if(isset($_GET['modo']) == 'desconectar')
{
    session_destroy();
    echo '<meta http-equiv="Refresh" content="2;url=../demo"> ';
    exit ('Desconectando espere.......');
}
     
if(isset($_SESSION['id']))
{
    echo '<p>Usuario :   ' . $_SESSION['nick'] . '</p>';
    echo '<p>Fecha de registro :   ' . date("d-m-Y - H:i", $_SESSION['fecha']) . '</p>';
    echo '<p>mail :   ' . $_SESSION['mail'] . '</p>';
    echo '<p>IP :   ' . $_SESSION['ip'] . '</p>';
    echo '<a href="?modo=desconectar">cerrar sesión';
    echo '<a href="perfil.php">ir al perfil</a>';
 
}
else
{
?>
    </div>
    <div>
        <label for="login_username">Usuario :</label> 
        <input type="text" name="nick" id="login_username" class="field required" title="Ingrese su nombre de usuario" />
    </div>            
 
    <div>
        <label for="login_password">Clave :</label>
        <input type="password" name="pass" id="login_password" class="field required" title="Clave requerida" />
    </div>            
     
                 
    <div class="submit">
        <input type="submit" class="enviar" name="login" style="width:100px;" tabindex="6" value="Entrar" />
         
        <label>
            <input type="checkbox" name="remember" id="login_remember" value="0" />
            Recuerdeme en este computador
        </label>  
         
    </div>
     
    <p class="back">No eres usuario?<a href="registro.php">Registrate..</a></p>
   
</form>   
<?php
}
?>
</body>
</html>