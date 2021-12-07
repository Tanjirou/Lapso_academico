@section('styles')
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">
@endsection
<x-guest-layout>
    <div class="form-container outer formulario_fondo">
        <div class="form-container outer">
            <div class="form-form">
                <div class="form-form-wrap">
                    <div class="form-container">
                        <div class="form-content">
                            <div class="card">
                                <div class="card-body">
                                    <div x-data="{ recovery: false }">
                                        <div class="mb-3 font-weight-bold" x-show="! recovery">
                                            {{ __('Confirme el acceso a su cuenta ingresando el código de autenticación proporcionado por su aplicación de autenticación.') }}
                                        </div>

                                        <div class="mb-3 font-weight-bold" x-show="recovery">
                                            {{ __('Confirme el acceso a su cuenta ingresando uno de sus códigos de recuperación de emergencia.') }}
                                        </div>

                                        <x-jet-validation-errors class="mb-3" />

                                        <form method="POST" action="{{ route('two-factor.login') }}">
                                            @csrf

                                            <div class="form-group" x-show="! recovery">
                                                <x-jet-label value="{{ __('Código') }}" />
                                                <x-jet-input class="{{ $errors->has('code') ? 'is-invalid' : '' }}"
                                                    type="text" inputmode="numeric" name="code" autofocus x-ref="code"
                                                    autocomplete="one-time-code" />
                                                <x-jet-input-error for="code"></x-jet-input-error>
                                            </div>

                                            <div class="form-group" x-show="recovery">
                                                <x-jet-label value="{{ __('Código de recuperación') }}" />
                                                <x-jet-input
                                                    class="{{ $errors->has('recovery_code') ? 'is-invalid' : '' }}"
                                                    type="text" name="recovery_code" x-ref="recovery_code"
                                                    autocomplete="one-time-code" />
                                                <x-jet-input-error for="recovery_code"></x-jet-input-error>
                                            </div>

                                            <div class="d-flex justify-content-end mt-3">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    x-show="! recovery" x-on:click="
                                            recovery = true;
                                            $nextTick(() => { $refs.recovery_code.focus() })
                                        ">
                                                    {{ __('Usar un código de recuperación') }}
                                                </button>

                                                <button type="button" class="btn btn-outline-secondary"
                                                    x-show="recovery" x-on:click="
                                            recovery = false;
                                            $nextTick(() => { $refs.code.focus() })
                                        ">
                                                    {{ __('Usar un código de autenticación') }}
                                                </button>

                                                <x-jet-button>
                                                    {{ __('Iniciar Sesión') }}
                                                </x-jet-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
