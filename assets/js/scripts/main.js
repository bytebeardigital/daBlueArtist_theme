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
      $("nav").toggleClass("scrolled", $(document).scrollTop() > 10);
  })
  }

  //Mobile NavToggler
  const toggleMobileNav = () => {

    // $("#mobileNavButton").click(function(){
    // $("#mobileNavButton").toggleClass("open");
    // ("#mobileNavButton".hasClass("open")).alert('open');
    // })

    $("#mobileNavButton").click(() => {
      $("#mobileMenu").toggleClass("closed-menu");
  });
  }

 
  //Fire it when the page first loads:
  alterClass();
  navScroll();
  toggleMobileNav();
});
