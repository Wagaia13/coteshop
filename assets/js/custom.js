(function ($) {
  function resp() {
    if (window.matchMedia("(min-width: 768px)").matches) {
      $("ul.navbar-nav li.dropdown").hover(
        function () {
          $(this)
            .addClass("open")
            .find(".dropdown-menu")
            .stop(true, true)
            .delay(200)
            .slideDown();
          $(this)
            .find(".dropdown-toggle")
            .click(function () {
              var href = $(this).attr("href");
              window.location.href = href;
            });
          /*$('.mega-menu .dropdown-menu').each(function(i){
			    	var top = $(this).closest('.mega-menu').offset().top + $(this).closest('.mega-menu').height();
			    	$(this).css('top', top);
			    });*/
        },
        function () {
          $(this)
            .removeClass("open")
            .find(".dropdown-menu")
            .stop(true, true)
            .delay(200)
            .slideUp();
        }
      );
    } else {
    }
  }
  $(window).resize(function () {
    resp();
  });
  $(document).ready(function () {
   
    $(".navbar-toggler").click(function (event) {
      if ($("body").hasClass("open_menu")) {
        $("body").removeClass("open_menu");
      } else {
        $("body").addClass("open_menu");
      }
    });
    $(".menutop_mob #closebtn").click(function() {
      console.log('clicked');
      $('.menulist').toggleClass('show_');
    });
    $(".dropdown-close").click(function (event) {
      event.preventDefault();
      $(this).parent().parent().children("a").click();
    });
    
      /*if($(window).scrollTop() > 600 ){
				$('#to_top').addClass('afficher');
    		}else{
    			$('#to_top').removeClass('afficher');
    		}*/
    
    $("#to_top").click(function () {
      $("html, body").animate({ scrollTop: 0 }, 500);
    });
    $(".select2").select2({
      minimumResultsForSearch: Infinity,
    });
    resp();
  });
})(jQuery);
/*sliders*/
$(document).ready(function () {
  var lasty = $(".hero .hero-slide:last-child");
  $count_item = $(".hero-slide").length;
  $(".hero-slide").each(function (i) {
    var indexitem = i + 1;
    console.log(
      $(".hero-slide").eq(indexitem).find("img").attr("src"),
      i,
      "test23"
    );
    if ($(".hero-slide").eq(indexitem).length && i < $count_item) {
      var appen =
        '<img class="img-responsive cover" src="' +
        $(".hero-slide").eq(indexitem).find("img").attr("src") +
        '">';
      var appenh =
        '<div class="firssh">' +
        $(".hero-slide").eq(indexitem).find("h1").text() +
        "</div>";
      var di = $('<div class="copimage"></div>');
      di.append(appen);
      $(this).append(appenh);
      $(this).append(di);
    } else {
      var appen =
        '<img class="img-responsive cover" src="' +
        $(".hero-slide").eq(0).find("img").attr("src") +
        '">';
      var appenh =
        '<span class="firssh">' +
        $(".hero-slide").eq(0).find("h1").html() +
        "</span>";
      var di = $('<div class="copimage"></div>');
      di.append(appen);
      $(this).append(appenh);
      $(this).append(di);
    }
  });
});
jQuery(document).ready(function ($) {
  $(".hero")
    .slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: !0,
      cssEase: "linear",
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
	  pauseOnFocus: false,
	  pauseOnHover: false,
      autoplaySpeed: 8000,
      draggable: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 768,
          settings: {
            draggable: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            draggable: true,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            draggable: true,
            slidesToScroll: 1,
          },
        },
      ],
    })
    .on("afterChange init", function (event, slick, direction) {
      // console.log('afterChange/init', event, slick, slick.$slides);
      // remove all prev/next
      slick.$slides.removeClass("prevSlide").removeClass("nextSlide");
      //slick.$slides.find('.slide-content').fadeIn(300);
      // find current slide
      for (var i = 0; i < slick.$slides.length; i++) {
        var $slide = $(slick.$slides[i]);
        if ($slide.hasClass("slick-current")) {
          // update DOM siblings
          $slide.prev().addClass("prevSlide");
          $slide.next().addClass("nextSlide");
          // $slide.next().find('.hero-slide').css('width','30%');
          // $slide.next().find('.header-content').remove();
          //$slide.next().clone().insertAfter($slide);
          break;
        }
      }
    })
    .on("beforeChange", function (event, slick) {
      // optional, but cleaner maybe
      // remove all prev/next
      //slick.$slides.find('.slide-content').fadeOut(300);
      slick.$slides.removeClass("prevSlide").removeClass("nextSlide");
    });
});

