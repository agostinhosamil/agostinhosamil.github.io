<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('useState', Capsule::RelativePathDecode (path ('npm:react')));
	Capsule::Import ('useRef', Capsule::RelativePathDecode (path ('npm:react')));

?>

<?php Capsule::Def ('MyApp', function ($args, CapsuleScopeContext $scope) {
?>
[formError, setFormError] = useState({})
  
  getFormData = async ([name = 'Sam', email, [[[da, propTe, [[someProp], otherProp]]]], { role, permitions: userPeritions } = { role:'admin', permitions: ['create','edit','show' ] }]) => {
    'use server'

    const FormData = use('App.Utils.FormData');

    const { username, password } = FormData.getFormData()

    return {
      action:'store',
      username,
      password
    }
  }

  handleUserRegister = async data => {
    'use server'

    const User = use('App.Models.User')

    const user = await User.create({
      data
    })

    return user
  }

  async function makeMeThink () {
    'use server'

    const Post = use('App.Models.Post')

    const post = await Post.create({
      category:'sales',
      title: 'How to sell more'
    })

    return post
  }

  s = async () => {
    'use server'
  }

  const d = async () => {
    'use server'

    return {
      action:'read'
    }
  }

  submitLogin = async ({ request, response }, name) => {
    'use server'

    const { password, email } = request.only(['password','email' ])

    const Auth = use('App.Services.Auth');

    const authenticated = Auth.attempt({ password, email })

    if (authenticated) {
      return response.redirect('/dashboard')
    }

    setFormError({
      type:'unauthorized',
      message: 'Wrong credentials!!'
    })
  }

  

<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('form', ['method' => "post", 'action' => { submitLogin }], function ($args, CapsuleScopeContext $scope) {if ( isset($scope->formError['type' ]) ) {
        

 Capsule::PartialRender ('div', [], function($args, CapsuleScopeContext $scope){return $scope->formError['message' ];});

}}, Capsule::CreateElement ('input', ['type' => "text", 'name' => "email"]), Capsule::CreateElement ('input', ['type' => "password", 'name' => "password"]), Capsule::CreateElement ('button', ['onClick' => { buttonClickHandler }], 'Register')), function ($args, CapsuleScopeContext $scope) {if ( Auth::isAdmin() ) {
      

 Capsule::PartialRender ('h1', [], 'Admin');

    
} elseif (Auth::isEditor()) {
      

 Capsule::PartialRender ('h1', [], 'Editor');

    
} else {
      

 Capsule::PartialRender ('h1', [], 'Guest');

}}); ?>
<?php }); ?>
<?php Capsule::Export ('MyApp'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>