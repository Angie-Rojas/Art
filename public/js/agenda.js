document.addEventListener('DOMContentLoaded', function() {
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
    //Recupera info del día que se presionó
    dateClick: function(info){
    //Al haceer click en la fecha se abre el modal evento que está en calendar.blade
      $("#evento").modal("show");
    }


  });
  //Muestra el calendario en el Div
  calendar.render();
});
