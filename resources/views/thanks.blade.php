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
						<button class="btn btn-success" id="btn_thanks" type="button">Salir</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$("#btn_thanks").click(function(){
			var orderno = localStorage.getItem('orderno');
			$.get("{{ url('/123pago/getdataresponse/') }}"+orderno, function(data){
                let d = JSON.parse(data);
                alert(d);
                Print.postMessage('la data es: '+d);
            });

		});
	});
</script>
</body>
</html>