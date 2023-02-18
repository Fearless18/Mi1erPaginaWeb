
$(document).ready(inicializar);

function inicializar () {
	$('#vinculo1').click(deslizar);
	$('#vinculo2').click(desvanecer);
}

function deslizar () {
	$('#caja1').slideToggle('slow');
}

function desvanecer () {
	$('#caja2').fadeToggle('slow');
}