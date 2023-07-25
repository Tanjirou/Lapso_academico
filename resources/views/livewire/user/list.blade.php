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
                <div class="row mb-2 mt-5">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Actualizar</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image"
                            style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>
            @if (session()->has('mens'))
                <div class="alert alert-success mt-2">
                    <h5 class="text-center" >{{ session('mens') }}</h5>
                </div>
            @endif
            @if (session()->has('mens-error'))
                <div class="alert alert-danger mt-2">
                    <h5 class="text-center" >{{ session('mens-error') }}</h5>
                </div>
            @endif

            <div class="row layout-spacing mt-2 justify-content-center mt-3">
                <div class="col-12">
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row justify-content-center mb-3">
                            <h2 class="fond-weight-bold text-bold text-primary m-0 mb-2">LISTADO DE USUARIOS</h2>
                        </div>
                        <div class="row mt-0">
                            <div class="col-12">
                                <div class="table-responsive text-center">
                                    <table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Cédula</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Tipo de Usuario</th>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $cont=1; @endphp
                                            @foreach ($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $cont++ }}</th>
                                                    <td>{{ $user->dni }}</td>
                                                    <td>{{ $user->names . ' ' . $user->last_names }}</td>
                                                    <td>{{ $user->description }}</td>
                                                    <td>{{ is_null($user->name) ? 'Sin departamento' : $user->name }}
                                                    </td>
                                                    <td class="d-flex justify-content-center">
                                                        <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                                            type="button"
                                                            class="bg-info px-2 py-1 text-white rounded">Editar</a>
                                                        <form action="{{ route('users.delete', ['user' => $user->id]) }}"
                                                            method="POST" class="ml-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button href="{{ route('user.edit', ['user' => $user->id]) }}"
                                                                type="submit"
                                                                class="bg-danger px-2 py-1 text-white rounded">Eliminar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-center">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
