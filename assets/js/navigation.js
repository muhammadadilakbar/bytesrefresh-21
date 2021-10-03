function bytesrefreshMainNavigation()
{
    let siteNavigation = document.getElementById( 'site-navigation' );
    let menuToggle = document.getElementsByClassName( 'menu-toggle' );
    menuToggle[0].addEventListener( 'click', function( event ) {
        siteNavigation.classList.toggle( 'toggled-on' );
        bytesrefreshToggleAriaExpanded( menuToggle[0] );
    } );

}

/**
 * Toggle an attribute's value
 *
 * @param {Element} el - The element.
 * 
 * Adapted from Twenty Twenty One theme
 */
 function bytesrefreshToggleAriaExpanded( el ) {
	if ( 'true' !== el.getAttribute( 'aria-expanded' ) )
    {
		el.setAttribute( 'aria-expanded', 'true' );
	}
    else
    {
		el.setAttribute( 'aria-expanded', 'false' );
	}
}

window.addEventListener( 'load', bytesrefreshMainNavigation );