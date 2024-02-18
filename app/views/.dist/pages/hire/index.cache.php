<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('PlanCardList', Capsule::RelativePathDecode (path ('@components/PlanCardList')));

?>

<?php Capsule::Def ('Hire', function ($args, CapsuleScopeContext $scope) {
?>
<?php Capsule::PartialRender ('PlanCardList', ['plans' => $this->hirePlans]); ?>
<?php }); ?>
<?php Capsule::Export ('Hire'); ?>

<?php $module->exports = Capsule::Element ('Hire'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>