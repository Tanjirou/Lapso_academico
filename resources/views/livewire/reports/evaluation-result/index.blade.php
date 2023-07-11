<div>
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-4">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Reporte</a></li>
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
                                    {{-- <h2 class="fond-weight-bold text-bold text-primary mt-2 mb-1">REPORTE</h2> --}}
                                    <h3 class="fond-weight-bold text-bold text-primary mt-2 mb-1">RESULTADOS DE LAS EVALUACIONES</h3>
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
                                <!--MATERIA-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="textSubject">Materia - Filtrado por:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="optionsub" value="option3" wire:model="optionsub" id="option3">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">Todas</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="optionsub" value="option4" wire:model="optionsub" id="option4">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">Especifico</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($subjectSectionEnable)
                                    <div class="col-md-6" id="select-container2">
                                        <div class="form-group">
                                            <label for="subject">Seleccione una Materia</label>
                                            <select wire:model="selectedSubject" class="form-control" name="subject" id="subject">
                                                <option value="">Seleccione</option>
                                                @if (!is_null($subjects))
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('selectedSubject')
                                                <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <!--SECCION-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="textSection">Sección - Filtrado por:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="optionsec" value="option5" wire:model="optionsec" id="option5">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">Todas</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="new-control new-radio new-radio-text radio-primary">
                                                        <input type="radio" class="new-control-input" name="optionsec" value="option6" wire:model="optionsec" id="option6">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">Especifico</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($numberSectionEnable)
                                    <div class="col-md-6" id="select-container4">
                                        <div class="form-group">
                                            <label for="section_number">Seleccione una sección</label>
                                            <select wire:model="section_number" class="form-control" name="section_number" id="section_number">
                                                    <<option value="">Seleccione</option>
                                                    @if (!is_null($sections_not_updated))
                                                    @foreach ($sections_not_updated as $section)
                                                        <option value="{{ $section->id }}">
                                                            {{ $section->section_number }}</option>
                                                    @endforeach

                                                    @endif
                                            </select>
                                            @error('section_number')
                                                <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <br>

                                <div class="row">
                                    <div class="form-group col-md-12 text-center">
                                        <button class="btn btn-primary mr-2 btn-lg"> <a href="#"></a> Buscar</button>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="text-center">LISTADO</h4>
                                <div class="widget-content widget-content-area table-responsive">
                                    <table id="column-filter" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sección del Dpto</th>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Materia</th>
                                                <th class="text-center">Sección</th>
                                                <th class="text-center">N° Estudiantes</th>
                                                <th class="text-center">N° Aprobados</th>
                                                <th class="text-center">N° Reprobados</th>
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
                                                <td class="text-center">Matematica</td>
                                                <td class="text-center">EB1115</td>
                                                <td class="text-center">Cálculo I</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">30 </td>
                                                <td class="text-center">18</td>
                                                <td class="text-center">12</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Matematica</td>
                                                <td class="text-center">EB1115</td>
                                                <td class="text-center">Cálculo I</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">28 </td>
                                                <td class="text-center">12</td>
                                                <td class="text-center">16</td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    var option1 = document.getElementById('option1');
    var option2 = document.getElementById('option2');
    var selectContainer1 = document.getElementById('select-container1');

    var option3 = document.getElementById('option3');
    var option4 = document.getElementById('option4');
    var selectContainer2 = document.getElementById('select-container2');

    var option5 = document.getElementById('option5');
    var option6 = document.getElementById('option6');
    var selectContainer4 = document.getElementById('select-container4');

    option1.addEventListener('click', function() {
      selectContainer1.style.display = 'none';
    });

    option2.addEventListener('click', function() {
      selectContainer1.style.display = 'block';
    });

    option3.addEventListener('click', function() {
      selectContainer2.style.display = 'none';
    });

    option4.addEventListener('click', function() {
      selectContainer2.style.display = 'block';
    });

    option5.addEventListener('click', function() {
      selectContainer4.style.display = 'none';
    });

    option6.addEventListener('click', function() {
      selectContainer4.style.display = 'block';
    });
  </script> --}}
