@extends('errors.errors_html')
@section('title', 'demasiadas peticiones en corto tiempo')
@section('image-error')

    <img class="img-fluid" src="{{ asset('/img/errors/error429.png') }}" alt="Error 404">
@endsection
