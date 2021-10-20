@section('styles')
<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/switches.css')}}">
@endsection

@section('scripts')
<script src="{{asset('assets/js/authentication/form-2.js')}}" defer></script>
@endsection
<x-guest-layout>
    <div class="form-container outer formulario_fondo">

 @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        <div class="form-container outer">
            <div class="form-form">
                <div class="form-form-wrap">
                    <div class="form-container">
                        <div class="form-content">

                            <div class="division">
                                <img src="assets/img/logo.png" class="navbar-logo" alt="logo">
                            </div>
                            </br>
                            <h1 class="">Inicia Sesión</h1>
                            <!--<p class="">Log in to your account to continue.</p>-->
                            <form class="text-left" {{ route('login') }} method="POST">
                                @csrf
                                <div class="form">

                                    <div id="username-field" class="field-wrapper input">
                                        <label for="username">USUARIO</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                            24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path
                                                d="M20 21v-2a4 4 0 0 0-4-4H8a4 4
                                                0 0 0-4 4v2"></path><circle
                                                cx="12" cy="7" r="4"></circle></svg>
                                        <input id="dni" name="dni" type="text" class="form-control {{ $errors->has('dni') ? 'is-invalid' : '' }}" placeholder="Ej: esibrian">
                                        <x-jet-input-error for="dni"></x-jet-input-error>
                                    </div>

                                    <div id="password-field" class="field-wrapper input mb-2">
                                        <div class="d-flex
                                            justify-content-between">
                                            <label for="password">CONTRASEÑA</label>
                                            <!--<a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a>-->
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                            24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect
                                                x="3" y="11" width="18"
                                                height="11" rx="2" ry="2"></rect><path
                                                d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                        <input id="password" name="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
                                        <x-jet-input-error for="password"></x-jet-input-error>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                                            24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather
                                            feather-eye"><path d="M1 12s4-8 11-8
                                                11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle
                                                cx="12" cy="12" r="3"></circle></svg>
                                    </div>
                                    <div class="d-sm-flex
                                        justify-content-between">
                                        <div class="field-wrapper">
                                            <button type="submit" class="btn
                                                btn-primary" value="">Entrar</button>
                                        </div>
                                    </div>
                                    <p class="signup-link">Si aun no tienes cuenta de usuario y/o olvidastes tu contraseña, dirigete al Dpto. de Tecnología.
                                    </p>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                 name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        @if (Route::has('password.request'))
                            <a class="text-muted mr-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-jet-button>
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card> --}}
</x-guest-layout>
