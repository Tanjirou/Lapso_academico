<div>
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-4">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Reporte Planificación</a></li>
                                <!--<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">General</a></li>-->
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>

            </div>
            <div class="row layout-spacing mt-2">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row mt-0 justify-content-center">
                            <div class="col-md-10 align-content-center mr-auto ml-auto">
                                <div class="col-md-12 text-center">
                                    <h3 class="fond-weight-bold text-bold text-primary mt-2 mb-1">PLANIFICACIÓN ACADÉMICA</h3>
                                    <hr>
                                </div>

                                <div class="row">
                                    <div class="col-11 col-md-12 pb-3">
                                        <div class="form-group">
                                            <label for="textDpto">Departamento</label>
                                            <input type="text" class="form-control mb-4" id="textDpto" value="{{ $department->name }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!--SECCION DEL DEPARTAMENTO-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="textCorte">Sección del Departamento - Filtrado por:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="optionds" value="option1" wire:model="optionds" id="option1">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">Todas</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="optionds" value="option2" wire:model="optionds" id="option2">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">Especifico</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($departmentSectionEnable)
                                    <div class="col-md-6" id="select-container1">
                                        <div class="form-group">
                                            <label for="secdep">Seleccione una Sección del Departamento</label>
                                            <select wire:model="selectedDepartmentSection" class="form-control" name="secDep" id="secDep">
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
                                    @endif
                                </div>

                                <br>

                                <div class="row">
                                    <div class="form-group col-md-12 text-center">
                                        <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Generar</button>
                                    </div>
                                </div>
                                <hr>
                                <!-- <h4 class="text-center">LISTADO</h4>
                                <div class="widget-content widget-content-area table-responsive">
                                    <table id="column-filter" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sección del Dpto</th>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Materia</th>
                                                <th class="text-center">N° Secciones a aperturar</th>
                                                <th class="text-center">Cantidad Estudiantes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($detail_sections as $detail_s)
                                            <tr>
                                                <td class="text-center"> {{$detail_s->department_section}}</td>
                                                <td class="text-center">{{$detail_s->subject}}</td>
                                                <td class="text-center">{{$detail_s->section_number}}</td>
                                                <td class="text-center"> {{$detail_s->section_number}} </td>
                                                <td class="text-center"> {{$detail_s->section_number}} </td>
                                                <td class="text-center"> {{$detail_s->section_number}} </td>
                                            </tr>
                                            @endforeach --}}
                                            <tr>
                                                <td class="text-center">Matemática</td>
                                                <td class="text-center">EB1115</td>
                                                <td class="text-center">Cálculo I</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">32</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Matemática</td>
                                                <td class="text-center">EB1125</td>
                                                <td class="text-center">Cálculo Ii</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">30</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
