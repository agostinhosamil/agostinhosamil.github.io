<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Sam', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'Sam view works..!')); ?>
<?php }); ?>
<?php Capsule::Export ('Sam'); ?>

<?php $module->exports = Capsule::Element ('Sam'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>