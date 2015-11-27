jQuery(document).ready(function ($) {
    //alert('hallo');

    $('.conditions header, .panel header').each(function () {
        $(this).click(function () {
            $(this).toggleClass('open');
        });
    });
    
    ///active links
    $('.header nav a').click(function(){
        $(this).parent('li').addClass('active');
        $(this).parent('li').siblings().removeClass('active');
    });

    //external links
    $('a').filter(function () {
        return this.hostname && this.hostname !== location.hostname;
    }).attr("target", "_blank");

    //scroll-to-top
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 800);
                return false;
            }
        }
    });
});
jQuery(document).ready(function () {

    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scroll-to-top').fadeIn();
        } else {
            jQuery('.scroll-to-top').fadeOut();
        }
    });

    //Click event to scroll to top
    jQuery('.scroll-to-top').click(function () {
        jQuery('html, body').animate({scrollTop: 0}, 800);
        return false;
    });


});