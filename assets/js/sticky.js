$(window).scroll(function () {
    if ($(window).scrollTop() > 0) {
        $('#header').addClass('header-sticky');
        
        $(".header-classic").css("display", "none");
        $(".header-stk").css("display", "block");
    } else {
        /*$('#header').removeClass('sticky animate__animated animate__fadeInDown');*/
        $('#header').removeClass('header-sticky');
        $(".header-classic").css("display", "block");
        $(".header-stk").css("display", "none");
    }
});