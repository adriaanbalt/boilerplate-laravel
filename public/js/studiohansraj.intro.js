/**
 * @fileOverview BALT - STUDIOHANSRAJ 2014 Intro
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a>
 * @version 1.0
 */

// declare STUDIOHANSRAJ in case it has not been declared yet
window.STUDIOHANSRAJ = window.STUDIOHANSRAJ || {};

/**
 * @name STUDIOHANSRAJ.Intro
 * @namespace The public namespace and api for the STUDIOHANSRAJ Intro functionality.
 * @description The public namespace and api for the STUDIOHANSRAJ Intro functionality. 
 * @requires STUDIOHANSRAJ
 */
STUDIOHANSRAJ.Intro = (function(STUDIOHANSRAJ, window, undefined){
	
	var config = {
		initialized: false,
		timeout: 5000,
		skip: false
	},

	/**
	 * @name STUDIOHANSRAJ.Intro~_initialize
	 * @exports STUDIOHANSRAJ.Intro~_initialize as STUDIOHANSRAJ.Intro.initialize
	 * @function
	 * @description
	 */
	_initialize = function() {
		console.log ( 'STUDIOHANSRAJ.Intro.initialize' );
		
		$('#intro').on( 'click', ready );
		if ( config.skip ) {
			$('#intro').addClass('hidden');
		} else {
			var timer = setTimeout ( ready, config.timeout );
		}

		// transitionend
		// oTransitionEnd
		// webkitTransitionEnd
	},

	ready = function() {
		window.location.href = 'home';
		// $('#intro').addClass('hide');
		// $('#intro').on( 'webkitTransitionEnd', 
		// 	function( event ) { 
		// 		$('#intro').addClass('hidden');
		// 		console.log ( "INTRO Complete" );
		// 	});
	};

	// public methods for this class
	return {
		initialize: _initialize
	};

}(STUDIOHANSRAJ, window, undefined));

