(function($) {
$(document).ready(function() {

// Start hidden external links for SEO

$ ('.hidden-link').click(function(){window.open($(this).data('link')); return false;});

// End hidden external links for SEO

}); //document.ready

})( jQuery );