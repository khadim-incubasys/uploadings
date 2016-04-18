$(document).ready(function () {

    /*============================
    ||  Click to Animate
    ==============================*/
    var headerHeight = jQuery('header').outerHeight() + 150;
    //alert(headerHeight);
    jQuery('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
        $target = $(target);

        jQuery('html, body').stop().animate( {
            'scrollTop': $target.offset().top-headerHeight
        }, 900, 'swing', function () {
            window.location.hash = target;
        } );
    } );


    /******************************
     *  Fixed Main Menu  
     ***************************/
    $(".menu").on("click", function (e) {
        e.preventDefault();
        $(".main-menu").addClass("active");
    });
    $(".close-menu").on("click", function (e) {
        e.preventDefault();
        $(".main-menu").removeClass("active");
    });
    $(".menu-div ul > li > ul > li > a").on("click", function (e) {
        $(".main-menu").removeClass("active");
    });
    var headHeight = jQuery('header.darkHeader').outerHeight() + 270;
    //alert(headHeight);
    jQuery('.menu-div ul > li > ul > li > a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
        $target = $(target);

        jQuery('html, body').stop().animate( {
            'scrollTop': $target.offset().top-headHeight
        }, 900, 'swing', function () {
            window.location.hash = target;
        } );
    } );

    /******************************
     *  Fixed Header  
     ***************************/
    var header = $("header");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.addClass("darkHeader");
        } else {
            header.removeClass("darkHeader");
        }
    });

    /******************************
     *  Scroll Down
     ***************************/
    var h = $("header").outerHeight();
    //console.log(h);
    var g = h + 50;
    $(".scroll-down").click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $("#scroll").offset().top - g},
        'slow');
    });

     $('#map_canvas').mapit();

    /******************************
     *  Testimonial 
     ***************************/

    $('.my-slider').unslider({
        autoplay: false,
        arrows: false
    });

    /************************
     *  Conter
     *************************/
    //var oTop = $('#number').offset().top - window.innerHeight;
    /*var oTop = $('#number').offset().top;
    var counter = 1;
    $(window).scroll(function () {
        var pTop = $('body').scrollTop() + window.innerHeight;
        if (pTop > oTop) {
            console.log("counter start");
            if (counter === 1) {
                start_count();
                counter++;
            }
        } else {
            counter = 1;
        }
    });*/

    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });


    /************************
     *  Blog Slider
     *************************/

    if ($(window).width() > 768) {
        $('.horizon-swiper').horizonSwiper({
            arrows: true,
            showItems: 3
        });
    }
    if($(window).width() < 768 && $(window).width() > 480){
        $('.horizon-swiper').horizonSwiper({
            arrows: true,
            showItems: 2
        });
    }
    if ($(window).width() < 479){
        $('.horizon-swiper').horizonSwiper({
            arrows: true,
            showItems: 1
        });
    }
    


});

function start_count() {
    //Add your code here
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
}

$(window).load(function () {

    /******************************
     *  Portfolio Filter 
     ***************************/

    var $container = $('.portfolio_container');
    $container.isotope({
        filter: '*',
    });

    $('.portfolio_filter a').click(function () {
        $('.portfolio_filter .active').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 500,
                animationEngine: "jquery"
            }
        });
        return false;
    });

    /************************
           Lazy Loading
    *************************/
    function onScrollInit( items, trigger ) {
        items.each( function() {
        var osElement = $(this),
            osAnimationClass = osElement.attr('data-os-animation'),
            osAnimationDelay = osElement.attr('data-os-animation-delay');
          
            osElement.css({
              '-webkit-animation-delay':  osAnimationDelay,
              '-moz-animation-delay':     osAnimationDelay,
              'animation-delay':          osAnimationDelay
            });

            var osTrigger = ( trigger ) ? trigger : osElement;
            
            osTrigger.waypoint(function() {
              osElement.addClass('animated').addClass(osAnimationClass);
              },{
                  triggerOnce: true,
                  offset: '90%'
            });
      });
    }

     onScrollInit( $('.os-animation') );
     onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
});

/*===================================================================================*/
/*  ANIMATIONS ON SCROLL
/*===================================================================================*/

$(document).ready(function() {
    var waypointClass = 'main [class*="col-"]';
    var animationClass = 'fadeInUp';
    var delayTime;
    
    $(waypointClass).waypoint(function() {
        delayTime += 100;
        $(this).delay(delayTime).queue(function(next){
            $(this).toggleClass('animated');
            $(this).toggleClass(animationClass);
            delayTime = 0;
            next();
        });
    },
    {
        offset: '90%',
        triggerOnce: true
    });
});


