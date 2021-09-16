<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @extends('layouts.head')
    </head>

    <body class="antialiased">
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
        @extends('layouts.header')


        <div class="banner-home">
            <img src="{{ URL::asset('assets/Banner-full.png') }}" class="img-fluid" alt="Banner Servicios">
        </div>
        <section id="home">       
            <div class="container-fluid cards-services">
                <div class="row">
                    <div class="col-md-4">
                        <a class="card"  href="{{url('cuidadores')}}">
                            <div class="col-xs-4" style="background: ">
                                <img src="{{ URL::asset('assets/Cuidadores.png') }}" class="img-fluid rounded-start" alt="..."> 
                            </div> 
                            <div class="col-xs-8 card-text">
                                <h5 class="card-title">Cuidadores</h5>
                            </div>        
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="card"  href="{{url('clinica-de-heridas')}}">
                            <div class="col-xs-4">
                                <img src="{{ URL::asset('assets/Clinica-heridas.png') }}" class="img-fluid rounded-start" alt="..."> 
                            </div> 
                            <div class="col-xs-8 card-text">
                                <h5 class="card-title">Clínica de heridas</h5>
                            </div>        
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="card"  href="{{url('muestras-de-laboratorio')}}">
                            <div class="col-xs-4">
                                <img src="{{ URL::asset('assets/Muestras-laboratorio.png') }}" class="img-fluid rounded-start" alt="..."> 
                            </div> 
                            <div class="col-xs-8 card-text">
                                <h5 class="card-title">Muestras de laboratorio</h5>
                            </div>        
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="card"  href="{{url('vacunacion')}}">
                            <div class="col-xs-4">
                                <img src="{{ URL::asset('assets/Vacunacion.png') }}" class="img-fluid rounded-start" alt="..."> 
                            </div> 
                            <div class="col-xs-8 card-text">
                                <h5 class="card-title">Vacunación</h5>
                            </div>        
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="card"  href="{{url('tamizaje-y-deteccion-de-diabetes')}}">
                            <div class="col-xs-4">
                                <img src="{{ URL::asset('assets/Tamizaje-deteccion-diabetes.png') }}" class="img-fluid rounded-start" alt="..."> 
                            </div> 
                            <div class="col-xs-8 card-text">
                                <h5 class="card-title">Tamizaje y detección de diabetes</h5>
                            </div>        
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="card"  href="#">
                            <div class="col-xs-4">
                                <img src="{{ URL::asset('assets/Tamizaje-deteccion-diabetes.png') }}" class="img-fluid rounded-start" alt="..."> 
                            </div> 
                            <div class="col-xs-8 card-text">
                                <h5 class="card-title">Tamizaje y detección de diabetes</h5>
                            </div>        
                        </a>
                    </div>
                </div> 
            </div>   
        </section>

        @extends('layouts.footer')

</html>