jQuery(document).ready(function () {
  $('.owl-home-mobile').owlCarousel({
    loop:true,
    margin:0,
    dots: true,
    items: 1,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    animateIn: true,
    autoplay:true,
    autoplayTimeout: 5000,
    fade:true,
  
    });
  $(".heromob")
    .slick({
      dots: true,
      infinite: true,
      speed: 300,
      cssEase: "linear",
      slidesToShow: 1,
      slidesToScroll: 1,
      vertical: true,
      autoplay: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      autoplaySpeed: 5000,
      draggable: false,
      arrows: false,
      centerPadding: "100px",
      verticalSwiping: true
    })
});
jQuery(document).ready(function () {
  var curr = jQuery(".current-slide").next();
  if (!jQuery(".slick-active").next().hasClass("nextSlide")) {
    jQuery(".slick-active").next().addClass("nextSlide");
  }
});
/*end sliders*/
/*Animation effect on coteshop text & images*/
(function ($) {
  $.fn.visible = function (partial) {
    var $t = $(this),
      $w = $(window),
      viewTop = $w.scrollTop(),
      viewBottom = viewTop + $w.height(),
      _top = $t.offset().top,
      _bottom = _top + $t.height(),
      compareTop = partial === true ? _bottom : _top,
      compareBottom = partial === true ? _top : _bottom;

    return compareBottom <= viewBottom && compareTop >= viewTop;
  };
})(jQuery);

var win = $(window);

var allMods = $(".homme-animate");
var womMods = $(".femme-animate");
var enfMods = $(".enfant-animate");

allMods.each(function (i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
  }
});
womMods.each(function (i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
  }
});
enfMods.each(function (i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
  }
});

win.scroll(function (event) {
  allMods.each(function (i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("come-in");
    }
  });
  womMods.each(function (i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("come-out");
    }
  });
  enfMods.each(function (i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("come-outy");
    }
  });
});
/*Animation effect on coteshop text & images*/

