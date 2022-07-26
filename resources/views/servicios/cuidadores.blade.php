@extends('layouts.app')
@yield('content')
@extends('layouts.header-2')

    <div class="banner-services">
        <div class="centrar">
            <h1><i class="fas fa-home"></i></h1>
            <span>Cuidadores</span>
        </div>
    </div>

    <section id="services">
        <div class="container-fluid cards-services">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ URL::asset('assets/Servicios/Clinica-de-heridas-foto.png') }}" class="img-services" alt="Servicios">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">
                                Te ofrecemos procedimientos a domicilio para tratamientos clínicos con especialistas como enfermeros, fisioterapeutas, terapeutas respiratorias. Contamos con procedimientos como:
                                <br><br>
                                - Continúa tu recuperación en el entorno de tu hogar
                                <br>
                                - Más Intimidad, comodidad y cerca de los tuyos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-green" href="#">Agendar este servicio</a>
        </div>
    </section>
