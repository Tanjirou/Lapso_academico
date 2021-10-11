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
                        <div class="col-lg-7 col-md-6 col-5 mb-0 md-mb-0 order-md-0 order-0 mt-5 ml-3">
                            <h3 class="text-bold text-primary fond-bold ">Datos del Estudiante</h3>
                        </div>
                        <div class="col-md-4 col-5 mb-0 md-mb-0 order-md-0 order-1 d-flex justify-content-end ml-5 mt-0">
                            <img src="assets/img/logo-sicano4.png" class="img-fluid mb-3" alt="header-image" style="width: 40%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="account-settings-container layout-top-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">

                            </div>
                            <div class="widget-content widget-content-area simple-pills">
                                <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-nacim-tab" data-toggle="pill" href="#pills-nacim" role="tab" aria-controls="pills-nacim" aria-selected="false">Nacimiento</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contacto</a>
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
                                                        <div class="col-lg-11 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                                    <div class="upload mt-4 pr-md-4">
                                                                        <input type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ ('assets/img/200x200.jpg') }}" data-max-file-size="2M" />
                                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Foto Perfil</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="nacionalidad">Nacionalidad</label>
                                                                                    <input type="text" class="form-control mb-4" id="nacionalidad" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="cedula">Cédula de Identidad</label>
                                                                                    <input type="number" class="form-control mb-4" id="cedula" readonly >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="nombres">Nombres</label>
                                                                                    <input type="text" class="form-control mb-4" id="nombres" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="apellidos">Apellidos</label>
                                                                                    <input type="text" class="form-control mb-4" id="apellidos" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="genero">Genero</label>
                                                                                    <input type="text" class="form-control mb-4" id="genero" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="estadociv">Estado Civil</label>
                                                                                    <input type="text" class="form-control mb-4" id="estadociv" readonly>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="carrera">Carrera Inscrita</label>
                                                                            <input type="text" class="form-control mb-4" id="carrera" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-nacim" role="tabpanel" aria-labelledby="pills-nacim-tab">
                                        <!--  LUGAR Y FECHA DE NACIMIENTO  -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                            <form id="contact" class="section contact">
                                                <div class="info">
                                                    <h5 class="">Lugar y fecha de nacimiento</h5>
                                                    <div class="row">
                                                        <div class="col-md-10 mx-auto">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="country">Pais</label>
                                                                        <input type="text" class="form-control mb-4" id="country" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="state">Estado</label>
                                                                        <input type="text" class="form-control mb-4" id="state" readonly >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="place">Lugar</label>
                                                                        <input type="text" class="form-control mb-4" id="place" readonly >
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="dob-input">Fecha de Nacimiento</label>
                                                                        <div class="d-sm-flex d-block">
                                                                            <div class="form-group mr-2">
                                                                                <select class="form-control" readonly id="exampleFormControlSelect1">
                                                                                    <option selected>Dia</option>
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                    <option>9</option>
                                                                                    <option>10</option>
                                                                                    <option>11</option>
                                                                                    <option>12</option>
                                                                                    <option>13</option>
                                                                                    <option>14</option>
                                                                                    <option>15</option>
                                                                                    <option>16</option>
                                                                                    <option>17</option>
                                                                                    <option>18</option>
                                                                                    <option>19</option>
                                                                                    <option>20</option>
                                                                                    <option>21</option>
                                                                                    <option>22</option>
                                                                                    <option>23</option>
                                                                                    <option>24</option>
                                                                                    <option>25</option>
                                                                                    <option>26</option>
                                                                                    <option>27</option>
                                                                                    <option>28</option>
                                                                                    <option>29</option>
                                                                                    <option>30</option>
                                                                                    <option>31</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group mr-2">
                                                                                <select class="form-control" readonly id="month">
                                                                                    <option selected>Mes</option>
                                                                                    <option>Enero</option>
                                                                                    <option>Febrero</option>
                                                                                    <option>Marzo</option>
                                                                                    <option>Abril</option>
                                                                                    <option>Mayo</option>
                                                                                    <option>Junio</option>
                                                                                    <option>Julio</option>
                                                                                    <option>Agosto</option>
                                                                                    <option>Septiembre</option>
                                                                                    <option>Octubre</option>
                                                                                    <option>Noviembre</option>
                                                                                    <option>Diciembre</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group mr-2">
                                                                                <select class="form-control" readonly id="year">
                                                                                    <option selected>Año</option>
                                                                                    <option>2020</option>
                                                                                    <option>2019</option>
                                                                                    <option>2018</option>
                                                                                    <option>2017</option>
                                                                                    <option>2016</option>
                                                                                    <option>2015</option>
                                                                                    <option>2014</option>
                                                                                    <option>2013</option>
                                                                                    <option>2012</option>
                                                                                    <option>2011</option>
                                                                                    <option>2010</option>
                                                                                    <option>2009</option>
                                                                                    <option>2008</option>
                                                                                    <option>2007</option>
                                                                                    <option>2006</option>
                                                                                    <option>2005</option>
                                                                                    <option>2004</option>
                                                                                    <option>2003</option>
                                                                                    <option>2002</option>
                                                                                    <option>2001</option>
                                                                                    <option>2000</option>
                                                                                    <option>1999</option>
                                                                                    <option>1998</option>
                                                                                    <option>1997</option>
                                                                                    <option>1996</option>
                                                                                    <option>1995</option>
                                                                                    <option>1994</option>
                                                                                    <option>1993</option>
                                                                                    <option>1992</option>
                                                                                    <option>1991</option>
                                                                                    <option>1990</option>
                                                                                    <option>1989</option>
                                                                                    <option>1988</option>
                                                                                    <option>1987</option>
                                                                                    <option>1986</option>
                                                                                    <option>1985</option>
                                                                                    <option>1984</option>
                                                                                    <option>1983</option>
                                                                                    <option>1982</option>
                                                                                    <option>1981</option>
                                                                                    <option>1980</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <!--  INFORMACION DE CONTACTO  -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                            <form id="contact" class="section contact">
                                                <div class="info">
                                                    <h5 class="">INFORMACION DE CONTACTO</h5>
                                                    <div class="row">
                                                        <div class="col-md-10 mx-auto">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone1">Teléfono Local</label>
                                                                            <input type="text" class="form-control mb-4" id="phone1" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone2">Teléfono Celular</label>
                                                                            <input type="text" class="form-control mb-4" id="phone2" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="address">Direccion de Habitación</label>
                                                                    <input type="text" class="form-control mb-4" id="address" readonly >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control mb-4" id="email" readonly>
                                                                </div>

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
                                            <form id="contact" class="section contact">
                                                <div class="info">
                                                    <h5 class="">ACTUALIZACION</h5>
                                                    <div class="row">
                                                        <div class="col-md-10 mx-auto">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone1">Teléfono Local</label>
                                                                            <input type="text" class="form-control mb-4" id="phone1" placeholder="02514443050" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone2">Teléfono Celular</label>
                                                                            <input type="text" class="form-control mb-4" id="phone2" placeholder="04244443050">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="address">Direccion de Habitación</label>
                                                                    <input type="text" class="form-control mb-4" id="address" placeholder="Ej: Calle 10 Sector La Union" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control mb-4" id="email" placeholder="Ej: juanpablo_alv@gmail.com">
                                                                </div>
                                                                <div class="form-group text-center">
                                                                    <button type="button" class="btn btn-primary text-center">Guardar</button>
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


            <!--<div class="row mb-5 justify-content-center">
                <div class="col-lg-5 col-md-5 col-4 order-md-0 order-0 d-flex justify-content-center ml-5 mt-1">
                    <img src="{{asset('assets/img/logo-promo56.png')}}" class="img-fluid mb-1 float-md-right" alt="header-image" style="width: 25%;">
                </div>
                <div class="col-lg-5 col-md-5 col-4 order-md-0 order-0 d-flex ml-5 mt-1 justify-content-start">
                    <img src="{{asset('assets/img/logo-IE.png')}}" class="img-fluid mb-1" alt="header-image" style="width: 25%;">
                </div>
            </div>-->



    </div>
</x-app-layout>
