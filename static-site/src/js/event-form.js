define([
	
	'common'
	
], function(
	
	Common
	
){
	if(Common.legacyCheck() || document.getElementsByClassName('event-form').length == 0){
		return;
	}
	
	var html 				= document.getElementsByTagName('html');
	var email				= document.getElementsByName('email');
	var emailConfirm		= document.getElementsByName('email-confirm');
	
	var current = 1;
	
	Common.set(email[0], 'valid', false);
	Common.set(emailConfirm[0], 'valid', false);
	
	var watch = function(){
		update(1);
		
		email[0].oninput = function(e){
			Common.set(email[0], 'valid', false);
			Common.set(emailConfirm[0], 'valid', false);
			if(current === 1 && validate('email', e.target.value)){
				Common.set(email[0], 'valid', true);
				Common.set(emailConfirm[0], 'valid', true);
			}
		};
		
		emailConfirm[0].onclick = function(){
			if(current === 1 && validate('email', email[0].value)){
				update(2);
				submit();
			}
		};
	};
	
	var update = function(i){
		current = i;
		Common.setClass(html[0], 'viewing-' + current);
	};
	
	var submit = function(){
		alert('Email address would be submitted and saved');
	};
	
	var validate = function(mode, value){
		switch(mode){
			case 'email':
				return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
				break;
			case 'postcode':
				return /[A-Z]{1,2}[0-9][0-9A-Z]?\s?[0-9][A-Z]{2}/gi.test(value); 
				break;
			case 'donate':
				return validate('card-number', cardData[0].value) && validate('card-expiration-month', cardData[1].value) && validate('card-expiration-year', cardData[2].value) && validate('card-cvv', cardData[3].value);
				break;
			case 'card-number':
			case 'card-expiration-month':
			case 'card-expiration-year':
			case 'card-cvv':
				return value.length > 0; 
				break;
		}
	};
	
	return {
		watch : watch
	};
	
});