var contenedor;

function ini(){
	alert('jquery funciona')

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
	//alert('cargo heladeras')
	var nuevoHtml = $('#listadoHeladeras').html() 	// si .html() está vacio toma el contenido
	contenedor.html( nuevoHtml );					// si .html(variable) aplica el contenido
}
function cargarEquipos(){
//	alert('cargo equipos')
	var nuevoHtml = $('#listadoEquipos').html()
	contenedor.html( nuevoHtml );
}
function cargarNotebooks(){
//	alert('cargo notebooks')
	var nuevoHtml = $('#listadoNotebooks').html()
	contenedor.html( nuevoHtml );
}
function cargarMicroondas(){
//	alert('cargo microondas')
	var nuevoHtml = $('#listadoMicroondas').html()
	contenedor.html( nuevoHtml );
}

$(document).ready( ini );