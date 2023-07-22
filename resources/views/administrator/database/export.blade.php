@section('styles_home')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/faq/faq.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/elements/breadcrumb.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/table/datatable/custom_dt_miscellaneous.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/table/datatable/custom_dt_custom.css') }}" rel="stylesheet" type="text/css">


    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!-- END PAGE LEVEL PLUGINS/CUSTOM  -->
    @livewireStyles
@endsection
<x-app-layout>
 <!--  BEGIN CONTENT AREA  -->
 <div class="main-content mt-6">
    <div class="layout-px-spacing">
        <div class="mb-0">
            <div class="row mb-2 mt-3">
                <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-4">
                    <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                            <li class="breadcrumb-item" ><a href="javascript:void(0);">Exportar</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                    <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                </div>
            </div>
        </div>
        <hr>


        <div class="mt-3">

            <div class="fq-header-wrapper">
                <div class="container">
                    <div class="row mb-0">
                        <div class="col-md-7 align-self-center order-md-0 order-1 mb-sm-0">
                            <h1 class="">EXPORTAR</h1>
                            <p class="font-weight-bold text-justify">Esta opción se utilizará para exportar la información de la base de datos del sistema con respecto al histórico de aprobados y reprobados,
                                 y la información de los usuarios.
                                <ins>Nota:</ins> Tenga en cuenta que esta opción es para realizar un backup de la información importante del sistema.</p>
                            {{-- <button class="btn btn-info">Ejecutar</button> --}}
                            <div class="row justify-content-center mt-5">
                                <form id="my-form" action="{{route('administrator.exportStore')}}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <select class="form-control mb-3 @error('option') is-invalid @enderror" name="option" id="option">
                                            <option value="">Seleccione</option>
                                            <option value="1">Usuarios</option>
                                            <option value="2">Tipo de usuarios</option>
                                            <option value="3">Profesores</option>
                                            <option value="4">Estudiantes</option>
                                            <option value="5">Departamentos</option>
                                            <option value="6">Secciones académicas</option>
                                            <option value="7">Pensa</option>
                                            <option value="8">Asignaturas</option>
                                            <option value="9">Asignaturas en pensa</option>
                                            <option value="10">Estructura de secciones</option>
                                            <option value="11">Historial de estudiantes</option>
                                            <option value="12">Recursos de los departamentos</option>
                                        </select>
                                        <h4 id="error-message" class="text-danger"></h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit"  class="btn btn-primary btn-lg w-100"> Ejecutar</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <div class="col-md-5 d-flex justify-content-center order-md-0 order-0 mb-sm-0">
                            <div class="banner-img align-content-center">
                                <img src="assets/img/exportar.png" class="img-fluid d-none d-md-block" alt="header-image" style="width: 90%; height:85%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('my-form').addEventListener('submit', function(event) {

                // Validación del formulario
                var option = document.getElementById('option').value;
                if (option === '') {
                    event.preventDefault();
                    document.getElementById('error-message').textContent = 'Debe seleccionar una opción';
                    return; // Evita que se envíe el formulario
                }else{
                    document.getElementById('error-message').textContent = '';
                }

                // Si la validación es exitosa, el formulario se enviará automáticamente
            });
        </script>
</x-app-layout>
