jQuery(document).ready(function ($) {
    //alert('hallo');

    $('.conditions header, .panel header span').each(function () {
        $(this).click(function () {
            $(this).toggleClass('open');
//            $(this).parent().parent().parent().siblings().removeClass('open');
        });
    });

    //external links
//    $('a').filter(function () {
//        return this.hostname && this.hostname !== location.hostname;
//    }).attr("target", "_blank");

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