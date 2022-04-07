jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww < 600) {
      $('.mobile-nav').removeClass('hidden');
      $('.desktop-nav').addClass('hidden');
    } else if (ww >= 601) {
      $('.mobile-nav').addClass('hidden');
      $('.desktop-nav').removeClass('hidden');
    };
  };
  $(window).resize(function(){
    alterClass();
  });
  

  //Mobile Nav Background Scroll
  var navScroll = () => {
    $(window).on("scroll", function() {
      $("body").toggleClass("scrolled", $(document).scrollTop() > 50);
  })
  }
  //Fire it when the page first loads:
  alterClass();
  navScroll();
});
