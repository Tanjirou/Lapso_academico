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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crear Lapso Académico</a></li>
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
                        {{ session('mens') }}
                    </div>
                    @endif
                    @if (session()->has('mens-error'))
                    <div class="alert alert-danger">
                        {{ session('mens-error') }}
                    </div>
                    @endif
                    <form wire:submit.prevent='save' method="POST">
                        @csrf
                        <div class="form-group row mx-sm-3 mb-2 justify-content-center">
                            <div class="col-12 col-md-5 align-content-center align-items-center">
                             <input wire:model="academic_lapse.description" class="p-2 form-control" type="text" placeholder="Indique lapso académico a crear">
                            </div>
                             <button type="submit" class="btn btn-primary w-100 w-md-auto btn-lg mb-2 mt-4 mt-md-0">Guardar</button>
                         </div>
                         @error('academic_lapse.description') <div class="mt-1 text-danger text-sm text-center">{{$message}}</div> @enderror
                    </form>
                    <hr>
                    <div class="row justify-content-center">
                        <h2 class="text-bold text-primary fond-bold m-0">LAPSOS ACADÉMICOS</h2>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-10">
                            <div class="table-responsive text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Lapso</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!is_null($academic_lapses))
                                        @foreach ($academic_lapses as $academic_lapse)
                                            <tr>
                                                <td>{{$academic_lapse->description}}</td>
                                                <td>{{(($academic_lapse->status === 'A') ? 'Activo' : 'Cerrado')}}</td>
                                                <td>
                                                    @if ($academic_lapse->status == 'A')
                                                    <button wire:click="edit({{$academic_lapse->id}})" type="button" class="bg-info px-2 py-1 text-white rounded">Editar</button>
                                                    <button wire:click="finish({{$academic_lapse->id}})" type="button" class="bg-success px-2 py-1 text-white rounded">Finalizar</button>
                                                    @endif
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
            </div>
        </div>
    </div>
</div>
