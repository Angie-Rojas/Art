document.addEventListener('DOMContentLoaded', function () {

    //Se le pone la etiqueta a una nueva variable de calendar.blade.php
    let formulario = document.querySelector("form");
    //Asigna el calendario a un Div
    var calendarEl = document.getElementById('agenda');
    //Se ponen las opciones o instrucciones
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        //Traducción
        locale: "es",
        //Aquí se pueden poner más opciones 👀 ver documentación de fullcalendar
        headerToolbar: {
            //right: 'dayGridMonth, timeGridWeek, listWeek'
        },

        events: "http://artcuida.test:8080/evento/mostrar",

        //Recupera info del día que se presionó
        dateClick: function (info) {
            //Recupera el día seleccionado en el modal
            formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;
            $("#evento").modal("show");
        },
        eventClick: function (info) {
            var evento = info.event;
            console.log(evento);

            //Esto se explica en el axios de abajo
            axios.post("http://artcuida.test:8080/evento/editar/" + info.event.id)
                .then(
                    (respuesta) => {
                        formulario.id.value = respuesta.data.id;
                        formulario.title.value = respuesta.data.title;

                        formulario.hora.value = respuesta.data.hora;

                        formulario.start.value = respuesta.data.start;
                        formulario.end.value = respuesta.data.end;

                        $("#evento").modal("show");
                    }
                ).catch(
                    error => {
                        if (error.response) {
                            console.log(error.response.data)
                        }
                    }
                )

        }


    });
    //Muestra el calendario en el Div, no importa donde se ubique
    calendar.render();
    //Boton de calendar.blade.php.... Al detectar que hay click, ejecuta --- Se recupera la información que se obtuvo
    document.getElementById("btnGuardar").addEventListener("click", function () {
        enviarDatos("http://artcuida.test:8080/evento/agregar");
    });

    document.getElementById("btnEliminar").addEventListener("click", function () {
        enviarDatos("http://artcuida.test:8080/evento/borrar/"+formulario.id.value);
    });

    function enviarDatos(url) {
        const datos = new FormData(formulario);
        axios.post(url, datos)
            //.then sirve para ejecutar una función después de que el servidor responde
            .then(
                (respuesta) => {
                    calendar.refetchEvents();
                    $("#evento").modal("hide")
                }
            ).catch(
                error => {
                    if (error.response) {
                        console.log(error.response.data)
                    }
                }
            )
    }
});
