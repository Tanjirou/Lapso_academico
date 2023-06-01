@section('styles')
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/authentication/form-2.js') }}" defer></script>
@endsection
<x-guest-layout>
    <div class="form-container outer formulario_fondo">
        <div class="form-container outer">
            <div class="form-form">
                <div class="form-form-wrap">
                    <div class="form-container">
                        <div class="form-content">

                            {{-- <div class="division">
                                <img src="assets/img/logo.png" class="navbar-logo img-fluid w-25" alt="logo">
                            </div> --}}

                            <h1 class="">Registro</h1>
                            <!--<p class="">Log in to your account to continue.</p>-->
                            <form class="text-left" {{ route('register') }} method="POST">
                                @csrf
                                <div class="form">

                                    <div id="username-field" class="field-wrapper input">
                                        <label for="name">Nombres</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                                24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4
                                                    0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="name" name="name" type="text"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            placeholder="Ej: Jorge ">
                                        <x-jet-input-error for="name"></x-jet-input-error>
                                    </div>

                                    <div id="username-field" class="field-wrapper input">
                                        <label for="last_name">Apellidos</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                                24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4
                                                    0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="last_name" name="last_name" type="text"
                                            class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                                            placeholder="Ej:Melendez">
                                        <x-jet-input-error for="last_name"></x-jet-input-error>
                                    </div>

                                    <div id="username-field" class="field-wrapper input">
                                        <label for="email">Cédula</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                                24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4
                                                    0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="email" name="email" type="text"
                                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            placeholder="Ej:123456">
                                        <x-jet-input-error for="email"></x-jet-input-error>
                                    </div>

                                    <div id="password-field" class="field-wrapper input">
                                        <div
                                            class="d-flex
                                                justify-content-between">
                                            <label for="password">CONTRASEÑA</label>
                                            <!--<a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a>-->
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                                24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                        <input id="password" name="password" type="password"
                                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            placeholder="Contraseña">
                                        <x-jet-input-error for="password"></x-jet-input-error>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                                24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" id="toggle-password"
                                            class="feather
                                                feather-eye">
                                            <path d="M1 12s4-8 11-8
                                                    11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </div>

                                    <div id="password-field" class="field-wrapper input">
                                        <div
                                            class="d-flex
                                                justify-content-between">
                                            <label for="password_confirmation">CONFIRMAR CONTRASEÑA</label>
                                            <!--<a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot password_confirmation?</a>-->
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                                24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                        <input id="password_confirmation" name="password_confirmation" type="password"
                                            class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                            placeholder="Confirmar Contraseña" required autocomplete="new-password">
                                        <x-jet-input-error for="password"></x-jet-input-error>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                                24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" id="toggle-password"
                                            class="feather
                                                feather-eye">
                                            <path d="M1 12s4-8 11-8
                                                    11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </div>
                                    <div
                                        class="d-sm-flex
                                            justify-content-between">
                                        <div class="field-wrapper">
                                            <button type="submit"
                                                class="btn
                                                    btn-primary"
                                                value="">Registrar</button>
                                        </div>
                                    </div>

<h5 class="text-center font-weight-bold mt-3 mb-0 pb-0">
    <a class="mr-3 text-decoration-none" href="{{ route('login') }}">
        {{ __('Si tienes cuenta, haz clic aquí') }}
    </a>
</h5>



                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <x-jet-label value="{{ __('Nombres') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Apellidos') }}" />

                    <x-jet-input class="{{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name"
                                 :value="old('last_name')" required autofocus autocomplete="last_name" />
                    <x-jet-input-error for="last_name"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Cédula') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted mr-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card> --}}
</x-guest-layout>
