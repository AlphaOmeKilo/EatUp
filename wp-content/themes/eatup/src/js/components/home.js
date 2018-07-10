eu.home = eu.home || {};

eu.home.init = function() {
  
  /**
  *Fan Photos out if in view
  */
  $fanPhotos = function() {
    $photosLength = $('.interactive-photo').length;

    $('.interactive-photo').each(function(index, element) {
      
      $current = index+1;
      
      if ($current % 3 == 0) {
        $(this).css({transform : "rotate(2deg)"});
      } else if($current % 2 == 0) {
        $(this).css({transform : "rotate(-15deg)", margin : "36px 0 0 -40px"});
      } else {
        $(this).css({transform : "rotate(20deg)", margin : "0 0 0 72px"});
      }
      
    });
  }
  
  /**
  * Collect Photos in if in not view
  */
  $collectPhotos = function() {
    $('.interactive-photo').each(function(index, element) {
      $(this).css({transform : "rotate(0)", margin: "0"});
    });
  }

  $('.interactive-photo').each(function(index, element) {
    $(this).css({"z-index": index});
  });
  
  $('.interactive-photo').on('click tap', function() {
    $(this).css({"z-index": 0});

    $('.interactive-photo').not(this).reverse().each(function(index, element) {
      $zIndex = $(this).css('zIndex'); 
      $zIndex++;
      $(this).css({"z-index": $zIndex});
    });
  });
  
  $(window).on('scroll', function() {
    if (!isDesktop()) {
      $fanPhotos();
    } else {
      if ($('.home-what-do-you-do-content .copy-container .heading').visible()) {
        $fanPhotos();
      } else {
        $collectPhotos();
      }
    }
    
  });
  
  
  //Play video on click
  $('#watch-vid-btn').on('click tap', function(e) {
    e.preventDefault();
    $('video').get(0).play();
    $('.video-overlay').addClass('active');
    
    $duration = $('video').get(0).duration;
    
    $updateVideoProgress = setInterval(function() {
      $currentTime = $('video').get(0).currentTime;
      $progress =  ($currentTime / $duration) * 100;
      $('.progress-value').width($progress + "%");
      
      if ($progress == 100) {
        clearInterval($updateVideoProgress);
      }
    },200);
    
  });
  
  $('.video-overlay .close').on('click tap', function(e) {
    e.preventDefault();
    
    $('.video-overlay').removeClass('active');
    $('video').get(0).pause();
    clearInterval($updateVideoProgress);
    
    if($('video').get(0).currentTime == 100) {
      $('video').get(0).currentTime(0);
    }
  });
  
  $('.progress-bar').on('click tap', function(e) {
    offset = $(this).offset();
    relativeX = (e.pageX - offset.left);
    
    duration = $('video').get(0).duration;
    
    jumpToTime = (relativeX / $('.progress-bar').width()) * 100;
    $('video').get(0).currentTime = (duration / 100) * jumpToTime -6 ;
    clearInterval($updateVideoProgress);
    $('#watch-vid-btn').click();
  });
  
  $('.pause').on('click tap', function() {
    $('video').get(0).pause();
    $('.play').addClass('active');
    $(this).removeClass('active');
  });
  
  $('.play').on('click tap', function() {
    $('video').get(0).play();
    $('.pause').addClass('active');
    $(this).removeClass('active');
  });
  
  $('video').on('click tap', function() {
    $('.pause').toggleClass('active');
    $('.play').toggleClass('active');
    if($('video').get(0).paused) {
      $('video').get(0).play();
    } else {
      $('video').get(0).pause();
    }
  });
  
  $('.friends-logo-container .logo:last-of-type').add('.sponsors-logos .sponsor:last-of-type').add('.food-sponsor-container .food-sponsor:last-of-type').on('mouseenter', function() {
    $(this).hide();
//    $(this).attr("src", theme_url + "img/home/hoverrecipe.png");
//    $(this).attr("href", "http://www.tablelandsspreads.com.au/catalogue/");
    $('.friends-logo-container').append('<a href="http://www.tablelandsspreads.com.au/catalogue/lunch-snack-ideas/" class="logo-link" target="_blank">  <img src="' + theme_url + 'img/home/hoverrecipe.png" class="logo"></a>');
    
    $('.sponsors-logos').append('<a href="http://www.tablelandsspreads.com.au/catalogue/lunch-snack-ideas/" class="sponsor-link" target="_blank">  <img src="' + theme_url + 'img/home/hoverrecipe.png" class="logo"></a>');
    
    $('.food-sponsor-container').append('<a href="http://www.tablelandsspreads.com.au/catalogue/lunch-snack-ideas/" class="logo-link" target="_blank">  <img src="' + theme_url + 'img/home/hoverrecipe.png" class="food-sponsor"></a>');
    
    setLogoLinkAction();
  });
  
  
  setLogoLinkAction = function() {
    $('.friends-logo-container .logo-link').on('mouseleave', function() {
      $(this).hide();
      $('.friends-logo-container .logo:last-of-type').show();
    });
    
    $('.sponsors-logos .sponsor-link').on('mouseleave', function() {
      $(this).hide();
      $('.sponsors-logos .sponsor:last-of-type').show();
    });
    
    $('.food-sponsor-container .logo-link').on('mouseleave', function() {
      $(this).hide();
      $('.food-sponsor-container .food-sponsor:last-of-type').show();
    });
  }
}

jQuery.fn.reverse = [].reverse;
