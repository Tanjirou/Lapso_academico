<div>
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-4">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-4">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Secciones</a></li>
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
                                        <h2 class="text-bold text-primary fond-bold m-0">ASIGNAR PROFESOR</h2>
                                    </div>

                                    <div class="row mt-0 justify-content-center">
                                        <div class=" col-11 col-md-10 pb-3">
                                            @if (session()->has('mens'))
                                                <div class="alert alert-success">
                                                    <h5 class="text-center">{{ session('mens') }}</h5>
                                                </div>
                                            @endif
                                            @if (session()->has('mens-error'))
                                                <div class="alert alert-danger">
                                                    <h5 class="text-center">{{ session('mens-error') }}</h5>
                                                </div>
                                            @endif
                                            <form method="POST" wire:submit.prevent="save">
                                                @csrf
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
                                                            {{-- <label for="textMenc">*Sección Académica</label> --}}
                                                            @if (auth()->user()->user_type != 3)
                                                                <label for="textMenc">*Sección Académica</label>
                                                            @else
                                                                <label for="textMenc">Sección Académica</label>
                                                            @endif
                                                            <select wire:model="selectedDepartmentSection"
                                                                class="form-control" id="textMenc1"
                                                                {{ auth()->user()->user_type == 3 ? 'readonly' : '' }}
                                                                {{ auth()->user()->user_type == 2 ? 'required' : '' }}>
                                                                @if (auth()->user()->user_type != 3)
                                                                    <option>Seleccione</option>
                                                                @endif
                                                                @foreach ($department_sections as $department_section)
                                                                    <option value="{{ $department_section->id }}"
                                                                        {{ $department_section->id == $teacher->ndepartament ? 'selected' : '' }}>
                                                                        {{ $department_section->description }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('selectedDepartmentSection')
                                                                <div class="mt-1 text-danger text-sm">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textAsig">*Asignatura</label>
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
                                                            <label for="codeAsig">Código Asignatura</label>
                                                            <input type="text" class="form-control"
                                                                wire:model="subjectCode" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section_number">*Sección de la
                                                                asignatura</label>
                                                            <select wire:model="section_number" class="form-control"
                                                                id="section_number">
                                                                <option value="">Seleccione</option>
                                                                @if (!is_null($sections_not_updated))
                                                                    @foreach ($sections_not_updated as $section)
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
                                                            <label for="teacherid">*Profesor</label>
                                                            <select wire:model="teacherid" class="form-control"
                                                                id="teacherid">
                                                                <option value="">Seleccione</option>
                                                                @if (!is_null($teachers))
                                                                    @foreach ($teachers as $teacher)
                                                                        <option value="{{ $teacher->id }}">
                                                                            {{ $teacher->names }}
                                                                            {{ $teacher->last_names }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            @error('teacherid')
                                                                <div class="mt-1 text-danger text-sm">{{ $message }}
                                                                </div>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textPunt">Lapso Académico</label>
                                                            <input class="form-control" type="text" placeholder="40"
                                                                readonly
                                                                value="{{ isset($academic_lapse) ? $academic_lapse->description : '' }}">
                                                            <input type="hidden" wire:model="lapse" id="lapse">
                                                            @error('lapse')
                                                                <div class="mt-1 text-danger text-sm">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="form-group text-center col-md-12">
                                                        <button class="btn btn-primary mr-2 btn-lg">
                                                            Guardar </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                                <h3 class="text-bold text-primary fond-bold m-0 mb-2">LISTADO DE ASIGNACIONES</h3>
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <div class="col-md-10">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Código Asignatura</th>
                                                    <th scope="col">Asignatura</th>
                                                    <th scope="col">Sección Asig.</th>
                                                    <th scope="col">Profesor</th>
                                                    <th scope="col">Estatus</th>
                                                    <th scope="col">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sections as $section)
                                                    <tr>
                                                        <td>{{ $section->code }}</td>
                                                        <td>{{ $section->subject }}</td>
                                                        <td>{{ $section->section_number }}</td>
                                                        <td>{{ $section->names }} {{ $section->last_names }}</td>
                                                        <td>{{ $section->status == 'A' ? 'Pendiente' : 'Finalizada' }}
                                                        </td>
                                                        <td class="d-flex justify-content-center">
                                                            @if ($section && isset($section) && $section->status == 'A')
                                                                <button wire:click="delete({{ $section->id }})"
                                                                    type="button"
                                                                    class="bg-danger px-2 py-1 ml-3 text-white rounded">Eliminar</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row justify-content-end">

                                    </div>
                                </div>
                            </div>
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
