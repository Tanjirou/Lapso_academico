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
                                <li class="breadcrumb-item" ><a href="javascript:void(0);">Cargar Corte</a></li>
                                <!--<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">General</a></li>-->
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
                {{-- <div class="row mb-2 ">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-4 mb-0 mt-3 mr-auto ml-2 m-0">
                        <h2 class="text-bold text-primary fond-bold m-0">Corte</h2>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-6 justify-content-end mb-0 d-flex mt-0 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid justify-content-end mb-0" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div> --}}
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow">
                        <div class="row mt-0">
                            <div class="col-md-12 text-center">
                                <h4>Carga de Cortes</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-0 mb-4">
                            <div class="col-md-12 justify-content-center">
                                <div class="form-group">
                                    <label for="textcorte">Seleccione el corte</label>
                                    <!--<div class="row  text-center">
                                        <div class="col-md-3">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-1">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Corte I</span>
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-2">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Corte II</span>
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-3">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Corte III</span>
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-4">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Corte IV</span>
                                            </label>
                                        </div>
                                    </div>-->
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
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textAsign">Asignatura</label>
                                     <select class="form-control" id="textAsign">
                                            <option>Mecanica</option>
                                            <option>Electrica</option>
                                            <option>Cálculo</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-3">
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="textPunt">Puntuación</label>
                                    <input class="form-control" type="text" placeholder="40" >
                                    <small id="sh-text1" class="form-text text-muted">Debe ser menor a 40 puntos.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textFechaIni">Fecha Inicio</label>
                                     <input id="basicFlatpickr" value="Seleccione" class="form-control flatpickr flatpickr-input active" type="date">
                                    <!-- var f1 = flatpickr(document.getElementById('basicFlatpickr')); -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textFechaFin">Fecha Fin</label>
                                    <input id="basicFlatpickr2" value="Seleccione" class="form-control flatpickr flatpickr-input active" type="date">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group text-center col-md-12">
                                 <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Agregar</button>
                            </div>
                        </div>

                        <hr>

                        <h4 class="text-center mb-4">Información de los cortes</h4>
                        <div class="row justify-content-end">
                            <div class="col-3 align-content-end mb-4">
                                <input type="text" id="searchTerm" class="form-control" placeholder="Buscar..." onkeyup="doSearch()">
                            </div>
                        </div>
                            <div class="widget-content widget-content-area table-responsive">

                                <table id="datos" class="table table-bordered table-hover table-striped mb-4">
                                    <thead>
                                        <tr>
                                            <th class="text-center"> Corte </th>
                                            <th class="text-center">Asignatura</th>
                                            <th class="text-center">Sección</th>
                                            <th class="text-center">Fecha Inicio</th>
                                            <th class="text-center">Fecha Fin</th>
                                            <th class="text-center">Puntuacion</th>
                                            <th class="text-center">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-cente mb-4r"> Corte I </td>
                                            <td class="text-center">Calculo I</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">01/02/2021</td>
                                            <td class="text-center">01/03/2021</td>
                                            <td class="text-center">25</td>
                                            <td class="text-center"><button class="mr-2 btn btn-primary  warning confirm">Eliminar</button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center mb-4"> Corte II </td>
                                            <td class="text-center">Calculo I</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">02/03/2021</td>
                                            <td class="text-center">02/04/2021</td>
                                            <td class="text-center">25</td>
                                            <td class="text-center"><button class="mr-2 btn btn-primary  warning confirm">Eliminar</button></td>
                                        </tr>

                                    </tbody>

                                </table>
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
