<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planificación</title>
</head>

<body>
    <style>
        .container {
            width: 90%;
            margin: 0 auto;
            padding: 2px
        }

        .row {
            text-align: center;
            margin-top: 20px;
        }

        h1,
        h2 {
            text-align: center;
        }
    </style>
    <div class="container">
        <div class="row">
            <h1>Planificación</h1>
        </div>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre Asignatura</th>
                        <th>Seccion Academica</th>
                        <th>Cantidad de Estudiantes</th>
                        <th>Cantidad de secciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h2>Recursos</h2>
        </div>
        @if ($departmentResources && count($departmentResources) > 0)
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>
                                Nombre del recurso
                            </th>
                            <th>
                                Cantidad
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departmentResources as $departmentResource)
                            <tr>
                                <td>{{ $departmentResource->description }}</td>
                                <td>{{ $departmentResource->quantity }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        @else
            <h2>No hay recursos cargados.</h2>
        @endif
    </div>
</body>

</html>
