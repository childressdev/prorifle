$(document).ready(function($){
  $('#scrollDown').on('click', function(e){
    e.preventDefault();
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 56
        }, 1000);
        return false;
      }
    }        
  });

  $('#navRed').affix({
    offset: {top: $('#hero').outerHeight(true)}
  });
});