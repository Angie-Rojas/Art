<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>
                    {{ __('Crear cuenta') }}
                </h1>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Nombre Completo:') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Correo electrónico:') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Contraseña:') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Confirmar contraseña:') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
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

                <x-jet-button>
                    {{ __('Registrarse') }}
                </x-jet-button>

                <div class="mb-0 text-card-down">
                    <div class="d-flex justify-content-center align-items-baseline">
                        <h2 class="custom-control-label" for="remember_me">
                            {{ __('¿Ya tienes cuenta?') }}&emsp;
                        </h2>
                        <a class="text-muted mr-3" href="{{ route('login') }}">
                            {{ __('Iniciar sesión') }}
                        </a>                        
                    </div>
                    @if (Route::has('password.request'))
                            <a class="text-muted me-3 d-flex justify-content-center align-items-baseline" href="{{ url('/') }}">
                                {{ __('Acceder como invitado') }}
                            </a>
                    @endif
                </div>
                
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>