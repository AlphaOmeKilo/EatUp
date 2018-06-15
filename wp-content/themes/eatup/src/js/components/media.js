eu.media = eu.media || {};

eu.media.init = function() {
  
  $('.see-more').on('click', function(e){
    e.preventDefault();

    var link = $(this).children('a').attr('href');
    
    $('.see-more').html('<span>Loading More Posts...</span>');

    $.get(link, function(data) {
      var post = $(".post-container .post ", data);
      
      $('.post-container').append(post);
      
      initShade();
      setPostHeight();
    });

    $('.see-more').load(link+' .see-more a');
    
    var newlink = $(this).children('a').attr('href');
    
    if (!isDefined(newlink)) {
      $('.see-more').hide();
    }
  });
  
  function initShade() {
    $('.post').on('mouseenter', function() {
      $('.post').addClass('shade');
      $(this).removeClass('shade');
    });

    $('.post').on('mouseleave', function() {
      $('.post').removeClass('shade');
    });
  }
  
  
  function setPostHeight() {
    if(eu.globals.windowWidth > 1440) {
      $('.post').height('288px');
    } else if(isDesktop()) {
      $('.post').height('20vw');
    } else if(isMobile()) {
      $('.post').height('48.88888vw');
    } else {
      $('.post').height('24vw');
    }
  }
  
  
  $(window).on('resize', function() {
    setPostHeight();
  })
  
  initShade();
  setPostHeight();
}