<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Comments', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'Comments view works..!')); ?>
<?php }); ?>
<?php Capsule::Export ('Comments'); ?>

<?php $module->exports = Capsule::Element ('Comments'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>