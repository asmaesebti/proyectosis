<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Leer código de barras con JavaScript by parzibyte</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
		<p id="resultado">Aquí aparecerá el código</p>
		<p>A continuación, el contenedor: </p>
		<div id="contenedor"></div>
		<!-- Cargamos Quagga y luego nuestro script -->
		<script src="https://unpkg.com/quagga@0.12.1/dist/quagga.min.js"></script>
    <script src="escanear.js"></script>
  </body>
</html>