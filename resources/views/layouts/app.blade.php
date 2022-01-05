<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.ico') }}" />
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/loader.js') }}"></script>

    <!-- Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('assets/css/elements/breadcrumb.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/faq/faq.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />

    {{-- @livewireStyles --}}
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    @yield('styles_home')


</head>

<body class="sidebar-noneoverflow">
    {{-- <x-jet-banner />
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
    </div>
    </header> --}}
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-nav theme-brand  flex-row  text-center">
                <li class="nav-item theme-logo ml-2">
                    <a href="{{ route('dashboard') }}">
                        <!--<img src="assets/img/log.png" class="navbar-logo" alt="logo">-->
                        <img src="{{ asset('assets/img/logo4.png') }}" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text mr-5">
                    <a href="{{ route('dashboard') }}" class="nav-link text-center"> UNEXPO </a>
                </li>
                <li class="nav-item toggle-sidebar">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3" y2="6"></line>
                            <line x1="3" y1="12" x2="3" y2="12"></line>
                            <line x1="3" y1="18" x2="3" y2="18"></line>
                        </svg></a>
                </li>
            </ul>

            <ul class="navbar-item flex-row search-ul">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-search toggle-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>

                </li>
            </ul>

            <ul class="navbar-item flex-row navbar-dropdown">
                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                @if (auth()->user()->user_type == 1)
                                    <img src="{{ ((auth()->user()->photo) ? auth()->user()->photo : asset('assets/img/perfil-admin-peq.png'))  }}" class="img-fluid mr-2" alt="avatar">
                                @elseif(auth()->user()->user_type ==2)
                                    <img src="{{ ((auth()->user()->photo) ? auth()->user()->photo : asset('assets/img/perfil-prof-peq.png'))  }}" class="img-fluid mr-2" alt="avatar">
                                @else
                                    <img src="{{ ((auth()->user()->photo) ? auth()->user()->photo : asset('assets/img/student.png'))  }}" class="img-fluid mr-2" alt="avatar">
                                @endif

                                <div class="media-body">
                                    <h5>{{ auth()->user()->names }}</h5>
                                    @if (auth()->user()->user_type == 1)
                                        <p>Administrador</p>
                                    @elseif(auth()->user()->user_type ==2)
                                        <p>Profesor</p>
                                    @else
                                        <p>Estudiante</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            @if (auth()->user()->user_type == 1)
                                <a href="{{ route('teacher.profile') }}">
                                @elseif(auth()->user()->user_type ==2)
                                    <a href="{{ route('teacher.profile') }}">
                                    @else
                                        <a href="{{ route('students.student_profile') }}">
                            @endif

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg> <span>Mi Perfil</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                </svg> <span>Mis mensajes</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{  route('profile.show') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg> <span>Ajustes</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Cerrar sesión</span>
                            </a>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">
                <div class="profile-info">
                    <figure class="user-cover-image"></figure>
                    <div class="user-info">
                        <h6 class="">{{ auth()->user()->names }}</h6>
                        @if (auth()->user()->user_type == 1)
                        <img src="{{ asset('assets/img/perfil-admin.png') }}" alt="avatar">
                        <img src="{{ (auth()->user()->photo) ? auth()->user()->photo : asset('assets/img/perfil-admin.png')  }}" alt="avatar">
                            <p>Administrador</p>
                        @elseif(auth()->user()->user_type ==2)
                        <img src="{{ asset('assets/img/perfil-prof.png') }}" alt="avatar">
                        <img src="{{ (auth()->user()->photo) ? auth()->user()->photo : asset('assets/img/perfil-prof.png')  }}" alt="avatar">
                            <p>Profesor</p>
                        @else
                        <img src="{{ asset('assets/img/perfil-estud.png') }}" alt="avatar">
                        <img src="{{ (auth()->user()->photo) ? auth()->user()->photo : asset('assets/img/student.png')  }}" alt="avatar">
                            <p>Estudiante</p>
                        @endif
                    </div>
                </div>
                {{-- <div class="shadow-bottom mt-0">
                </div> --}}
                <ul class="list-unstyled menu-categories mt-0" id="accordionExample">
                    <!--INICIO-->
                    <!--<li class="menu active">-->
                    <li class="menu menu-heading mt-0 text-center">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>PANEL DE CONTROL</span></div>
                    </li>
                    <li class="menu">
                        <a href="{{ route('home') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="active">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Inicio</span>
                                {{-- <a href="{{ route('home') }}"> Panel actividades </a> --}}
                            </div>
                            {{-- <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div> --}}
                        </a>
                        {{-- <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled"
                            id="dashboard" data-parent="#accordionExample">
                            <!--<li class="active">-->
                            <li class="active">
                                <a href="{{ route('home') }}"> Panel actividades </a>
                            </li>
                        </ul> --}}
                    </li>

                    <!--ESTUDIANTE-->
                    @if (auth()->user()->user_type == 3)
                        <li class="menu">
                            <a href="#student-general" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-layers">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                    <span>Gestión Estudiante</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="student-general"
                                data-parent="#accordionExample">
                                <li class="active">
                                    <a href="{{ route('enrolled_subject.show') }}"> Carga Académica </a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('studensts.bulletin') }}"> Boletin </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="#student-ver" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-layout">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="3" y1="9" x2="21" y2="9"></line>
                                        <line x1="9" y1="21" x2="9" y2="9"></line>
                                    </svg>
                                    <span>Sevicios</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="student-ver" data-parent="#accordionExample">
                                <li class="active">
                                    <a href=" {{ route('students.history') }}"> Historial de Notas</a>
                                </li>
                                <li class="active">
                                    <a href="index2.html"> Constancia </a>
                                </li>
                                <li class="active">
                                    <a href="index2.html"> Solicitud Revisión </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="menu">
                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>Usuarios</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                            <li>
                                <a href="student_profile.html"> Perfil </a>
                            </li>
                            <li>
                                <a href="{{ route('students.settings') }}"> Ajustes </a>
                            </li>
                        </ul>
                    </li> --}}
                    @endif

                    <!--PROFESOR-->
                    @if (auth()->user()->user_type == 2)
                        {{-- <li class="menu menu-heading">
                            <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg><span>MENÚ</span></div>
                        </li> --}}
                        <li class="menu">
                            <a href="#teacher-general" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-layers">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                    <span>Gestión Profesor</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled" id="teacher-general"
                                data-parent="#accordionExample">
                                <li class="active">
                                    <a href="{{ route('teacher.assigned_sections') }}"> Secciones asignadas </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu">
                            <a href="#proceso" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-airplay">
                                        <path
                                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                        </path>
                                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                    </svg>
                                    <span>Procesos</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="proceso" data-parent="#accordionExample">
                                <li class="active">
                                    <a href="{{ route('teacher.load_cut') }}">Cargar Corte</a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('teacher.upload_content') }}">Cargar Contenido</a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('teacher.load_evaluations') }}">Cargar Evaluaciones</a>
                                </li>
                                <li class="active">
                                    <a href="#cargar-notas" data-toggle="collapse" aria-expanded="false"
                                        class="dropdown-toggle"> Cargar Notas <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg> </a>
                                    <ul class="collapse sub-submenu list-unstyled" id="cargar-notas"
                                        data-parent="#proceso">
                                        <li class="active">
                                            <a href="{{ route('teacher.upload_notes') }}"> Por Corte </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('teacher.substitutes') }}"> Sustitutivos </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                        {{-- <li class="menu">
                            <a href="#users-teacher" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    <span>Usuarios</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="users-teacher"
                                data-parent="#accordionExample">
                                <li>
                                    <a href="teacher_profile.html"> Perfil </a>
                                </li>
                                <li>
                                    <a href="user_account_setting.html"> Ajustes </a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="menu">
                            <a href="#report-teacher" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-clipboard">
                                        <path
                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                        </path>
                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                    </svg>
                                    <span>Reportes</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="report-teacher"
                                data-parent="#accordionExample">
                                <li class="active">
                                    <a href="user_profile2.html">Notas por corte</a>
                                </li>
                                <li class="active">
                                    <a href="user_account_setting.html">Notas Total</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    <!--ADMINISTRADOR-->
                    @if (auth()->user()->user_type == 1)
                        {{-- <li class="menu menu-heading">
                            <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg><span>MENU ADMIN</span></div>
                        </li> --}}
                        <li class="menu">
                            <a href="#admin-permisos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <span>Permisos</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="admin-permisos" data-parent="#accordionExample">
                                <li class=" active">
                                    <a href=" index.html">Asignar</a>
                                </li>
                                <li class=" active">
                                    <a href="index2.html">Modificar</a>
                                </li>
                                <li class=" active">
                                    <a href="index2.html">Eliminar</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
        <!--  END SIDEBAR  -->
        <!-- Page Content -->
        <main class="d-flex col-12">
            {{ $slot }}
        </main>


        <!--<div class="footer-wrapper justify-content-center">
            <div class="footer-section f-section-1 align-content-center">

                <p class="align-content-center ">Copyright © 2021 | Ing. Jorge Melendez -
                        Ing. Miguel Alvarez | Programa Ingeniería Electrónica, All rights reserved.</p>
            </div>
        </div>-->

        <!-- footer -->
        <!--<div class="footer-wrapper">
            <div class="footer-section f-section-1 align-content-center">
                <div class="row justify-content-center">
                    <div class=" col-md-1 col-lg-3 order-md-0 order-0 d-flex align-item-center ml-5 mt-1">

                    </div>
                    <div class="col-4 col-md-3 col-lg-3 order-md-0 order-0 d-flex justify-content-start ml-5 mt-1">
                        <img src="{{ asset('assets/img/logo-promo56.png') }}"
                            class="img-fluid mr-3 mb-3 float-md-right" alt="header-image" style="width: 18%;">
                    </div>
                    <div class="col-4 col-md-3 col-lg-3 order-md-0 order-0 d-flex ml-5 mt-1 justify-content-start">
                        <img src="{{ asset('assets/img/logo-IE.png') }}" class="img-fluid mb-3" alt="header-image"
                            style="width: 18%;">
                    </div>
                    <div class="col-md-1 col-lg-3 order-md-0 order-0 d-flex justify-content-center ml-5 mt-1">

                    </div>
                    <div class="footer-section f-section-1 text-center">
                        <p class="">Copyright © 2021 | Ing. Jorge Melendez - Ing. José Torcates |
                            Programa Ingeniería Electrónica, All rights reserved.</p>
                    </div>

                </div>

                <div class="row justify-content-center mb-5">
                    <ul class="socialIcons">
                        <li class="facebook"><a href=""><i class="fab fa-facebook-f"></i>Facebook</a></li>
                        <li class="twitter"><a href=""><i class="fab fa-twitter"></i>Twitter</a></li>
                        <li class="instagram"><a href=""><i class="fab fa-instagram"></i>Instagram</a></li>
                    </ul>
                </div>
            </div>

        </div>-->
        <div class="footer-wrapper justify-content-center mt-0">
            <div class="footer-section f-section-1 align-content-center">
                <div class="row justify-content-center">
                    <div class=" col-md-1 col-lg-3 order-md-0 order-0 d-flex align-item-center ml-5">

                    </div>
                    <div class="col-4 col-md-3 col-lg-3 order-md-0 order-0 d-flex justify-content-start ml-5">
                        <img src="{{ asset('assets/img/cuadro.png') }}"
                            class="img-fluid d-none d-xl-block mr-3 mb-3 float-md-right" alt="" style="width: 3%;">
                    </div>
                    <div class="col-4 col-md-3 col-lg-3 order-md-0 order-0 d-flex ml-5 justify-content-start">
                        <img src="{{ asset('assets/img/cuadro.png') }}" class="img-fluid d-none d-xl-block mb-3" alt=""
                            style="width: 15%;">
                   </div>
                    <div class="col-md-1 col-lg-3 order-md-0 order-0 d-flex ml-3 justify-content-start">

                    </div>
                    <div class="footer-section f-section-1 text-center mr-xl-auto">
                        <hr class="mt-0">
                        <h6 class="text-muted lead mt-0">ENCUENTRANOS EN LAS REDES</h6>
                                <div class="redes-footer text-right">

                                        <ul class="socialIcons align-content-end">
                                            <li class="facebook"><a href="https://www.facebook.com/Unexpove"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                            <li class="twitter"><a href="https://twitter.com/UnexpoVe"><i class="fab fa-twitter"></i>Twitter</a></li>
                                            <li class="instagram"><a href="https://www.instagram.com/unexpove/?hl=es-la"><i class="fab fa-instagram"></i>Instagram</a></li>
                                        </ul>

                                </div>
                        {{-- <h6 class="text-muted">
                            Av. Corpahuaico entre Av. La Salle y La Rotaria. Barquisimeto. Venezuela<br>
                                    Teléfono: +58 251-6110237 | Email:  uracebqto@gmail.com<br>
                        </h6> --}}
                        {{-- <div class="row">
                            <div class="col-2 justify-content-end text-right">
                                <img src="{{ asset('assets/img/logo-promo56.png') }}" class="img-fluid mb-3" alt="header-image"
                                style="width: 20%;">
                            </div>
                            <div class="col-2 justify-content-start text-left">
                                <img src="{{ asset('assets/img/logo-IE.png') }}" class="img-fluid mb-3" alt="header-image"
                                style="width: 20%;">
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-center">
                                <img src="{{ asset('assets/img/logo-IE.png') }}" class="img-fluid d-none d-sm-block mt-1 mb-1" alt="header-image"
                                style="width: 30%;">
                            </div>
                            <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 justify-content-center text-center">
                                <h6 class="text-muted">
                                    Av. Corpahuaico entre Av. La Salle y La Rotaria. Barquisimeto. Venezuela<br>
                                            Teléfono: +58 251-6110237 | Email:  uracebqto@gmail.com<br>
                                </h6>
                            </div>
                            <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-center">
                                <img src="{{ asset('assets/img/logo-promo56.png') }}" class="img-fluid d-none d-sm-block mt-1 mb-1" alt="header-image"
                                style="width: 30%;">
                            </div>
                        </div>

                        <p class="">Copyright © 2021 | Ing. Jorge Melendez - Ing. José Torcates |
                            Programa Ingeniería Electrónica, All rights reserved.
                        </p>
                    </div>


                </div>

                <!--<div class="row justify-content-center mb-5">
                    <ul class="socialIcons">
                        <li class="facebook"><a href=""><i class="fab fa-facebook-f"></i>Facebook</a></li>
                        <li class="twitter"><a href=""><i class="fab fa-twitter"></i>Twitter</a></li>
                        <li class="instagram"><a href=""><i class="fab fa-instagram"></i>Instagram</a></li>
                    </ul>
                </div>-->
            </div>

        </div>


            <!--<div class="footer-wrapper border">
                <div class="footer-section f-section-1 align-content-center container p-0 border col-2 mr-5 ">
                </div>

                <div class="footer-section f-section-1 align-content-center container border p-0">
                    <div class="row">
                        <div class="col-xs-12 col-md-5 mr-5 text-left border">
                            <h6 class="text-muted lead">CONTACTO:</h6>
                            <h6 class="text-muted">
                            Av. Corpahuaico entre Av. La Salle y La Rotaria.<br>
                            Barquisimeto. Venezuela.<br>
                            Teléfono: +58 251-6110237<br>
                            Email:  uracebqto@gmail.com<br>
                            </h6>
                        </div>
                        <div class="col-xs-12 col-md-6 text-right border justify-content-end p-0">

                                <h6 class="text-muted lead">ENCUENTRANOS EN LAS REDES</h6>
                                <div class="redes-footer text-right">

                                        <ul class="socialIcons align-content-end">
                                            <li class="facebook"><a href=""><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                            <li class="twitter"><a href=""><i class="fab fa-twitter"></i>Twitter</a></li>
                                            <li class="instagram"><a href=""><i class="fab fa-instagram"></i>Instagram</a></li>
                                        </ul>

                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right pr-5">
                            <p class="text-muted small text-right">José Miguel, arte y belleza @2016.<br> Todos los derechos reservados.</p>
                        </div>
                    </div>
                    <div class="footer-section f-section-1 align-content-center">
                        <p class="text-center">Copyright © 2021 <a target="_blank" href="https://designreset.com">Ing. Jorge Melendez - Ing. José Torcates</a>, Programa Ingeniería Electrónica, All rights reserved.</p>
                    </div>
                </div>
            </div>-->

        <!--  END FOOTER  -->

    </div>
    <!--  END CONTENT AREA  -->
    <!-- END MAIN CONTAINER -->
    @stack('modals')

    @livewireScripts

    @stack('scripts')
    @yield('javascripts')
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
    @yield('javascripts_sweet')

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dash_1.js') }}"></script>
    <script src="{{ asset('assets/js/users/account-settings.js') }}"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

</html>
