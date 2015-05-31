/**
 * @fileOverview BALT - STUDIOHANSRAJ 2014 Nav
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a>
 * @version 1.0
 */

// declare STUDIOHANSRAJ in case it has not been declared yet
window.STUDIOHANSRAJ = window.STUDIOHANSRAJ || {};

/**
 * @name STUDIOHANSRAJ.Nav
 * @namespace The public namespace and api for the STUDIOHANSRAJ Nav functionality.
 * @description The public namespace and api for the STUDIOHANSRAJ Nav functionality. 
 * @requires STUDIOHANSRAJ
 */
STUDIOHANSRAJ.Nav = (function(STUDIOHANSRAJ, window, undefined){
	
	var config = {
		initialized: false,
		timeout: 5000,
		skip: true,
		navActive: false
	},

	/**
	 * @name STUDIOHANSRAJ.Nav~_initialize
	 * @exports STUDIOHANSRAJ.Nav~_initialize as STUDIOHANSRAJ.Nav.initialize
	 * @function
	 * @description
	 */
	_initialize = function() {
		console.log ( 'STUDIOHANSRAJ.Nav.initialize' );

		$navigation = $('#navigation-mobile');
		$nav = $('#navigation-mobile .container');
		$menuBlack = $('#navigation-mobile .menu.black');
		$menuWhite = $('#navigation-mobile .menu.white');

		$menuBlack.on('click', toggleNav );
		$menuWhite.on('click', toggleNav );

		// subscribe to the resize
		resize();
		this.resize_uid = RwdResize.subscribe(resize, this);
		console.log ( 'this.resize_uid: ', this.resize_uid );
	},

	toggleNav = function() {
		config.navActive = !config.navActive;
		if ( config.navActive ) {
			_gaq.push(['_trackEvent', 'Nav opened']);
			$navigation.addClass( 'open' );
			$nav.clearQueue().animate({
				'opacity':1
			}, 150, function() {
			});

		} else {
			$nav.clearQueue().animate({
				'opacity':0
			}, 150, function() {
				$navigation.removeClass( 'open' );
			});
		}
	},

	resize = function() {
		// config.$nav.width( STUDIOHANSRAJ.$window.width() );
		// config.$nav.height( STUDIOHANSRAJ.$window.height() );
	};

	// public methods for this class
	return {
		initialize: _initialize
	};

}(STUDIOHANSRAJ, window, undefined));

