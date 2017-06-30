define([
	
], function(
	
){
	var init = function(){
		if(!window.matchMedia){
			matchMedia();
		}
	};
	
	var matchMedia = function () {
	    window.matchMedia = function (query) {
	        var match1 = false;
	        var match2 = false;
	        var mode1, size1, mode2, size2;
	        var winWidth = window.innerWidth;
	        var winHeight = window.innerHeight;
	        query = query.replace(/[()]/g, '').replace(' and ', ' : ').split(' : ');
	
	        if (query.length == 2) {
	            mode1 = query[0];
	            size1 = parseInt(query[1]);
	            if (mode1 == 'max-width' && winWidth <= size1 - 15) {
	                match1 = match2 = true;
	            }
	            if (mode1 == 'min-width' && winWidth >= size1 - 15) {
	                match1 = match2 = true;
	            }
	            if (mode1 == 'max-height' && winHeight <= size1) {
	                match1 = match2 = true;
	            }
	            if (mode1 == 'min-height' && winHeight >= size1) {
	                match1 = match2 = true;
	            }
	        }
	
	        if (query.length == 4) {
	            mode1 = query[0];
	            size1 = parseInt(query[1]);
	            mode2 = query[2];
	            size2 = parseInt(query[3]);
	
	            if (mode1 == 'max-width' && winWidth <= size1 - 15) {
	                match1 = true;
	            }
	            if (mode1 == 'min-width' && winWidth >= size1 - 15) {
	                match1 = true;
	            }
	            if (mode1 == 'max-height' && winHeight <= size1) {
	                match1 = true;
	            }
	            if (mode1 == 'min-height' && winHeight >= size1) {
	                match1 = true;
	            }
	
	            if (mode2 == 'max-width' && winWidth <= size2 - 15) {
	                match2 = true;
	            }
	            if (mode2 == 'min-width' && winWidth >= size2 - 15) {
	                match2 = true;
	            }
	            if (mode2 == 'max-height' && winHeight <= size2) {
	                match2 = true;
	            }
	            if (mode2 == 'min-height' && winHeight >= size2) {
	                match2 = true;
	            }
	        }
	
	        return {
	            matches: match1 && match2
	        };
	    };
	};
	
	return {
		init : init
	};
});