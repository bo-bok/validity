define([

	'common',
	'carousel'

], function (

	Common,
	Carousel

) {
		if (Common.legacyCheck()) {
			return;
		}

		var html = document.getElementsByTagName('html');
		var body = document.getElementsByTagName('body');
		var wrapper = document.getElementsByClassName('wrapper');
		var section = document.getElementsByTagName('section');
		var current = 1;

		var init = function () {
			var className = ' browser-' + Common.theBrowser();
			if (Common.isTouch()) {
				className += ' is-touch';
			}
			else {
				className += ' is-desktop';
			}
			Common.setClass(body[0], className, true);
		};

		var watch = function () {
			if (!settings.animate) {
				return;
			}
			setInterval(function () {
				for (var i = 0; i < section.length; i++) {
					var s = section[i].getBoundingClientRect();
					var w = wrapper[0].getBoundingClientRect();

					if (s.top < 0 && Math.abs(s.top) < s.height) {
						current = i + 1;
					}
					if (s.top >= 0 && s.top <= (w.height / 2)) {
						//if(s.top >= 0 && s.top <= (w.height / 4) * 3){
						current = i + 1;
					}
				}
				Common.setClass(html[0], 'viewing-' + current);
			}, 200);
		};

		var primaryNavigation = function () {
			var toggle = document.getElementsByClassName('toggle-navigation')[0];
			var nav = document.getElementsByTagName('nav')[0];
			var ul = nav.getElementsByTagName('ul')[0];
			var a = nav.getElementsByTagName('a');

			var className = ul.className;

			toggle.addEventListener('click', function (e) {
				e.preventDefault();
				if (nav.className.indexOf('active') == -1) {
					nav.className = 'active';
				}
				else {
					nav.className = '';
				}
			});

			window.onkeydown = function (e) {
				if (e.keyCode == 27 && nav.className.indexOf('active') > -1) {
					nav.className = '';
				}
			};

			for (var i = 0; i < a.length; i++) {
				a[i].onmouseover = function () {
					ul.className = className + ' hovered';
				};

				a[i].onmouseout = function () {
					ul.className = className;
				};
			}
		};

		var hint = function () {
			if (!settings.showHint) {
				return;
			}
			var hint = document.createElement('span');
			hint.className = 'hint';
			hint.innerHTML = 'Learn more';
			wrapper[0].appendChild(hint);

			setTimeout(function () {
				hint.className = 'hint ready';
			}, 100);

			setInterval(function () {
				if (wrapper[0].scrollTop >= wrapper[0].getBoundingClientRect().height / 2 && hint.className.indexOf('expired') == -1) {
					hint.className = 'hint expired';
				}
			}, 200);
		};

		var anchor = function () {
			var a = document.getElementsByClassName('anchor');

			for (var i = 0; i < a.length; i++) {
				a[i].addEventListener('click', function (e) {
					e.preventDefault();
					var target = document.getElementById(e.target.getAttribute('href').replace('#', ''));

					wrapper[0].scrollTop = target.getBoundingClientRect().top + wrapper[0].scrollTop;
				});
			}
		};

		var _carousel = {
			watch: function () {
				var el = document.getElementsByClassName('carousel')[0];
				var className = el.className;
				var nav = document.getElementsByClassName('carousel__navigation')[0].getElementsByTagName('li');

				el.className = className + ' step-1';

				for (var i = 0; i < nav.length; i++) {
					(function () {
						nav[i].onmouseover = function () {
							el.className = className + ' step-' + Common.get(this, 'position');
						};
						nav[i].onmouseout = function () {
							el.className = className + ' step-1';
						};
					})(i);
				}
			},
			position: function () {
				var nav = document.getElementsByClassName('carousel__navigation')[0];
				var items = document.getElementsByClassName('carousel__items')[0].getElementsByTagName('li');
				var height = 0;

				for (var i = 0; i < items.length; i++) {
					(function () {
						var el = items[i].getElementsByTagName('div')[0];
						if (el.getBoundingClientRect().height > height) {
							height = el.getBoundingClientRect().height;
						}
					})(i);
				}

				nav.style.marginTop = ((height / 2) + nav.getBoundingClientRect().height) + 'px';
			}
		};

		var splash = function () {
			// test if they've seen splash screen
			var seen_splash_screen_before = false;
			var x = readCookie('validity-seen-splash-screen')
			if (x) {
				seen_splash_screen_before = true;

			}
			createCookie('validity-seen-splash-screen', 'yes', 7);
			//
			if (seen_splash_screen_before == false) {
				var interrupt = false;
				var splashScreen = document.getElementsByClassName('splash-screen')[0];
				var logo = document.getElementsByClassName('logo')[0];
				wrapper[0].scrollTop = 0;

				Common.setClass(body[0], ' viewing-splash-screen', true);

				preload();

				function preload() {
					var loaded = 0;
					for (var j = 0; j < 65; j++) {
						var img = new Image();

						img.onload = function () {
							loaded++;

							if (loaded >= 65) {
								begin();
							}
						};

						img.src = 'assets/img/splash/' + j + '.png';
					}
				}

				function begin() {
					setTimeout(function () {
						if (!interrupt) {
							splashScreen.className = splashScreen.className.replace(/\bsplash-screen--step-1\b/, '');
						}
					}, 2000);
					setTimeout(function () {
						if (!interrupt) {
							Common.setClass(splashScreen, ' splash-screen--step-2', true);
							var i = 1;
							var sequence = setInterval(function () {
								logo.className = 'logo step-' + i;
								if (i < 75) {
									i++;
								}
								else {
									clearInterval(sequence);
									splashScreen.className = splashScreen.className.replace(/\bsplash-screen--step-2\b/, '');
									setTimeout(function () {
										body[0].className = body[0].className.replace(/\bviewing-splash-screen\b/, '');
									}, 1000);
								}
							}, 100);
						}
					}, 3000);

					splashScreen.addEventListener('click', function (e) {
						interrupt = true;
						splashScreen.className = splashScreen.className.replace(/\bsplash-screen--step-1\b/, '');
						splashScreen.className = splashScreen.className.replace(/\bsplash-screen--step-2\b/, '');
						setTimeout(function () {
							body[0].className = body[0].className.replace(/\bviewing-splash-screen\b/, '');
						}, 1000);
					});
				}
			} else {
				// kill splash screen as they've been here before
				
				var splashScreen = document.getElementsByClassName('splash-screen')[0];
				var logo = document.getElementsByClassName('logo')[0];
				splashScreen.className = splashScreen.className.replace(/\bsplash-screen--step-1\b/, '');
				splashScreen.className = splashScreen.className.replace(/\bsplash-screen--step-2\b/, '');
				body[0].className = body[0].className.replace(/\bviewing-splash-screen\b/, '');
				//alert("you've been here before!!");
				
			}

		};

		function createCookie(name, value, days) {
			var expires = "";
			if (days) {
				var date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
				expires = "; expires=" + date.toUTCString();
			}
			document.cookie = name + "=" + value + expires + "; path=/";
		}

		function readCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') c = c.substring(1, c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
			}
			return null;
		}

		function eraseCookie(name) {
			createCookie(name, "", -1);
		}


		return {
			init: init,
			watch: watch,
			primaryNavigation: primaryNavigation,
			hint: hint,
			anchor: anchor,
			carousel: _carousel,
			splash: splash
		};

	});
