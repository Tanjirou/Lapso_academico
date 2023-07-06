<div>
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
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
            @if(!is_null($academic_lapse))
            <div class="row layout-spacing mt-2">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row mt-0 justify-content-center">
                            <div class="col-md-10 align-content-center">
                                <div class="row justify-content-center mb-3 mt-2 mr-auto ml-2 m-0">
                                    <h2 class="text-bold text-primary fond-bold m-0">Asignar Profesor</h2>
                                </div>

                                <div class="row mt-0 justify-content-center">
                                    <div class=" col-11 col-md-10 pb-3">
                                        @if (session()->has('mens'))
                                            <div class="alert alert-success">
                                                {{ session('mens') }}
                                            </div>
                                        @endif
                                        <form method="POST" wire:submit.prevent="save">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="textDpto">Departamento</label>
                                                        <input type="text" class="form-control" id="dpto"
                                                            placeholder="Dpto" value="{{ $department->name }}" readonly>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="textMenc">Sección del Departamneto</label>
                                                        <select wire:model="selectedDepartmentSection"
                                                            class="form-control" id="textMenc">
                                                            <option>Seleccione</option>
                                                            @foreach ($department_sections as $department_section)
                                                                <option value="{{ $department_section->id }}">
                                                                    {{ $department_section->description }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('selectedDepartmentSection')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                                        @enderror
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
                                                        @error('struc_section.subjectid')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="section_number">Seccion</label>
                                                        <select wire:model="section.section_number" class="form-control"
                                                            id="section_number">
                                                            <option value="">Seleccione</option>
                                                            @if (!is_null($structure_sections))
                                                                @for ($i = 1; $i <= $structure_sections->number_section; $i++)
                                                                    <option value="{{ $i }}">
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            @endif
                                                        </select>
                                                        @error('struc_section.average_students')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="textPunt">Cantidad de Estudiantes(promedio)</label>
                                                        <input class="form-control" type="number" placeholder="40"
                                                            readonly
                                                            value="{{ isset($structure_sections->average_students) ? $structure_sections->average_students : 0 }}">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="teacherid">Profesor</label>
                                                        <select wire:model="section.teacherid" class="form-control"
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
                                                        @error('section.teacherid')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="textPunt">Lapso Academico</label>
                                                        <input class="form-control" type="number" placeholder="40"
                                                            readonly
                                                            value="{{ isset($academic_lapse) ? $academic_lapse->description : '' }}">

                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group text-center col-md-12">
                                                    <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a>
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
                            <h2 class="text-bold text-primary fond-bold m-0 mb-2">Listado de secciones</h2>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-md-10">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Materia</th>
                                                <th scope="col">Cantidad de Secciones</th>
                                                <th scope="col">Cantidad de Estudiantes por Sección</th>
                                                <th scope="col">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($struc_sections as $struc_section)
                                                <tr>
                                                    <td>{{ $struc_section->department_section }}</td>
                                                    <td>{{ $struc_section->subject }}</td>
                                                    <td>{{ $struc_section->average_students }}</td>
                                                    <td>{{ $struc_section->number_section }}</td>
                                                    <td class="d-flex justify-content-center">
                                                        <button wire:click="edit({{ $struc_section->id }})"
                                                            type="button"
                                                            class="bg-info px-2 py-1 text-white rounded">Editar</button>
                                                            <button wire:click="delete({{ $struc_section->id }})"
                                                                type="button"
                                                                class="ml-2 bg-danger px-2 py-1 text-white rounded">Eliminar</button>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
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
            <p class="font-weight-bold">Debe activar un lapso academico</p>
            @endif
        </div>

    </div>


</div>
