@import { useAsync } from 'npm:capsule'

@def MyApp

  async function getUsers () {
    'use php'

    const Exception = use('Exception')
    const User = use('App/Models/User')

    const users = await User.all()

    return {
      data: users,

      dataType: 'array',

      fallback: {
        notArray: data => [data],

        error: error => {
          throw new Exception(error)
        }
      }
    }
  }

  const $users = useAsync(async () => {
    'use php'

    const data = await getUsers()

    return {
      data
    }
  })

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
