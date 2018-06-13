eu.header = eu.header || {};

eu.header.init = function() {
  
  $('.mobile-menu').on('click tap', function() {
    $('.menu-overlay-background').addClass('active');
    $('.menu-overlay').addClass('active');
    $(this).removeClass('active');
    $('.mobile-close').addClass('active');
    $('body').addClass('noScroll');
  });
  
  $('.mobile-close').on('click tap', function() {
    $('.menu-overlay-background').removeClass('active');
    $('.menu-overlay').removeClass('active');
    $(this).removeClass('active');
    $('.mobile-menu').addClass('active');
    $('body').removeClass('noScroll');
  });
  
}
