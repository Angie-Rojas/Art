

document.addEventListener('DOMContentLoaded', function() {
  
  //Se le pon la etiqueta a una nueva variable de calendar.blade.php
  let formulario = document.querySelector("form");
  //Asigna el calendario a un Div
  var calendarEl = document.getElementById('agenda');
  //Se ponen las opciones o instrucciones
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    //Traducción
    locale:"es",
    headerToolbar: {
      //left: 'prev,next,today',
      //center: 'title',
      //right: 'dayGridMonth, timeGridWeek, listWeek'
    },

    events: "http://artcuida.test:8080/evento/mostrar",

    //Recupera info del día que se presionó
    dateClick: function(info){
    //Al haceer click en la fecha se abre el modal evento que está en calendar.blade
      $("#evento").modal("show");
    }


  });
  //Muestra el calendario en el Div, no importa donde se ubique
  calendar.render();
  //Boton de calendar.blade.php.... Al detectar que hay click, ejecuta --- Se recupera la información que se obtuvo
  document.getElementById("btnGuardar").addEventListener("click",function(){
    //Recupera los datos de la variable que se asigno arriba
    const datos = new FormData(formulario);
    //console.log(datos);
    //Par ver el valor específico de un campo
    //console.log(formulario.title.value);

    //Envia información a través de URL, agregar es de la ruta web.php, se obtienen los datos y se envian a la URL con POST
    axios.post("http://artcuida.test:8080/evento/agregar", datos)
      .then (
        (respuesta) => {
          $("evento").modal("hide")
        } 
      ).catch(
        error=>{
          if(error.response){
            console.log(error.response.data)
          }
        }
      )
      //.then sirve para ejecutar una función después de que el servidor responde

  });
});
