@extends('partials.base')
@section('title','Home')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> {!! $faqs[0]->titulo !!} </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! $faqs[0]->body !!}
            </div>
        </div>
    </div>

@stop