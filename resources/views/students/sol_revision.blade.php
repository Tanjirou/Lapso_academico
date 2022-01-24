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
    <div class="main-content mt-6">
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
                            <h2 class="text-bold text-primary fond-bold">Servicios</h2>
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
                                <h3 class="text-center text-bold">Solicitud de revisión</h3>
                                <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="textAsign">Asignatura</label>
                                                <select class="form-control" id="textAsign">
                                                    <option>Calculo I</option>
                                                    <option>Algebra</option>
                                                    <option>Lenguaje</option>
                                                    <option>Ingles I</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="text">Profesor</label>
                                                <input type="text" class="form-control mb-4" id="clavenue" placeholder="Prof. Jose Espinoza" readonly>
                                            </div>
                                        </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="textDesc">Descripción</label>
                                            <textarea class="form-control" id="textDesc" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 text-center">
                                        <button class="btn btn-primary mr-2 btn-lg">Enviar</button>
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
