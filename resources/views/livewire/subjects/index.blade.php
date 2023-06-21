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
                    <form wire:submit.prevent='save'>
                        <div class="form-group row mx-sm-3 mb-2 justify-content-center">
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                                <label for="code">Código</label>
                                <input type="text" class="form-control" id="code"
                                    placeholder="Código de la materia">
                                @error('codigo.name')
                                    <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                                <label for="name">Nombre</label>
                                <input type="email" class="form-control" id="name"
                                    placeholder="Nombre de la materia">
                            </div>
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                                <label for="credit_unid">Unidades de crédito</label>
                                <input type="email" class="form-control" id="credit_unid"
                                    placeholder="En números">
                            </div>
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                                <label for="department">Departamento</label>
                                <select class="form-control" id="department">
                                    <option value="">Seleccione</option>
                                    @foreach ($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <button type="submit"
                            class="btn btn-primary w-100 w-md-auto btn-lg mb-2 mt-4 mt-md-0">Guardar</button>
                        </div>
                    </form>
                    <div class="row justify-content-center">
                        <h1 class="mt-4">Materias</h1>
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
                                            <th scope="col">Departamento</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

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