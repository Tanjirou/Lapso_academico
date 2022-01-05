@section('styles_home')
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
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
    <div id="content" class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Cargar Evaluaciónes</a></li>
                                <!--<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">General</a></li>-->
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
                {{-- <div class="row mb-2">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-4 mb-0 mt-3 mr-auto ml-2 m-0">
                        <h2 class="text-bold text-primary fond-bold m-0">Evaluaciones</h2>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-6 justify-content-end mb-0 d-flex mt-0 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid justify-content-end mb-0" alt="header-image" style="width: 40%;">
                    </div>
                </div> --}}
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row mt-0">
                            <div class="col-md-12 text-center">
                                <h4>Carga de Evaluaciones</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="textDpto">Departamento</label>
                                    <input type="text" class="form-control mb-4" id="textDpto" placeholder="Ej: Ciencias Sociales" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textCorte">Seleccione el corte</label>
                                    <!--<div class="row">
                                        <div class="col-md-2">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-4">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Corte I</span>
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-4">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Corte II</span>
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-4">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Corte III</span>
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-4">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Corte IV</span>
                                            </label>
                                        </div>
                                    </div>-->
                                    <select class="form-control" id="textCorte">
                                        <option>Corte I</option>
                                        <option>Corte II</option>
                                        <option>Corte III</option>
                                        <option>Corte IV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textTipoEval">Tipo Evaluación</label>
                                    <select class="form-control" id="textTipoEval">
                                            <option>Exámen</option>
                                            <option>Practica</option>
                                            <option>Exposición</option>
                                            <option>Proyecto</option>
                                            <option>Taller</option>
                                            <option>Otros</option>
                                    </select>
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
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="textAsign">Contenido</label>
                                    <select class="form-control" id="textCorte">
                                        <option>Derivadas Parciales</option>
                                        <option>Integrales</option>
                                        <option>Otro contenido</option>
                                        <option>Otro contenido</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="textFechaIni">Fecha</label>
                                     <input id="basicFlatpickr" value="Seleccione" class="form-control flatpickr flatpickr-input active" type="date">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="textPunt">Puntuación</label>
                                    <input class="form-control" type="text" placeholder="40" >

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="textPunt">Puntaje Corte</label>
                                    <input class="form-control" type="text" readonly >

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-12 text-center">
                                 <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Cargar</button>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center">Listado de Evaluaciones</h4>
                        <div class="widget-content widget-content-area table-responsive">
                            <table id="column-filter" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Corte</th>
                                        <th class="text-center">Asignatura</th>
                                        <th class="text-center">Sección</th>
                                        <th class="text-center">Tipo Evaluación</th>
                                        <th class="text-center">Contenido</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Puntuacion</th>
                                        <th class="text-center dt-no-sorting">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"> 1</td>
                                        <td class="text-center">Calculo I</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center"> Examen </td>
                                        <td class="text-center">Derivaras parciales</td>
                                        <td class="text-center">01/03/2021</td>
                                        <td class="text-center">25</td>
                                        <td class="text-center"><button class="mr-2 btn btn-primary btn-sm  warning confirm">Eliminar</button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> 1</td>
                                        <td class="text-center">Calculo I</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center"> Taller </td>
                                        <td class="text-center">Ejercicios</td>
                                        <td class="text-center">02/04/2021</td>
                                        <td class="text-center">15</td>
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
