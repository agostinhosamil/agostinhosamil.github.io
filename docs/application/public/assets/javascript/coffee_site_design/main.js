window.document.addEventListener('readystatechange', function () {
  if (document.readyState !== 'complete') {
    return
  }

  function getListItems (listElement) {
    return Array.from(listElement.children)
      .filter(function (child) {
        return child instanceof HTMLLIElement
      })
  }

  function listHasItems (listElement) {
    return getListItems(listElement).length >= 1
  }

  function elementXMargins (element) {
    const marginLeft = parseFloat(window.getComputedStyle(element).marginLeft)
    const marginRight = parseFloat(window.getComputedStyle(element).marginRight)

    return (!isNaN(marginLeft) ? marginLeft : 0) + (!isNaN(marginRight) ? marginRight : 0)
  }

  function getSliderSelectedItem (sliderContainer) {
    const sliderList = sliderContainer.querySelector('ul')

    if (!(sliderList && listHasItems(sliderList))) {
      return
    }

    const sliderListItems = getListItems(sliderList)
    const firstItem = sliderListItems[0]

    const selectedItem = sliderListItems.find(function (item) {
      return item.classList.contains('selected')
    })

    return selectedItem || firstItem
  }

  function moveSlider (sliderContainer, step) {
    if (!(sliderContainer instanceof HTMLElement) || sliderContainer.moving) {
      return
    }

    sliderContainer.moving = true

    const sliderList = sliderContainer.querySelector('ul')

    if (!(sliderList && listHasItems(sliderList))) {
      sliderContainer.moving = false
      return
    }

    const sliderListItems = getListItems(sliderList)
    const firstElement = sliderListItems[0]
    const lastItem = sliderListItems[-1 + sliderListItems.length]

    var selectedItem = getSliderSelectedItem(sliderContainer)

    selectedItem = selectedItem || firstElement

    const selectedItemIndex = sliderListItems.indexOf(selectedItem)

    const nextItem = sliderListItems[(-1 * step) + selectedItemIndex]

    let nonSelectedItem = sliderListItems.find(function (item) {
      return item != selectedItem
    })

    if (typeof nextItem !== typeof undefined) {
      selectedItem.classList.remove('selected')
      nextItem.classList.add('selected')
    }

    const slideVelocity = (nonSelectedItem.offsetWidth) + elementXMargins(sliderListItems[1])

    // console.log({slideVelocity})

    const currentMarginLeft = parseFloat(firstElement.style.marginLeft || 0)

    // console.log({ currentMarginLeft,  slideVelocity })
    // if (currentMarginLeft <=)

    if ((currentMarginLeft >= 0 && step >= 1)) {
      if (step >= 1) {
        firstElement.style.marginLeft = '0px'
      }

      sliderContainer.moving = false

      return
    }

    firstElement.style.marginLeft = ((step * slideVelocity) + currentMarginLeft) + 'px'

    function refresh () {
      const lastItemRect = lastItem.getBoundingClientRect()
      const sliderListRect = sliderList.getBoundingClientRect()

      const updatedLastItemXZ = (lastItemRect.x + lastItemRect.width) + (step * slideVelocity)

      if ((sliderListRect.x + sliderListRect.width) > updatedLastItemXZ) {
        const diff = (sliderListRect.x + sliderListRect.width) - updatedLastItemXZ

        // console.log({ diff })

        firstElement.style.marginLeft = (((step * slideVelocity) + currentMarginLeft) + diff) + 'px'
      }

      sliderContainer.moving = false
    }

    refresh()

    // setTimeout(refresh, 500)
  }

  const sliderContainers = getStyledElements('SliderContainer')

  // console.log('sliderContainers>>>', sliderContainers)

  for (var i = 0; i < sliderContainers.length; i++) {
    const sliderContainer = sliderContainers[i]

    const btnNext = sliderContainer.querySelector('button.btn-next')
    const btnPrev = sliderContainer.querySelector('button.btn-prev')

    sliderContainer.tabIndex = Math.round(Math.random() * (Object.keys(window).length * Object.keys(document).length))
    sliderContainer.style.outline = '0px'

    const sliderList = sliderContainer.querySelector('ul')

    if (!(sliderList && listHasItems(sliderList))) {
      continue
    }

    const selectedItem = getSliderSelectedItem(sliderContainer)

    sliderList.style.height = (selectedItem.offsetHeight + 10) + 'px'

    sliderContainer.addEventListener('mousedown', function () {
      this.focus()
    })

    function sliderContainerMouseEventHandler (event) {
      switch(event.key) {
        case 'ArrowLeft':
          moveSlider(sliderContainer, 1)
          break
        case 'ArrowRight':
          moveSlider(sliderContainer, -1)
          break
      }
    }

    sliderContainer.addEventListener('keydown', sliderContainerMouseEventHandler)

    if (btnNext) {
      btnNext.addEventListener('click', function (event) {
        event.preventDefault()

        moveSlider(sliderContainer, -1)
      })
    }

    if (btnPrev) {
      btnPrev.addEventListener('click', function (event) {
        event.preventDefault()

        moveSlider(sliderContainer, 1)
      })
    }
  }

  window.addEventListener('resize', function () {
    var i = 0

    for (; i < sliderContainers.length; i++) {
      const sliderContainer = sliderContainers[i]

      const sliderList = sliderContainer.querySelector('ul')

      if (!(sliderList && listHasItems(sliderList))) {
        continue
      }

      const sliderListItems = getListItems(sliderList)
      const firstItem = sliderListItems[0]

      sliderListItems.forEach(function (item) {
        item.classList.remove('selected')
      })

      if (firstItem) {
        firstItem.style.marginLeft = '0px'
        firstItem.classList.add('selected')
      }
    }
  })
})
