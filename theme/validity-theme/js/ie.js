define([
	
	'common'
	
], function(
	
	Common
	
){
	var required = function(){
		var browser = Common.theBrowser();
		return browser == 'ie9' || browser == 'ie10';
	};
	
	var equaliseArticleHeight = function(){
		if(!required()){
			return;
		}
		var height 	= 0;
		var el 		= document.getElementsByClassName('article');
		
		var setHeight = function(id, value){
			el[id].style.height = value;
		};
		
		for(var i = 0; i < el.length; i++){
			setHeight(i, '');
		}
		
		if(!window.matchMedia('(min-width : 768px)').matches){
			return;
		}
		
		for(var i = 0; i < el.length; i++){
			if(Math.round(el[i].getBoundingClientRect().height) > height){
				height = Math.round(el[i].getBoundingClientRect().height);
			}
		}
		
		for(var i = 0; i < el.length; i++){
			setHeight(i, height + 'px');
		}
	};
	
	var center = function(){
		if(!required()){
			return;
		}
		var el = document.getElementsByClassName('outer centered');
		
		for(var i = 0; i < el.length; i++){
			var child 	= el[i].children[0];
			var margin 	= Math.round((el[i].getBoundingClientRect().height - child.getBoundingClientRect().height) / 2);
			
			child.style.marginTop = margin + 'px';
		}
	};
	
	var primaryNavigation = function(){
		if(!required()){
			return;
		}
		var nav 	= document.getElementsByTagName('nav')[0];
		var ul 		= document.getElementsByClassName('primary-navigation')[0];
		var margin 	= Math.round((window.innerHeight - ul.getBoundingClientRect().height) / 2);
		
		nav.style.height 	= window.innerHeight + 'px';
		ul.style.marginTop 	= margin + 'px';
	};
	
	return {
		equaliseArticleHeight 	: equaliseArticleHeight,
		center					: center,
		primaryNavigation		: primaryNavigation
	};
	
});