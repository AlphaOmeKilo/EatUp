eu.hand = eu.hand || {};

eu.hand.init = function() {
  
  $('.give-us-a-hand-founder video').on('click tap', function() {
    $(this).play();
    
    $('.give-us-a-hand-founder .play').removeClass('active');
  });
}

