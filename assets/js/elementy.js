uolkeo.$$ready(function () {
	var headerMenuListContainer = uolkeo.$$qs('.header-menu-list-container'),
			headerMenuButton = uolkeo.$$qs('.header-menu-button'),
			headerMenuListContainerEventNames = 'click contextmenu'.split(/\s+/);

	headerMenuListContainerEventNames.map(function ( headerMenuListContainerEventName ) {
		// headerMenuListContainerEventName
		uolkeo.$$addEvent(headerMenuListContainer, [ headerMenuListContainerEventName ], function () {
			headerMenuButton.parentNode.classList.remove('active-menu-button')
			headerMenuListContainer.classList.remove('show-menu')
		})
	})

	if ( headerMenuButton ) {
		uolkeo.$$addEvent(headerMenuButton, 'click', function ( clickEvent ) {
			clickEvent.preventDefault && clickEvent.preventDefault()

			if ( headerMenuListContainer ) {
				this.parentNode.classList.toggle('active-menu-button')
				headerMenuListContainer.classList.toggle('show-menu')
			}
		})
	}
})
