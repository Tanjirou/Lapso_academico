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
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <!-- END PAGE LEVEL PLUGINS/CUSTOM  -->
@endsection
<x-app-layout>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mt-2 mb-5">
                <div class="container mb-0">
                    <div class="row mb-2 justify-content-center">
                        <div class="col-md-12 align-self-center order-md-0 order-1 ml-2 ">

                            <nav class="breadcrumb-two align-self-center mt-4" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Estudiante</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">General</a></li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-6 col-lg-7 mb-0 md-mb-0 order-md-0 order-0 mt-3 ml-3">
                            <h2 class="text-bold text-primary fond-bold">Evaluaciones</h2>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 mb-0 md-mb-0 order-md-0 order-1 d-flex justify-content-end ml-5 mt-0">
                            <img src="assets/img/logo-sicano4.png" class="img-fluid lg-mb-3 mb-2" alt="header-image" style="width: 40%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq container mt-3">

                <div class="faq-layouting layout-spacing">

                    <div class="fq-comman-question-wrapper">
                        <div class="row">
                            <div class="col-md-12 mt-0">
                                <h4>Cargar Plan de Evaluación</h4>
                                <hr>
                            </div>
                            <!--<div class="col-md-2">
                                <button class="btn btn-success mr-2 btn-lg"> <a href="revision_profesor.html"></a> + Agregar </button>
                            </div> -->
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
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="textMateria">Seleccione el corte</label>
                                            <div class="row">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="textPunt">Tipo Evaluación</label>
                                            <select class="form-control" id="textCorte">
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
                                             <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="textFechaIni">Fecha</label>
                                             <input id="basicFlatpickr" value="Seleccione" class="form-control flatpickr flatpickr-input active" type="date">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="textPunt">Puntuación</label>
                                            <input class="form-control" type="text" placeholder="40" >

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

                                <h4 class="text-center">Evaluaciones</h4>
                            <div class="widget-content widget-content-area table-responsive">

                                <!--<div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="textCorte">Asignatura(a filtrar)</label>
                                            <select class="form-control" id="textCorte">
                                                    <option>Calculo I</option>
                                                    <option>Corte II</option>
                                                    <option>Corte III</option>
                                                    <option>Corte IV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="textCorte">Sección(a filtrar)</label>
                                            <select class="form-control" id="textCorte">
                                                    <option>I</option>
                                                    <option>Corte II</option>
                                                    <option>Corte III</option>
                                                    <option>Corte IV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="textCorte">Seleccione el corte(a filtrar)</label>
                                            <select class="form-control" id="textCorte">
                                                    <option>Corte I</option>
                                                    <option>Corte II</option>
                                                    <option>Corte III</option>
                                                    <option>Corte IV</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>-->
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
                                            <td class="text-center dt-no-sorting"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"> 1</td>
                                            <td class="text-center">Calculo I</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center"> Taller </td>
                                            <td class="text-center">Ejercicios</td>
                                            <td class="text-center">02/04/2021</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center dt-no-sorting"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                            <div class="row">
                                    <div class="form-group col-md-12 text-center mt-2">
                                         <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Guardar</button>
                                    </div>
                                </div>

                    </div>
                </div>
            </div>

        </div>


    </div>
</x-app-layout>
