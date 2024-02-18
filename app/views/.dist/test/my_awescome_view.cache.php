<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('MyApp', function ($args, CapsuleScopeContext $scope) {
?>
function buttonClickHandler () {
    console.log('Hey man, I am sending these data from the form');
  }

  

<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('form', ['method' => "post", 'action' => "/"], Capsule::CreateElement ('input', ['type' => "text", 'name' => "name"]), Capsule::CreateElement ('input', ['type' => "text", 'name' => "email"]), Capsule::CreateElement ('button', ['onClick' => { buttonClickHandler }], 'Register'))); ?>
<?php }); ?>
<?php Capsule::Export ('MyApp'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>