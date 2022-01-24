<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constancia de studios</title>
    <style type="text/css">

            html {
                height: 100%;
            }

            body {
                background: #ecf0f1;
                font-family: Arial, Helvetica, sans-serif;
                margin: 5px;
                display: flex;
                flex-direction: column;
                height: 100%;
                /*border: 2px solid black;*/
            }
            header {
                flex: 0 0 auto;s
            }

            /* MEMBRETE*/
            .right-col {
            float: right;
            margin-top: 20px;
            margin-right: 30px;
            margin-bottom: 30px;
            width: 70%;
            height: auto;
            padding: 1%;
            text-align: center;
            justify-content: center;
            font-size: 15px;
            font-weight:bold;
            line-height: 40%;

            }

            .logo {
            float: left;
            margin-top: 20px;
            margin-left: 35px;
            margin-bottom: 30px;
            width: 15%;
            height: 120px;
            padding: 1%;
            justify-content: center;
            text-align: center;
            /*border: 2px solid blue;*/
            }

            h1 {

                margin-top: 7px;
                padding: 0%;
                text-align: center;
                width: 98%;
                height: auto;
            }
            .seccion1 {
                margin-right: 32px;
                margin-left: 32px;
                margin-bottom: -15px;
                margin-top: -10px;
                text-indent: 1cm;
                padding: 0%;
                text-align: justify;
            }

            .seccion2 {
                margin-top: -18px;
                margin-bottom: -10px;
                padding: 0%;
                text-align: center;
                font-weight: bold;
                font-size: 22px;
            }
            .seccion3 {
                margin-right: 32px;
                margin-left: 32px;
                margin-bottom: -15px;
                margin-top: -18px;
                padding: 0%;
                text-align: justify;
            }
            .seccion4 {
                margin-top: -15px;
                margin-bottom: -10px;
                padding: 0%;
                text-align: center;
                font-weight: bold;
                font-size: 22px;
                text-transform: uppercase;
            }
            .seccion5 {
                margin-right: 32px;
                margin-left: 32px;
                margin-bottom: -10px;
                margin-top: 20px;
                padding: 0%;
                text-align: justify;
            }

            .seccion6 {
                font-weight: bold;
                margin-bottom: 15px;
                margin-top: 100px;
                padding: 0%;
                text-align: center;
            }
            table {
                text-align: center;
                font-size: 12px;
                justify-content: center;
                table-layout:fixed;
                width: 82%;
                border-collapse: collapse;
                margin: 0 auto;
            }
            thead th {

            }
            thead th:nth-child(1) {
                width: 12%;
            }
            thead th:nth-child(3) {
                width: 10%;
            }
            thead th:nth-child(4) {
                width: 12%;
            }
            thead th:nth-child(5) {
                width: 12%;
            }
            footer {
                position: relative;
                height:50px;
                line-height:15px;
                text-align: center;
                padding: 5px;
                font-size: 12px;
                flex: 0 0 auto;
            }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/img/logo.png">
        </div>
        <div class="right-col" id="membrete">
            <p>REPÚBLICA BOLIVARIANA DE VENEZUELA</p>
            <p>UNIVERSIDAD NACIONAL EXPERIMENTAL POLITÉCNICA</p>
            <P>"ANTONIO JOSÉ DE SUCRE"</P>
            <P>VICERECTORADO BARQUISIMETO</P>
            <P>UNIDAD REGIONAL DE ADMISIÓN Y CONTROL DE ESTUDIOS</P>
        </div>
    </header>

    <div>
        <h1>Constancia de Estudios</h1>
    </div>

    <div class="seccion1">
        <p>Quien suscribe, el jefe de la Unidad Regional de Admisión y Control de Estudio del Vicerrectorado Barquisimeto
            de la Universidad Nacional Experimental Politécnica "Antonio José de Sucre, hace constar que el ciudadano(a):"
        </p>
    </div>

    <div class="seccion2">
        <h5 class="">{{ auth()->user()->names }} {{ auth()->user()->last_names }}</h5>
    </div>

    <div class="seccion3">
        <p>titular de la Cédula de Identidad N° <b>{{ auth()->user()->dni }}</b>, matriculado en esta Universidad bajo el expediente
            {{ $data->proceedings }} en la especialidad de: </p>
    </div>

    <div class="seccion4">
            <h5> {{ $data->career_name }} </h5>
    </div>

    <div class="seccion3">
        <p>tiene {{ $data->u_approved_credit}} unidades de creditos aprobadas, los cuales lo ubican según el reglamento en el
            {{ $data->semester}}° semestre.</p>
    </div>

    <div class="seccion5">
        <p>El mencionado bachiller, se encuentra inscrito en el lapso académico {{ $load->lapse}}, cursanso las siguientes asignaturas: </p>
    </div>

    <div class="table-responsive">
        <table class="">
            <thead>
                <tr class="text-center">
                    <th><ins> Codigo </ins></th>
                    <th><ins>Asignatura</ins></th>
                    <th><ins>U.C.</ins></th>
                    <th><ins>Sección</ins></th>
                    <th><ins>Condición</ins></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_courses as $data_course)
                    <tr class="text-center">
                        <td class="text-primary">{{ $data_course->code }}</td>
                        <td>{{ $data_course->name }}</td>
                        <td>{{ $data_course->credit_units }}</td>
                        <td>{{ $data_course->section }}</td>
                        <td>{{ $data_course->statusnote }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <div id="fecha" class="seccion5">
        makeArray(fecha);
    </div>

    <div class="seccion6">
        <p>____________________________________<br />
            Msc José Luis Villegas<br />
            Unidad Regional de Admisión y Control de Estudio
        </p>
    </div>

    <footer>
        <p>CUALQUIER ENMIENDA ANULA EL PRESENTE DOCUMENTO<br />
        LA UNIVERSIDAD TÉCNICA DEL ESTADO VENEZOLANO</p>
    </footer>


       <script type="text/javascript">
        //<![CDATA[
        function makeArray() {
        for (i = 0; i<makeArray.arguments.length; i++)
        this[i + 1] = makeArray.arguments[i];}
        var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
        'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
        var fecha = ("La presente constancia se expide a petición de la parte interesada en Barquisimeto a los " + day + " días del mes de " + months[month] + " del año " + year + ".");
        document.getElementById("fecha").innerHTML = fecha;
        //]]>
        </script>
        <script>
            function ajustarPie() {
                var winH = $(window).height();
                var docH = $("body").height();
                var pieH = $("footer").height();

                if (docH + pieH < winH) {
                $("footer").attr("class", "bottom");
                } else {
                    $("footer").attr("class", "");
                    }
                }

            $(document).ready(ajustarPie);
            $(window).on("resize", ajustarPie);
        </script>
</body>
</html>
