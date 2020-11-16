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
	</head>
	<body>
		<div id="app">
			<div class="container">
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
			</div>
		</div>
		<script type="text/javascript">
			setStateId = function(id, name){
				location.href="/store/"+id+"/"+name;
			}
		</script>
	</body>
</html>
