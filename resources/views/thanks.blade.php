<!DOCTYPE html>
<html>
<head>
	<title>¡Muchas Gracias por su compra!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>

	<div class="container">
		<div class="row" style="margin: 20px auto;">
			<div class="col-md-12">
				<p class="text-center">
					<img src="{{ asset('img/logo_bio.png') }}">
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">¡Muchas Gracias por su compra!</h3>
					</div>
					<div class="card-body text-center">
						<p>Desde bio mercados agradecemos su preferencia</p>
						<p>¡Inspirados en servir!</p>
					</div>
					<div class="card-footer text-right">
						<button class="btn btn-success" onclick="closeThanks();" type="button">Salir</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	closeThanks = function(){
		//window.opener.createPayment();
		Print.postMessage('hola');
		//window.close();
	}
</script>
</body>
</html>