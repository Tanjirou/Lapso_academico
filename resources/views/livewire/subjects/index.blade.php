<div>
    <div class="container">
        <div class="main-content mt-6">
            <div class="layout-px-spacing">
                <div class="mb-0">
                    <div class="row mb-2 mt-3">
                        <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                            <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crear Materias</a></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                            <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block"
                                alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
                        </div>
                    </div>
                    @if (session()->has('mens'))
                    <div class="alert alert-success">
                        {{ session('mens') }}
                    </div>
                    @endif
                    <form wire:submit.prevent='save' method="POST">
                        @csrf

                        <div class="form-group row mx-sm-3 mb-2 justify-content-center">
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                                <label for="subject.code">Código</label>
                                <input type="text" class="form-control" wire:model="subject.code"
                                    placeholder="Código de la materia">
                                @error('subject.code')
                                    <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                                <label for="subject.name">Nombre</label>
                                <input type="text" class="form-control" wire:model ="subject.name"
                                    placeholder="Nombre de la materia">
                            </div>
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                                <label for="subject.credit_unid">Unidades de crédito</label>
                                <input type="number" class="form-control" wire:model="subject.credit_units"
                                    placeholder="En números">
                            </div>
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                                <label for="subject.departmentsectionid">Departamento</label>
                                <select class="form-control" wire:model="subject.departmentsectionid">
                                    <option value="">Seleccione</option>
                                    @foreach ($department_sections as $department)
                                    <option value="{{$department->id}}">{{$department->description}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <button type="submit"
                            class="btn btn-primary w-100 w-md-auto btn-lg mb-2 mt-4 mt-md-0">Guardar</button>
                        </div>
                    </form>
                    <br>
                    <div class="row justify-content-center">
                        <h2 class="text-bold text-primary fond-bold m-0 mb-2">LISTADO DE MATERIAS</h2>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-10">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Código</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Unidades de crédito</th>
                                            <th scope="col">Sección del Departamento</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($subjects as $subject)
                                            <tr>
                                                <td>{{$subject->code}}</td>
                                                <td>{{$subject->name}}</td>
                                                <td>{{$subject->credit_units}}</td>
                                                <td>{{$subject->department}}</td>
                                                <td> <button wire:click="edit({{$subject->id}})" type="button" class="bg-info px-2 py-1 text-white rounded">Editar</button></td>
                                            </tr>
                                        @empty
                                        <h3>No existen materias para mostrar</h3>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-end">
                                {{$subjects->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
