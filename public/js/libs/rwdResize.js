/**
 * @fileOverview Responsive Framework Resize Module
 * @author <a href="mailto:brian.fegan@akqa.com">Brian Fegan</a>
 * @version 1.0
 */

/**
 * @name RwdResize
 * @namespace A module that provides extra functionality on top of resize events for responsive applications.
 * @description A module that provides extra functionality on top of resize events for responsive applications.
 * @requires <a href="http://www.jquery.com">jQuery 1.7.2+</a>
 * @requires <a href="https://github.com/akqany/AKQA_NY_Internal/tree/master/js-utils/pubsub">PubSub.js</a>
 * @requires <a href="http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/">rAF Polyfill (modified)</a>
 */
window.RwdResize = (function(self, PubSub, window, undefined){

	/**
	 * @name RwdResize-_getLayoutByWidth
	 * @function
	 * @description Determine page layout based on self.parent_width.
	 * @returns {string} The current layout of the site
	 */
	var _getLayoutByWidth = function() {
		for (var i=0; i<self.breakpoints.length; i++) {
			if (self.parent_width <= self.breakpoints[i]) {
				return self.breakpointsByPx[self.breakpoints[i]];
			}
		}
		return self.breakpointsByPx[self.breakpoints[self.breakpoints.length-1]];
	},
	
	/**
	 * @name RwdResize-_doResizeUpdate
	 * @function
	 * @description Use this to distribute the resize event as needed. Using the width of the wrapper element, 
	 * check and see if the layout has changed, and pass on the current layout, the wrapper width, and whether 
	 * a layoutChange has occurred to any resize subscribers.
	 */
	_doResizeUpdate = function() {
		
		self.ticking = false;
		
		// get the wrapper width and the old layout
		var oLayout = self.layout,
			layoutChange;
		
		// set the layout based on new width
		self.layout = _getLayoutByWidth();
		layoutChange = (oLayout !== self.layout) ? true : false;
		
		// pass those on to any subclass resize methods which subscribed to this event
		PubSub.publish('rwdResize', {layout:self.layout, width:self.parent_width, layoutChange:layoutChange});
		
	},
	
	/**
	 * @name RwdResize-_requestResizeTick
	 * @function
	 * @description Used to monitor whether a user is resizing and if we should use a rAF callback.
	 */
	_requestResizeTick = function() {
		if (!self.ticking) {
			window.requestAnimationFrame(_doResizeUpdate);
		}
		self.ticking = true;
	},

	/**
	 * @name RwdResize-_resize
	 * @function
	 * @description When a user has resized, if the browser supports native requestFrameAnimations,
	 * use them to notify resize subscribers. If not, notify subscribers immediately via _doResizeUpdate. 
	 * We also need to make sure the window width has actually changed as IE8 <i>sometimes</i> fires resize event when 
	 * any asset on the page is resized.
	 */
	_resize = function() {
		
		var winWidth = self.$window.width(),
			winHeight = self.$window.height(); 
		
		if (winWidth !== self.win_width || winHeight !== self.win_height) {
			self.win_width = winWidth;
			self.win_height = winHeight;
			self.parent_width = self.$parent.outerWidth();
			if (window.native_rAF) {
				_requestResizeTick();
			} else {
				_doResizeUpdate();
			}
		}
		
	},
	
	/**
	 * @name RwdResize-_unsubscribe
	 * @exports RwdResize-_unsubscribe as RwdResize.unsubscribe
	 * @function
	 * @description Remove a subscriber from the rwdResize list.
	 * @param {number} uid
	 */
	_unsubscribe = function(uid) {
		if (typeof uid === 'number') {
			PubSub.unsubscribe('rwdResize', uid);
		}
	},
	
	/**
	 * @name RwdResize-_subscribe
	 * @exports RwdResize-_subscribe as RwdResize.subscribe
	 * @function
	 * @description Used to proxy the subscribe method of the PubSub module.
	 * @param {function} fn The callback for a resize event.
	 * @param {object} [instance] Optional instance to be used in callback.
	 */
	_subscribe = function(fn, instance) {
		if (typeof fn === 'function') {
			return PubSub.subscribe('rwdResize', fn, instance);
		}
	},
	
	/**
	 * @name RwdResize-_initialize
	 * @exports RwdResize-_initialize as RwdResize.initialize
	 * @function
	 * @description The initialize method that kicks off all Resize functionality
	 */
	_initialize = function(breakpoints, $parent) {
	
		// only proceed if we have jQuery, PubSub, breakpoints, and we only init once
		if (!jQuery || !PubSub || $.isEmptyObject(breakpoints) || self.initialized) {
			return;
		}
			
		// loop through breakpoints and add them to a new array we can sort
		// create a new object that maps the px value to a key
		self.breakpointsByPx = {};
		var sorted = [], i, breakpoint, key, px;
		for (var key in breakpoints) {
			if (breakpoints.hasOwnProperty(key)) {
				px = breakpoints[key];
				sorted.push(px);
				self.breakpointsByPx[px] = key;
			}
		}
				
		// sort the breakpoints so we can check against them in order later
		self.breakpoints = sorted.sort(function(a, b) {
			return a - b;
		});
		
		// save the parent wrapper for the RwdResize module
		self.$parent = (typeof $parent === 'object' && $parent.selector && $parent.length !== 0) ? $parent.first() : $('body');
	
		// save a window reference 
		// lastly set up the resize listener
		self.$window = $(window);
		self.win_width = self.$window.width();
		self.win_height = self.$window.height();
		self.$window.on('resize focus', _resize);
		
		// get the width and layout on page load
		self.parent_width = self.$parent.outerWidth();
		self.layout = _getLayoutByWidth();
		
		self.initialized = true;
		
		// return the width and layout on page load
		return {layout:self.layout, width:self.parent_width};
	
	};
	
	// Resize public variables & methods
	return {
		initialize: _initialize,
		subscribe: _subscribe,
		unsubscribe: _unsubscribe,
		getLayoutByWidth: _getLayoutByWidth
	};
	
}({}, PubSub, window, undefined));