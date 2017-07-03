define([

	'common',
	'donation-form',
	'dropdown',
	'event-form',
	'ie',
	'page',
	'polyfill'

], function(

	Common,
	DonationForm,
	Dropdown,
	EventForm,
	IE,
	Page,
	Polyfill

){
	// Check if we are using an outdated browser

	if(Common.legacyCheck()){
		Common.setClass(document.getElementsByTagName('body')[0], 'legacy-browser');
		return;
	}

	var resizing;

	var _load = function(){

		// Polyfill functions

		Polyfill.init();

		// Page functions

		Page.init();
		Page.primaryNavigation();
		Page.hint();
		Page.anchor();
		Page.watch();

		// IE functions

		IE.equaliseArticleHeight();
		IE.center();
		IE.primaryNavigation();

		// Home page functions

		if(document.getElementsByClassName('carousel').length > 0){
			//Page.splash();
			Page.carousel.watch();
			Page.carousel.position();
		}

		// Donate page functions

		if(document.getElementsByClassName('donation-form').length > 0){
			DonationForm.resize();
			DonationForm.watch();
		}

		// Event page functions

		if(document.getElementsByClassName('event-form').length > 0){
			EventForm.watch();
		}

		Dropdown.watch();
	};

	var _resize = function(){

		// IE functions

		IE.equaliseArticleHeight();
		IE.center();
		IE.primaryNavigation();
		// Home page functions

		if(document.getElementsByClassName('carousel').length > 0){
			Page.carousel.position();
		}

		// Donate page functions

		if(document.getElementsByClassName('donation-form').length > 0){
			DonationForm.resize();
		}
	};

	if(document.getElementsByClassName('carousel').length > 0){
		Page.splash();
	}

	// Page loaded

	window.onload = new function(){
		_load();
	};

	// Page resized

	window.onresize = function(){
		clearTimeout(resizing);
		resizing = setTimeout(function(){
			_resize();
		}, 100);
	};
});
