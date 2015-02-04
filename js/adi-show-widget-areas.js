function swanToggle() {

    var toggleLink = $('li.show-widget-area-toggle a');
    var curToggleVal = toggleLink.html();

    if(curToggleVal == '+ swan') {
        $(toggleLink).html('- swan');
    } else {
        $(toggleLink).html('+ swan');
    }

    $('.adi-widget-area-name').slideToggle();
}

(function($) {
        $('div.adi-widget-area-name').hide();

        $("li.show-widget-area-toggle a").on("click", function(){
            swanToggle($);
        });
})(jQuery);