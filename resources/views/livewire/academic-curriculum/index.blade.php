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
                                   <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Pensum</a></li>
                               </ol>
                           </nav>
                       </div>
                       <div class="col-md-4 col-lg-4 col-xl-4 justify-content-end mb-0 d-flex mt-4 ml-auto">
                           <img src="assets/img/logo-SPA1.png" class="img-fluid mb-0 d-none d-md-block" alt="header-image" style="width-sm: 23%; width-md: 35%; width: 40%">
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
                    <form wire:submit.prevent='save'>
                        <div class="form-group row mx-sm-3 mb-2 justify-content-center">
                           <div class="col-12 col-md-5 align-content-center align-items-center">
                            <input wire:model="pensum.description" class="p-2 form-control" type="text" placeholder="Indique nombre del pensum académico">
                            @error('pensum.description') <div class="mt-1 text-danger text-sm">{{$message}}</div> @enderror
                           </div>
                            <button type="submit" class="btn btn-primary w-100 w-md-auto btn-lg mb-2 mt-4 mt-md-0">Guardar</button>
                        </div>
                    </form>
                    <hr>
                   <div class="row justify-content-center">
                    <h2 class="text-bold text-primary fond-bold m-0 mb-2">PENSUMS ACADEMICOS</h2>
                   </div>
                   <div class="row mt-3 justify-content-center">
                       <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 @forelse ($pensums as $pensum)
                                 <tr>
                                     <td>{{$pensum->description}}</td>
                                     <td>
                                         <button wire:click="edit({{$pensum->id}})" type="button" class="bg-info px-2 py-1 text-white rounded">Editar</button>
                                         <button wire:click="delete({{$pensum->id}})" type="button" class="bg-danger px-2 py-1 text-white rounded">Eliminar</button>
                                     </td>
                                   </tr>
                                 @empty
                                     <h3>No existen pensums para mostrar</h3>
                                 @endforelse

                                </tbody>
                              </table>
                        </div>
                        <div class="row justify-content-end">
                             {{$pensums->links()}}
                        </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
