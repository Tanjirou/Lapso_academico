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
                            <h2 class="text-bold text-primary fond-bold">Revisión</h2>
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
                            <div class="col-md-12">
                                <h3 class="text-center text-bold">Revisiones de Exámen</h3>

                                <div class="widget-content widget-content-area table-responsive">
                                    <table id="column-filter" class="table">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="checkbox-column dt-no-sorting"> Código </th>
                                                <th>Materia</th>
                                                <th>Sección</th>
                                                <th>Estudiante</th>
                                                <th>Estatus</th>
                                                <th class="text-center dt-no-sorting">Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td class="checkbox-column"> 001 </td>
                                                <td>Calculo I</td>
                                                <td>1</td>
                                                <td>Maria Jose Medina Freitez</td>
                                                <td><span class="shadow-none badge badge-primary">Respondido</span></td>
                                                <td class="text-center"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter"> Ver </button></td>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Mensaje</h5>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <form class="form-horizontal" role="form">
                                                            <div class="modal-body">
                                                               <div class="row">
                                                                    <div class="col-md-10 mx-auto">
                                                                        <div class="form">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="textmsj">Mensaje</label>
                                                                                        <textarea class="form-control" id="textmsj" rows="3" readonly></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="textresp">Responder</label>
                                                                                        <textarea class="form-control" id="textresp" rows="3"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group col-12 text-center">
                                                                                     <button type="button" class="btn btn-primary">Enviar</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <hr>

                                                                <!--<div class="alert alert-warning alert-dismissible" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <p><strong>NOTA:</strong> Recuerda que en caso de semestre regular son cuatro(4) cortes y en caso de Intensivo son tres(3) cortes.</p>
                                                                </div>-->
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="checkbox-column"> 001 </td>
                                                <td>Calculo I</td>
                                                <td>1</td>
                                                <td>Maria Jose Medina Freitez</td>
                                                <td><span class="shadow-none badge badge-primary">Respondido</span></td>
                                                <td class="text-center"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter"> Ver </button></td>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Mensaje</h5>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <form class="form-horizontal" role="form">
                                                            <div class="modal-body">
                                                               <div class="row">
                                                                    <div class="col-md-10 mx-auto">
                                                                        <div class="form">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="textmsj">Mensaje</label>
                                                                                        <textarea class="form-control" id="textmsj" rows="3" readonly></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="textresp">Responder</label>
                                                                                        <textarea class="form-control" id="textresp" rows="3"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group col-12 text-center">
                                                                                     <button type="button" class="btn btn-primary">Enviar</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <hr>

                                                                <!--<div class="alert alert-warning alert-dismissible" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <p><strong>NOTA:</strong> Recuerda que en caso de semestre regular son cuatro(4) cortes y en caso de Intensivo son tres(3) cortes.</p>
                                                                </div>-->
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="checkbox-column"> 001 </td>
                                                <td>Calculo I</td>
                                                <td>1</td>
                                                <td>Maria Jose Medina Freitez</td>
                                                <td><span class="shadow-none badge badge-danger">Pendiente</span></td>
                                                <td class="text-center"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter"> Ver </button></td>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Mensaje</h5>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <form class="form-horizontal" role="form">
                                                            <div class="modal-body">
                                                               <div class="row">
                                                                    <div class="col-md-10 mx-auto">
                                                                        <div class="form">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="textmsj">Mensaje</label>
                                                                                        <textarea class="form-control" id="textmsj" rows="3" readonly></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="textresp">Responder</label>
                                                                                        <textarea class="form-control" id="textresp" rows="3"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group col-12 text-center">
                                                                                     <button type="button" class="btn btn-primary">Enviar</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <hr>

                                                                <!--<div class="alert alert-warning alert-dismissible" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <p><strong>NOTA:</strong> Recuerda que en caso de semestre regular son cuatro(4) cortes y en caso de Intensivo son tres(3) cortes.</p>
                                                                </div>-->
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                        </tbody>

                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</x-app-layout>
