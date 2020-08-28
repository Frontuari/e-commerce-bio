<!DOCTYPE html>
<html>
<head>
	<title>Gracias por Su compra en Biomercados</title>
</head>
<body>Gracias por Comprar en Biomercados</p>
<button type="button" onclick="closeThanks();">Salir</button>
<script type="text/javascript">
	closeThanks = function(){
		console.log(window.opener.paymentData);
		window.opener.saludarDesdeIframe();
		window.close();
	}
</script>
</body>
</html>