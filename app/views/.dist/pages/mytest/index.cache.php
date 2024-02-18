<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Test', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('h1', [], 'This is my test')); ?>
<?php }); ?>
<?php Capsule::Export ('Test'); ?>

<?php $module->exports = Capsule::Element ('Test'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>