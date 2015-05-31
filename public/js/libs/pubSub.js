/**
 * @fileOverview Publish and subscribe module
 * @author <a href="mailto:brian.fegan@akqa.com">Brian Fegan</a>
 * @version 1.0
 */
 
/**
 * @name PubSub
 * @namespace A module that provides a pub/sub pattern.
 * @description A module that provides a pub/sub pattern.
 */
window.PubSub = (function(self, window, undefined){
		
	/**
	 * @name PubSub-_publish
	 * @exports PubSub-_publish as PubSub.publish
	 * @function
	 * @description Takes in a subscription type and notifies its subscribers.
	 * @param {string} type The subscription type.
	 * @param {object} [data] Any data to pass on to the subscribers.
	 */
	_publish = function(type, data) {
		if ( typeof type == 'string' && self.subscribers[type] ) {
			var subs=self.subscribers[type].subs, limit=subs.length, sub, i;
			for (i=0; i<limit; i++) {
				sub = subs[i];
				if (sub.instance) {
					sub.fn.call(sub.instance, data);
				} else {
					sub.fn(data);
				}
			}
		}
	},
	
	/**
	 * @name PubSub-_create
	 * @function
	 * @description Adds a new subscription type to the self.subscribers object, with an empty subscribers array, and a uid counter.
	 * @param {string} type
	 */
	_create = function(type) {
		self.subscribers[type] = {};
		self.subscribers[type].subs = [];
		self.subscribers[type].uid = 0;
	},
	
	/**
	 * @name PubSub-_subscribe
	 * @exports PubSub-_subscribe as PubSub.subscribe
	 * @function
	 * @description Takes in a subscription type, a callback function, and an optional instance, adds the callback to a subscription array, and returns a UID associated with this subscription.
	 * @param {string} type The subscroption type to subscribe to.
	 * @param {function} fn The callback to execute on publish events.
	 * @param {object} [instance] An instance we can reference as this in the callback.
	 * @returns {number}
	 */
	_subscribe = function(type, fn, instance) {
		if ( typeof type == 'string' && typeof fn === 'function') {
			if (!self.subscribers[type]) _create(type);
			self.subscribers[type].uid++;
			self.subscribers[type].subs.push({fn:fn, instance:instance, uid:self.subscribers[type].uid});
			return self.subscribers[type].uid;
		}
	},
	
	/**
	 * @name PubSub-_unsubscribe
	 * @exports PubSub-_unsubscribe as PubSub.unsubscribe
	 * @function
	 * @description Takes in a subscription type and a uid for that subscription, and removes that subscriber.
	 * @param {string} type The type of subscription to unsubscribe from.
	 * @param {number} uid The unique id of the subscriber we are removing.
	 */
	_unsubscribe = function(type, uid) {
		if ( typeof type == 'string' && self.subscribers[type]) {
			var subs=self.subscribers[type].subs, limit=subs.length, i, newArr = [];
			for (i=0; i<limit; i++) {
				if (subs[i].uid !== uid) {
					newArr.push(subs[i]);
				}
			}
			self.subscribers[type].subs = newArr;
		}
	};

	// set up empty subscribers obj
	self.subscribers = {};
		
	// PubSub public methods
	return {
		subscribe: _subscribe,
		unsubscribe: _unsubscribe,
		publish: _publish
	};
	
}(window.PubSub || {}, window, undefined));