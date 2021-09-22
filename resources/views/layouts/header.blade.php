<header>
    <div id="nav">
        <nav role="navigation">
            <div id="menuToggle">   
                <input type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    @guest
                        <div class="menu-perfil">

                        </div>
                        <div class="menu-items">
                            <hr>
                            <li><a href="{{ route('login') }}">Ingresar</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Ayuda</a></li>
                        </div>
                        <div class="menu-salir">
                            <hr>
                            <li><a href="#">Cerrar sesión</a></li>
                        </div>
                    @else
                        <div class="menu-perfil">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="rounded-circle" width="100" height="100" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            @else
                                {{ Auth::user()->name }}

                                <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            @endif
                        </div>
                        <div class="menu-items">
                            <hr>
                            <li><a href="#">Mi Perfil</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Agenda</a></li>
                            <li><a href="#">Beneficiarios</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Pagos</a></li>
                            <li><a href="#">Ayuda</a></li>
                        </div>
                        <div class="menu-salir">
                            <hr>
                            <li><a href="#">Cerrar sesión</a></li>
                        </div>
                    @endguest

                </ul>
            </div>
            <h4>Servicios </h4>
            <div class="whatsapp">
                <a href="index.html" ><img src="{{ URL::asset('assets/WhatsApp.png') }}" alt="WhatsApp"></a>
            </div> 
        </nav>
    </div>

    <div class="nav-l">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="{{ URL::asset('assets/Logo.png') }}" class="img-fluid rounded-start" alt="..."> </a>
            <ul class="mr-auto"></ul>
            <a class="nav-link" href="#">Servicios</a>
            <a class="nav-link" href="#">Agenda</a>
            <a class="nav-link" href="#">Beneficiarios</a>
            <a class="nav-link" href="#">Contacto</a>
            <a class="nav-link" href="#">Pagos</a>
            <a class="btn" href="{{ url('/dashboard') }}">Ingresar</a>
        </nav>
    </div>
</header>