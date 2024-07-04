$(document).ready(function() {
    $( function() {
        $( "#datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        }).datepicker("setDate", new Date()); // Esto establece la fecha actual como seleccionada por defecto
      });
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
            }, 400); // Ajusta el tiempo de espera aquí
        }
    });
    $('.btn-group input[type="radio"]').on('change', function() {
      // Remueve la clase 'selected' de todas las etiquetas 'label' dentro del grupo de botones
      $('.btn-group label').removeClass('selected');
      
      // Agrega la clase 'selected' solo a la etiqueta 'label' correspondiente al botón de radio seleccionado
      if ($(this).is(':checked')) {
          $(this).closest('label').addClass('selected');
      }
  });
  $("#datepicker").datepicker({
    // Configuración para mostrar el datepicker inline
    inline: true
});
$("#timepicker").timepicker({
  // Configuraciones opcionales aquí
});
});