$(document).ready(function() {
    $('tr').click(function() {
      var inp = $(this).find('.check');
      var tr = $(this).closest('tr');
      inp.prop('checked', !inp.is(':checked'))
  
      tr.toggleClass('isChecked', inp.is(':checked'));
    });
  
    // do nothing when clicking on checkbox, but bubble up to tr
    $('.check').click(function(e) {
      e.preventDefault();
    })
  })