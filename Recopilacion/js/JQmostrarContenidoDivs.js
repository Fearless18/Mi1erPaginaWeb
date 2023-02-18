$(document).ready(clickear);

	// defino la función clickear - Copia el div y agrega Holaaaaa2
	function clickear () {
		$('#boton').click(completar);
	}
	function completar () {
		var copia = $('#caja').html();
		$('#caja').html(copia+'</br>'+'HOlaaaa2');
		$('#caja').css('color','#f00');
	}


var contenedor;
function ini(){
	//esto sería guardar en una variable la referencia al botón
	var botonHeladeras = $('#botonHeladeras');
	botonHeladeras.click( cargarHeladeras );
	
	$('#botonEquipos').click( cargarEquipos );
	$('#botonNotebooks').click( cargarNotebooks );
	$('#botonMicroondas').click( cargarMicroondas );
	
	//paso 5
	contenedor = $('#contenedor');
	cargarHeladeras();
}

function cargarHeladeras(){
	var nuevoHtml = $('#listadoHeladeras').html() 	// si .html() está vacio toma el contenido
	contenedor.html( nuevoHtml );					// si .html(variable) aplica el contenido
}
function cargarEquipos(){
	var nuevoHtml = $('#listadoEquipos').html()
	contenedor.html( nuevoHtml );
}
function cargarNotebooks(){
	var nuevoHtml = $('#listadoNotebooks').html()
	contenedor.html( nuevoHtml );
}
function cargarMicroondas(){
	var nuevoHtml = $('#listadoMicroondas').html()
	contenedor.html( nuevoHtml );
}

$(document).ready( ini );