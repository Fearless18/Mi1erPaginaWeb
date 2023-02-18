// css=font-weight -> js=fontWeight
// css=font-size   -> js=fontSize

function iluminar (fila) { // guarda el valor en la variable Fila
	fila.style.background = '#55f';
	fila.style.fontSize = '20px'; 
	fila.style.color = 'white';
	fila.style.fontWeight = 'bold'; 
}

function apagar (fila) {
	fila.style.background = ''; 
	fila.style.color = '';  // al ponerlo vacío, vuelve a su valor original.
	fila.style.fontSize = '';
	fila.style.fontWeight = '';
}