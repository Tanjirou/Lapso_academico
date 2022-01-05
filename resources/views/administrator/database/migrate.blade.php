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
 <div id="content" class="main-content mt-6">
    <div class="layout-px-spacing">
        <div class="mt-2 mb-5">
            <div class="container mb-0">
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
            </div>
        </div>
    </div>
</div>
</x-app-layout>
