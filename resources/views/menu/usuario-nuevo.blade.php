@extends('layouts.app')
@yield('content')

    <section id="user">
        
        <div class="banner-user">
            <img src="{{ URL::asset('assets/Banner-usuarios.svg') }}" class="img-fluid" alt="Banner Usuarios">
        </div>

        <div class="container-fluid cards-user">
            <div class="container-fluid ">
                <!-- Al enviar un form, Laravel exige un token 👀 como medida de seguridad 🔒 -->
                <form action="{{route('usuario.store')}}" method="POST" class="base-form">
                    <!-- Esto genera el token en un input oculto --> 
                    @csrf
                    <label for="name">Nombre completo:</label>
                    <input type="text" id="name" name="name"><br><br>
                    <label for="phone">Número de celular:</label>
                    <input type="number" id="phone" name="phone"><br><br>
                    <label for="idtype">Tipo de documento:</label>
                    <input type="text" id="tipdoc" name="tipdoc"><br><br>
                    <label for="idnum">Número de documento:</label>
                    <input type="number" id="doc" name="doc"><br><br>
                    <label for="direc">Dirección:</label>
                    <small>*Actualmente nuestros servicios solo se encuentran en la ciudad de Bogotá</small>
                    <input type="text" id="address" name="address"><br><br>
                    <label for="loc">Localidad:</label>
                    <input type="text" id="locate" name="locate"><br><br>
                    <button type="submit" class="btn-green">
                        Agregar usuario
                    </button>
                </form> 
            </div>  
        </div>

    </section>

