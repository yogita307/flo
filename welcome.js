$('.button').click(function () {
  $('#modal-container').removeAttr('class').addClass('one');
  $('body').addClass('modal-active');
});

$('#modal-container').click(function () {
  // $(this).addClass('out');
  //$('body').removeClass('modal-active');
});

$('#modal-container').removeAttr('class').addClass('one');
$('body').addClass('modal-active');

$('#submit').on('click', function () {
  val = $('#pancardNumber').val();
  console.log(val);
  if (!val) {
    $('#err').html('Please enter your PAN');
    $('#pancardNumber').focus();
    return false;
  } else {
    var pattern = /[A-Z]{3}[ABCEFGHJLPT][A-Z][0-9]{4}[A-Z]/;
    $('#submit').val(val.toUpperCase());
    if (!pattern.test(val)) {
      $('#err').html('Invalid PAN. Please provide a valid PAN');
      return false;
    }
  }
});
