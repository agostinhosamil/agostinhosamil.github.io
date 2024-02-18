<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Dashboard', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'Dashboard view works..!')); ?>
<?php }); ?>
<?php Capsule::Export ('Dashboard'); ?>

<?php $module->exports = Capsule::Element ('Dashboard'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>