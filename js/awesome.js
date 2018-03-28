// javascript functions



// ( function( $ ) {
//
//     var wrap = $("#post_name");
//     console.log('Here')
//
//     wrap.on("scroll", function(e) {
//
//       if (this.scrollTop > 500) {
//           console.log('add class')
//         wrap.addClass("fixed-cover");
//       } else {
//           console.log('remove class')
//         wrap.removeClass("fixed-cover");
//       }
//
//     });
//
// } )( jQuery );


(function ($) {
    console.log('Hello')
$(window).scroll(function() {
    if ($(this).scrollTop() > 34){
        console.log('add class')
        $('.post_name').addClass("fixed-cover");
        // $('.navbar-spacer ').addClass("show");
        // $('.section-header').addClass("fixed");
    }
    else{
        console.log('remove class')
        $('.post_name').removeClass("fixed-cover");
        // $('.navbar-spacer').removeClass("show");
        // $('.section-header').removeClass("fixed");
    }
});
$(document).ready(function() {
    // fade in each image individually as it's downloaded
    $('img').load(function() {
        $(this).fadeIn('slow');
    });
});  
})(jQuery);
