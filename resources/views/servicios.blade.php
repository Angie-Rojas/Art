@include('layouts.app')


<section id="home">

    <div class="banner-home">
        <img src="{{ URL::asset('assets/Banner-full.png') }}" class="img-fluid" alt="Banner Servicios">
        <div class="banner-content">
            <div class="banner-title">BIENVENIDO A ARTCUIDADORES</div>
            <div class="banner-text">Ya puedes instalar nuestra aplicación para estar siempre en contacto</div>
            <a href=""><div class="banner-btn">Instalar</div></a>
        </div>
    </div>

    <div class="container-fluid cards-principal">
        <div class="row justify-content-center ">
            <div class="col-md-4 col-sm-6 ">
               <a class="card"  href="{{url('cuidadores')}}">
                    <div class="col-xs-4" style="background: ">
                        <img src="{{ URL::asset('assets/Servicios/Cuidadores.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-xs-8 card-text">
                        <h5 class="card-title">Cuidadores</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a class="card"  href="{{url('clinica-de-heridas')}}">
                    <div class="col-xs-4">
                        <img src="{{ URL::asset('assets/Servicios/Clinica-de-heridas.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-xs-8 card-text">
                        <h5 class="card-title">Clínica de heridas</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a class="card"  href="{{url('muestras-de-laboratorio')}}">
                    <div class="col-xs-4">
                        <img src="{{ URL::asset('assets/Servicios/Muestras-de-laboratorio.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-xs-8 card-text">
                        <h5 class="card-title">Muestras de laboratorio</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a class="card"  href="{{url('vacunacion')}}">
                    <div class="col-xs-4">
                        <img src="{{ URL::asset('assets/Servicios/Vacunacion.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-xs-8 card-text">
                        <h5 class="card-title">Vacunación</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a class="card"  href="{{url('tamizaje-y-deteccion-de-diabetes')}}">
                    <div class="col-xs-4">
                        <img src="{{ URL::asset('assets/Servicios/Tamizaje-y-deteccion-de-diabetes.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-xs-8 card-text">
                        <h5 class="card-title">Tamizaje y detección de diabetes</h5>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>


