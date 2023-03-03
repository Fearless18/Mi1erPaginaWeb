
<?php
include("conexion.php");
?>
 
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<title>Registro - Login php mysql</title>
</head>
 
<body>
<form name="registrar" action="" id="form1" method="post" onsubmit="return validar()" />
    <h2>Ya estás registrado?<a href="../demo" > Inicia sesión</a></h2>
 
    <div>
    <?php
if(isset($_POST['registro']))//Vallidamos que el formulario fue enviado
{
    /*Validamos que todos los campos esten llenos correctamente*/
    if(($_POST['nick'] != '') && ($_POST['mail'] != '') && ($_POST['pass'] != '') && ($_POST['conf_pass'] != ''))
    {
        if($_POST['pass'] != $_POST['conf_pass'])
        {
            echo '<h5>Las contraseñas no coinciden</h5>';
        }
        else
        {
            $date= time(); 
            $nick= limpiar($_POST['nick']);
            $mail= limpiar($_POST['mail']);
            $pass= md5(md5(limpiar($_POST['pass'])));
            $ipuser= $_SERVER['REMOTE_ADDR'];
             
            $b_user= mysql_query("SELECT nick FROM usuarios WHERE nick='$nick'");
            if($user=@mysql_fetch_array($b_user))
            {
                echo '<h5>El nombre de usuario o el email ya esta registrado.</h5>';
                mysql_free_result($b_user); //liberamos la memoria del query a la db
            }
            else
            {
                if(validar_email($_POST['mail']))
                {
                    mysql_query("INSERT INTO usuarios (fecha,nick,mail,pass,ip) values ('$date','$nick','$mail','$pass','$ipuser')");
                    echo '<h4>Te has registrado Correctamente, ahora podras iniciar sesión como usuario registrado.</h4>';
                }
                else
                {
                    echo '<h5>El email no es valido.</h5>';
                }
            }
        }
    }
    else
    {
        echo '<h5>Deberas llenar todos los campos.</h5>';
    }
}
?>
 
    </div>
 
        <div>
        <label for="login_username">* Usuario :</label> 
        <input type="text" name="nick" id="nick" class="field required" title="Ingrese un nombre de usuario" />
  </div>
     
    <div>
        <label for="login_mail">* email :</label> 
        <input type="text" name="mail" id="mail" class="field required" title="Ingrese su correo" />
    </div>            
     
    <div>
        <label for="login_pass">* contraseña :</label> 
        <input type="password" name="pass" id="pass" class="field required" title="Ingrese su contraseña" />
    </div>
     
    <div>
        <label for="login_conf_pass">* Confirme contraseña:</label>
        <input type="password" name="conf_pass" id="conf_pass" class="field required" title="Confirme su contraseña" />
    </div>
         
         <span><input name="registro" type="submit" value="Registrar"  class="enviar"/>
        <input type="reset" name="Limpiar" style="width:100px;" tabindex="6" value="Limpiar" class="enviar" /></span>
    </form>
 
</body>
</html>