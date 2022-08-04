@extends('layouts.app')
@yield('content')
@extends('layouts.header-2')

<div class="banner-services">
  <span>Calendario</span>
</div>

<br><br><br>

<div class="container">
    <div id="agenda">

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hora</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>Selecciona la hora en la que deseas que inicie el servicio</p>
                <form action="">
                    <!--Permite trabajar con todos los datos que llegan, es un dato oculto-->
                    {!!csrf_field()!!}
                    <!--Este es el id-->
                    <div class="form-group">
                      <label for="id">ID:</label>
                      <input type="text" name="id" id="id" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>


                    <!--Debe ser title porque fullcalendar respeta inglés-->
                    <div class="form-group">
                      <label for="title">Título:</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <!--Aquí va la descripción-->
                    <div class="form-group">
                      <label for="hora">Hora</label>
                      <input type="time" name="hora" id="hora" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <!--Fecha de inicio y final, también en inglés-->
                    <div class="form-group">
                      <label for="start">Inicio:</label>
                      <input type="date" name="start" id="start" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="end">Final</label>
                      <input type="date" name="end" id="end" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" id="btnGuardar" >Guardar</button>
                <button type="button" class="btn btn-warning" id="btnEditar" >Editar</button>
                <button type="button" class="btn btn-danger" id="btnEliminar" >Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


