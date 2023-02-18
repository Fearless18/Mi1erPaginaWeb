function mostrar (mensaje){

	// capturo el div
	div = document.getElementById('caja');
	//escribo dentro del div el mensaje
	div.innerHTML = mensaje;
	div.style.display = 'block';

}