/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init nav
4. Init Date Picker


******************************/

$(document).ready(function () {
  "use strict";

  /* 

	1. Vars and Inits

	*/

  var header = $(".header");

  setHeader();

  $(window).on("resize", function () {
    setHeader();

    setTimeout(function () {
      $(window).trigger("resize.px.parallax");
    }, 375);
  });

  $(document).on("scroll", function () {
    setHeader();
  });

  initnav();
  initDatePicker();

  /* 

	2. Set Header

	*/

  function setHeader() {
    if ($(window).scrollTop() > 91) {
      header.addClass("scrolled");
    } else {
      header.removeClass("scrolled");
    }
  }

  /* 

	3. Init nav

	*/

  function initnav() {
    if ($(".nav").length) {
      var nav = $(".nav");
      var hamburger = $(".hamburger");
      var close = $(".nav_close");

      hamburger.on("click", function () {
        nav.toggleClass("active");
      });

      close.on("click", function () {
        nav.toggleClass("active");
      });
    }
  }

  /* 

	4. Init Date Picker

	*/

  function initDatePicker() {
    if ($(".datepicker").length) {
      var datePickers = $(".datepicker");
      datePickers.each(function () {
        var dp = $(this);
        // Uncomment to use date as a placeholder
        // var date = new Date();
        // var dateM = date.getMonth() + 1;
        // var dateD = date.getDate();
        // var dateY = date.getFullYear();
        // var dateFinal = dateM + '/' + dateD + '/' + dateY;
        var placeholder = dp.data("placeholder");
        dp.val(placeholder);
        dp.datepicker();
      });
    }
  }
});
