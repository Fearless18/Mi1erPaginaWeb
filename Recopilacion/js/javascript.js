function limpiar (entrada)
{
	if (entrada.value == 'usuario') {
		entrada.style.color = 'black';
		entrada.value = '';
	}
	if (entrada.value == 'password') {
		entrada.style.color = 'black';
		entrada.value = '';
		entrada.type = 'password';
	}
}

function contrasenias () {
	contra1 = document.getElementById('contrasena').value;
	contra2 = document.getElementById('contrasena2').value;
	notificacion = document.getElementById('errorcontra');

	if (contra1 == contra2){
		notificacion.innerHTML = ' ';
	} else {
		notificacion.innerHTML = 'Las contraseñas no coinciden';
	}
}

$(function() {
	$( "#detallesbanda" ).tabs({event: "mouseover"});
});


function alternar () {
	//capturo el DIV y A, por su atributo id y lo guardo en una variable	
	costado = document.getElementById('costado');
	detallesbanda = document.getElementById('detallesbanda');
	seccionprincipal = document.getElementById('seccionprincipal');
	divbuscar = document.getElementById('divbuscar');
		
	//oculto el div
	if (costado.style.display == 'none')
		{
			costado.style.display = 'block';
			detallesbanda.style.width = '80%';
			seccionprincipal.style.width = '80%';
			divbuscar.innerHTML = 'Ocultar Buscar';
	
	}else{
			costado.style.display = 'none';
			detallesbanda.style.width = '90%';
			seccionprincipal.style.width = '100%';
			divbuscar.innerHTML = 'Mostrar Buscar';
		}
}

function encuestaresultados () {
	//capturo el DIV y A, por su atributo id y lo guardo en una variable	
	encuestapregunta = document.getElementById('encuestapregunta');
	encuestaresultados = document.getElementById('encuestaresultados');
	encuestaerror = document.getElementById('encuestaerror');
	votacion = document.getElementsByName('votacion'); // devuelve array
	radiocheckeado = false;

	for (var i = 0; i < votacion.length; i++) {
		if (votacion[i].checked) {
			radiocheckeado = true;
		}
	}
	if (radiocheckeado == false) {
		encuestaerror.innerHTML='Tienes que elegir una respuesta!';
	} else {
		encuestapregunta.style.display = 'none';
		encuestaresultados.style.display = 'block';
	}
}

/* Autocomplete */
  $(function() {
    var availableTags = [
      "Aerosmith",
      "Apocalyptica",
      "Avantasia",
      "Bon Jovi",
      "Bryan Adams",
      "Foo Fighters",
      "Garbage",
      "Gotthard",
      "Guns N' Roses",
      "Mr. Big",
      "Paul Gilbert",
      "Slash",
      "Van Halen",
      "Whitesnake"
    ];
    $( "#buscar" ).autocomplete({
      source: availableTags,
    messages: {
        noResults: '',
        results: function() {}
    }
  });
});


function mostrar (noticia) {
	div=document.getElementById(noticia);
	if (div.style.display == 'none')
		{
			div.style.display = 'block';
	}else{
			div.style.display = 'none';
		}
}
