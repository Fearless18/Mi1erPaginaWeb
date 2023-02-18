function limpiar (entrada)
{
	if (entrada.value == 'Usuario') {
		entrada.style.color = 'black';
		entrada.value = '';
	}
	if (entrada.value == 'Password') {
		entrada.style.color = 'black';
		entrada.value = '';
		entrada.type = 'password';
	}
}

function llenar () {
	usu = document.getElementById('usuario');
	pass = document.getElementById('password');
	notificacion = document.getElementById('notificacion');

	if (usu.value == ''){
		usu.value = 'Usuario';
		usu.style.color = '#888';
		pass.value = 'Password';
		pass.style.color = '#888';
		pass.type = 'text';
		notificacion.innerHTML = 'Ingrese un usuario!';
	}
}