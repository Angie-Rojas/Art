@extends('layouts.app')
@yield('content')
@extends('layouts.header-2')

<div class="banner-services">
    <div class="centrar">
        <h1><i class="fas fa-flask"></i></h1>
        <span>Muestras de laboratorio</span>
    </div>
</div>

    <section id="services">
        <div class="container-fluid cards-services">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ URL::asset('assets/Servicios/Muestras-de-laboratorio-foto.png') }}" class="img-services" alt="Servicios">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">
                                Prueba para la determinación cuantitativa de la hemoglobina glucosilada (HbA1c) en sangre
                                completa humana que se utiliza para supervisar el control metabólico en pacientes con diabetes.
                                <br><br>
                                Prueba para la determinación cuantitativa de colesterol total, colesterol de lipoproteínas de alta densidad (HDL),
                                colesterol de lipoproteínas de baja densidad (LDL), triglicéridos (Trig), no HDL y relación Chol/HDL en sangre completa,
                                suero y plasma, para su uso en el diagnóstico y tratamiento de trastornos de lípidos.
                                <br><br>
                                Nuestros pacientes tendrán la posibilidad de contar con u resultado confiable en tiempo real y así determinar el manejo
                                adecuado para su estado de salud, de manera inmediata disminuyendo las barreras de acceso y la oportunidad del tratamiento.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-green" href="#">Agendar este servicio</a>
        </div>
    </section>
