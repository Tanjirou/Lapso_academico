<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error @yield('title') </title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
      <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.ico') }}" />
      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-3">
            @yield('image-error')
        </div>

        <div class="row justify-content-center">
           <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">Ir al Inicio</a>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
