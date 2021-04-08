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
				headerMenu = jQuery ('.header-menu').eq(0),
				aboutPageLinksList = jQuery('.x-about-page-links-list');

		function removeAboutPageLinksListFixedClass () {
			aboutPageLinksList.hasClass('x-about-page-fixed-links-list') && (
				aboutPageLinksList.removeClass('x-about-page-fixed-links-list')
			)

			aboutPageLinksList.css({ width: '100%' })
		}

		if (window.scrollY >= (headerContainerHeight + 10)) {
			!headerMenu.hasClass('fixed-header-menu') && (
				headerMenu.addClass('fixed-header-menu')
			);

			if (window.innerWidth >= 768) {
				!aboutPageLinksList.hasClass('x-about-page-fixed-links-list') && (
					aboutPageLinksList.addClass('x-about-page-fixed-links-list')
				)

				aboutPageLinksList.css({
					width: aboutPageLinksList.parent().width() + 'px'
				})
			} else {
				removeAboutPageLinksListFixedClass()
			}

		} else {
			headerMenu.hasClass('fixed-header-menu') && (
				headerMenu.removeClass('fixed-header-menu')
			);


			removeAboutPageLinksListFixedClass()
		}

		window.requestAnimationFrame ( pageScrollEvent );
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

		    loop: true,

		    "keyboard": {
		    	"enabled": true
		    }

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
