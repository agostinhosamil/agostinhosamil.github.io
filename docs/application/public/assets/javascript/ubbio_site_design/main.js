window.document.addEventListener('readystatechange', function () {
  if (document.readyState !== 'complete') {
    return
  }

  const sliderElements = Array.from(document.querySelectorAll('[data-slider]'))

  sliderElements.forEach(function (sliderElement) {
    const sliderListElement = sliderElement.querySelector('ul')
    const nextButtonElement = sliderElement.querySelector('button.next')
    const prevButtonElement = sliderElement.querySelector('button.prev')

    if (!(sliderListElement && nextButtonElement && prevButtonElement)) {
      return
    }

    const sliderListElementChildren = Array.from(sliderListElement.children)
      .filter(function (child) {
        return child.nodeType === 1
      })

    if (sliderListElementChildren.length < 1) {
      return
    }

    const sliderListElementChildrenTotalWidth = sliderListElementChildren
      .map(function (child) {

        child.style.transition = 'all .5s ease-in-out'

        return child.offsetWidth
      })
      .reduce(function (current, next) {
        return current + next
      })

    const firstSlide = sliderListElementChildren[0]

    function moveSlider (step) {
      step = typeof step === 'number' ? step : 1

      const sliderVelocity = (step * firstSlide.offsetWidth)

      if (!(firstSlide instanceof HTMLElement)) {
        return
      }

      const marginLeft = parseFloat(firstSlide.style.marginLeft || '0')

      let updatedMarginLeft = (!isNaN(marginLeft) ? marginLeft : 0) + sliderVelocity

      //////////////////////////////////////////////////////////////////////////////////
      // console.log('marginLeft >>>', firstSlide.style.marginLeft, {sliderVelocity}) //
      //////////////////////////////////////////////////////////////////////////////////

      if (updatedMarginLeft >= 0) {
        updatedMarginLeft = 0
      }

      firstSlide.style.marginLeft = `${updatedMarginLeft}px`

      const lastSlice = sliderListElementChildren[-1 + sliderListElementChildren.length]

      const lastSliceCords = lastSlice.getBoundingClientRect()
      const slideCords = firstSlide.parentNode.getBoundingClientRect()
      const lastSliceXZ = (lastSliceCords.x + lastSliceCords.width) + sliderVelocity
      const slideXZ = slideCords.x + slideCords.width

      if (slideXZ > lastSliceXZ) {
        firstSlide.style.marginLeft = `${updatedMarginLeft + (updatedMarginLeft > 1 ? slideXZ - lastSliceXZ : 0)}px`
      }

      const showingSlide = sliderListElementChildren.find(function (child) {
        const childCords = child.getBoundingClientRect()

        return childCords.x >= slideCords.x
      })

      if (showingSlide) {
        const showingSlideCords = showingSlide.getBoundingClientRect()
        // updatedMarginLeft -= showingSlideCords.x - slideCords.x
        // console.log('----', showingSlideCords.x - slideCords.x)
        const firstSlideMarginLeft = parseFloat(firstSlide.style.marginLeft || '0')

        firstSlide.style.marginLeft = `${firstSlideMarginLeft + ((showingSlideCords.x - slideCords.x) * step)}px`
      }
    }

    function nextButtonClickHandler () {
      moveSlider(-1)
    }

    function prevButtonClickHandler () {
      moveSlider(1)
    }

    if (sliderListElement.offsetWidth < sliderListElementChildrenTotalWidth) {
      nextButtonElement.addEventListener('click', nextButtonClickHandler)
      prevButtonElement.addEventListener('click', prevButtonClickHandler)
    }
  })
})
