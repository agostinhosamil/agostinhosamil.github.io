<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('PortfolioProjectLinkContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('PortfolioProjectLink', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->icon = !isset ($args['icon']) ? null : $args [ 'icon' ];
$scope->href = !isset ($args['href']) ? '#' : $args [ 'href' ];
?>
<?php  Capsule::PartialRender ('PortfolioProjectLinkContainer', ['href' => $scope->href, 'target' => "_new", 'title' => $scope->title], Capsule::CreateElement ('content', [], Capsule::CreateElement ('i', ['class' => join ('', ["fa fa-", $scope->icon])]))); ?>
<?php }); ?>
<?php Capsule::Export ('PortfolioProjectLink'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>