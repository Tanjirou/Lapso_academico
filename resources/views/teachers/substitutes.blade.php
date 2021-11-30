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
            <div class="mb-0">
                <div class="row mb-2 justify-content-center">
                    <div class="col-md-12 align-self-center order-md-0 order-1 ml-2">
                        <nav class="breadcrumb-two align-self-center mt-4" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item active"><a href="">Cargar Notas</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Sustitutivo</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row mb-2 ">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-4 mb-0 mt-3 mr-auto ml-2 m-0">
                        <h2 class="text-bold text-primary fond-bold m-0">Sustitutivos</h2>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-6 justify-content-end mb-0 d-flex mt-0 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid justify-content-end mb-0" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow">
                        <div class="row mt-0">
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
                        <br>
                        <div class="row">
                            <div class="col-md-12 form-group text-center">
                                 <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Buscar</button>
                            </div>
                        </div>
                        <hr>

                        <div class="widget-content widget-content-area table-responsive">
                            <h4 class="text-center text-bold mb-4">Listado de estudiantes con opción a sustitutivo</h4>
                            <!--<div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-3">
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="textCorte">Corte(a filtrar)</label>
                                        <select class="form-control" id="textCorte">
                                                <option>Corte I</option>
                                                <option>Corte II</option>
                                                <option>Corte III</option>
                                                <option>Corte IV</option>
                                        </select>
                                    </div>
                                </div>
                            </div>-->
                            <table id="default-ordering" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Cédula</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Corte</th>
                                        <th class="text-center">Evaluación</th>
                                        <th class="text-center">Nota Requerida</th>
                                        <th class="text-center dt-no-sorting">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"> 20.929.263 </td>
                                        <td class="text-center">Neptaly J. Sibrian M.</td>
                                        <td class="text-center">I</td>
                                        <td class="text-center">Parcial I</td>
                                        <td class="text-center">20</td>
                                        <td class="text-center"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalNota"> Asignar </button>  <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modalNota"> Modificar </button></td>
                                        <!--Modal Carga de Nota-->
                                        <div class="modal fade" id="modalNota" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel">Asignar Nota del Corte</h5>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <form class="form-horizontal " role="form">
                                                    <div class="modal-body">

                                                        <div class="row justify-content-center">
                                                            <div class="col-2">
                                                                <h5>Corte</h5>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row justify-content-center">
                                                            <div class="col-2">
                                                                <h5>Nota</h5>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group text-center">
                                                                <button class="btn btn-primary mr-2 btn-lg mt-2"> <a href="#"></a> Guardar</button>
                                                            </div>
                                                        </div>
                                                    <hr>

                                                        <div class="alert alert-warning alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <p><strong>NOTA:</strong> Recuerda que en caso de semestre regular son cuatro(4) cortes y en caso de Intensivo son tres(3) cortes.</p>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    <tr>

                                        <td class="text-center"> 19.234.567 </td>
                                        <td class="text-center">Irene C. Navas.F.</td>
                                        <td class="text-center">II</td>
                                        <td class="text-center">Parcial II</td>
                                        <td class="text-center">18</td>
                                        <td class="text-center"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalNota"> Asignar </button></td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>

        </div>
          <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <!--<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>-->
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!--<script>
        $(document).ready(function() {
            App.init();
        });
    </script>-->

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#default-ordering').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Buscar...",
               "sLengthMenu": "Resultados :  _MENU_",
            },
            "order": [[ 3, "desc" ]],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered'); }
	    } );
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

    </div>
</x-app-layout>
