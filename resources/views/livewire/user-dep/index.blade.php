<div>
    <div >

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="departments" class="text-dark">{{ __('Departamento') }}</label>
                            <select wire:model="selectedDepartment" class="custom-select bg-white form-control @error('departments') is-invalid @enderror" name="ndepartment" id="departments">
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
                        <label for="mentions" class="text-dark">{{ __('Sección') }}</label>
                            <select wire:model="selectedMention" class="custom-select bg-white form-control @error('mentions') is-invalid @enderror" name="nmention" id="mentions">
                                <option value="" >Seleccione</option>
                                @foreach ($mentions as $mention)
                                    <option value="{{ $mention->id }}">{{ $mention->name }}</option>
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
                    <input id="college_degree" wire:model="college_degree" type="text" class="form-control mb-4 @error('college_degree') is-invalid @enderror" name="college_degree" value="{{ old('college_degree') }}" autocomplete="college_degree" autofocus placeholder="Licenciado en Física">
                    @error('college_degree')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>



    </div>
</div>
