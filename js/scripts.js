jQuery(document).ready(function ($) {
    //alert('hallo');
    
    $('.conditions header, .panel header').each(function(){
        $(this).click(function(){
            $(this).toggleClass('open');
        });
    });
});