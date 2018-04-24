$(function() {
"use strict";

    function footerToggle(){
    if ($(window).width() < 991)
    {
        $(".footer .toggle_div").remove();
        $(".footer-title").append( "<a class='toggle_div'>&nbsp;</a>" );
        $(".footer-title").addClass('toggle');
        $(".footer-title").addClass('active');
        $(".footer .toggle_div").on("click",function(){
            $(this).parent().toggleClass('active').parent().find('ul').slideToggle('slow');
        });
    }else{
        $(".footer-title").parent().find('ul').removeAttr('style');
        $(".footer-title").removeClass('active');
        $(".footer-title").removeClass('toggle');
        $(".footer .toggle_div").remove();
    }
}

function owl_carousel(){
    $('.main-banner').owlCarousel({
        autoplay:false,
        responsiveClass:true,
        dots:true,
        items : 10, //10 items above 1000px browser width
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:false,
            }
        }
    });

    $('.thuong-hieu').owlCarousel({
        autoplay:false,
        responsiveClass:true,
        items : 6, 
        responsive:{
            0:{
                items:2,
                nav:false
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
            },
            1200:{
                items:6,
                nav:true,
            }
        }
    });
}

    $(document).ready(function(){  
        footerToggle();
        owl_carousel ();
    });

    $(window).on("resize", function(){
        footerToggle();
    })
});