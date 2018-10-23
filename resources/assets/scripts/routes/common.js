export default {
  init() {
    // JavaScript to be fired on all pages
    var windowWidth = $(window).width();

    // Mobile header navigation - ensure only one header widget shows at a time
    if ( windowWidth < 768 ) {
      $('.banner .collapse').collapse('hide');
      $('.banner .btn').click( function(){
        $('.banner .collapse').collapse('hide');
      });
    }

    //mobile back to top of page
    $('.backtotop').click(function() {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });

    //show/hide the primary widgets on mobile devices
    $('.sidebar .widget-content').hide();
    $('.sidebar .widget h3').click(function(){
      $(this).siblings().toggle('show');
    });

    //show all the product tabs on single product pages
    if ( windowWidth < 768 ) {
      $('.panel').show();
    }

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
