$(document).ready(function() {
    var selectedDate, selectedPort, selectedTime;
    $('#datepicker').hide();
    $('#timepicker').hide();
    let picker = null;
  
   
      $(document).scroll(function() {
        var desplazamiento = $(window).scrollTop();
        $('#snow').css('transform', 'translateY(' + desplazamiento * 0.5 + 'px)');
      });
      var sections = ['#hero', '#about', '#bookNow']; // IDs de tus secciones
      var currentSection = 0;
  
      $(window).on('wheel', function(e) {
        e.preventDefault(); // Previene el scroll predeterminado
    
        // Variable para controlar el tiempo entre scrolls
        if (window.allowScroll !== false) {
            window.allowScroll = false; // Deshabilita nuevos scrolls
    
            if (e.originalEvent.deltaY > 0) {
                // Scroll hacia abajo
                if (currentSection < sections.length - 1) {
                    currentSection++;
                    $('html, body').animate({
                        scrollTop: $(sections[currentSection]).offset().top
                    }, 800); // Ajusta la duración del scroll aquí
                }
            } else {
                // Scroll hacia arriba
                if (currentSection > 0) {
                    currentSection--;
                    $('html, body').animate({
                        scrollTop: $(sections[currentSection]).offset().top
                    }, 800); // Ajusta la duración del scroll aquí
                }
            }
    
            // Espera 3 segundos antes de permitir otro scroll
            setTimeout(function() {
                window.allowScroll = true;
            }, 250); // Ajusta el tiempo de espera aquí
        }
    });
   $('.btn-group input[type="radio"]').on('change', function() {
   
    var $btnGroup = $(this).closest('.btn-group');
    $btnGroup.find('label').removeClass('selected');

    if ($(this).is(':checked')) {
        $(this).closest('label').addClass('selected');
    }
    if ($(this).attr('name') == 'PlaceOptions'){
        initializePicker();
        $('#timepicker input[type="radio"]').prop('checked', false).closest('label').removeClass('selected');
    }
});
$('#confirmBooking').click(function() {
   // Obtener los valores seleccionados
   selectedPort = $('input[name="PlaceOptions"]:checked').attr('id');
   selectedTime = $('#timepicker input[type="radio"]:checked').attr('id');

   // Actualizar el contenido del modal con la información seleccionada
    $('#bookingDate').text(selectedDate);
    $('#bookingPort').text(selectedPort);
    $('#bookingTime').text(selectedTime);
    $('#bookingModal').modal('show');
    localStorage.setItem('selectedDate', selectedDate);
    localStorage.setItem('selectedTime', selectedTime);
    localStorage.setItem('selectedPort', selectedPort);
  });
function initializePicker() {
    $('#timepicker').hide();
    $('#calendarTitle').text('Select Date & time');
    if (picker){
        picker.destroy();
    }
    let location = $('input[name="PlaceOptions"]:checked').attr('id');
    console.log(location)
   
    picker = new easepick.create({
        element: document.getElementById('datepicker'),
        css: [
          'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css',
        ],
        inline: true,
        startDate: new Date(),
        plugins: [easepick.LockPlugin], // Asegúrate de incluir el plugin LockPlugin
        LockPlugin: {
            minDate: new Date(), // Deshabilita los días anteriores a la fecha actual
        },
        setup(picker) {
            picker.on('select', (evt) => {
                $('#timepicker').show();
                selectedDate = evt.detail.date.toLocaleDateString('en-CA', { timeZone: 'Europe/Madrid' });
                console.log(selectedDate);
                updateAvailableTimes(location, selectedDate);
            });
        }
      });
     
     
  }
  function fetchBookings() {
    return fetch('./model/bookings.json')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data); // Log the JSON response to the console
            return data;
        })
        .catch(error => {
            console.error('Error fetching bookings:', error);
        });
}
function updateAvailableTimes(location, selectedDate) {
    fetchBookings().then(bookings => {
        // Filtrar reservas por lugar y fecha seleccionados
        const filteredBookings = bookings.filter(booking => booking.place === location && booking.date === selectedDate);
        const bookedTimes = filteredBookings.map(booking => booking.time); // Extraer solo los tiempos

        $('#timepicker input[type="radio"]').each(function() {
            const timeId = $(this).attr('id');
            // Comprobar si el tiempo actual está en la lista de tiempos reservados
            if (bookedTimes.includes(timeId)) {
                $(this).prop('disabled', true).closest('label').addClass('disabled');
                $(this).closest('label').addClass('text-secondary');
            } else {
                $(this).prop('disabled', false).closest('label').removeClass('disabled');
                $(this).closest('label').removeClass('text-secondary');
            }
        });
    }).catch(error => {
        console.error('Error fetching bookings:', error);
    });
}


});