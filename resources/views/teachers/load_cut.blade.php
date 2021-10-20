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
                            <h2 class="text-bold text-primary fond-bold">Cargar Corte</h2>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 mb-0 md-mb-0 order-md-0 order-1 d-flex justify-content-end ml-5 mt-0">
                            <img src="assets/img/logo-sicano4.png" class="img-fluid lg-mb-3 mb-2" alt="header-image" style="width: 40%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq container">

                <div class="faq-layouting layout-spacing mt-0 mb-0">

                    <div class="fq-comman-question-wrapper">

                                <div class="row mt-0">
                                    <div class="col-md-9 mt-0">
                                        <div class="form-group">
                                            <label for="textcorte">Seleccione el corte</label>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="custom-radio-1">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">Corte I</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="custom-radio-2">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">Corte II</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="custom-radio-3">
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
                                            <label for="textPunt">Puntuación</label>
                                            <input class="form-control" type="text" placeholder="40" >
                                            <small id="sh-text1" class="form-text text-muted">Debe ser menor a 40 puntos.</small>
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

                                <h4 class="text-center">Información de los cortes</h4>
                            <div class="widget-content widget-content-area table-responsive">

                                <table id="column-filter" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center"> Corte </th>
                                            <th class="text-center">Asignatura</th>
                                            <th class="text-center">Sección</th>
                                            <th class="text-center">Fecha Inicio</th>
                                            <th class="text-center">Fecha Fin</th>
                                            <th class="text-center">Puntuacion</th>
                                            <th class="text-center dt-no-sorting">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"> Corte I </td>
                                            <td class="text-center">Calculo I</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">01/02/2021</td>
                                            <td class="text-center">01/03/2021</td>
                                            <td class="text-center">25</td>
                                            <td class="text-center dt-no-sorting"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"> Corte II </td>
                                            <td class="text-center">Calculo I</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">02/03/2021</td>
                                            <td class="text-center">02/04/2021</td>
                                            <td class="text-center">25</td>
                                            <td class="text-center dt-no-sorting"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
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
