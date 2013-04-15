jQuery(document).ready(function() {
// Handler for .ready() called.

	jQuery('li.show-widget-area-toggle a').toggle(
		    function() {
		    	jQuery(this).html('+ swan');
		    }, 
		    function() {
		    	jQuery(this).html('- swan');
		});
	
jQuery("li.show-widget-area-toggle a").click(function(){
	jQuery('.adi-widget-area-name').slideToggle();
});

});