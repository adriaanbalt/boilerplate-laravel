/**
 * @fileOverview STUDIOHANSRAJ bootstrap JavaScript file
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a> - <a href="http://BALT.us">www.BALT.us</a> 
 * @version 1
 */

/**
 * @name STUDIOHANSRAJ
 * @namespace The global namespace for the STUDIOHANSRAJ website
 * @description The global namespace for the STUDIOHANSRAJ website
 * @requires <a href="http://www.jquery.com">jQuery 1.7.2+</a>
 */
window.STUDIOHANSRAJ = (function(self, window, undefined){
	
	var leftMax, $header, $details, $window, $loader, headerWidth, infoWidth, copyWidth, detailsWidth,

	/**
	 * @name STUDIOHANSRAJ-_initialize
	 * @exports STUDIOHANSRAJ-_initialize as STUDIOHANSRAJ
	 * @function
	 * @description The initialize method that kicks off all STUDIOHANSRAJ functionality
	 */
	_initialize = function() {
		
		// prevent bootstrap from executing twice
		if (self.initialized) {
			return;
		}
		
		// console overwrite for IE8
		if (window.console === undefined) {
			window.console = {};
			console.log = function() {};
			console.error = function() {};
		}
		
		console.log('STUDIOHANSRAJ.initialize');

		// Set body now that DOM is available	
		STUDIOHANSRAJ.$body = $('body');

		var rwdResizeData = RwdResize.initialize({
			small: 640,
			medium: 1024,
			large: 1280
		}, STUDIOHANSRAJ.$body );

		$header 		= $('header');
		$details 		= $('#details ul');
		$info 			= $('#details .information');
		$copyright		= $('footer .copyright');
		$loader			= $('.loader-container');
		$window 		= $(window);
		windowWidth 	= $window.width();
		$window.scroll( scolling );

		STUDIOHANSRAJ.Nav.initialize();
		STUDIOHANSRAJ.Listing.initialize( listingImagesLoaded );
		STUDIOHANSRAJ.Details.initialize( detailsImagesLoaded );
		
		// prevent bootstrap from executing twice
		self.initialized = true;

	},

	listingImagesLoaded = function() {
		$loader.removeClass('show');
	},

	detailsImagesLoaded = function() {
		$loader.removeClass('show');
		headerWidth 	= $header.width()
		detailsWidth 	= STUDIOHANSRAJ.Details.getWidth();
		infoWidth		= $info.width();
		copyWidth		= $copyright.width();
		leftMax 		= detailsWidth - windowWidth;
	},

	scolling = function(event) {
		if ( headerWidth ) {

			var valueHeader, valueInfo, valueCopyright, properties;

			leftMax = STUDIOHANSRAJ.Details.getWidth() - windowWidth;

			if ( RwdResize.getLayoutByWidth() == "small" ) {
				leftMax = 0;
			}

			if ( 0 < $window.scrollLeft() && $window.scrollLeft() < leftMax ) {
				// header
				valueHeader = $window.scrollLeft() + (windowWidth/2 - headerWidth/2);
				// info
				valueInfo = $window.scrollLeft() + (windowWidth/2 - infoWidth/2);
				// copyright
				valueCopyright = $window.scrollLeft() + (windowWidth/2 - copyWidth/2);
			} else if ( $window.scrollLeft() >= leftMax ) {
				// header
				valueHeader = leftMax + (windowWidth/2 - headerWidth/2);
				//info
				valueInfo = leftMax + (windowWidth/2 - infoWidth/2);
				// copyright
				valueCopyright = leftMax + (windowWidth/2 - copyWidth/2);
			} else {
				// header
				valueHeader = 0;
				// info
				valueInfo = 0;
				// copyright
				valueCopyright = 0;
			}

			headerTransform = "translateX(" + valueHeader + "px)"
			infoTransform = "translateX(" + valueInfo + "px)"
			copyrightTransform = "translateX(" + valueCopyright + "px)"

			properties = {
				'-webkit-transform': headerTransform,
				'-moz-transform':    headerTransform,
				'-ms-transform':     headerTransform,
				'-o-transform':      headerTransform,
				'transform':         headerTransform
			};
			$header.css( properties );

			properties = {
				'-webkit-transform': infoTransform,
				'-moz-transform':    infoTransform,
				'-ms-transform':     infoTransform,
				'-o-transform':      infoTransform,
				'transform':         infoTransform
			};
			$info.css( properties );

			properties = {
				'-webkit-transform': copyrightTransform,
				'-moz-transform':    copyrightTransform,
				'-ms-transform':     copyrightTransform,
				'-o-transform':      copyrightTransform,
				'transform':         copyrightTransform
			};
			$copyright.css( properties );
		}
	};
	
	// STUDIOHANSRAJ public variables & methods
	return {
		/**
		 * @name STUDIOHANSRAJ.HAS_TOUCH
		 * @description Defines if touch events are supported. */ 
		HAS_TOUCH: ('ontouchstart' in window),
		/**
		 * @name STUDIOHANSRAJ.$document
		 * @description Stored jQuery reference to document */
		$document: $(document),
		/**
		 * @name STUDIOHANSRAJ.$window
		 * @description Stored jQuery reference to window */
		$window: $(window),
		/**
		 * @name STUDIOHANSRAJ.$html
		 * @description Stored jQuery reference to html element */
		$html: $('html'),
		/**
		 * @name STUDIOHANSRAJ.$body
		 * @description Stored jQuery reference to body element */
		$body: null,
		initialize: _initialize
	};

}(window.STUDIOHANSRAJ || {}, window, undefined));


// Initialize functionality
$(document).ready(STUDIOHANSRAJ.initialize);