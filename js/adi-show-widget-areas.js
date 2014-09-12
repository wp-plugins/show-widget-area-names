jQuery(document).ready(function() {
// Handler for .ready() called.
	jQuery('.adi-widget-area-name').hide();
	jQuery('li.show-widget-area-toggle a').toggle(
		    function() {
		    	//jQuery(this).html('- swan');
                       jQuery(this).toggleClass('ab-icon-up', 'ab-icon-down'); 
		},
		function() {
                    //jQuery(this).html('+ swan');
                    jQuery(this).toggleClass('ab-icon-up', 'ab-icon-down'); 
	    });
	
jQuery("li.show-widget-area-toggle a").click(function(){
	jQuery('.adi-widget-area-name').slideToggle();
});

});