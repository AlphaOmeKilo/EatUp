var eu = eu || {};

(function() {
  'use strict';

  //

  eu.globals = {};

  eu.globals.baseUrl = window.location.href;
  if (eu.globals.baseUrl.substr(-1) === "/") {
    eu.globals.baseUrl = eu.globals.baseUrl.replace(/\/+$/, "");
  }

  eu.globals.scrollingDown = false;
  eu.globals.atBottom = false;
  eu.globals.scrollTop = 0;

  //
  // ready

  $(document).ready(function() {
    eu.globals.windowHeight = $(window).height();
    eu.globals.windowWidth = $(window).width();
  });

  //
  // load

  $(window).on("load resize", function() {
    eu.globals.windowHeight = $(window).height();
    eu.globals.windowWidth = $(window).width();
  });

  //
  // scroll

  $(window).on("scroll", function() {
    var scrollTop = $(document).scrollTop();

    eu.globals.scrollDiff = scrollTop - eu.globals.scrollTop;
    eu.globals.scrollingDown = eu.globals.scrollDiff > 0;
    eu.globals.scrollTop = scrollTop;

    if (eu.globals.scrollTop >= $(document).height() - eu.globals.windowHeight) {
      eu.globals.atBottom = true;
    } else {
      eu.globals.atBottom = false;
    }
  });

  eu.init = function() {
    eu.header.init();
    eu.home.init();
    eu.form.init();
    eu.media.init();
    eu.thanks.init();
    eu.hand.init();
    enableSmoothScroll();
  }

  jQuery(function($) {
    eu.init();
  });
})();
