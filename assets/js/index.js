$(document).ready(function() {
   /*
    * DATE  & BOAT PICKER FUNCTIONALITY
    *
    */
    
    var today = new Date();
    var datePicker = $('#date-picker');
    var typeSelector = $('#typeSelector');
    function formatDate(date) {
        return date.toISOString().substring(0, 10);
    }

    var formattedToday = formatDate(today);
    datePicker.val(formattedToday).attr('min', formattedToday);

 
    datePicker.change(function() {
        var date = new Date($(this).val());
        getHoursGrid(typeSelector.val(), formatDate(date));
    });

    $('#prev-day').click(function() {
        var date = new Date(datePicker.val());
        date.setDate(date.getDate() - 1);
        today.setHours(0, 0, 0, 0);
        if (date >= today) {
            datePicker.val(formatDate(date));
            getHoursGrid(typeSelector.val(), datePicker.val());
        }
    });

    $('#next-day').click(function() {
        var date = new Date(datePicker.val());
        date.setDate(date.getDate() + 1);
        datePicker.val(formatDate(date));
        getHoursGrid(typeSelector.val(), datePicker.val());
    });
    typeSelector.change(function() {
        getHoursGrid($(this).val(), datePicker.val());
    });

    $('#next-type, #prev-type').click(function() {
        var $selectedOption = typeSelector.find('option:selected');
        var $nextOrPrevOption = $(this).is('#next-type') ? $selectedOption.next('option') : $selectedOption.prev('option');
        if ($nextOrPrevOption.length > 0) {
          $selectedOption.prop('selected', false);
          $nextOrPrevOption.prop('selected', true);
          setTimeout(function() {
            getHoursGrid(typeSelector.val(), datePicker.val());
          }, 0);
        }
    });

    function getHoursGrid(type, date) {
      console.log(type, date);
      $.ajax({
        url: 'controller/controller.php?action=getHoursGrid',
        method: 'POST',
        data: {
          type: type,
          date: date
        },
        success: function(data) {
          console.log(data);
        data = JSON.parse(data); 
        var html = '<div class="row titulos-tabla bg-light border">';
        html += '<div class="col bg-light hora border border-end text-center">Horas</div>';
        data.boats.forEach(function(boat) {
            html += '<div class="col bg-light border nombre-columna text-center">' + boat.name + '</div>';
        });
        html += '</div>';
        data.hours.forEach(function(hour) {
            html += '<div class="row fila-contenido border" data-hora-inicio="' + hour.start + '" data-hora-fin="' + hour.finish + '">';
            html += '<div class="col hora border text-center">' + hour.start + '-' + hour.finish + '</div>';
            data.boats.forEach(function(boat) {
                html += '<div class="col border mesa" data-mesa="' + boat.idBoat + '"></div>';
            });
            html += '</div>';
        });
        $('#hourGrid').html(html);
        },
        error: function(err) {
          console.error(err);
        }
      });
    }
});