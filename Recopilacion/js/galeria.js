function mostrar (carro) 
{
	// capturo los 3 divs y los oculto
	div1 = document.getElementById('imagen1');
	div2 = document.getElementById('imagen2');
	div3 = document.getElementById('imagen3');

	div1.style.display = 'none';
	div2.style.display = 'none';
	div3.style.display = 'none';

	// muestro el auto seleccionado (recibido en la variable carro).
	divSeleccionado = document.getElementById(carro);
	divSeleccionado.style.display = 'block';




}