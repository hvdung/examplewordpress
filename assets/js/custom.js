
$=jQuery;
$(function() {
    $('.tab-item').matchHeight(
        {
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        }
    );

    var stickyHeaderTop = $('.header-main').offset().top;
    $(window).scroll(function(){
        if( $(window).scrollTop() > stickyHeaderTop ) {
            $('.header-main').addClass("sticky");
        } else {
            $('.header-main').removeClass("sticky");
        }
    });


    //Slider gallery product.
    $('.product-gallery .main-slider').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        autoHeight:true,

        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,

        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:1,
            },
        }
    })
    $('.product-gallery .nav-slider').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
    })

    
});


