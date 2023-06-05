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
                                <li class="breadcrumb-item" ><a href="javascript:void(0);">Secciones</a></li>
                                <!--<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Secciones</a></li>-->
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>

                {{-- <div class="row mb-2 ">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-4 mb-0 mt-3 mr-auto ml-2 m-0">
                        <h2 class="text-bold text-primary fond-bold m-0">Secciones</h2>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-6 justify-content-end mb-0 d-flex mt-0 ml-auto">
                        <img src="assets/img/logo-sicano4.png" class="img-fluid justify-content-end mb-0" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div> --}}
            </div>
            <div class="row layout-spacing mt-2">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row mt-0">
                            <div class="col-md-12">
                                <div class="row justify-content-end text-right">
                                    <div class="form-group col-md-12">
                                         <button class="btn btn-success mr-2 btn-lg"> <a href="#"></a> Ver todas </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="textDpto">Departamento</label>
                                             <input type="text" class="form-control" id="dpto" placeholder="Dpto" value="Ciencias Sociales" readonly >
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="textMateria">Carrera</label>
                                                <select class="form-control" id="textMateria">
                                                    <option>Ing. Mecanica</option>
                                                    <option>Ing. Electrica</option>
                                                    <option>Ing. Industrial</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="textMateria">Asignatura</label>
                                                <select class="form-control" id="textMateria">
                                                    <option>Calculo I</option>
                                                    <option>Algebra</option>
                                                    <option>Lenguaje</option>
                                                    <option>Ingles I</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="form-group text-center col-md-12">
                                             <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Buscar</button>
                                        </div>
                                    </div>

                                    <hr>



                         <h4 class="text-center mb-4">Listado de las secciones asignadas</h4>
                         <div class="widget-content widget-content-area table-responsive">
                            <table id="column-filter" class="table table-bordered table-hover table-striped text-center">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column dt-no-sorting"> Asignatura </th>
                                        <th> Sección </th>
                                        <th>Nro. Estudiantes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox-column"> Calculo I  </td>
                                        <td> 1 </td>
                                        <td><span class="shadow-none badge badge-primary">35</span></td>

                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> Calculo I  </td>
                                        <td> 3 </td>
                                        <td><span class="shadow-none badge badge-primary"> 40 </span></td>

                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> Algebra Lineal </td>
                                        <td> 2 </td>
                                        <td><span class="shadow-none badge badge-primary"> 37 </span></td>

                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> Fisica I </td>
                                        <td> 2 </td>
                                        <td><span class="shadow-none badge badge-primary"> 40 </span></td>
                                    </tr>
                                </tbody>

                            </table>


                                <!--<div class="col-xl-12 col-md-12 col-sm-12 col-12" align="right">
                                    <button type="button" class="btn btn-primary">Genera PDF</button>

                                </div>-->

                        </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
