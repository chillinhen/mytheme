jQuery(document).ready(function ($) {
    // run test on initial page load
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
    //some tweaks for smaller windowa

    function checkSize() {
        if ($(".post_content").css("float") == "none") {
                $('body:not(.kontakt):not(.impressum) .post_content br').remove();
            }
    }


    //Navbar tweaks
    $('.navbar-toggle').click(function () {
        $('nav.nav').toggleClass('open').removeClass('closed');

    });
    $('li.close-menu').click(function () {
        $('nav.nav').toggleClass('closed').removeClass('open');
    });
    $('.conditions header, .panel header span').each(function () {
        $(this).click(function () {
            $(this).toggleClass('open');
        });
    });
    // Tweaking the Headlines
    var headlineHeight = $('.page-title').height();
    if (headlineHeight <= 34){
        $('article > section > .container').addClass('one-line');
    } else {
       $('article > section > .container').addClass('two-line');
    }

    //external links
    $('a').filter(function () {
        return this.hostname && this.hostname !== location.hostname;
    }).attr("target", "_blank");

    //no Modernizer
    if (!Modernizr.svg) {
        $("img.logo-img").attr("src", "../img/logo.png");
    }

});
