<div>
    <div class="container">
        <div class="main-content mt-6">
            <div class="layout-px-spacing">
                <div class="mb-0">
                    <div class="row mb-2 mt-5">
                        <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                            <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crear Secciones Académicas</a></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-2 d-flex mt-4 ml-auto">
                            <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block"
                                alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                        </div>
                    </div>
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
                    <form wire:submit.prevent='save' method="POST">
                        @csrf
                        <div class="form-group row mx-sm-3 mb-2 justify-content-center align-items-center align-content-center">
                            <div class="col-12 col-md-6 align-content-center align-items-center">
                                <label for="section">(*)Sección Académica</label>
                                <input type="text" wire:model = "departmentSection.description" class="form-control" placeholder="Indique nombre de la sección académica">
                                @error('departmentSection.description') <div class="mt-1 text-danger text-sm">{{$message}}</div> @enderror
                            </div>

                            {{-- <div class="col-12 col-md-6  justify-content-center align-content-center align-items-center"> --}}
                                {{-- <div class="d-md-flex justify-content-center"> --}}
                            <div class="col-12 col-md-6 align-content-center align-items-center">
                                    {{-- <label for="credit_unid" class="col-form-label mr-3">(*)Departamento</label> --}}
                                <label for="department">(*)Departamento</label>
                                <select wire:model="departmentSection.departmentid" class="form-control">
                                    <option value="">Seleccione</option>
                                        @foreach ($departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                {{-- </div> --}}
                                @error('departmentSection.departmentid') <div class="d-block mt-1 text-danger text-sm">{{$message}}</div> @enderror
                            </div>
                        </div>

                        {{-- <div class="col-12 col-md-5 mt-3 align-content-center align-items-center">
                            <label for="subject.credit_unid">Unidades de crédito</label>
                            <input type="number" class="form-control" wire:model="subject.credit_units"
                                placeholder="En números">
                                @error('subject.credit_units')
                                <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-5 mt-3 align-content-center align-items-center">
                            <label for="subject.departmentsectionid">Sección Académica</label>
                            <select class="form-control" wire:model="subject.departmentsectionid">
                                <option value="">Seleccione</option>
                                @foreach ($department_sections as $department)
                                    <option value="{{ $department->id }}">{{ $department->description }}</option>
                                @endforeach
                            </select>
                            @error('subject.departmentsectionid')
                            <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                        @enderror
                        </div> --}}


                        <div class="row justify-content-center mt-4">
                            <button type="submit"
                            class="btn btn-primary w-100 w-md-auto btn-lg mb-2 mt-4 mt-md-0">Guardar</button>
                        </div>
                    </form>
                    <hr>
                    <div class="row justify-content-center">
                        <h2 class="text-bold text-primary fond-bold m-0">LISTADO DE SECCIONES ACADÉMICAS</h2>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-10">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Departamento</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($departmentSections as $departmentSection)
                                        <tr>
                                            <td>{{$departmentSection->description}}</td>
                                            <td>{{$departmentSection->department}}</td>
                                            <td>
                                                <button wire:click="edit({{$departmentSection->id}})" type="button" class="bg-info px-2 py-1 text-white rounded">Editar</button>
                                                <button wire:click="delete({{$departmentSection->id}})" type="button" class="bg-danger px-2 py-1 text-white rounded">Eliminar</button>
                                            </td>
                                        </tr>
                                        @empty
                                            <h3>No existen secciones de los departamentos para mostrar</h3>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-end">
                                {{$departmentSections->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
