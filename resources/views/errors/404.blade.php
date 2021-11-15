@extends('errors.errors_html')
@section('title', 'página no encontrada')
@section('image-error')

    <img class="img-fluid" style="width: 40%;" src="{{ asset('/img/errors/error404.jpg') }}" alt="Error 404">
@endsection

