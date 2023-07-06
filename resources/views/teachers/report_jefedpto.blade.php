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
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Reporte</a></li>
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
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row mt-0">
                            <div class="col-md-12 text-center">
                                <h2 class="fond-weight-bold text-bold text-primary m-0 mb-1">REPORTE</h2>
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
                        <!--SECCION DEL DEPARTAMENTO-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textCorte">Sección del Departamento - Filtrado por:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-1" value="option1" id="option1">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Todas</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-1" value="option2" id="option2">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Especifico</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="select-container1" style="display: none">
                                <div class="form-group">
                                    <label for="secdep">Seleccione una Sección del Departamento</label>
                                    <select class="form-control" name="secDep" id="secDep">
                                            <option>Matematica</option>
                                            <option>Física</option>
                                            <option>Algebra</option>
                                            <option>Generales</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--MATERIA-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textSubject">Materia - Filtrado por:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-2" value="option3" id="option3">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Todas</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-2" value="option4" id="option4">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Especifico</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="select-container2" style="display: none">
                                <div class="form-group">
                                    <label for="subject">Seleccione una Materia</label>
                                    <select class="form-control" name="subject" id="subject">
                                            <option>Cálculo I</option>
                                            <option>Programación I</option>
                                            <option>EStadistica I</option>
                                            <option>Matematicas Especiales</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--SECCION-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textSection">Sección - Filtrado por:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-4" value="option5" id="option5">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Todas</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="new-control new-radio new-radio-text radio-primary">
                                                <input type="radio" class="new-control-input" name="custom-radio-4" value="option6" id="option6">
                                                <span class="new-control-indicator"></span><span class="new-radio-content">Especifico</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="select-container4" style="display: none">
                                <div class="form-group">
                                    <label for="nSection">Seleccione una Materia</label>
                                    <select class="form-control" name="nsection" id="nsection">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="form-group col-md-12 text-center">
                                 <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Buscar</button>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center">Listado</h4>
                        <div class="widget-content widget-content-area table-responsive">
                            <table id="column-filter" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sección del Dpto</th>
                                        <th class="text-center">Materia</th>
                                        <th class="text-center">Sección</th>
                                        <th class="text-center">N° Estudiantes</th>
                                        <th class="text-center">N° Aprobados</th>
                                        <th class="text-center">N° Reprobados</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"> Matematica</td>
                                        <td class="text-center">Cálculo I</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center"> 30 </td>
                                        <td class="text-center"> 20 </td>
                                        <td class="text-center"> 10 </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> Matematica</td>
                                        <td class="text-center">Algebra</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center"> 35 </td>
                                        <td class="text-center"> 22 </td>
                                        <td class="text-center"> 13 </td>

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

<script>
    var option1 = document.getElementById('option1');
    var option2 = document.getElementById('option2');
    var selectContainer1 = document.getElementById('select-container1');

    var option3 = document.getElementById('option3');
    var option4 = document.getElementById('option4');
    var selectContainer2 = document.getElementById('select-container2');

    var option5 = document.getElementById('option5');
    var option6 = document.getElementById('option6');
    var selectContainer4 = document.getElementById('select-container4');

    option1.addEventListener('click', function() {
      selectContainer1.style.display = 'none';
    });

    option2.addEventListener('click', function() {
      selectContainer1.style.display = 'block';
    });

    option3.addEventListener('click', function() {
      selectContainer2.style.display = 'none';
    });

    option4.addEventListener('click', function() {
      selectContainer2.style.display = 'block';
    });

    option5.addEventListener('click', function() {
      selectContainer4.style.display = 'none';
    });

    option6.addEventListener('click', function() {
      selectContainer4.style.display = 'block';
    });
  </script>
