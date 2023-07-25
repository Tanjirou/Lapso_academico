<div>
    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-3">
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 mb-0 order-md-0 order-1 mb-2 mt-4">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Recursos</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                        <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image"
                            style="width-sm: 23%; width-md: 35%; width: 40%">
                    </div>
                </div>
            </div>
            <div class="row layout-spacing mt-2">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow shadow ">
                        <div class="row mt-0 justify-content-center">
                            <div class="col-md-10 align-content-center">
                                <div class="row justify-content-center mb-3 mt-2 mr-auto ml-2 m-0">
                                    <h2 class="text-bold text-primary fond-bold m-0">CREAR RECURSO</h2>
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
                                            {{-- <form method="POST" wire:submit.prevent="save"> --}}
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
                                                        <label for="description">*Recurso</label>
                                                        <input type="text" class="form-control"
                                                            wire:model="departmentResource.description"
                                                            placeholder="Indique el nombre del recurso">
                                                        @error('departmentResource.description')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="textCant">*Cantidad</label>
                                                        <input class="form-control" type="number"
                                                            wire:model="departmentResource.quantity"
                                                            placeholder="Ej: 4">
                                                        @error('departmentResource.quantity')
                                                            <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                                        @enderror
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
                            <h2 class="text-bold text-primary fond-bold m-0 mb-2">LISTADO DE RECURSOS</h2>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-md-10">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Recurso</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($departmentResources as $departmentResource)
                                            <tr>
                                                <td class="justify-content-center">{{$departmentResource->description}}</td>
                                                <td class="justify-content-center">{{$departmentResource->quantity}}</td>
                                                <td class="d-flex justify-content-center">
                                                    <button type="button" wire:click="edit({{$departmentResource->id}})"
                                                        class="bg-info px-2 py-1 text-white rounded">Editar</button>
                                                    <button type="button" wire:click="delete({{$departmentResource->id}})"
                                                        class="ml-2 bg-danger px-2 py-1 text-white rounded">Eliminar</button>
                                                </td>
                                            </tr>
                                            @endforeach

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
