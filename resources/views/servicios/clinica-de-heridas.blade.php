@extends('layouts.app')
@yield('content')
@extends('layouts.header-2')

    <div class="banner-services">
        <h1><i class="fas fa-band-aid"></i></h1>
        <span>Clínica de heridas</span>
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
                                El cuidado de las heridas es uno de los principales factores para que la cicatrización sea efectiva y se reduzcan de esta 
                                manera las complicaciones que se reflejan en la presencia de infección, estancia prolongada, retardo en el proceso de cicatrización
                                y cicatrización patológica.
                            </p>
                        </div>
                    </div>
                </div> 
            </div>
            <a class="btn btn-green" href="#">Agendar este servicio</a>
        </div>
    </section>
