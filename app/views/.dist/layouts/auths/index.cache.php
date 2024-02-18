<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('GlobalStyles', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Auths', function ($args, CapsuleScopeContext $scope) {
$scope->props = ArrayHelper::PropsBeyond (['children'], $args);
?>
<?php  Capsule::PartialRender ('body', [], Capsule::CreateElement ('GlobalStyles', []), Capsule::Yield (null, array_merge ((is_array ($ref10570718024093e = $scope->props) ? $ref10570718024093e : []), []))); ?>
<?php }); ?>
<?php Capsule::Export ('Auths'); ?>

<?php $module->exports = Capsule::Element ('Auths'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>