/**
 * @fileOverview BALT - STUDIOHANSRAJ 2014 Listing
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a>
 * @version 1.0
 */

// declare STUDIOHANSRAJ in case it has not been declared yet
window.STUDIOHANSRAJ = window.STUDIOHANSRAJ || {};

/**
 * @name STUDIOHANSRAJ.Listing
 * @namespace The public namespace and api for the STUDIOHANSRAJ Listing functionality.
 * @description The public namespace and api for the STUDIOHANSRAJ Listing functionality. 
 * @requires STUDIOHANSRAJ
 */
STUDIOHANSRAJ.Listing = (function(STUDIOHANSRAJ, window, undefined){
	
	var config = {
		initialized: false
	}, 
	totalImages = $('#listing ul li img').length,
	callback,
	loaded = 0,
	$listing = $('#listing ul'),
	$listingIMGS = $('#listing ul img'),

	_imageOnloadHandler = function ( target ) {
		loaded++;
		target.addClass('loaded');
		if ( loaded == totalImages ) {
			callback();
			// fade in
			$listing.removeClass('hide');
		}
	},

	/**
	 * @name STUDIOHANSRAJ.Listing-_initialize
	 * @exports STUDIOHANSRAJ.Listing-_initialize as STUDIOHANSRAJ.Listing.initialize
	 * @function
	 * @description
	 */
	_initialize = function( cb ) {
		console.log ( 'STUDIOHANSRAJ.Listing.initialize ' );

		callback = cb;

		var scope = this;

		$('#listing ul li img').each( function() {
			if ( !$(this).hasClass( 'loaded' ) ) {
				// load via data-src attribute
				// $(this).attr('src', $(this).data('src') );
				// load handlers
				if ( $(this)[0].complete ) {
					_imageOnloadHandler( $(this) );
				} else {
					$(this).load( function() {
						scope.imageOnloadHandler( $(this) );
					});
				}
			}
		});

		// $listing.width( widthAccumulator + 10 );
	};

	// public methods for this class
	return {
		initialize: _initialize,
		imageOnloadHandler: _imageOnloadHandler
	};

}(STUDIOHANSRAJ, window, undefined));