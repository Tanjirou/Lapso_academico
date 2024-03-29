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
                    <div class="row mb-2">
                        <div class="col-lg-7 col-md-6 col-4 mb-0 md-mb-0 order-md-0 order-0 mt-3 ml-3">
                            <h2 class="text-bold text-primary fond-bold">Historial</h2>
                        </div>
                        <div class="col-md-4 col-6 mb-0 md-mb-0 order-md-0 order-1 d-flex justify-content-end ml-5 mt-0">
                            <img src="assets/img/logo-sicano4.png" class="img-fluid mb-2" alt="header-image" style="width: 40%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq container ">

                <div class="faq-layouting layout-spacing">

                    <div class="fq-comman-question-wrapper">
                        <div class="row mt-0">
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="carrera">Carrera</label>
                                             <input type="text" class="form-control" id="carrera" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="estado">Estatus del estudiante</label>
                                             <input type="text" class="form-control" id="estado" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="indAcad">Indice Academico</label>
                                             <input type="text" class="form-control" id="indAcad" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="indRend">Indice Rendimiento</label>
                                             <input type="text" class="form-control" id="indRend" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="carCurs">Carga Cursada</label>
                                             <input type="text" class="form-control" id="carCurs" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="carApro">Carga Aprobada</label>
                                             <input type="text" class="form-control" id="carApro" readonly >
                                        </div>
                                    </div>
                                </div>
                                <hr>

                        <!-- TABLA CON EL HISTORIAL POR SEMESTRE -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lapso">Lapso Academico</label>
                                     <input type="text" class="form-control" id="lapso" readonly >
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area table-responsive">
                            <table id="column-filter" class="table table-bordered mb-4 table-hover table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th class="checkbox-column dt-no-sorting"> Código </th>
                                        <th>Asignatura</th>
                                        <th>U.C.</th>
                                        <th>Condición</th>
                                        <th>Calif.</th>
                                        <th>Modo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td class="checkbox-column"> CAL001 </td>
                                        <td>Calculo I</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>7</td>
                                        <td>Regular</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="checkbox-column"> CAL001 </td>
                                        <td>Calculo I</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>7</td>
                                        <td>Regular</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="credAp">Creditos Aprobados</label>
                                     <input type="text" class="form-control" id="credAp" readonly >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="credRe">Creditos Reprobados</label>
                                     <input type="text" class="form-control" id="credRe" readonly >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="indLapso">Ind. Lapso Academico</label>
                                     <input type="text" class="form-control" id="indLapso" readonly >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12 mt-3">
                            <div class="form-group text-center">
                                <button type="button" class="btn btn-primary">Generar PDF</button>
                            </div>
                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
