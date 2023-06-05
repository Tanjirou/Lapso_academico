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
                <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                    <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                            <li class="breadcrumb-item" ><a href="javascript:void(0);">Migrate</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                    <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                </div>
            </div>
        </div>

        {{-- @if (session('migrate-message'))
        <div class="form-group row">
            <span class="alert alert-success col-12">
                {{ session('migrate-message') }}
            </span>
        </div>
        @endif --}}

        <div class="mt-3">
            {{-- <div class="container mb-0">
                <div class="row mb-2 justify-content-center">
                    <div class="col-md-12 align-self-center order-md-0 order-1 ml-2 mt-3">
                        <div class="row justify-content-center"><h1 class="text-center font-weight-bold mt-3 mb-3">{{ __('Migrar') }}</h1></div>
                        <div class="row mt-2">
                            <p class="font-weight-bold text-justify">En esta opción se migrará la información de estudiantes, profesores, oferta académica, universidad, materias y carreras a la base de datos del sistema.
                                Nota: tenga en cuenta que esta opción es la primera que se debe ejecutar para que la aplicación pueda funcionar correctamente.
                            </p>
                        </div>


                        <div class="row justify-content-center mt-5">
                            <a href="{{ route('administrator.load_data') }}" class="btn btn-primary btn-lg"> Ejecutar</a>
                        </div>

                        @if (session('migrate-message'))
                        <div class="form-group row">
                            <span class="alert alert-success col-12">
                                {{ session('migrate-message') }}
                            </span>
                        </div>
                        @endif

                    </div>
                </div>
            </div> --}}
            <div class="fq-header-wrapper">
                <div class="container">
                    <div class="row mb-0">
                        <div class="col-md-7 align-self-center order-md-0 order-1 mb-sm-0">
                            <h1 class="">EXPORTAR</h1>
                            <p class="font-weight-bold text-justify">Esta opción se utilizará para exportar la información de la base de datos del sistema con respecto a las notas finales de los estudiantes.
                                <ins>Nota:</ins> tenga en cuenta que esta opción se debe ejecutar una vez haya finalizado el semestre.</p>
                            {{-- <button class="btn btn-info">Ejecutar</button> --}}
                            <div class="row justify-content-center mt-5">
                                <a href="" class="btn btn-primary btn-lg"> Ejecutar</a>
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

</x-app-layout>
