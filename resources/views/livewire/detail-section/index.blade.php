<div>
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Calificar</a></li>
                                <!--<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Secciones</a></li>-->
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image"
                            style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>
            @if (!is_null($academic_lapse))
                <div class="row layout-spacing mt-2">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow shadow ">
                            <div class="row mt-0 justify-content-center">
                                <div class="col-md-10 align-content-center">
                                    <div class="row justify-content-center mb-3 mt-2 mr-auto ml-2 m-0">
                                        <h2 class="text-bold text-primary fond-bold m-0">Datos a Cargar</h2>
                                    </div>

                                    <div class="row mt-0 justify-content-center">
                                        <div class=" col-11 col-md-10 pb-3">
                                            @if (session()->has('mens'))
                                                <div class="alert alert-success">
                                                    {{ session('mens') }}
                                                </div>
                                            @endif
                                            <form wire:submit.prevent="save">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="textDpto">Departamento</label>
                                                            <input type="text" class="form-control" id="dpto"
                                                                placeholder="Dpto" value="{{ $department->name }}"
                                                                readonly>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textPunt">Lapso Academico</label>
                                                            <input class="form-control" type="text" placeholder="40"
                                                                readonly
                                                                value="{{ isset($academic_lapse) ? $academic_lapse->description : '' }}">
                                                            <input type="hidden" wire:model="lapse" id="lapse">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textAsig">Asignatura</label>
                                                            <select wire:model="selectedSubject" class="form-control"
                                                                id="textAsig">
                                                                <option value="">Seleccione</option>
                                                                @if (!is_null($subjects))
                                                                    @foreach ($subjects as $subject)
                                                                        <option value="{{ $subject->id }}">
                                                                            {{ $subject->name }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            @error('selectedSubject')
                                                                <div class="mt-1 text-danger text-sm">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section_number">Seccion</label>
                                                            <select wire:model="section_number" class="form-control"
                                                                id="section_number">
                                                                <option value="">Seleccione</option>
                                                                @if (!is_null($sections))
                                                                    @foreach ($sections as $section)
                                                                        <option value="{{ $section->id }}">
                                                                            {{ $section->section_number }}</option>
                                                                    @endforeach

                                                                @endif
                                                            </select>
                                                            @error('section_number')
                                                                <div class="mt-1 text-danger text-sm">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="form-group text-center col-md-12">
                                                        @if (is_null($evaluate_section))
                                                            <button class="btn btn-primary mr-2 btn-lg">
                                                                Siguiente </button>
                                                        @endif

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            @if (!is_null($evaluate_section))
                                <div class="col-12">
                                    <div class="row justify-content-center">
                                        <h2 class="text-bold text-primary fond-bold m-0 mb-2">Estudiantes</h2>
                                    </div>
                                    <div class="row mt-0 justify-content-center">
                                        <div class=" col-11 col-md-10 pb-3">
                                            <form wire:submit.prevent="store" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textDpto">Cedula</label>
                                                            <input type="text" class="form-control" id="dni"
                                                                placeholder="Cedula">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textDpto">Nombre</label>
                                                            <input type="text" class="form-control" id="name"
                                                                placeholder="Nombre">

                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-12 col-md-6 mt-2 align-content-center align-items-center">
                                                        <label for="academic_curricula">Pensum</label>
                                                        <select class="form-control" name="academic_curricula">
                                                            <option value="">Seleccione</option>

                                                        </select>
                                                        @error('academic_curricula')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 align-content-center align-items-center">
                                                        <div class="form-group row d-flex justify-content-center mt-3">
                                                            <div class="col-md-5">
                                                                <input type="radio" class="form-check-input"
                                                                    id="qualification" value="aprobado"
                                                                    name="qualification" placeholder="Nombre"><label
                                                                    class="form-check-label"
                                                                    for="textDpto">Aprobado</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="radio" class="form-check-input"
                                                                    id="qualification" value="reprobado"
                                                                    name="qualification" placeholder="Nombre"><label
                                                                    class="form-check-label"
                                                                    for="textDpto">Reprobado</label>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center text-center">
                                                    <div class="form-group text-center  col-md-12">
                                                        <button class="btn btn-primary mr-2 btn-lg">
                                                            Cargar </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @else
                <p class="font-weight-bold">Debe activar un lapso academico</p>
            @endif
        </div>

    </div>


</div>
