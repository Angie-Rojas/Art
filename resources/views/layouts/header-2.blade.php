<!-- Plantilla que contiene el segundo menú web y móvil -->
<header>
    <div id="nav-2" >
        <a href="{{url()->previous()}}"><i class="fas fa-chevron-left back"></i></a>
        <h4>{{$titulo = 'Título'}}</h4>
        <!-- Esta función aún no se ha creado
        <div class="close-2">
            x
        </div> -->
    </div>
</header>

<!-- Este es el mismo footer de siempre, solo que aquí no importa la ruta porque siempre va a estar la imagen de desactivado  -->
<footer>
    <ul class="nav nav-pills nav-justified navbar2" >
        <li class="nav-item">   
          <a class="nav-link nav-secundary" aria-current="page" href="{{url('servicios')}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Servicios-2.png') }}" class="img-fluid rounded-start"  alt="...">
            <h5 class="menu-inf-text">Servicios</h5>
          </a>
        </li>

        <li class="nav-item">   
          <a class="nav-link nav-secundary" aria-current="page" href="{{url('agenda')}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Agenda-2.png') }}" class="img-fluid rounded-start"  alt="...">
            <h5 class="menu-inf-text">Agenda</h5>
          </a>
        </li>

        <li class="nav-item">   
          <a class="nav-link nav-secundary" aria-current="page" href="{{url('contacto')}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Contacto-2.png') }}" class="img-fluid rounded-start"  alt="...">
            <h5 class="menu-inf-text">Contacto</h5>
          </a>
        </li>
    </ul>

  </footer>
