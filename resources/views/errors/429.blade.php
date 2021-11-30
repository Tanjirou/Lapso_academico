@extends('errors.errors_html')
@section('title', 'demasiadas peticiones en corto tiempo')
@section('image-error')

    <img class="img-fluid" style="width: 40%;" src="{{ asset('/img/errors/error429.jpg') }}" alt="Error 404">
@endsection
