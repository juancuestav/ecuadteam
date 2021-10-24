/* -------------------- */
/* EFECTO DE ESCRITURA  */
/* -------------------- */
const typed = new Typed('.typed', {

	stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
	startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: 1, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
});

window.sr = ScrollReveal();

sr.reveal('#logo', {
	duration: 2000,
	rotate: {
		x: 1,
		y: 180
	}
})

sr.reveal('.card', {
	duration: 2000,
	origin: 'bottom',
	distance: '100px',
	rotate: {
		x: 1,
		y: 180
	}
})

sr.reveal('.animationHideToShow', {
	duration: 2000
})

sr.reveal('.animationTopToBottom', {
	duration: 2000,
	origin: 'top',
	distance: '50px'	
})


