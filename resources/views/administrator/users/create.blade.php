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
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" ><a href="javascript:void(0);">Crear Usuario</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>
            <div class="row layout-spacing mt-2">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row justify-content-center mb-3">
                            <h1 class="font-weight-bold text-center">Crear Usuario Administrador</h1>
                        </div>
                        <div class="row mt-0">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('administrator.users_create_store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="dni" class="col-md-4 col-form-label text-md-right text-dark ">{{ __('Cedula') }}</label>

                                        <div class="col-md-6">
                                            <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" autocomplete="dni" autofocus  maxlength="9"  title="la dni debe ser solo numerica" pattern="[0-9]+">

                                            @error('dni')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nombres" class="col-md-4 col-form-label text-md-right text-dark ">{{ __('Nombres') }}</label>

                                        <div class="col-md-6">
                                            <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" required autocomplete="nombres" autofocus pattern="[a-zA-Z ]{2,48}" title="Solo se permiten letras">

                                            @error('nombres')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="apellidos" class="col-md-4 col-form-label text-md-right text-dark ">{{ __('Apellidos') }}</label>

                                        <div class="col-md-6">
                                            <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus pattern="[a-zA-Z ]{2,48}" title="Solo se permiten letras">

                                            @error('apellidos')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right text-dark ">{{ __('Correo') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label for="permiso" class="col-md-4 col-form-label text-md-right text-dark ">{{ __('Tipo de usuario') }}</label>

                                        <div class="col-md-6">
                                            <select class="custom-select bg-white @error('permiso') is-invalid @enderror" name="permiso" id="permiso">
                                                    <option value="" >Seleccione</option>
                                                @foreach ($users_type as $user_type)
                                                    <option value="{{ $user_type->id }}">{{ $user_type->description }}</option>
                                                @endforeach
                                            </select>


                                            @error('permiso')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <div class="form-group row mb-0 justify-content-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrar') }}
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        @if (session('user-message'))
                        <div class="form-group row justify-content-center mt-3">
                            <span class="alert alert-success col-12">
                                {{ session('user-message') }}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
