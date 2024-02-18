<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Application', Capsule::RelativePathDecode (path ('@views/.dist/layouts/application')));

?>

<?php Capsule::Def ('MyTest', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Application', [], Capsule::CreateElement ('div', ['style' => [ 'backgroundColor' => 'red' ]], Capsule::Yield (null, []))); ?>
<?php }); ?>
<?php Capsule::Export ('MyTest'); ?>

<?php $module->exports = Capsule::Element ('MyTest'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>