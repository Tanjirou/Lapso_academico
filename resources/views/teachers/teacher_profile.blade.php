@section('styles_home')
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/pages/faq/faq.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/elements/breadcrumb.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/table/datatable/custom_dt_miscellaneous.css') }}"rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/table/datatable/custom_dt_custom.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <!-- END PAGE LEVEL PLUGINS/CUSTOM  -->
@endsection
<x-app-layout>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 justify-content-start">
                    <div class="col-xl-3 col-lg-3 col-auto align-self-center order-md-0 order-1 ml-2">
                        <nav class="breadcrumb-two align-self-center mt-4" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" ><a href="javascript:void(0);">Mi Perfil</a></li>
                                <!--<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Secciones</a></li>-->
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row mb-2 ">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-4 mb-0 mt-3 mr-auto ml-2 m-0">
                        <h2 class="text-bold text-primary fond-bold m-0">Perfil</h2>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-6 justify-content-end mb-0 d-flex mt-0 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid justify-content-end mb-0" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>
            <div class="account-settings-container layout-top-spacing">

                <div class="row layout-spacing">

                    <div class="col-lg-12 col-12">
                        <div class="statbox widget box box-shadow shadow">
                            <div class="widget-content widget-content-area simple-pills">
                                <ul class="nav nav-pills mb-3 mt-3 " id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profes-tab" data-toggle="pill" href="#pills-profes" role="tab" aria-controls="pills-profes" aria-selected="false">Profesionalizacion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contacto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-update-tab" data-toggle="pill" href="#pills-update" role="tab" aria-controls="pills-update" aria-selected="false">Actualización</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <!--  INFORMACION GENERAL  -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                            <form id="general-info" class="section general-info">
                                                <div class="info">
                                                    <h6 class="">Información General</h6>
                                                    <div class="row">
                                                        <div class="col-lg-11 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                                    <div class="upload mt-4 pr-md-4">
                                                                        <input type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ ('assets/img/200x200.jpg') }}" data-max-file-size="2M" />
                                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Foto Perfil</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="nacionalidad">Nacionalidad</label>
                                                                                    <input type="text" class="form-control mb-4" id="nacionalidad" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="cedula">Cédula de Identidad</label>
                                                                                    <input type="number" class="form-control mb-4" id="cedula" readonly >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="nombres">Nombres</label>
                                                                                    <input type="text" class="form-control mb-4" id="nombres" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="apellidos">Apellidos</label>
                                                                                    <input type="text" class="form-control mb-4" id="apellidos" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="genero">Genero</label>
                                                                                    <input type="text" class="form-control mb-4" id="genero" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="estadociv">Estado Civil</label>
                                                                                    <input type="text" class="form-control mb-4" id="estadociv" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="paisnac">Pais Nac.</label>
                                                                                    <input type="text" class="form-control mb-4" id="paisnac" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="fechanac">Fecha Nacimiento</label>
                                                                                    <input type="date" class="form-control mb-4" id="fechanac" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="categ">Categoría</label>
                                                                                    <input type="text" class="form-control mb-4" id="categ" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="condic">Condición</label>
                                                                                    <input type="text" class="form-control mb-4" id="condic" readonly>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profes" role="tabpanel" aria-labelledby="pills-profes-tab">
                                        <!--  ESTUDIOS  -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                            <form id="contact" class="section contact">
                                                <div class="info">
                                                    <h5 class="">Pregrado</h5>
                                                    <div class="row">
                                                        <div class="col-md-10 mx-auto">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="title">Título</label>
                                                                        <input type="text" class="form-control mb-4" id="title" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="area">Área</label>
                                                                        <input type="text" class="form-control mb-4" id="area" readonly >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="instituto">Institución</label>
                                                                        <input type="text" class="form-control mb-4" id="instituto" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="country">País</label>
                                                                        <input type="text" class="form-control mb-4" id="country" readonly >
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5 class="">Postgrado</h5>
                                                    <div class="row">
                                                        <div class="col-md-10 mx-auto">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="tipo">Tipo</label>
                                                                        <input type="text" class="form-control mb-4" id="tipo" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="areapos">Area</label>
                                                                        <input type="text" class="form-control mb-4" id="areapos" readonly >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="institutopos">Institución</label>
                                                                        <input type="text" class="form-control mb-4" id="institutopos" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="countrypos">País</label>
                                                                        <input type="text" class="form-control mb-4" id="countrypos" readonly >
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <!--  INFORMACION DE CONTACTO  -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                            <form id="contact" class="section contact">
                                                <div class="info">
                                                    <h5 class="">INFORMACION DE CONTACTO</h5>
                                                    <div class="row">
                                                        <div class="col-md-10 mx-auto">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone1">Teléfono Local</label>
                                                                            <input type="text" class="form-control mb-4" id="phone1" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone2">Teléfono Celular</label>
                                                                            <input type="text" class="form-control mb-4" id="phone2" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control mb-4" id="email" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="address">Direccion de Habitación</label>
                                                                    <input type="text" class="form-control mb-4" id="address" readonly >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-update" role="tabpanel" aria-labelledby="pills-update-tab">
                                        <!--  ACTUALIZACION DE CONTACTO  -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                            <form id="contact" class="section contact">
                                                <div class="info">
                                                    <h5 class="">ACTUALIZACION</h5>
                                                    <div class="row">
                                                        <div class="col-md-10 mx-auto">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone1">Teléfono Local</label>
                                                                            <input type="text" class="form-control mb-4" id="phone1" placeholder="02514443050" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone2">Teléfono Celular</label>
                                                                            <input type="text" class="form-control mb-4" id="phone2" placeholder="04244443050">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="address">Direccion de Habitación</label>
                                                                    <input type="text" class="form-control mb-4" id="address" placeholder="Calle 10 Sector La Union" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control mb-4" id="email" placeholder="juanpablo_alv@gmail.com">
                                                                </div>
                                                                <div class="form-group text-center">
                                                                    <button type="button" class="btn btn-primary text-center">Guardar</button>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
