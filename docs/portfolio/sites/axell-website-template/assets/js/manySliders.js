(function (main) {
  function init_js() {
    /**
     * [manySliders description]
     * @type {[type]}
     */
    window.manySliders = window.manySliders || {
      sliders: []
    };

    var sliders = window.manySliders.sliders;

    if (sliders && sliders.length >= 1) {
      var slidersLen = sliders.length;

      for (var i = 0; i < slidersLen; i++) {
        /**
         * [swiper description]
         * @type {Swiper}
         */
        new Swiper(sliders[i], {
          grabCursor: false,
          effect: 'default',
          slidesPerView: 'auto',

          loop: true,

          keyboard: {
            enabled: true
          },

          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          }
        });
      }
    }
  }

  main.apply(window, [init_js]);
}(function (js) {
  /**
   * [description]
   */
  window.uolkeo && uolkeo.$$ready(function () {
    js && js();
  });
}))
