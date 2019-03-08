  $(window).on('scroll', function() {
    var scrolled = $(window).scrollTop();
    var height = $(window).height();
    if (scrolled < height) {
      $('h1').css({
        'font-size': Math.round((3.5 - scrolled * 0.004 )*100)/100 + "rem"
      });
      $('h1').css({
        'opacity': 1 - scrolled * 0.001
      });
      $('h1').css({
        'margin-top': Math.round(scrolled * 0.02)+"rem"
      });
      $('.lead').css({
        'opacity': 1 - scrolled * 0.002
      });
    }
  });


  
  