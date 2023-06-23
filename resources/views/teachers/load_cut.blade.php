@section('styles_home')
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
 <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/pages/faq/faq.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/elements/breadcrumb.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
 <link href="{{ asset('plugins/table/datatable/custom_dt_miscellaneous.css') }}"rel="stylesheet" type="text/css">
 <link href="{{ asset('plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet" type="text/css" >
 <link href="{{ asset('plugins/table/datatable/custom_dt_custom.css') }}" rel="stylesheet" type="text/css">
 <link href="{{ asset('plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
 <script src="{{ asset('plugins/sweetalerts/promise-polyfill.js') }}"></script>
 <link href="{{ asset('assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <!-- END PAGE LEVEL PLUGINS/CUSTOM  -->
@endsection
@section('javascripts_sweet')
<script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalerts/custom-sweetalert.js') }}"></script>
@endsection
<x-app-layout>
    <!--  BEGIN CONTENT AREA  -->
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" ><a href="javascript:void(0);">Carga A/R</a></li>
                                <!--<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">General</a></li>-->
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow">
                        <div class="row mt-0">
                            <div class="col-md-12 text-center">
                                <h2 class="text-bold text-primary fond-bold m-0">CARGA DE ESTUDIANTES</h2>
                                <hr>
                            </div>
                        </div>
                        {{-- <div class="row mt-0 mb-4">
                            <div class="col-md-12 justify-content-center">
                                <div class="form-group">
                                    <label for="textcorte">Seleccione el corte</label>
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">Corte I</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">Corte II</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline3">Corte III</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline4">Corte IV</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textAsign">Mención</label>
                                     <select class="form-control" id="textAsign">
                                            <option>Seleccione</option>
                                            <option>Matematica</option>
                                            <option>Física</option>
                                            <option>Asignaturas Generales</option>
                                            <option>Ciencias Gráficas</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textAsign">Asignatura</label>
                                     <select class="form-control" id="textAsign">
                                            <option>Seleccione</option>
                                            <option>Cálculo</option>
                                            <option>Algebra</option>
                                            <option>Programación I</option>
                                            <option>Lab. Fisica</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textCorte">Sección</label>
                                    <select class="form-control" id="textCorte">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>4</option>
                                            <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textPunt">Cantidad Estudiantes</label>
                                    <input class="form-control" type="text" placeholder="40" >
                                    <small id="sh-text1" class="form-text text-muted">Cantidad de estudiantes que cursaron la materia.</small>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h2 class="text-bold text-center text-primary fond-bold m-0 mb-3">BUSCAR UN TITULO PARA COLOCAR</h2>
                        <div class="row justify-content-end">
                            <div class="col-md-6 align-content-end mb-4">
                                <input type="text" id="searchTerm" class="form-control" placeholder="Introduce la cédula del estudiante a Buscar..." onkeyup="doSearch()">
                            </div>
                            <div class="form-group text-center col-md-3">
                                <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Buscar</button>
                           </div>
                           <div class="form-group text-center col-md-3 align-content-end">
                                <button class="btn btn-success mr-2 btn-lg"> <a href="#"></a> NUEVO</button>
                            </div>
                        </div>
                            <div class="widget-content widget-content-area table-responsive">

                                <table id="datos" class="table table-bordered table-hover table-striped mb-4">
                                    <thead>
                                        <tr>
                                            <th class="text-center"> Cédula </th>
                                            <th class="text-center">Carrera</th>
                                            <th class="text-center">Aprobado</th>
                                            <th class="text-center">Reprobado</th>
                                            <th class="text-center">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center mb-4"> 1234556 </td>
                                            <td class="text-center">Ingenieria Mecanica</td>
                                            <td class="text-center"><input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><button class="mr-2 btn btn-danger warning confirm">Eliminar</button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center mb-4"> 0876543e46 </td>
                                            <td class="text-center">Ingenieria Mecanica</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><button class="mr-2 btn btn-danger warning confirm">Eliminar</button></td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                            <div class="row">
                                <div class="form-group text-center col-md-12">
                                     <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Registrar</button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script id="rendered-js">
    function doSearch()
{

const tableReg = document.getElementById('datos');

const searchText = document.getElementById('searchTerm').value.toLowerCase();

let total = 0;



// Recorremos todas las filas con contenido de la tabla

for (let i = 1; i < tableReg.rows.length; i++) {

// Si el td tiene la clase "noSearch" no se busca en su cntenido

if (tableReg.rows[i].classList.contains("noSearch")) {

    continue;

}



let found = false;

const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

// Recorremos todas las celdas

for (let j = 0; j < cellsOfRow.length && !found; j++) {

    const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

    // Buscamos el texto en el contenido de la celda

    if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

        found = true;

        total++;

    }

}

if (found) {

    tableReg.rows[i].style.display = '';

} else {

    // si no ha encontrado ninguna coincidencia, esconde la

    // fila de la tabla

    tableReg.rows[i].style.display = 'none';
}

}

// mostramos las coincidencias

const lastTR=tableReg.rows[tableReg.rows.length-1];

const td=lastTR.querySelector("td");

lastTR.classList.remove("hide", "red");

if (searchText == "") {

lastTR.classList.add("hide");

} else if (total) {

td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");

} else {

lastTR.classList.add("red");

td.innerHTML="No se han encontrado coincidencias";

}

}
</script>
