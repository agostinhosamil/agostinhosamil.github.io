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



		var swiper = new Swiper(".header-body-slider", {

		    grabCursor: false,
		    effect: "coverflow",
		    slidesPerView: 1,

		    loop: true,

		    autoplay: { offset: 10000 },
		    keyboard: { enabled: true }
		});
	}

	window.manySliders = window.manySliders || {};
	window.manySliders.sliders = [
		'.x-product-demos-slider'
	];

	main.apply (window, [ init_js ]);	
}( function ( js ) {
	/**
	 * [description]
	 */
	window.uolkeo && uolkeo.$$ready (function () {
		js && js();
	});
}))
