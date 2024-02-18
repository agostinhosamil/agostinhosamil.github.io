<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('ProductDetailsRow', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', ['class' => "row wow lightSpeedIn"], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('ProductDetailsRow'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>