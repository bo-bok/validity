define([
	
], function(
	
){
	// Set the class of an element
	
	var setClass = function(el, className, add){
		var add = add || false;
		
		if(add){
			el.className += className;
		}
		else{
			el.className = className;
		}
	};
	
	// Determine what browser is being used
	
	var theBrowser = function(){
	    if (navigator.userAgent.indexOf('Mobile') > -1 && navigator.userAgent.indexOf('iPad') > -1 && navigator.userAgent.indexOf('Safari') > -1) {
	        return 'ipad-safari';
	    }
	    if (navigator.userAgent.indexOf('Mobile') > -1 && navigator.userAgent.indexOf('iPhone') > -1 && navigator.userAgent.indexOf('Safari') > -1) {
	        return 'iphone-safari';
	    }
		if(navigator.userAgent.indexOf('Mobile') > -1){
			return 'mobile';
		}
		if(navigator.userAgent.indexOf('Chrome') > -1){
			return 'chrome';
		}
		if(navigator.userAgent.indexOf('MSIE 10.0') > -1){
			return 'ie10';
		}
		if(navigator.userAgent.indexOf('MSIE 9.0') > -1){
			return 'ie9';
		}
		if(navigator.userAgent.indexOf('MSIE 8.0') > -1){
			return 'ie8';
		}
		if(navigator.userAgent.indexOf('MSIE 7.0') > -1){
			return 'ie7';
		}
		if(navigator.userAgent.indexOf('MSIE') > -1){
			return 'ie';
		}
		if(navigator.userAgent.indexOf('Firefox') > -1){
			return 'firefox';
		}
		if(navigator.userAgent.indexOf('Safari') > -1){
			return 'safari';
		}
		if(navigator.userAgent.indexOf('Presto') > -1){
			return 'opera';
		}
		if(Object.hasOwnProperty.call(window, 'ActiveXObject') && !window.ActiveXObject){
			return 'ie11';
		}
	};
	
	// Determine if a touch device is being used
	
	var isTouch = function(){
		return theBrowser() == 'mobile' || theBrowser() == 'ipad-safari' || theBrowser() == 'iphone-safari';
	};
	
	var legacyCheck = function(){
		return theBrowser() == 'ie8' || theBrowser() == 'ie7' || theBrowser() == 'ie';
	};
	
	// Get a data property
	
	var get = function(el, property){
		switch(theBrowser()){
			case 'ie9':
			case 'ie10':
				return el.getAttribute('data-' + property);
				break;
			default:
				return el.dataset[property];
				break;
		}
	};
	
	// Set a data property
	
	var set = function(el, property, value){
		switch(theBrowser()){
			case 'ie9':
			case 'ie10':
				el.setAttribute('data-' + property, value);
				break;
			default:
				el.dataset[property] = value;
				break;
		}
	};
	
	return {
		setClass 	: setClass,
		theBrowser	: theBrowser,
		isTouch		: isTouch,
		legacyCheck	: legacyCheck,
		get			: get,
		set			: set
	};
	
});