var images = document.querySelectorAll('.banner-footer-img');
new simpleParallax(images, {

    customWrapper: '.banner-footer',
    delay: .1,
    transition: 'cubic-bezier(9,0,1,9)',
    scale: 1.56,
});
/*Parallax on image footer*/
$(document).ready(function () {
  if (window.matchMedia("(max-width: 767px)").matches) {
    $(".banner-footer.parallax-window").removeAttr("data-parallax");
    $(".banner-footer.parallax-window").removeAttr("data-image-src");
  }
  listenToggler();
});
// $(document).ready(function() {
// 		  //parallax scroll
// 		  if (window.matchMedia("(max-width: 600px)").matches){
// 		  	$('.banner-footer-img').removeClass('parallax_scroll');
// 		  	$('.inner-banner-footer').removeClass('hideme');
// 		  	// $('.come-in').removeClass('come-in');
// 		  	$('.homme-animate').removeClass('homme-animate');
// 		  	// $('.come-outy').removeClass('come-outy');
// 		  	$('.enfant-animate').removeClass('enfant-animate');
// 		  	// $('.come-out').removeClass('come-out');
// 		  	$('.femme-animate').removeClass('femme-animate');
// 		  }
// 		  $(window).on("load scroll", function() {
// 		    var parallaxElement = $(".parallax_scroll"),
// 		      parallaxQuantity = parallaxElement.length;
// 		    window.requestAnimationFrame(function() {
// 		      for (var i = 0; i < parallaxQuantity; i++) {
// 		        var currentElement = parallaxElement.eq(i),
// 		          windowTop = $(window).scrollTop(),
// 		          elementTop = currentElement.offset().top,
// 		          elementHeight = currentElement.height(),
// 		          viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
// 		          scrolled = windowTop - elementTop + viewPortHeight;
// 		        currentElement.css({
// 		          transform: "translate3d(0," + scrolled * -0.15 + "px, 0)"
// 		        });
// 		      }
// 		    });
// 		  });
// });
// $(document).on('scroll', function(){
//       var scrollPos = $(this).scrollTop();
//         $('.parallax_scroll').css({
//           'top' : (scrollPos/2)+'px',
//           'opacity' : 1-(scrollPos/700)
//         });
// });
$(document).ready(function () {
  /* Every time the window is scrolled ... */
  $(window).scroll(function () {
    /* Check the location of each desired element */
    $(".hideme").each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      /* If the object is completely visible in the window, fade it it */
      if (bottom_of_window > bottom_of_object) {
        $(this).animate({ opacity: "1" }, 500);
      }
    });
  });
});

// Cache our vars for the fixed sidebar on scroll
var $sidebar = $(".infos");
// Get & Store the original top of our #sidebar-nav so we can test against it
var sidebarTop = $sidebar.position().top;
// Edit the `- 10` to control when it should disappear when the footer is hit.
var blogHeight = $(".infos").outerHeight() + 160;

// Add the function below to the scroll event
$(window).scroll(fixSidebarOnScroll);

// On window scroll, this fn is called (binded above)
function fixSidebarOnScroll() {
  // Cache our scroll top position (our current scroll position)
  var windowScrollTop = $(window).scrollTop();

  // Add or remove our sticky class on these conditions
  if (windowScrollTop >= blogHeight || windowScrollTop <= sidebarTop) {
    // Remove when the scroll is greater than our #content.OuterHeight()
    // or when our sticky scroll is above the original position of the sidebar
    $sidebar.removeClass("sticky");
  }
  // Scroll is past the original position of sidebar
  else if (windowScrollTop >= sidebarTop) {
    // Otherwise add the sticky if $sidebar doesnt have it already!
    if (!$sidebar.hasClass("sticky")) {
      $sidebar.addClass("sticky");
    }
  }
}

function listenToggler() {
  const body = document.getElementsByTagName("body")[0];

  const overlay_ = document.createElement("div");
  overlay_.classList.add("overlay_");
  overlay_.style.height = document.body.clientHeight + "px";
  const listenOverlayToCloseTarget = function (target) {
    overlay_.addEventListener("click", function (e) {
      e.preventDefault();
      target.removeClass("show_");
      $(".overlay_").length && body.removeChild(overlay_);
    });
  };

  let togglers = $('[data-toggler="_toggler"]');

  if (togglers.length) {
    togglers.each(function () {
      const toggler = $(this);
      const target = $(toggler.attr("data-target"));
      toggler.on("click", function (e) {
        e.preventDefault();
        if (target.hasClass("show_")) {
          if (body.contains(overlay_)) {
            body.removeChild(overlay_);
          }
        } else {
          if (!body.contains(overlay_)) {
            body.appendChild(overlay_);
            listenOverlayToCloseTarget(target);
          }
        }
        target.toggleClass("show_");
      });

      const closeBtn = target[0].querySelector(".close");
      closeBtn &&
        closeBtn.addEventListener("click", function (e) {
          e.preventDefault();
          if (target.hasClass("show_")) {
            if (body.contains(overlay_)) {
              body.removeChild(overlay_);
            }
          }
          target.toggleClass("show_");
        });
    });
  }
}
