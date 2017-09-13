/********************************************************
 Boka
 ********************************************************/

var $ = jQuery;
$(function(){

    /*******************************************************************************
     * Smooth Scroll
     *******************************************************************************/
    $.srSmoothscroll({
        step: 95,
        speed: 600,
        ease: 'swing',
        target: jQuery('body'),
        container: jQuery(window)
    });

    /*******************************************************************************
     * Mega Menu *
     *******************************************************************************/

    window.prettyPrint && prettyPrint();
    $(document).on('click', '.primary-menu .xs-dropdown-menu', function(e) {
        e.stopPropagation();
    });
    $('.primary-menu .xs-dropdown-menu').parent().hover(function() {
        var menu = $(this).find("ul");
        var menupos = $(menu).offset();
        if (menupos.left + menu.width() > $(window).width()) {
            var newpos = -$(menu).width();
            menu.css({ left: newpos });
        }
    });
    $(document).on('click', '.primary-menu .xs-angle-down', function(e) {
        e.preventDefault();
        $(this).parents('.xs-dropdown').find('.xs-dropdown-menu').toggleClass('active');
    });

    /***************************************
     * Masonry *
     ***************************************/
    if ( $(".masonry").length ){
        var $masonry = $('.masonry .masonry-wrap');
        $masonry.imagesLoaded( function() {
            $masonry.masonry({
                itemSelector: '.hentry',
                //isAnimated: true,
                isFitWidth: true,
                animationOptions: {
                    duration: 500,
                    easing: 'linear'
                }
            });
        });
    }

    $(".textwidget").fitVids();

});