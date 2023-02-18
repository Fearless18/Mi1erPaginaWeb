function validar ()
{
	// captura de los inputs del formulario en variables
	usuario = document.getElementById('usuario');
	password = document.getElementById('password');
	password2 = document.getElementById('password2');
	paises = document.getElementById('paises');
	tyc = document.getElementById('acepto');
	leido = document.getElementsByName('leido'); // devuelve array
	edad = document.getElementById('edad');
	email = document.getElementById('email');
	// defino una variable de error
	error = false;
	// limpio todos los errores viejos
	document.getElementById('mensaje_usuario').innerHTML=' ';   usuario.style.border = "";
	document.getElementById('mensaje_password').innerHTML=' ';	password.style.border = "";
	document.getElementById('mensaje_password2').innerHTML=' ';	password2.style.border = "";
	document.getElementById('mensaje').innerHTML=' ';
	document.getElementById('mensaje_paises').innerHTML=' ';    paises.style.border = "";
	document.getElementById('mensaje_edad').innerHTML=' ';	    edad.style.border = "";
	document.getElementById('mensaje_email').innerHTML=' ';	    email.style.border = "";
	document.getElementById('mensaje_paises').innerHTML=' ';    paises.style.border = "";
	document.getElementById('mensaje_acepto').innerHTML=' ';    tyc.style.border = "";
	document.getElementById('mensaje_leido').innerHTML=' ';
	// valido usuario completo
	if (usuario.value == '')
	{
		document.getElementById('mensaje_usuario').innerHTML='Ud. debe completar el usuario!';
		usuario.style.border = "2px red solid";
		error=true;
	} 

	// valido password completo
	if (password.value == '')
	{
		document.getElementById('mensaje_password').innerHTML='Ud. debe completar el password!';
		password.style.border = "2px red solid";
		error=true;
	
	} else {

		if (password.value.length < 5 || password.value.length > 10) {
			document.getElementById('mensaje_password').innerHTML='El password debe tener entre 5 y 10 caracteres!';
			password.style.border = "2px red solid";
			error=true;
	
		} else {
			// comparo ambos passwords
			if (password.value != password2.value)
			{
				document.getElementById('mensaje_password2').innerHTML='Las contraseñas no coinciden!';
				password2.style.border = "2px red solid";
				error=true;
			}

		}
	}

	// valido edad completo y numerico
	if (edad.value == '')
	{
		document.getElementById('mensaje_edad').innerHTML='Ud. debe completar la edad!';
		edad.style.border = "2px red solid";
		error=true;
	
	} else {
		// pregunto si la edad no es número / "is Not a Number"
		if (isNaN(edad.value)) 
		{
			document.getElementById('mensaje_edad').innerHTML='La edad debe ser numérica';
			password.style.border = "2px red solid";
			error=true;
		}
	}

	// valido email completo y formato correcto
	if (email.value == '')
	{
		document.getElementById('mensaje_email').innerHTML='Ud. debe completar el e-mail';
		email.style.border = "2px red solid";
		error=true;
	
	} else {
		// pregunto si la edad no es número / "is Not a Number"
		if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,5})+$/.test(email.value)==false) 
		{
			document.getElementById('mensaje_email').innerHTML='El e-mail debe tener un formato correcto!';
			password.style.border = "2px red solid";
			error=true;
		}
	}

	// valido paises completo
	if (paises.value == '')
	{
		document.getElementById('mensaje_paises').innerHTML='Ud. Debe seleccionar un país!';
		paises.style.border = "2px red solid";
		error=true;
	} 


	// controlo el checkbox
	if (tyc.checked == false)
	{
		document.getElementById('mensaje_acepto').innerHTML='Ud. debe aceptar los términos y condiciones!';
		tyc.style.border = "2px red solid";
		error=true;
	} 

	// controlo el radiobutton
	radiocheckeado = false;

	for (var i = 0; i < leido.length; i++) {
		if (leido[i].checked) {
			radiocheckeado = true;
		}
	}
	if (radiocheckeado == false)
	{
		document.getElementById('mensaje_leido').innerHTML='Contestame carajo!';
		error=true;
	} 

	// confirmo la validación
	if (error == true){
		document.getElementById('mensaje').innerHTML='Su formulario contiene errores';
		return false;
		
	} else {
		document.getElementById('mensaje').innerHTML='Gracias por enviar los datos!';
		return true;
		
	}
}