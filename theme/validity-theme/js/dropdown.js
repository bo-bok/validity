define([
	
	'common'
	
], function(
	
	Common
	
){
	var html 		= document.getElementsByTagName('html')[0];
	var dropdown 	= document.getElementsByClassName('dropdown');
	var classNames	= [];
	
	var watch = function(){
		
		for(var i = 0; i < dropdown.length; i++){
			(function(i){
				var el 			= dropdown[i];
				var span 		= el.getElementsByTagName('span')[0];
				var a 			= el.getElementsByTagName('a');
				
				classNames[i] 	= el.className;
				
				span.onclick = function(e){
					e.stopPropagation();
					if(el.className.indexOf('active') == -1){
						reset();
						el.className += ' active';
					}
					else{
						reset(i);
					}
				};
				
				for(var j = 0; j < a.length; j++){
					a[j].onclick = function(e){
						e.stopPropagation();
						e.preventDefault();
						span.innerHTML = this.innerHTML;
						reset(i);
					};
				}
			})(i);
		}
				
		html.onclick = function(){
			reset();
		};
	};
	
	var reset = function(i){
		if(i !== undefined){
			dropdown[i].className = classNames[i];
		}
		else{
			for(var i = 0; i < dropdown.length; i++){
				(function(i){
					dropdown[i].className = classNames[i];
				})(i);
			};
		}
	};
	
	return {
		watch : watch
	};
	
});