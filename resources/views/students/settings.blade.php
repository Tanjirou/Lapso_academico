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
            <div class="">
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
                    <div class="row mb-3">
                        <div class="col-lg-7 col-md-6 col-4 mb-0 md-mb-0 order-md-0 order-0 mt-3 ml-3">
                            <h2 class="text-bold text-primary fond-bold ">Ajustes</h2>
                        </div>
                        <div class="col-md-4 col-6 mb-0 md-mb-0  order-md-0 order-1 d-flex justify-content-end ml-5 mt-0">
                            <img src="assets/img/logo-sicano4.png" class="img-fluid mb-5" alt="header-image" style="width: 40%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq container col-12 mt-0">
                <div class="faq-layouting layout-spacing">
                    <div class="fq-comman-question-wrapper">
                        <form id="contact" class="section contact">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h3>Cambio de clave</h3>

                                    <div class="row">
                                        <div class="col-md-12 mx-auto">
                                            <div class="form">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="text">Clave anterior</label>
                                                            <input type="text" class="form-control mb-4" id="claveant" placeholder="Ej: /123456/">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="text">Clave Nueva</label>
                                                            <input type="text" class="form-control mb-4" id="claveant" placeholder="Ej: $123456$">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="text">Confirme clave nueva</label>
                                                            <input type="text" class="form-control mb-4" id="clavenue" placeholder="Ej: $123456$">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group justify-content-center">
                                                    <button class="btn btn-primary mr-2 btn-lg">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
