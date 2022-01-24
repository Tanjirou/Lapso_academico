@section('styles_home')
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
 <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/pages/faq/faq.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/elements/breadcrumb.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endsection
<x-app-layout>
    <!--  BEGIN CONTENT AREA  -->
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="fq-header-wrapper">
                <div class="container mb-3">
                    <div class="row mb-2 mt-3 justify-content-center ">


                    </div>
                    <div class="row">
                        <!--<div class="col-lg-7 col-md-6 col-4 mb-0 md-mb-0 order-md-0 order-0 mt-2 ml-3">-->
                        <div class="col-5 col-sm-5 col-md-7 col-lg-7 col-xl-7 mb-0 mt-2 ml-3">
                            <h2 class="text-bold text-gray-100 font-extrabold font-weight-bold d-inline"> BIENVENIDO, </h2>
                            <h5 class="text-bold fond-bold font-weight-bold text-secondary d-inline">{{ auth()->user()->names }}</h5>

                        </div>
                        <!--<div class="col-md-4 col-6 mb-0 md-mb-0 order-md-0 order-1 d-flex justify-content-end ml-5 mt-0">-->
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 mb-0 d-flex justify-content-end ml-auto mt-0">
                            <img src="assets/img/logo-sicano4.png" class="img-fluid mb-xl-5 mb-lg-5 mb-md-5 mb-2" alt="header-image" style="width-sm: 30%;  width-md:30%; width-lg:35%; width: 40%;">
                        </div>
                    </div>

                </div>

            </div>
            <div class="faq container">

                <div class="faq-layouting layout-spacing">

                    <div class="fq-comman-question-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Entre las actividades que tienes acceso:</h3>
                                @if (auth()->user()->user_type == 3)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="">
                                                <li class="list-unstyled">
                                                <div class="icon-svg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg>
                                                </div>
                                                Ver materias inscritas.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Ver calificaciones.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Ver y modificar datos personales.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="">
                                                <li class="
                                                list-unstyled">
                                                <div class="icon-svg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg>
                                                </div>
                                                Solicitar revisión de examenes.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Ver Constancia de Estudio.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Recibir/Enviar documentos.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    </br>
                                @elseif(auth()->user()->user_type ==2)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="">
                                                <li class="list-unstyled">
                                                <div class="icon-svg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg>
                                                </div>
                                                Definir cortes.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Cargar contenido.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Cargar evaluaciones.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Cargar notas.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="">
                                                <li class="
                                                list-unstyled">
                                                <div class="icon-svg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg>
                                                </div>
                                                Enviar/Recibir documentos.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Consultar porcentaje evaluado.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Descargar listado de notas.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Ver y modificar datos personales.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    </br>
                                @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="">
                                                <li class="list-unstyled">
                                                <div class="icon-svg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg>
                                                </div>
                                                Habilitar/Deshabilitar usuarios.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Conceder/Revocar roles y permisos.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Desactivar factor de dos pasos.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Reestablecer contraseña.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="">
                                                <li class="
                                                list-unstyled">
                                                <div class="icon-svg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg>
                                                </div>
                                                Cargar/Actualizar datos de inscripción
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Ver y modificar datos personales.
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                    Habilitar carga de notas tardía.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    </br>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</x-app-layout>
