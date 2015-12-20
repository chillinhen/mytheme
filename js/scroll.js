jQuery(document).ready(function () {

    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.screen-layout.scroll-to-top').fadeIn();
        } else {
            jQuery('.screen-layout.scroll-to-top').fadeOut();
        }
    });

    //Click event to scroll to top
    jQuery('.scroll-to-top').click(function () {
        jQuery('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});