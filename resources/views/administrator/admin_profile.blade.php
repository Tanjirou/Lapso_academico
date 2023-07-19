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
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-5">
                    <div class="col-auto mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Mi Perfil</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>
            @if (session('store'))
            <div class="form-group row">
                <span class="alert alert-success col-12">
                    {{ session('store') }}
                </span>
            </div>
            @endif
            <div class="account-settings-container layout-top-spacing">
                <div class="row layout-spacing mt-2">
                    <div class="col-lg-12 col-12">
                        <div class="statbox widget box box-shadow shadow">
                            <div class="widget-content widget-content-area simple-pills">
                                <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
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
                                                        <div class="col-md-10 mx-auto">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="cedula">Cédula de Identidad</label>
                                                                        <input type="number" class="form-control mb-4" id="cedula" value="{{ $admin->dni }}" readonly >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="names">Nombres</label>
                                                                        <input type="text" class="form-control mb-4" id="names" value="{{ $admin->names }}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="last_names">Apellidos</label>
                                                                        <input type="text" class="form-control mb-4" id="last_names" value="{{ $admin->last_names }}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="phone1">Teléfono</label>
                                                                        <input type="text" class="form-control mb-4" id="phone1" value="{{ $admin->telephone }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="text" class="form-control mb-4" id="email" value="{{ $admin->email }}" readonly>
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
                                            <form
                                                action="{{ route('administrator.profile_update', ['user' => $id]) }}"
                                                method="POST" id="updatecontact" class="section general-info"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="info">
                                                    <h6 class="">ACTUALIZACION DE DATOS</h6>
                                                    <div class="row">
                                                        <div class="col-lg-11 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                                    <div class="upload mt-4 pr-md-4">
                                                                        <input type="file" name="photo" id="input-file-max-fs" class="dropify  @error('photo') is-invalid @enderror"
                                                                         data-default-file="{{ ('assets/img/200x200.jpg') }}" data-max-file-size="10M" />
                                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Foto Perfil</p>
                                                                        @error('photo')
                                                                        <span class="invalid-feedback"
                                                                            role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="names">Nombres</label>
                                                                                    <input type="text" class="form-control mb-4 @error('names') is-invalid @enderror"
                                                                                    id="names" name="names" value="{{ $admin->names }}"
                                                                                    placeholder="Ej: Evan Jesus">
                                                                                @error('names')
                                                                                    <span class="invalid-feedback"
                                                                                        role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="names">Apellidos</label>
                                                                                    <input type="text" class="form-control mb-4 @error('last_names') is-invalid @enderror"
                                                                                    id="last_names" name="last_names" value="{{ $admin->last_names }}"
                                                                                    placeholder="Ej: Sibrian Melendez">
                                                                                @error('last_names')
                                                                                    <span class="invalid-feedback"
                                                                                        role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="phone1">Teléfono</label>
                                                                                    <input type="text" class="form-control mb-4 @error('phone1') is-invalid @enderror"
                                                                                     id="phone1" name="phone1" value="{{ $admin->telephone }}"
                                                                                     placeholder="Ej: 0414-1234567">
                                                                                @error('phone1')
                                                                                    <span class="invalid-feedback"
                                                                                        role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="email">Email</label>
                                                                                    <input type="email" class="form-control mb-4 @error('email') is-invalid @enderror"
                                                                                    id="email" name="email"  value="{{ $admin->email }}"
                                                                                    placeholder="Ej: nombrecorreo@gmail.com">
                                                                                @error('email')
                                                                                    <span class="invalid-feedback"
                                                                                        role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                        <div class="form-group text-center">
                                                                            <button type="submit" class="btn btn-primary text-center">Guardar</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
