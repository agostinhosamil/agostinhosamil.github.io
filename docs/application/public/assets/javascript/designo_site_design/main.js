window.document.addEventListener('readystatechange', function () {
  if (document.readyState !== 'complete') {
    return
  }

  function getStyledElements (styledElementName) {
    const styleElement = document.querySelector('[data-styled-component="'+styledElementName+'"]')

    if (styleElement) {
      const styledElementId = styleElement.getAttribute('data-styled-component-id')

      try {
        return Array.from(document.querySelectorAll('.' + styledElementId))
      } catch (err) {
        return null
      }
    }
  }

  function getStyledElement (styledElementName) {
    const elements = getStyledElements(styledElementName)

    if (elements) {
      return elements[0]
    }
  }

  function fullNodeClone (element) {
    const clone = element.cloneNode()

    Array.from(element.childNodes).forEach(function (child) {
      clone.appendChild(fullNodeClone(child))
    })

    return clone
  }

  function updateSliderNavigation (sliderNavigationElement, index) {
    const sliderNavigationElementChildren = Array.from(sliderNavigationElement.querySelectorAll('li'))
    const targetElement = sliderNavigationElementChildren[index]
    const selectedElement = sliderNavigationElement.querySelectorAll('button.selected')

    for (var i = 0; i < selectedElement.length; i++) {
      selectedElement[i].classList.remove('selected')
    }

    if (typeof targetElement !== typeof undefined) {
      const buttonElement = targetElement.querySelector('button')

      if (buttonElement) {
        buttonElement.classList.add('selected')
      }
    }
  }

  function moveSlider (step, testimonialsSectionBodyElement) {
    /**
     * to get the slider clildren
     */
    const testimonialsSectionBodyUlElement = testimonialsSectionBodyElement.querySelector('ul')
    /**
     * to get the slider pagination elements
     */
    const testimonialsSectionBodyOlElement = testimonialsSectionBodyElement.querySelector('ol')

    const testimonialsSectionBodyUlElementChildren = testimonialsSectionBodyUlElement && Array.from(testimonialsSectionBodyUlElement.querySelectorAll('li')) || []

    if (!(testimonialsSectionBodyUlElementChildren.length >= 1)) {
      return
    }

    const testimonialsSectionBodyUlElementFirstChild = testimonialsSectionBodyUlElementChildren[0]
    const sliderVelocity = testimonialsSectionBodyUlElementFirstChild.offsetWidth
    const testimonialsSectionBodyUlElementFirstChildrenTotalWidth = sliderVelocity * testimonialsSectionBodyUlElementChildren.length
    const currentMarginLeft = parseFloat(testimonialsSectionBodyUlElementFirstChild.style.marginLeft || '0')
    const marginLeft = sliderVelocity * step

    if ((currentMarginLeft >= 0 && step > 0) || ((step * (currentMarginLeft + marginLeft)) >= testimonialsSectionBodyUlElementFirstChildrenTotalWidth && step < 0)) {
      if (currentMarginLeft > 0) {
        testimonialsSectionBodyUlElementFirstChild.style.marginLeft = '0px'
      }

      return
    } else {
      testimonialsSectionBodyUlElementFirstChild.style.marginLeft = (currentMarginLeft + marginLeft)+'px'
    }

    if (testimonialsSectionBodyOlElement) {
      const updatedMarginLeft = parseFloat(testimonialsSectionBodyUlElementFirstChild.style.marginLeft || '0')
      updateSliderNavigation(testimonialsSectionBodyOlElement, (updatedMarginLeft < 0 ? -1 * updatedMarginLeft : updatedMarginLeft) / sliderVelocity)
    }
  }

  const menuWrapper = getStyledElement('MenuWrapper')
  const iconsWrapper = getStyledElement('IconsWrapper')
  const testimonialsSectionBodyElements = getStyledElements('TestimonialsSectionBody')

  if (iconsWrapper) {
    const navigationMenuElement = document.getElementById('data-navigation-menu')
    const menuButtonElement = iconsWrapper.querySelector('a.menu-button')

    const navigationMenuListElement = menuWrapper.querySelector('ul')

    if (menuButtonElement && navigationMenuElement && navigationMenuListElement) {
      const uList = fullNodeClone(navigationMenuListElement)
      const navigationMenuSeparatorElement = navigationMenuElement.querySelector('hr')

      navigationMenuSeparatorElement.parentNode.insertBefore(uList, navigationMenuSeparatorElement)

      const menuState = {
        hideOnBlur: false
      }

      menuButtonElement.addEventListener('click', function (event) {
        event.preventDefault()

        this.tabIndex = 1

        this.focus()

        const isMenuVisible = navigationMenuElement.style.display === 'block'

        if (window.innerWidth >= 671) {
          navigationMenuElement.style.cssText = ''
        } else {
          const menuButtonElementCords = this.getBoundingClientRect()
          navigationMenuElement.style.cssText = (
            'width: 100%;'
            + 'max-width: unset;'
            + 'position: fixed;'
            + 'left: 0px;'
            + 'right: 0px;'
            + 'top: '
            + (menuButtonElementCords.y + menuButtonElementCords.height)
            + 'px')
        }

        navigationMenuElement.style.display = isMenuVisible
          ? 'none'
          : 'block'
      })

      menuButtonElement.addEventListener('blur', function (event) {
        if (menuState.hideOnBlur) {
          navigationMenuElement.style.display = 'none'
          return
        }

        this.focus()
      })

      menuButtonElement.addEventListener('keydown', function (event) {
        if (/escape/i.test(event.key)) {
          navigationMenuElement.style.display = 'none'
        }
      })

      navigationMenuElement.addEventListener('mouseenter', function () {
        menuState.hideOnBlur = false
      })

      navigationMenuElement.addEventListener('mouseleave', function () {
        menuState.hideOnBlur = true
      })
    }
  }

  if (testimonialsSectionBodyElements) {
    var i = 0

    window.addEventListener('resize', function () {
      for (var i = 0; i < testimonialsSectionBodyElements.length; i++) {
        const testimonialsSectionBodyElement = testimonialsSectionBodyElements[i]
        /**
         * to get the slider clildren
         */
        const testimonialsSectionBodyUlElement = testimonialsSectionBodyElement.querySelector('ul')
        /**
         * to get the slider pagination elements
         */
        const testimonialsSectionBodyOlElement = testimonialsSectionBodyElement.querySelector('ol')

        const testimonialsSectionBodyUlElementChildren = testimonialsSectionBodyUlElement && Array.from(testimonialsSectionBodyUlElement.querySelectorAll('li')) || []

        if (!(testimonialsSectionBodyUlElementChildren.length >= 1)) {
          return
        }

        const testimonialsSectionBodyUlElementFirstChild = testimonialsSectionBodyUlElementChildren[0]

        testimonialsSectionBodyUlElementFirstChild.style.marginLeft = '0px'

        updateSliderNavigation(testimonialsSectionBodyOlElement, 0)
      }
    })

    for ( ; i < testimonialsSectionBodyElements.length; i++) {
      const testimonialsSectionBodyElement = testimonialsSectionBodyElements[i]

      /**
       * to get the slider clildren
       */
      const testimonialsSectionBodyUlElement = testimonialsSectionBodyElement.querySelector('ul')
      /**
       * to get the slider pagination elements
       */
      const testimonialsSectionBodyOlElement = testimonialsSectionBodyElement.querySelector('ol')

      const btnNext = testimonialsSectionBodyElement.querySelector('button.btn-next')
      const btnPrev = testimonialsSectionBodyElement.querySelector('button.btn-prev')

      if (btnNext) {
        btnNext.addEventListener('click', function (event) {
          event.preventDefault()
          moveSlider(-1, testimonialsSectionBodyElement)
        })
      }

      if (btnPrev) {
        btnPrev.addEventListener('click', function (event) {
          event.preventDefault()
          moveSlider(1, testimonialsSectionBodyElement)
        })
      }

      if (testimonialsSectionBodyOlElement) {
        const testimonialsSectionBodyOlElementChildren = testimonialsSectionBodyOlElement.querySelectorAll('li button')

        for (var n = 0; n < testimonialsSectionBodyOlElementChildren.length; n++) {
          const buttonElement = testimonialsSectionBodyOlElementChildren[n]

          buttonElement.setAttribute('data-id', n)

          buttonElement.addEventListener('click', function (event) {
            event.preventDefault()

            const testimonialsSectionBodyUlElementChildren = testimonialsSectionBodyUlElement && Array.from(testimonialsSectionBodyUlElement.querySelectorAll('li')) || []

            if (!(testimonialsSectionBodyUlElementChildren.length >= 1)) {
              return
            }

            const dataId = parseInt(this.getAttribute('data-id') || 0)

            const testimonialsSectionBodyUlElementFirstChild = testimonialsSectionBodyUlElementChildren[0]
            const sliderVelocity = testimonialsSectionBodyUlElementFirstChild.offsetWidth

            testimonialsSectionBodyUlElementFirstChild.style.marginLeft = -1 * (sliderVelocity * dataId) + 'px'

            updateSliderNavigation(testimonialsSectionBodyOlElement, dataId)
          })
        }
      }
    }
  }
})
