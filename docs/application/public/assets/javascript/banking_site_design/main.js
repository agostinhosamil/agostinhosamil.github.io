window.document.addEventListener('readystatechange', function () {
  if (document.readyState !== 'complete') {
    return
  }

  const headerMenuButton = document.querySelector('.menu-button a')

  if (headerMenuButton instanceof HTMLAnchorElement) {
    headerMenuButton.addEventListener('click', function (event) {
      event.preventDefault()

      const headerMenuItems = Array.from(headerMenuButton.parentNode.parentNode.children)
        .filter(item => item !== headerMenuButton.parentNode)
        .map(item => {
          const clone = item.cloneNode()

          clone.innerHTML = item.innerHTML

          return clone
        })

      const fixedHeaderMenuElement = document.createElement('div')
      const menuCloseButton = document.createElement('button')

      menuCloseButton.className = 'fixed-header-menu-close-button'
      menuCloseButton.innerHTML = 'X'

      menuCloseButton.addEventListener('click', function () {
        document.body.removeChild(fixedHeaderMenuElement)
      })

      fixedHeaderMenuElement.appendChild(menuCloseButton)
      fixedHeaderMenuElement.className = 'fixed-header-menu'

      headerMenuItems.forEach(item => fixedHeaderMenuElement.appendChild(item))

      document.body.appendChild(fixedHeaderMenuElement)
    })
  }
})
