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
                    <div class="row mb-2">
                        <div class="col-xl-7 col-lg-6 col-md-4 col-sm-5 col-4 mb-0 justify-content-start mt-3 ml-1">
                            <h2 class="text-bold text-primary fond-bold">Secciones</h2>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-5 col-6 mb-0 d-flex justify-content-end ml-5 mt-0">
                            <img src="assets/img/logo-sicano4.png" class="img-fluid mb-0" alt="header-image" style="width-sm: 25%; width-md: 35%; width: 40%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">

                        <div class="row mt-0">
                            <div class="col-md-12">
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




                         <div class="widget-content widget-content-area table-responsive">
                            <table id="column-filter" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column dt-no-sorting"> Asignatura </th>
                                        <th>Seccion</th>
                                        <th>Condición</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox-column"> 22.345.567 </td>
                                        <td>Juan David Jimenez Pereira</td>
                                        <td><span class="shadow-none badge badge-primary">Inscrita</span></td>

                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 19.000.888 </td>
                                        <td>Maria Jimenez Gonzalez Hernandez</td>
                                        <td><span class="shadow-none badge badge-danger">Repitiendo</span></td>

                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 24.987.654 </td>
                                        <td>Cristibal Marin Gutierrez</td>
                                        <td><span class="shadow-none badge badge-primary" >Inscrita</span></td>
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
