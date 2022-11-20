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
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" ><a href="javascript:void(0);">Carga Académica</a></li>
                                <!--<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Secciones</a></li>-->
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
                <!--<div class="row mb-2 ">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-4 mb-0 mt-3 mr-auto ml-2 m-0">
                        <h2 class="text-bold text-primary fond-bold m-0">Carga</h2>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-6 justify-content-end mb-0 d-flex mt-0 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid justify-content-end mb-0" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>-->
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-auto">
                                    <h4>Lapso Academico: </h4>
                                </div>
                                <div class="col-auto">
                                    <input type="text" class="form-control mb-4" id="lapso" value="{{ $load->lapse }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table id="column-filter" class="table dt-table-hover non-hover align-center">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="checkbox-column dt-no-sorting"> Codigo </th>
                                            <th>Asignatura</th>
                                            <th>U.C.</th>
                                            <th>Sección</th>
                                            <th>Nota</th>
                                            <th>Condición</th>
                                            <th class="text-center dt-no-sorting">Detalle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_courses as $data_course)

                                                <tr class="text-center">
                                                    <td class="text-primary">{{ $data_course->code }}</td>
                                                    <td>{{ $data_course->name }}</td>
                                                    <td>{{ $data_course->credit_units }}</td>
                                                    <td>{{ $data_course->section }}</td>
                                                    <td>{{ $data_course->qualif }}</td>
                                                    <td><span class="shadow-none badge badge-primary">{{ $data_course->statusnote }}</span></td>
                                                    <td class="text-center"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#{{ $data_course->code }}"> Ver </button></td>
                                                    <!-- Modal -->

                                                        <div class="modal fade" id="{{ $data_course->code }}" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">

                                                                        <h4 class="modal-title" id="exampleModalLabel">Calificaciones</h5>
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <form class="form-horizontal" role="form">
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                                                <h5>Asignatura</h5>
                                                                            </div>
                                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlInput1">Código</label>
                                                                                    <input class="form-control" type="text" id="codigo" value="{{ $data_course->code }}" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlInput1">Nombre</label>
                                                                                    <input class="form-control" type="text" id="nombre" value="{{ $data_course->name }}" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlInput1">U.C.</label>
                                                                                    <input class="form-control" type="text"  id="uc" value="{{ $data_course->credit_units }}" readonly>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <hr>
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                                                <h5>Profesor</h5>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                                                <div class="form-group">
                                                                                    @foreach ($name_teachers as $name_teacher)
                                                                                        @if ($name_teacher->proceedings == $data_course->proceedings && $name_teacher->code==$data_course->code)
                                                                                        <input class="form-control" type="text" id="prof" value="{{ $name_teacher->names_t }} {{ $name_teacher->lnames_t }}" readonly>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <hr>
                                                                        <div class="row">
                                                                            <div class="col-2">
                                                                                <h5>Cortes</h5>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                                        <div class="input-group">
                                                                                        <span class="input-group-addon">1</span>
                                                                                        <input type="text" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                                        <div class="input-group">
                                                                                        <span class="input-group-addon">2</span>
                                                                                        <input type="text" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                                        <div class="input-group">
                                                                                        <span class="input-group-addon">3</span>
                                                                                        <input type="text" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                                        <div class="input-group">
                                                                                        <span class="input-group-addon">4</span>
                                                                                        <input type="text" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <hr>

                                                                        <div class="alert alert-warning alert-dismissible" role="alert">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                            <p><strong>NOTA:</strong> Recuerda que en caso de semestre regular son cuatro(4) cortes y en caso de Intensivo son tres(3) cortes.</p>
                                                                        </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </tr>


                                        @endforeach
                                    </tbody>

                                </table>
                            </div>

                                <div class="col-12 mt-3" align="right">
                                    <button type="button" class="btn btn-primary">Genera PDF</button>
                                    <!--<button class="btn btn-danger mb-2 mr-2"><svg> ... </svg></button>-->
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
