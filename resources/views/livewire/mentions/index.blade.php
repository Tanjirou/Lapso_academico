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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Cargar Materias en el Pensum</a></li>
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

                        <div class="form-group row mx-sm-3 mb-2 ">
                             <div class="col-12 col-md-6 align-content-center align-items-center">
                                <label for="academic_curriculaid">Pensum</label>
                                <select  class="form-control" name="academic_curriculaid" wire:model='mention.academic_curriculaid'>
                                    <option value="">Seleccione</option>
                                    @foreach ($academic_curricula as $academic_c)
                                    <option value="{{$academic_c->id}}">{{$academic_c->description}}</option>
                                    @endforeach
                                </select>
                                @error('mention.academic_curriculaid')
                                    <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 align-content-center align-items-center">
                                <label for="name">Mención de la Carrera</label>
                                <input type="text" class="form-control" wire:model='mention.name' name="name" placeholder="Indique la mención de la carrera">
                            </div>
                            <div class="col-12 col-md-6 mt-2 align-content-center align-items-center">
                                <label for="subjectid">Materia</label>
                                <select class="form-control" name="subjectid" wire:model='mention.subjectid'>
                                    <option value="">Seleccione</option>
                                    @foreach ($subjects as $subject)
                                    <option value="{{$subject->id}}" {{($subject->id == $mention->subjectid) ? 'selected' :''}}>{{$subject->name}}</option>
                                    @endforeach
                                </select>
                                @error('subjectid')
                                    <div class="mt-1 text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 mt-2 align-content-center align-items-center">
                                <label for="pre_req">Pre-Requisitos</label>
                                <input type="text" class="form-control" wire:model='mention.pre_req' name="pre_req" placeholder="Indique pre-requisitos separados con coma (,)">
                            </div>
                            <div class="col-12 col-md-6 mt-2 align-content-center align-items-center">
                                <label for="post_req">Co-Requisitos</label>
                                <input type="text" class="form-control" name="post_req" wire:model='mention.post_req' placeholder="Indique co-requisitos separados con coma (,)">
                            </div>




                        </div>
                        <div class="row justify-content-center mt-4">
                            <button type="submit"
                            class="btn btn-primary w-100 w-md-auto btn-lg mb-2 mt-4 mt-md-0">Guardar</button>
                        </div>
                    </form>
                    <br>
                    <div class="row justify-content-center">
                        <h2 class="text-bold text-primary fond-bold m-0 mb-2">LISTADO DE MATERIAS EN EL PENSUM</h2>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-10">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mención</th>
                                            <th scope="col">Pensum</th>
                                            <th scope="col">Materia</th>
                                            <th scope="col">Pre-Requisitos</th>
                                            <th scope="col">Co-Requisitos</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mentions as $mention)
                                            <tr>
                                                <td>{{$mention->name}}</td>
                                                <td>{{$mention->academic_curricula}}</td>
                                                <td>{{$mention->subject}}</td>
                                                <td>{{(is_null($mention->pre_req) ? 'No tiene pre-requisitos' : $mention->pre_req)}}</td>
                                                <td>{{(is_null($mention->post_req) ? 'No tiene co-requisitos' : $mention->post_req)}}</td>
                                                <td>
                                                    <button wire:click="edit({{$mention->id}})" type="button" class="bg-info px-2 py-1 text-white rounded">Editar</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-end">
                                {{$mentions->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
