<!-- Plantilla que contine Encabezados, Estilos, Footer-->
<!doctype html>

  <html lang="es">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ArtCuidadores</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <!-- FullCalendar -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css">
      <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.js"></script>
      <!-- Bootstrap -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">       
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <!-- Otros -->
      <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <!-- Mis scripts -->
      <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
      <script src="{{ asset('js/script.js') }}" defer></script>
 
    </head>

    <body>
        <script src="{{ asset('js/agenda.js') }}" defer></script>

        <!-- Inicio de sesión -->
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
        <!-- Menú desplegable S y XL -->

        @if(Route::is('agenda','contacto','servicios') )
          @include('layouts.header')
        @endif

        @if(Route::is('otro') )
          @include('layouts.header-2')
        @endif


    </body>

    <footer>

      <ul class="nav nav-pills nav-justified navbar2" >
          <li class="nav-item">   
            <!-- En style, lo que se hace es que detecta la ruta, si pertenece a servicios, se desactiva la imagen de desactivado -->
            <a class="nav-link nav-secundary" aria-current="page" href="{{url('servicios')}}" style="display:{{request()->routeIs('servicios','otro') ? 'none' : ''}}">
              <img src="{{ URL::asset('assets/Menu-inferior/Servicios-2.png') }}" class="img-fluid rounded-start"  alt="...">
              <h5 class="menu-inf-text">Servicios</h5>
            </a>
            <!-- En style, lo que se hace es que detecta la ruta, si pertenece a servicios, se activa la imagen de activado -->
            <a class="nav-link" aria-current="page" href="{{url('servicios')}}" style="display:{{request()->routeIs('agenda','contacto','otro') ? 'none' : ''}}">
              <img src="{{ URL::asset('assets/Menu-inferior/Servicios-1.png') }}" class="img-fluid rounded-start"  alt="...">
            </a>
          </li>

          <li class="nav-item">   
            <a class="nav-link nav-secundary" aria-current="page" href="{{url('agenda')}}" style="display:{{request()->routeIs('agenda','otro') ? 'none' : ''}}">
              <img src="{{ URL::asset('assets/Menu-inferior/Agenda-2.png') }}" class="img-fluid rounded-start"  alt="...">
              <h5 class="menu-inf-text">Agenda</h5>
            </a>
            <a class="nav-link" aria-current="page" href="{{url('agenda')}}" style="display:{{request()->routeIs('servicios','contacto','otro') ? 'none' : ''}}">
              <img src="{{ URL::asset('assets/Menu-inferior/Agenda-1.png') }}" class="img-fluid rounded-start"  alt="...">
            </a>
          </li>

          <li class="nav-item">   
            <a class="nav-link nav-secundary" aria-current="page" href="{{url('contacto')}}" style="display:{{request()->routeIs('contacto','otro') ? 'none' : ''}}">
              <img src="{{ URL::asset('assets/Menu-inferior/Contacto-2.png') }}" class="img-fluid rounded-start"  alt="...">
              <h5 class="menu-inf-text">Contacto</h5>
            </a>
            <a class="nav-link" aria-current="page" href="{{url('contacto')}}" style="display:{{request()->routeIs('servicios','agenda','otro') ? 'none' : ''}}">
              <img src="{{ URL::asset('assets/Menu-inferior/Contacto-1.png') }}" class="img-fluid rounded-start"  alt="...">
            </a>
          </li>
      </ul>

    </footer>


  </html>
