window.requestAnimationFrame = (
	window.requestAnimationFrame ||
	window.webkitRequestAnimationFrame ||
	window.mozRequestAnimationFrame ||
	window.msRequestAnimationFrame ||
	window.oRequestAnimationFrame ||
	(function (f) {
		if ('function' === typeof f) f.apply(this, []);
		setInterval (f, 500);
	})
);

(function ( main ) {
	var pageScrollEvent = function () {

		var headerContainerHeight = (jQuery("#header").height()),
			headerMenu = jQuery ('.header-menu').eq(0);

		if (window.scrollY >= (headerContainerHeight + 10)) {
			!headerMenu.hasClass('fixed-header-menu') && (
				headerMenu.addClass('fixed-header-menu')
			);
		} else {
			headerMenu.hasClass('fixed-header-menu') && (
				headerMenu.removeClass('fixed-header-menu')
			);
		}

		window.requestAnimationFrame (
			pageScrollEvent
		);
	};

	function init_js () {
		pageScrollEvent ();

		window.WOW && (new window.WOW().init({ offset: 100 }));

		uolkeo.$$scut('shift+t', function () {
			document.body.style.border = "100px solid #daa";
		});



		var swiper = new Swiper(".header-slider-self", {

		    grabCursor: false,
		    effect: "coverflow",
		    slidesPerView: "auto",

		    autoplay: {
		    	delay: 4000
		    },

		    loop: true,

		    "keyboard": {
		    	"enabled": true
		    }

		});
	}

	main.apply (window, [ init_js ]);	
}( function ( js ) {
	/**
	 * [description]
	 */
	window.uolkeo && uolkeo.$$ready (function () {
		js && js();
	});
}))
