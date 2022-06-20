//https://formspree.io/f/meqnwozr

//xtcyypkfhxiasope  enviar email msb.caixa


const express = require('express');
const nodemailer = require('nodemailer');
const path = require('path');

require('dotenv').config();

const app = express();

app.use('/', express.static(path.join(__dirname, 'public')));
app.use(express.urlencoded({extended: false}));

const transporter = nodemailer.createTransport({
	host: 'smtp.gmail.com',
	port: 465,
	secure: true,
	auth:{
		user: process.env.TRANSPORTE_USER,
		pass: process.env.TRANSPORTER_PASSWORD
	}
});

transporter.verify().then(() => console.log('listo para enviar el correo electronico'));

app.post('', async (req, res) => {
	try {
		const {body} = req;
		const {subject, message} = body;

		const content = `<h2>${message}</h2>`;

		const info = await transporter.sendMail({
			from: 'Mensaje recibido de node <msb.caixa@gmail.com>',
			to: 'msb.duck@gmail.com',
			subject: subject,
			html: content
		});

		if (!info.error) {
			res.send('Mensje enviado');
		}else{
			console.log(info.error);
			res.send(info.error);
		}

	} catch(e) {
		// statements
		console.log(e);
		res.send(e.message);
	}
} )

//npm init -y
//npm i express nodemon dotenv nodemailer

//npm run dev


app.listen(3000, ()=> console.log('Escuchando desde http://localhost:3000'));

