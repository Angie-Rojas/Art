@extends('layouts.app')
@yield('content')

    <section id="user">
        
        <div class="banner-user">
            <img src="{{ URL::asset('assets/Banner-usuarios.svg') }}" class="img-fluid" alt="Banner Usuarios">
        </div>
        
        <div class="container-fluid cards-user">
            <div class="row">
                <div class="col-md-4">
                    <a class="card"  href="{{url('pacientes/nuevo')}}">
                         <div class="col-xs-4" style="background: ">
                             <img class="rounded-circle" src="{{ URL::asset('assets/Mas.svg') }}" alt="Agregar nuevo usuario" >
                         </div> 
                         <div class="col-xs-8 card-text">
                         <h5>Agregar nuevo usuario</h5>
                         </div>        
                     </a>
                </div>
                @foreach ($pacientes as $paciente)
                    <div class="col-md-4">
                        <a class="card"  href="{{url('cuidadores')}}">
                            <div class="col-xs-4" style="background: ">
                                <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" >
                            </div> 
                            <div class="col-xs-8 card-text">
                            <h4>{{$paciente->nombre}}</h4>
                            <h5>Estado: Por confirmar</h5>
                            </div>        
                        </a>
                    </div>
                @endforeach
                <!-- Pone los números del paginate -->
                {{$pacientes->links()}}
                
            </div> 
        </div>   

    </section>


    