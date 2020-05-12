@extends('partials.base')
@section('title','Home')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> {!! $terms[0]->titulo !!} </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! $terms[0]->body !!}
            </div>
        </div>
    </div>

@stop