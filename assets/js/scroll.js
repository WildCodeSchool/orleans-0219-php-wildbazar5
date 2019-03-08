  $(window).on('scroll', function() {
    var scrolled = $(window).scrollTop();
    var height = $(window).height();
    if (scrolled < height) {
      $('h1').css({
        'font-size': 4 - scrolled * 0.004 + "rem"
      });
      $('h1').css({
        'opacity': 1 - scrolled * 0.001
      });
      $('h1').css({
        'margin-top': scrolled * 0.7
      });
      $('.lead').css({
        'opacity': 1 - scrolled * 0.002
      });
    }
  });


  
  