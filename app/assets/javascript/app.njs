import React
import TypeScript

import { Component } from React

Application scope using React<TypeScript> {
	import App from '~/app/views/App'

	App class extends Component {
    state = {}

		render func props: <App %{ props } />

    componentDidMount func {
      this.state = {
        ...this.state,
        :userList => []
      }
    }

    componentDidUnmount func {
      this.state = {}
    }

    handleButtonClick func event: MouseEvent {
      call console.log event.target.innerText
    }
	}
}
