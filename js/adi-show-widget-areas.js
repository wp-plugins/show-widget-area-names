jQuery(document).ready(function() {

	jQuery('.adi-widget-area-name').hide();

    jQuery("li.show-widget-area-toggle a").click(function(){
        var toggleLink = jQuery('li.show-widget-area-toggle a');
        var curToggleVal = toggleLink.html();

        if(curToggleVal == '+ swan') {
            jQuery(toggleLink).html('- swan');
        } else {
            jQuery(toggleLink).html('+ swan');
        }

    	jQuery('.adi-widget-area-name').slideToggle();

    });

});