//https://formspree.io/f/meqnwozr


const form = document.getElementById('form');

async function enviarEmail(e){
	e.preventDefault();

	const fd = new FormData(this);

	const response = await fetch('https://formspree.io/f/meqnwozr',{


		method: 'POST',
		body: fd,
		headers: {
			Accept: 'application/json'
		}

		});

	if (response.ok) {
		this.reset();
		alert("Mensaje enviado");
	}else{
		alert("Error al enviar el mensaje");
	}


}

form.addEventListener('submit', enviarEmail);