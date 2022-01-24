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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Restablecer</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid mb-0 d-none d-md-block"
                            alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>
            <div class="row layout-spacing mt-2 justify-content-center mt-3">
                <div class="col-10">
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row justify-content-center mb-3">
                            <h1 class="font-weight-bold text-center">Restablecer</h1>
                        </div>
                        <div class="row mt-0">
                            <div class="col-md-12">

                                <div class="form-group row">
                                    <label for="user_dni"
                                        class="col-md-4 col-form-label text-md-right text-dark ">{{ __('Cedula') }}</label>

                                    <div class="col-md-6">
                                        <input id="user_dni" type="text"
                                            class="form-control @error('user_dni') is-invalid @enderror" name="user_dni"
                                            value="{{ old('user_dni') }}" autocomplete="user_dni" autofocus
                                            maxlength="9" title="la user_dni debe ser solo numerica" pattern="[0-9]+"
                                            required oninput="initPassword(),initFactor()">

                                        @error('user_dni')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @if (session('user-message-error'))

                                            <span class="alert text-danger font-weight-bold text-center">
                                                {{ session('user-message-error') }}
                                            </span>
                                        @endif

                                        @if (session('user-message-restore'))
                                            <span class="alert text-success font-weight-bold text-center">
                                                {{ session('user-message-restore') }}
                                            </span>
                                    @endif

                                    </div>
                                </div>
                                <div class="form-group row mb-0 justify-content-center mt-4">
                                    <form method="POST" action="{{ route('administrator.users_restore_password') }}">
                                        @csrf

                                        <input type="hidden" class="form-control" name="dni" id="dni" value="">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Contraseña') }}
                                        </button>

                                    </form>
                                    <form method="POST" class="ml-3"
                                        action="{{ route('administrator.users_restore_factor') }}">
                                        @csrf
                                        <input type="hidden" name="user_factor" id="user_factor" value="" readonly
                                            required>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Dos factores') }}
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function initPassword() {
            var password = document.getElementById('user_dni').value;
            var user_dni = document.getElementById('dni');
            user_dni.value = password;
        }

        function initFactor() {
            var password = document.getElementById('user_dni').value;
            var user_factor = document.getElementById('user_factor');
            user_factor.value = password;
        }
    </script>
</x-app-layout>
