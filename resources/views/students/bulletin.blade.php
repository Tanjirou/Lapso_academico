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
            <div class="">
                <div class="container mb-0">
                    <div class="row mb-2 justify-content-center">
                        <div class="col-md-12 align-self-center order-md-0 order-1 ml-2 ">

                            <nav class="breadcrumb-two align-self-center mt-4" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Estudiante</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">General</a></li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-4 mb-0 md-mb-0 order-md-0 order-0 mt-3 ml-3">
                            <h1 class="text-bold text-primary fond-bold ">Boletin</h1>
                        </div>
                        <div class="col-md-4 col-6 mb-0 md-mb-0  order-md-0 order-1 d-flex justify-content-end ml-5 mt-0">
                            <img src="assets/img/logo-sicano4.png" class="img-fluid mb-3" alt="header-image" style="width: 40%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row justify-content-center">
                               <!-- <div class="col-xl-12 col-md-12 col-sm-12 col-12 order-1 ml-2 mt-2 mb-4" align="center">
                                    <h3>Notas finales</h3>
                                </div>-->

                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-2">
                                <table id="style-1" class="table style-1 dt-table-hover non-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="checkbox-column dt-no-sorting"> Codigo </th>
                                            <th>Asignatura</th>
                                            <th>U.C.</th>
                                            <th>Sección</th>
                                            <th>Nota Definitiva</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td class="checkbox-column"> CAL001 </td>
                                            <td class="user-name">Calculo I</td>
                                            <td>4</td>
                                            <td>2</td>
                                            <td>6</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td class="checkbox-column"> ALG200 </td>
                                            <td class="user-name">Algebra</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>7</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td class="checkbox-column"> LENG001 </td>
                                            <td class="user-name">Lenguaje y Comunicacion</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>9</td>

                                        </tr>
                                    </tbody>

                                </table>
                            </div>

                                <div class="col-xl-12 col-md-12 col-sm-12 col-12" align="right">
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
