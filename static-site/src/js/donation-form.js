define([
	
	'common'
	
], function(
	
	Common
	
){
	if(Common.legacyCheck() || document.getElementsByClassName('donation-form').length == 0){
		return;
	}
	
	var html 				= document.getElementsByTagName('html');
	var method 				= document.getElementsByName('method');
	var amount 				= document.getElementsByName('amount');
	var amountOther			= document.getElementsByClassName('amount-other-value');
	var amountOtherConfirm	= document.getElementsByClassName('amount-other-value-confirm');
	var giftAid				= document.getElementsByName('gift-aid');
	var email				= document.getElementsByName('email');
	var emailConfirm		= document.getElementsByName('email-confirm');
	var postcode			= document.getElementsByName('postcode');
	var postcodeConfirm		= document.getElementsByName('postcode-confirm');
	var progress			= document.getElementsByClassName('donation-progress');
	var hasOption			= document.getElementsByClassName('has-option');
	var cardData			= document.getElementsByClassName('card-data');
	var donateConfirm		= document.getElementsByName('donate-confirm');
	
	var current = 1;
	
	Common.set(email[0], 'valid', false);
	Common.set(emailConfirm[0], 'valid', false);
	Common.set(postcode[0], 'valid', false);
	Common.set(postcodeConfirm[0], 'valid', false);
	Common.set(cardData[0], 'valid', false);
	Common.set(cardData[1], 'valid', false);
	Common.set(cardData[2], 'valid', false);
	Common.set(cardData[3], 'valid', false);	
	Common.set(donateConfirm[0], 'valid', false);
	
	var watch = function(){
		update(1);
		
		for(var i = 0; i < method.length; i++){
			method[i].onclick = function(e){
				if(current === 1){
					if(e.target.value == 'one-off'){
						update(2);
					}
					if(e.target.value == 'monthly'){
						update(3);
					}
					chooseOption();
				}
			};
		}
		
		for(var i = 0; i < amount.length; i++){
			amount[i].onclick = function(e){
				if(e.target.value.indexOf('-other') > -1){
					resetOtherAmount();
					e.target.parentElement.getElementsByClassName('amount-other-value')[0].focus();
				}
				else if(current === 2 || current === 3){
					resetOtherAmount();
					update(4);
				}
			};
		}
		
		for(var i = 0; i < amountOther.length; i++){
			amountOther[i].onfocus = function(e){
				if(!e.target.value){
					e.target.value = 10;
				}
				Common.set(e.target.parentElement, 'state', 'focus');
			};
		}
		
		for(var i = 0; i < amountOtherConfirm.length; i++){
			amountOtherConfirm[i].onmousedown = function(e){
				if(current === 2 || current === 3){
					Common.set(e.target.parentElement, 'state', 'set');
					update(4);
				}
			};
		}
		
		for(var i = 0; i < giftAid.length; i++){
			giftAid[i].onclick = function(e){
				if(current === 4){
					update(5);
				}
			};
		}
		
		email[0].oninput = function(e){
			Common.set(email[0], 'valid', false);
			Common.set(emailConfirm[0], 'valid', false);
			if(current === 5 && validate('email', e.target.value)){
				Common.set(email[0], 'valid', true);
				Common.set(emailConfirm[0], 'valid', true);
			}
		};
		
		emailConfirm[0].onclick = function(){
			if(current === 5 && validate('email', email[0].value)){
				update(6);
			}
		};
		
		postcode[0].oninput = function(e){
			Common.set(postcode[0], 'valid', false);
			Common.set(postcodeConfirm[0], 'valid', false);
			if(current === 6 && validate('postcode', e.target.value)){
				Common.set(postcode[0], 'valid', true);
				Common.set(postcodeConfirm[0], 'valid', true);
			}
		};
		
		postcodeConfirm[0].onclick = function(){
			if(current === 6 && validate('postcode', postcode[0].value)){
				update(7);
			}
		};
		
		for(var i = 0; i < cardData.length; i++){
			cardData[i].oninput = function(e){
				Common.set(this, 'valid', false);
				Common.set(donateConfirm[0], 'valid', false);
				if(current === 7 && validate(e.target.name, e.target.value)){
					Common.set(this, 'valid', true);
				}
				canDonate();
			};
		}
		
		donateConfirm[0].onclick = function(){
			if(current === 7){
				update(8);
			}
		};
		
		for(var i = 0; i < progress.length; i++){
			var li = progress[i].getElementsByTagName('li');
			for(var j = 0; j < li.length; j++){
				li[j].onclick = function(e){
					var stage = parseInt(Common.get(e.target, 'stage'));
					if(stage < current){
						update(stage);
					}
				};
			}
		}
	};
	
	var canDonate = function(){
		if(current == 7 && validate('donate')){
			Common.set(donateConfirm[0], 'valid', true);
		}
	};
	
	var resetOtherAmount = function(){
		for(var j = 0; j < amountOther.length; j++){
			amountOther[j].value = '';
			Common.set(amountOther[j].parentElement, 'state', '');
		}
	};
	
	var chooseOption = function(){
		for(var i = 0; i < hasOption.length; i++){
			Common.set(hasOption[i], 'stage', current);
		};
	};
	
	var update = function(i){
		current = i;
		Common.setClass(html[0], 'viewing-' + current);
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
	
	var resize = function(){
		var height 	= 0;
		var section = document.getElementsByTagName('section');
		var form	= document.getElementsByClassName('donation-form')[0];
		var footer	= document.getElementsByTagName('footer')[0];
		
		var setHeight = function(el, value){
			el.style.height = value;
		};
		
		setHeight(form, '');
		
		for(var i = 0; i < section.length; i++){
			setHeight(section[i], '');
		}
		
		for(var i = 0; i < section.length; i++){
			var inner 	= section[i].getElementsByClassName('inner')[0];
			var h		= Math.round(inner.getBoundingClientRect().height);
			if(h > height){
				height = h;
			}
		}
		
		if(height < window.innerHeight){
			Common.set(form, 'small_viewport', false);
		}
		else{
			Common.set(form, 'small_viewport', true);
		}
		
		setHeight(form, height + 'px');
		
		for(var i = 0; i < section.length; i++){
			setHeight(section[i], height + 'px');
		}
	};
	
	return {
		watch 	: watch,
		resize	: resize
	};
	
});