uolkeo.$$ready(function () {
  const accordionLists = document.querySelectorAll('.page-accordion-list')

  if (!accordionLists || accordionLists.length <= 0) {
    return
  }

  function getAccordionElement(accordion, element) {
    const accordionElementQuery = ['.page-accordion-', element].join('')

    const accordionElement = accordion.querySelector(accordionElementQuery)

    return accordionElement
  }

  function toggleAccordion(accordion) {
    const isAccordionOpen = Boolean(accordion.hasAttribute('open'))

    if (isAccordionOpen) {
      accordion.removeAttribute('open')
    } else {
      accordion.setAttribute('open', 'open')
    }
  }

  Array.from(accordionLists).forEach(function (accordionList) {
    const accordions = accordionList.querySelectorAll('.page-accordion')

    Array.from(accordions).forEach(function (accordion) {
      const accordionTitleElement = getAccordionElement(accordion, 'title')
      const accordionBodyElement = getAccordionElement(accordion, 'body')

      uolkeo.$$addEvent(accordionTitleElement, 'click', function (event) {
        const parentAccordionList = this.parentNode.parentNode
        const allowMultipleAccordionsOpen = Boolean(parentAccordionList.hasAttribute('allow-multiple'))

        const $this = this

        if (!allowMultipleAccordionsOpen) {
          const siblingAccordions = parentAccordionList.querySelectorAll('.page-accordion[open]')

          if (siblingAccordions && siblingAccordions.length >= 1) {
            Array.from(siblingAccordions).forEach(function (siblingAccordion) {
              if (siblingAccordion !== $this.parentNode) {
                siblingAccordion.removeAttribute('open')
              }
            })
          }
        }

        // accordionBodyElement.style.transition = 'display .6s linear'
        // accordionBodyElement.style.display = accordionBodyElement.style.display === 'none' || !accordionBodyElement.style.display ? 'block' : 'none'

        toggleAccordion($this.parentNode)
      })
    })
  })
})