//https://formspree.io/f/meqnwozr


const form = document.getElementById('form');
const sendMail = document.getElementById('emailA');

function enviarEmail(e){
	e.preventDefault();

	const fd = new FormData(this);
sendMail.setAttribute('href', `mailTo:msb.caixa@gmail.com?subject=${fd.get('subject')}&body=${fd.get('message')}`);
	
	sendMail.click();

}

form.addEventListener('submit', enviarEmail);