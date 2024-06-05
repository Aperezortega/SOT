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
        loadData(typeSelector.val(), formatDate(date));
    });

    $('#prev-day').click(function() {
        var date = new Date(datePicker.val());
        date.setDate(date.getDate() - 1);
        today.setHours(0, 0, 0, 0);
        if (date >= today) {
            datePicker.val(formatDate(date));
            loadData(typeSelector.val(), datePicker.val());
        }
    });

    $('#next-day').click(function() {
        var date = new Date(datePicker.val());
        date.setDate(date.getDate() + 1);
        datePicker.val(formatDate(date));
        loadData(typeSelector.val(), datePicker.val());
    });
    typeSelector.change(function() {
        loadData($(this).val(), datePicker.val());
    });

    $('#next-type, #prev-type').click(function() {
        var $selectedOption = typeSelector.find('option:selected');
        var $nextOrPrevOption = $(this).is('#next-type') ? $selectedOption.next('option') : $selectedOption.prev('option');
        if ($nextOrPrevOption.length > 0) {
          $selectedOption.prop('selected', false);
          $nextOrPrevOption.prop('selected', true);
          setTimeout(function() {
            loadData(typeSelector.val(), datePicker.val());
          }, 0);
        }
    });

    function loadData(type, date) {
      console.log(type, date);
    }
});