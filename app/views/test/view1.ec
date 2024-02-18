@import { useAsync } from 'npm:capsule'

@def MyApp

  function getSomeUser () {
    return {
      data: {
        name: 'Sam'
      }
    }
  }

  async function getUsers () {
    'use php'

    const User = use('App/Models/User')

    const users = await User.all()

    return {
      data: {
        users
      }
    }
  }

  const $users = useAsync(getUsers)

  <div>
    <h1>Hello, App!!</h1>

    <ul>
      @for $user in $users
        <li>
          %{ $user->name }
        </li>
      @end
    </ul>
  </div>
@end
