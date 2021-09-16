<header>
    <div id="nav">
        <nav role="navigation">
            <div id="menuToggle">   
                <input type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
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