@extends('voyager::master')

@section('page_title',$title)

@section('css')
<style type="text/css">
	div.card-header, div.card-body{
		padding-left:20px !important;
	}
</style>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3>{{ $title }}</h3>
					</div>
					<div class="card-body">
						
					</div>
				</div>
			</div>
		</div>
	</div>
@stop