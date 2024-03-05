HTMLElement.prototype.getStyledElements = function (styledElementName) {
  return getStyledElements(styledElementName, this)
}

HTMLElement.prototype.getStyledElement = function (styledElementName) {
  return getStyledElement(styledElementName, this)
}

function getStyledElements (styledElementName, contextElement) {
  const styleElements = Array.from(document.querySelectorAll('[data-styled-component="'+styledElementName+'"]'))

  const queryResult = []

  contextElement = contextElement instanceof HTMLElement ? contextElement : document

  if (styleElements.length >= 1) {
    styleElements.forEach(function (styleElement) {
      const styledElementId = styleElement.getAttribute('data-styled-component-id')

      try {
        Array.from(contextElement.querySelectorAll('.' + styledElementId))
          .forEach(function (element) {
            queryResult.push(element)
          })
      } catch (err) {
        return null
      }
    })
  }

  return queryResult
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

window.getStyledElements = getStyledElements
window.getStyledElement = getStyledElement
window.fullNodeClone = fullNodeClone
