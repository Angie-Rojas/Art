
@extends('layouts.app')
@yield('content')
        <div class="banner-home">
            <img src="{{ URL::asset('assets/Banner-full.png') }}" class="img-fluid" alt="Banner Servicios">
        </div>
        <section id="home">       
            <div class="container-fluid cards-services">
                <div class="row">
                    @foreach ($pacientes as $paciente)
                        <div class="col-md-4">
                            <a class="card"  href="{{url('cuidadores')}}">
                                <div class="col-xs-8 card-text">
                                    <h5 class="card-title">{{$paciente->nombre}}</h5>
                                    <h6>{{$paciente->direccion}}</h6>
                                </div>        
                            </a>
                        </div>
                    @endforeach
                </div> 
            </div>   
        </section>
