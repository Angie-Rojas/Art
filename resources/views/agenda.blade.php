@include('layouts.app')
        <!--
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Ingresar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarme</a>
                    @endif
                @endauth
            </div>
        @endif
        -->

        <div class="banner-home mt-5">
            <img src="{{ URL::asset('assets/Banner-agenda.svg') }}" class="img-fluid" alt="Banner Agenda">
        </div>

        <section id="agenda">  
            @guest
            <!--Cuando no ha iniciado sesión-->
            <div class="container-fluid cards-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card"> 
                            <div class="col-xs-8 card-text">
                                <h1 class="card-title">¡Ups!</h1>
                                <p class="card-text">Este apartado solo está disponible para usuarios registrados, inicia sesión o crea una cuenta para poder continuar. </p>
                                <a class="btn btn-green" href="{{ route('login') }}">Iniciar sesión</a>  
                                <a class="btn btn-blue" href="{{ route('register') }}">Crear cuenta</a>  
                            </div>   
                            
                        </div>
                    </div>
                </div> 
            </div>   
            @else
            <!--Cuando ya ha iniciado sesión-->


            
            @endguest

        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

