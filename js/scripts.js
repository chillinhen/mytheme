jQuery(document).ready(function ($) {
    //alert('hallo');
     $('.navbar-toggle').click(function(){
        $('nav.nav').toggleClass('open').removeClass('closed');
        
    });
    $('li.close-menu').click(function(){
        $('nav.nav').toggleClass('closed').removeClass('open');
    });
    $('.conditions header, .panel header span').each(function () {
        $(this).click(function () {
            $(this).toggleClass('open');
        });
    });

    //external links
    $('a').filter(function () {
        return this.hostname && this.hostname !== location.hostname;
    }).attr("target", "_blank");
    
    //no Modernizer
    if (!Modernizr.svg) {
        $("img.logo-img").attr("src", "../img/logo.png");
    }

});