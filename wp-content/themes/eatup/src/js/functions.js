////////////

// theme specific

// ...

////////////

// util

function isMobile() {
  return eu.globals.windowWidth < 768;
}

function isTablet() {
  return eu.globals.windowWidth < 1024;
}

function isDesktop() {
  return eu.globals.windowWidth > 1023;
}

function isDefined(obj) {
  return typeof obj !== "undefined" && obj != null;
}

function isInScrolledView(elem) {
  var docViewTop = $(document).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function shuffleArray(array) {
  for (var i = array.length - 1; i > 0; i--) {
    var j = Math.floor(Math.random() * (i + 1));
    var temp = array[i];
    array[i] = array[j];
    array[j] = temp;
  }

  return array;
}

function randomInt(bound) {
  return Math.floor(Math.random() * bound);
}

function enableSmoothScroll() {
  $('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if ( location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
  });
}
