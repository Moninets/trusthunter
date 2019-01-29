export default {
  init() {
    // JavaScript to be fired on all pages
    $("#menu-responsive").hide();

    $("#hamburger-toggle").click(function() {
      $(this).toggleClass("th-hamburger__active");
      $("#menu-responsive").toggle();
    });

    // $('#reviews-slider').slick({
    //         dots: true,
    //         prevArrow: '#reviews-slider .button-arrow__left',
    //         nextArrow: '#reviews-slider .button-arrow__right',
    //     });
    // });
    jQuery(document).ready(() => {
      $("#reviews-slider").slick({
        prevArrow: ".button-arrow__left",
        nextArrow: ".button-arrow__right"
      });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  }
};
