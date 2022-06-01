@extends('layouts.app')
@yield('content')


<section id="services">
    <div class="banner-services">
        <h1><i class="fas fa-home"></i></h1>
        <span>Cuidadores</span>
    </div>
    <div class="container st" >
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active fas fa-user-alt" ><strong>Usuario</strong></li>
                                    <li class="fas fa-map-marker-alt"><strong>Dirección</strong></li>
                                    <li class="fas fa-calendar-alt"><strong>Fecha</strong></li>
                                    <li class="fas fa-check"><strong>Confirmación</strong></li>
                                </ul> 
                                
                                <!-- fieldset 1: Selección o registro de usuario 🙍🏻‍♂️-->
                                <fieldset>
                                    <div class="">
                                        <p class="st-text">Para continuar, selecciona el usuario a quién irá destinado el servicio.</p> 
                                    </div> 

                                    <!-- Empieza a traer los registros -->
                                    <section id="user">
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
                                    <!-- Termina de traer registros-->

                                    <input type="button" name="next" class="next btn-next" value="Siguiente" />
                                </fieldset>

                                <!-- fieldset 2: Selección o registro de dirección 🏠-->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Personal Information</h2> 
                                        <input type="text" name="fname" placeholder="First Name" /> 
                                        <input type="text" name="lname" placeholder="Last Name" /> 
                                        <input type="text" name="phno" placeholder="Contact No." /> 
                                        <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                    </div> 
                                    <div class="row">
                                        <input type="button" name="previous" class="previous action-button-previous col-6" value="Anterior" /> 
                                        <input type="button" name="next" class="next action-button-previous col-6" value="Siguiente" />
                                    </div>
                                    
                                </fieldset>

                                <!-- fieldset 3: Selección de fecha y hora 📅⌚-->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Payment Information</h2>
                                        <div class="radio-group">
                                            <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                            <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                                        </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                        <div class="row">
                                            <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                            <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                            <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                    <option selected>Month</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select> <select class="list-dt" id="year" name="expyear">
                                                    <option selected>Year</option>
                                                </select> </div>
                                        </div>
                                    </div> 
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                    <input type="button" name="make_payment" class="next btn-babyblue" value="Confirm" />
                                </fieldset>
                                
                                <!-- fieldset 4: Confirmación del servicio ✔-->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>