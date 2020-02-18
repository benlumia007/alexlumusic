/*
============================================================================================================================
silverquantum - navigation.js
============================================================================================================================
This is the most generic template file in a WordPress theme and is one of required files to hide and show the primary 
navigation for the Primary Navigation in different resolution and other features.

@package        silverquantum WordPress Theme
@copyright      Copyright (C) 2017-2018. Benjamin Lu
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://benjlu.com/)
============================================================================================================================
*/

/*
============================================================================================================================
Table of Content
============================================================================================================================
 1.0 - Navigation (jQuery)
============================================================================================================================
*/

/*
============================================================================================================================
 1.0 - Navigation (jQuery)
============================================================================================================================
*/
( function( $ ) {
	$( '.primary-navigation a' ).click( function( e ){
		if ( this.hash !== '' ) {
			e.preventDefault();

			const hash = this.hash;

			$( 'html, body' ).animate({
				scrollTop: $(hash).offset().top
			}, 1000, function() {
				window.location.hash = hash;
			});
		}
	});
} )( jQuery );