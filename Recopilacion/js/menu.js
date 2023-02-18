function desplegar (vinculo) {
	
	// pido por el padre del this (vinculo)
	// me devuelve el <li> que contiene al tag <a>
	padre = vinculo.parentNode; 
	
	// obtengo el elemento hijo con la etiqueta <ul>
	lista = padre.getElementsByTagName('ul');
	
	// devuelve un ARRAY con todos los <ul> (en este caso, uno solo)
	// Hay que recorrerlo con un for.
	for (var i = 0; i < lista.length; i++)
	{
		if (
			lista[i].style.display == 'none')
		{
			lista[i].style.display = 'block';
		}else{
			lista[i].style.display = 'none';
		}

	};
}	