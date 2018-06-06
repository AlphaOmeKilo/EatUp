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
    if ($('#interactive-photos').visible()) {
      $fanPhotos();
    } else {
      $collectPhotos();
    }
  });
  
}

jQuery.fn.reverse = [].reverse;
