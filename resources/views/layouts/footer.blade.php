<footer>

    <ul class="nav nav-pills nav-justified navbar2" >
        <li class="nav-item">   
          <a class="nav-link nav-secundary" aria-current="page" href="{{url('servicios')}}" style="display:{{request()->routeIs('servicios') ? 'none' : ''}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Servicios-2.png') }}" class="img-fluid rounded-start"  alt="...">
            <h5 class="menu-inf-text">Servicios</h5>
          </a>
          <a class="nav-link" aria-current="page" href="{{url('servicios')}}" style="display:{{request()->routeIs('agenda','contacto') ? 'none' : ''}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Servicios-1.png') }}" class="img-fluid rounded-start"  alt="...">
          </a>
        </li>

        <li class="nav-item">   
          <a class="nav-link nav-secundary" aria-current="page" href="{{url('agenda')}}" style="display:{{request()->routeIs('agenda') ? 'none' : ''}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Agenda-2.png') }}" class="img-fluid rounded-start"  alt="...">
            <h5 class="menu-inf-text">Agenda</h5>
          </a>
          <a class="nav-link" aria-current="page" href="{{url('agenda')}}" style="display:{{request()->routeIs('servicios','contacto') ? 'none' : ''}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Agenda-1.png') }}" class="img-fluid rounded-start"  alt="...">
          </a>
        </li>

        <li class="nav-item">   
          <a class="nav-link nav-secundary" aria-current="page" href="{{url('contacto')}}" style="display:{{request()->routeIs('contacto') ? 'none' : ''}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Contacto-2.png') }}" class="img-fluid rounded-start"  alt="...">
            <h5 class="menu-inf-text">Contacto</h5>
          </a>
          <a class="nav-link" aria-current="page" href="{{url('contacto')}}" style="display:{{request()->routeIs('servicios','agenda') ? 'none' : ''}}">
            <img src="{{ URL::asset('assets/Menu-inferior/Contacto-1.png') }}" class="img-fluid rounded-start"  alt="...">
          </a>
        </li>
    </ul>

</footer>       