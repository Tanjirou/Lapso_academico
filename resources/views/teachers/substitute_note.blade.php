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
                        <div class="col-4 col-md-6 col-lg-7 mb-0 md-mb-0 order-md-0 order-0 mt-3 ml-3 m-md-auto ">
                            <h2 class="text-bold text-primary fond-bold">Sustitutiva</h2>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 mb-0 md-mb-0 order-md-0 order-1 d-flex justify-content-end ml-3 mt-0">
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
                                <h4 class="text-bold text-center font-bold">Edición de Notas</h4>
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
                                    <label for="textCorte">Corte</label>
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
                                    <label for="textCedula">Cédula</label>
                                    <input type="text" class="form-control mb-4" id="textCedula" placeholder="Ej: 22345678">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button class="btn btn-primary mt-4 btn-lg"> <a href="#"></a> Buscar </button>
                                </div>
                            </div>
                        </div>
                        <br>

                        <hr>

                        <div class="widget-content widget-content-area table-responsive">
                            <h4 class="text-center text-bold">Listado de Estudiantes</h4>

                            <table id="column-filter" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>

                                        <th class="text-center">Cédula</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Puntuacion</th>
                                        <th class="text-center dt-no-sorting">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td class="text-center"> 20.929.263 </td>
                                        <td class="text-center">Neptaly J. Sibrian M.</td>
                                        <td class="text-center">25</td>
                                        <td class="text-center"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalNota"> Editar </button></td>
                                        <!--Modal Carga de Nota-->
                                        <div class="modal fade" id="modalNota" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel">Edición de Nota por sustitutiva</h5>
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
                                        <td class="text-center">15</td>
                                        <td class="text-center"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalNota"> Editar </button></td>
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
