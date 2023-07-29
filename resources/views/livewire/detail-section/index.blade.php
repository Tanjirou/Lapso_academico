<div>
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-4">
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
                                        <h2 class="text-bold text-primary fond-bold m-0">DATOS A CARGAR</h2>
                                    </div>

                                    <div class="row mt-0 justify-content-center">
                                        <div class=" col-11 col-md-10 pb-3">
                                            @if (session()->has('mens'))
                                                <div class="alert alert-success">
                                                    <h5 class="text-center">{{ session('mens') }}</h5>
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
                                                            <label for="textPunt">Lapso Académico</label>
                                                            <input class="form-control" type="text" placeholder="40"
                                                                readonly
                                                                value="{{ isset($academic_lapse) ? $academic_lapse->description : '' }}">
                                                            <input type="hidden" wire:model="lapse" id="lapse">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textAsig">*Asignatura</label>
                                                            <select wire:model="selectedSubject" class="form-control"
                                                                id="textAsig"
                                                                {{(($evaluate_section) ? 'disabled' : '')}}>
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
                                                            <label for="codeAsig">Código Asignatura</label>
                                                            <input type="text" class="form-control" wire:model="subjectCode" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section_number">*Sección de Asignatura</label>
                                                            <select wire:model="section_number" class="form-control"
                                                                id="section_number"
                                                                {{(($evaluate_section) ? 'disabled' : '')}}>
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

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textPunt">*Cantidad de Estudiantes</label>
                                                            <input class="form-control" wire:model="student_numbers"
                                                                type="number" placeholder="Ejemplo: 40"
                                                                {{(($evaluate_section) ? 'readonly' : '')}}>
                                                        </div>
                                                        @error('student_numbers')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}
                                                            </div>
                                                        @enderror
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
                                        <h3 class="text-bold text-primary fond-bold m-0 mb-2">ESTUDIANTES</h2>
                                    </div>
                                    <div class="row mt-0 justify-content-center">
                                        <div class=" col-11 col-md-10 pb-3">
                                            <form wire:submit.prevent="store" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textDpto">*Cédula</label>
                                                            <input type="text" wire:model="query"
                                                                class="form-control" id="dni"
                                                                placeholder="Cédula de Identidad" wire:keydown="studentSearch">
                                                            @error('query')
                                                                <div class="mt-1 text-danger text-sm">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <input type="hidden" wire:model="userId" >

                                                    <div
                                                        class="col-12 col-md-6 align-content-center align-items-center">
                                                        <label for="academic_curricula">*Pensum</label>
                                                        <select wire:model="academicCurriculaId" class="form-control">
                                                            <option value="">Seleccione</option>
                                                            @foreach ($academicCurricula as $academic)
                                                                <option {{($academicCurriculaId && ($academicCurriculaId == $academic->id)) ? 'selected' : ''}} value="{{ $academic->id }}">
                                                                    {{ $academic->description }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('academicCurriculaId')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-6 align-content-center align-items-center">
                                                        <div class="form-group row d-flex justify-content-center mt-5">
                                                            <div class="col-md-5">
                                                                <input type="radio" wire:model="qualificationResult"
                                                                    class="form-check-input" id="qualification"
                                                                    value="Aprobado" name="qualification"><label
                                                                    class="form-check-label"
                                                                    for="qualification">Aprobado</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="radio" wire:model="qualificationResult"
                                                                    class="form-check-input" id="qualification1"
                                                                    value="Reprobado" name="qualification"><label
                                                                    class="form-check-label"
                                                                    for="qualification1">Reprobado</label>

                                                            </div>
                                                            @error('qualificationResult')
                                                                <div class="mt-1 text-danger text-sm">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-5 justify-content-center text-center">
                                                    <div class="form-group text-center  col-md-12">
                                                        <button class="btn btn-primary mr-2 btn-lg">
                                                            Cargar </button>
                                                    </div>
                                                </div>
                                            </form>
                                            @if (session()->has('mens-error-student'))
                                            <div class="alert alert-danger">
                                                <h5 class="text-center">{{ session('mens-error-student') }}</h5>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-12">
                                        <div class="row d-flex justify-content-center">
                                           <div class="col-10">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Cédula</th>
                                                            <th scope="col">Carrera</th>
                                                            <th scope="col">Calificación</th>
                                                            <th scope="col">Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($temporaryTables)
                                                        @foreach ($temporaryTables as $temporarTable)
                                                        <tr>
                                                            <td>{{$temporarTable->dni}}</td>
                                                            <td>{{$temporarTable->description}}</td>
                                                            <td>{{$temporarTable->qualification}}</td>
                                                            <td>
                                                                <button wire:click="delete({{ $temporarTable->id }})"
                                                                    type="button"
                                                                    class="ml-2 bg-danger px-2 py-1 text-white rounded">Remover</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                        @endif

                                                    </tbody>
                                                </table>
                                            </div>
                                           </div>
                                        </div>
                                </div>
                                <div class="col-12">
                                    <form wire:submit.prevent="recordInformation" method="POST">
                                        @csrf
                                        <div class="row mt-5 mb-2 d-flex justify-content-center text-center">
                                            <div class="form-group text-center ">
                                                <button class="btn btn-primary mr-2 btn-lg">
                                                    Guardar </button>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <h6 class="text-center text-danger font-weight-bold text-uppercase">*Una vez guardada esta información no se podrá modificar. En caso de ameritar algún cambio debe comunicarse con el administrador.</h6>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @else
            <div class="container">
                <div class="row justify-content-center">
                    <section class="col-12 align-items-center align-content-center mt-5">
                        <h3 class="font-weight-bold text-center">DEBE ACTIVAR UN LAPSO ACADÉMICO</h3>
                    </section>
                </div>
            </div>
            @endif
        </div>

    </div>


</div>
