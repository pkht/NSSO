/**
 * I've had to use jQuery. here instead of $. as the $. seems to conflict with something
 * in the flickr-gallery plugin.
 */

jQuery(document).ready( function() {

    //Set up Dropdown nav

    jQuery('div.menu ul li').hover(
		function () {
			//show its submenu
			jQuery('ul', this).slideDown(100);
            jQuery('ul li', this).mouseover( function() {
                jQuery(this).css( 'background-color', '#333333' );
            });
            jQuery(this).css( 'background-color', '#01aef0' );

		},
		function () {
			//hide its submenu
			jQuery('ul', this).slideUp(100);
            jQuery(this).css( 'background-color', 'transparent' );
		}
	);

    //A bit cheeky this, but, set the sidebars hieght to be the height of the content so it looks nice
    jQuery('#sidebar').height( function() {
        if( jQuery('#sidebar').height() < jQuery('#content').height() )
            return jQuery('#content').height() - 20;
        else
            return jQuery('#sidebar').height()
    });


    //Set up onclick event for search form
    jQuery('#s').click( function() {
        if( jQuery(this).val() == '' || jQuery(this).val() == 'Search...' )
            jQuery(this).val('');
    });
    jQuery('#s').blur( function() {
        if( jQuery(this).val() == '' )
            jQuery(this).val('Search...')
    });

    //Set up the links for


});