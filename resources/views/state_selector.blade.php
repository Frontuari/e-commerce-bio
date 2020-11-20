<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <title>{{ $title }}</title>
	    <!-- Scripts -->
	    <script src="{{ asset('js/app.js') }}" defer></script>
	    <!-- Fonts -->
	    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	    <!-- Styles -->
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/store.css') }}">
	    <style type="text/css">
	    	body{
	    		background: #72b615 !important;
	    	}

	    	div.lista h1{
	    		color: white !important;
	    		font-weight: bold;
	    	}

	    	div.logo img{
	    		width: 450px;
	    		height: 340px;
	    		margin-top: 50px;
	    	}

	    	div.lista ul{
	    		list-style: none;
	    		margin-top: 60px;
	    	}

	    	div.lista ul li{
	    		background: #8dc645;
	    		border-radius: 20px !important;
	    		padding: 10px;
	    		margin-top: 20px;
	    		font-weight: bold !important;
	    		color: white;
	    		font-size: 18px !important;
	    	}

	    	div.lista ul li:hover{
	    		cursor: pointer;
	    	}
	    </style>
	</head>
	<body>
		<div id="app">
			<!--<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="{{ asset('img/logo.png') }}" style="width: 150px; height: 150px;" />
						<h3 style="margin:10px auto;">{{ $title }}</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="list-group">
							@foreach($data as $state)
						  		<li class="list-group-item" onclick="setStateId('{{ $state->id }}','{{ $state->name }}');" data-toggle="collapse" data-target="stores_{{ $state->id }}">{{ $state->name }}

						  		</li>
						  	@endforeach
						</ul>
					</div>
				</div>
			</div>-->
			<div class="container">
				<div class="row" style="margin-top: 20%;">
					<div class="col-md-6 logo text-center">
						<img src="{{ asset('img/logo_bio_blanco.png') }}">
					</div>
					<div class="col-md-6 lista text-center">
						<h1>Por favor selecciona el estado donde deseas entrar</h1>
						<ul>
							@foreach($data as $state)
						  		<li onclick="setStateId('{{ $state->id }}','{{ $state->name }}');" data-toggle="collapse" data-target="stores_{{ $state->id }}">{{ $state->name }}

						  		</li>
						  	@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			setStateId = function(id, name){
				location.href="/store/"+id+"/"+name;
			}
		</script>
	</body>
</html>
