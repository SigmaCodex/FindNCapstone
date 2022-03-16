// modal for computer type
$('#df-contact').click(function() {
    $('.df-modal').css('z-index', '999');
    $('html').addClass('df-modal-active');
  });
  
  $('.df-modal-overlay').click(function() {
    $('html').removeClass('df-modal-active');
    setTimeout(function() {
      $('.df-modal').css('z-index', '-999')
    }, 500);
  });
