jQuery(document).ready(function ($) {
    //alert('hallo');
    
    $('.conditions header, .panel header').each(function(){
        $(this).click(function(){
            $(this).toggleClass('open');
        });
    });
    
    //external links
      $('a').filter(function() {
	    return this.hostname && this.hostname !== location.hostname;
	  }).attr("target","_blank");
});