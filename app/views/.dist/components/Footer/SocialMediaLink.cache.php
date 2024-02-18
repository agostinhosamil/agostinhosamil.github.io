<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('SocialMediaLink', function ($args, CapsuleScopeContext $scope) {
$scope->icon = !isset ($args['icon']) ? null : $args [ 'icon' ];
$scope->href = !isset ($args['href']) ? '#' : $args [ 'href' ];
?>
<?php  Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['target' => "_blank", 'href' => $scope->href], Capsule::CreateElement ('i', ['class' => "fa fa-" . $scope->icon]))); ?>
<?php }); ?>
<?php Capsule::Export ('SocialMediaLink'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>