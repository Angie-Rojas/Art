<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body forgot-password">
            <h1>
                {{ __('Reestablecer contraseña') }}
            </h1>
            <div class="mb-3">
                {{ __('¿Olvidaste tu contraseña? Dejanos tu correo electrónico y te enviaremos un enlace para que la puedas reestablecer.') }}
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-3" />

            <form method="POST" action="/forgot-password">
                @csrf
                
                <div class="mb-3">
                    <x-jet-label value="Email" />
                    <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <x-jet-button>
                        {{ __('Enviar enlace al correo') }}
                    </x-jet-button>
                </div>
            </form>

            <div class="mb-0 text-card-down">
                <div class="d-flex justify-content-center align-items-baseline">
                    <h2 class="custom-control-label" for="remember_me">
                        {{ __('¿No tienes cuenta?') }}&emsp;
                    </h2>
                    @if (Route::has('password.request'))
                        <a class="text-muted me-3" href="{{ route('register') }}">
                            {{ __('Crear cuenta') }}
                        </a>
                    @endif
                </div>
                @if (Route::has('password.request'))
                        <a class="text-muted me-3 d-flex justify-content-center align-items-baseline" href="{{ url('/') }}">
                            {{ __('Acceder como invitado') }}
                        </a>
                    @endif
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>