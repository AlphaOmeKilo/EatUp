eu.thanks = eu.thanks || {};

eu.thanks.init = function() {
  $count = 1;
  
  $(window).on('scroll resize', function() {
    
    if($count < 26) {
      $lastImage = $('.sanga-container img:nth-of-type('+ $count + ')');
      
      if($count == 3) {
        $('.sanga-words:nth-of-type(1)').addClass('active');
      }
      
      if($count == 9) {
        $('.sanga-words:nth-of-type(2)').addClass('active');
      }
      
      if($count == 15) {
        $('.sanga-words:nth-of-type(3)').addClass('active');
      }
      
      if($count == 21) {
        $('.sanga-words:nth-of-type(4)').addClass('active');
      }
    
      if($lastImage.visible()) {
        
        $lastImage.clone().appendTo($('.sanga-container'));
        $count++;
      }
    }
    
  });
  
}
