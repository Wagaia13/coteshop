var $win = $(window);
var winHeight = $win.height();
$(window).scroll(function () {
    if ($(window).scrollTop() > winHeight) {
    $('#header').addClass('header-sticky');
    
    $(".header-classic").css("display", "none");
    $(".header-stk").css("display", "block");
    } else {
    /*$('#header').removeClass('sticky animate__animated animate__fadeInDown');*/
    $('#header').removeClass('header-sticky');
    $(".header-classic").css("display", "block");
    $(".header-stk").css("display", "none");
    }
}).on("resize", function(){ // If the user resizes the window
    winHeight = $(this).height(); // you'll need the new height value
});