<div>

    <div class="main-content mt-6">
        <div class="layout-px-spacing">
            <div class="mb-0">
                <div class="row mb-2 mt-5">
                    <div class="col-12 col-md-7 mb-0 order-md-0 order-1 mb-2 mt-2">
                        <nav class="breadcrumb-two align-self-center" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item" ><a href="javascript:void(0);">Crear Usuario</a></li>
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
                        <div class="row justify-content-center p-3">
                            <h2 class="fond-weight-bold text-bold text-primary m-0 mb-2">CREAR USUARIO</h2>
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
                                <form method="POST" wire:submit.prevent="store">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dni" class="text-dark">{{ __('*Cédula') }}</label>
                                                <input id="dni" wire:model="dni" type="numeric" class="form-control mb-2 @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus  maxlength="9"  title="la cédula debe ser solo numerica" pattern="[0-9]+" placeholder="Ej: 123456789">
                                            @error('dni')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="names"  class="text-dark">{{ __('*Nombres') }}</label>
                                                <input id="names" wire:model="names" type="text" class="form-control mb-2 @error('names') is-invalid @enderror" name="names" value="{{ old('names') }}" required autocomplete="names" autofocus placeholder="Ej: Evan Jesus">
                                            @error('names')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_names"  class="text-dark">{{ __('*Apellidos') }}</label>
                                                <input id="last_names" wire:model="last_names"  type="text" class="form-control mb-2 @error('last_names') is-invalid @enderror" name="last_names" value="{{ old('last_names') }}" required autocomplete="last_names" autofocus placeholder="Ej: Sibrian Meléndez">
                                            @error('last_names')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="telephone" class="text-dark">{{ __('Teléfono') }}</label>
                                                <input id="telephone" wire:model="telephone"  type="text" class="form-control mb-2 @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" autocomplete="telephone" autofocus  maxlength="12"  title="El teléfono debe tener el formato como se muestra en el ejemplo" placeholder="Ej: 0414-1234567">
                                            @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" class="text-dark">{{ __('*Email') }}</label>
                                                <input id="email" wire:model="email"  type="email" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Ej: correo@correo.com" required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password" class="text-dark">{{ __('*Contraseña') }}</label>
                                                <input id="password" wire:model="password"  type="password" class="form-control mb-2 @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autofocus minlength="8"  title="La contraseña debe tener mínimo 8 caracteres" placeholder="Escriba su contraseña">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="user_types" class="text-dark">{{ __('*Tipo de Usuario') }}</label>
                                            <select wire:model="selectedUser" class="custom-select bg-white form-control border-primary @error('user_types') is-invalid @enderror" name="user_type" id="user_types" required>
                                                    <option value="" >Seleccione</option>
                                                @foreach ($user_types as $user_type)
                                                    <option value="{{ $user_type->id }}">{{ $user_type->description }}</option>
                                                @endforeach
                                            </select>

                                            @error('user_types')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div wire:target="selectedUser">
                                        @if($selectedUser!=1 && $selectedUser!=2  && $selectedUser!=4 && !empty($selectedUser) && !is_null($selectedUser))
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="departments" class="text-dark">{{ __('*Departamento') }}</label>
                                                            <select wire:model="selectedDepartment" class="custom-select bg-white form-control @error('departments') is-invalid @enderror" name="ndepartment" id="departments" required>
                                                                <option value="" >Seleccione</option>
                                                                @foreach ($departments as $department)
                                                                    @if ($department->id == 8)
                                                                        @continue
                                                                    @else
                                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            @error('departments')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                {{-- {{((auth()->user()->user_type ==3 ) ? 'required' : '')}} --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mentions" class="text-dark">{{ __('*Sección Académica') }}</label>
                                                            <select wire:model="selectedMention" class="custom-select bg-white form-control @error('mentions') is-invalid @enderror" name="nmention" id="mentions" required>
                                                                <option value="" >Seleccione</option>
                                                                @foreach ($department_sections as $department_section)
                                                                    <option value="{{ $department_section->id }}">{{ $department_section->description }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('mentions')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="college_degree" class="text-dark">{{ __('Titulo de Grado/Especialidad') }}</label>
                                                    <input id="college_degree" wire:model="college_degree" type="text" class="form-control mb-4 @error('college_degree') is-invalid @enderror" name="college_degree" value="{{ old('college_degree') }}" autocomplete="college_degree" autofocus placeholder="Ej: Licenciado en Física">
                                                    @error('college_degree')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            {{-- @elseif($selectedUser!=1 && $selectedUser!=2  && $selectedUser!=3 && $selectedUser!=4 && !empty($selectedUser) && !is_null($selectedUser))
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="departments" class="text-dark">{{ __('(*)Departamento') }}</label>
                                                            <select wire:model="selectedDepartment" class="custom-select bg-white form-control @error('departments') is-invalid @enderror" name="ndepartment" id="departments">
                                                                <option value="" >Seleccione</option>
                                                                @foreach ($departments as $department)
                                                                    @if ($department->id == 8)
                                                                        @continue
                                                                    @else
                                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            @error('departments')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mentions" class="text-dark">{{ __('Sección Académica') }}</label>
                                                            <select wire:model="selectedMention" class="custom-select bg-white form-control @error('mentions') is-invalid @enderror" name="nmention" id="mentions">
                                                                <option value="" >Seleccione</option>
                                                                @foreach ($department_sections as $department_section)
                                                                    <option value="{{ $department_section->id }}">{{ $department_section->description }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('mentions')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="college_degree" class="text-dark">{{ __('Titulo de Grado/Especialidad') }}</label>
                                                    <input id="college_degree" wire:model="college_degree" type="text" class="form-control mb-4 @error('college_degree') is-invalid @enderror" name="college_degree" value="{{ old('college_degree') }}" autocomplete="college_degree" autofocus placeholder="Ej: Licenciado en Física">
                                                    @error('college_degree')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div> --}}

                                        @elseif($selectedUser!=1 && $selectedUser!=3 && $selectedUser!=5 && !is_null($selectedUser))
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="departments" class="text-dark">{{ __('*Departamento') }}</label>
                                                        <select wire:model="selectedDepartment" class="custom-select bg-white form-control @error('departments') is-invalid @enderror" name="departments" id="departments">
                                                            <option value="" >Seleccione</option>
                                                            @foreach ($departments as $department)
                                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('departments')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="college_degree" class="text-dark">{{ __('Titulo de Grado/Especialidad') }}</label>
                                                    <input id="college_degree" wire:model="college_degree" type="text" class="form-control mb-4 @error('college_degree') is-invalid @enderror" name="college_degree" value="{{ old('college_degree') }}" autocomplete="college_degree" autofocus placeholder="Ej: Licenciado en Física">
                                                    @error('college_degree')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>


                                    <div class="form-group row mb-0 justify-content-center">
                                        <div class="col-12 col-md-4 col-lg-3">
                                            <button type="submit" class="w-100 btn btn-primary font-weight-bold">
                                                {{ __('Registrar') }}
                                            </button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                        @if (session('user-message'))
                        <div class="form-group row justify-content-center mt-3">
                            <span class="alert alert-success col-12">
                                {{ session('user-message') }}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>
