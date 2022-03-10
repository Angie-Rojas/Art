@extends('layouts.app')
@yield('content')
@extends('layouts.header-2')

    <section id="services">
        <div class="container-fluid cards-services">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ URL::asset('assets/Servicios/Vacunacion-foto.png') }}" class="img-services" alt="Servicios">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">
                                Generalmente a nuestros usuarios les asaltan dudas con relación a cambios físicos, toma de medicamentos, 
                                aparición de signos y síntomas y muchos otros que en ocasiones y por temor de actuar incorrectamente, 
                                hacen que el tratamiento ordenado se suspenda ocasionando así complicaciones y no adherencia al tratamiento. 
                                <br><br>
                                Por ello contamos con un grupo de médicos generales dispuestos a resolver todas aquellas dudas que tenga el 
                                paciente y orientar su manejo.
                            </p>
                        </div>
                    </div>
                </div> 
            </div>
            <a class="btn btn-green" href="#">Agendar este servicio</a>
       </div>
    </section>

