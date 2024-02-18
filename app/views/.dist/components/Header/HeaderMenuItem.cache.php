<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('HeaderMenuItem', function ($args, CapsuleScopeContext $scope) {
$scope->link = !isset ($args['link']) ? null : $args [ 'link' ];
$scope->iconName = !isset ($args['iconName']) ? null : $args [ 'iconName' ];
$scope->selected = !isset ($args['selected']) ? false : $args [ 'selected' ];
?>
<?php  Capsule::PartialRender ('li', ['class' => "header-menu-list-item"], Capsule::CreateElement ('a', ['class' => "header-menu-list-item-link" . ($scope->selected ? ' selected' : ''), 'href' => $scope->link], Capsule::CreateElement ('i', ['class' => "fa fa-" . $scope->iconName]), Capsule::CreateElement ('span', [], Capsule::Yield (null, [])))); ?>
<?php }); ?>
<?php Capsule::Export ('HeaderMenuItem'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>