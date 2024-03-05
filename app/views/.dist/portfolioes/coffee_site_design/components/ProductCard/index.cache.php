<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('ProductCardContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('DataWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('ProductCard', function ($args, CapsuleScopeContext $scope) {
$scope->name = !isset ($args['name']) ? null : $args [ 'name' ];
$scope->description = !isset ($args['description']) ? null : $args [ 'description' ];
$scope->price = !isset ($args['price']) ? null : $args [ 'price' ];
$scope->image = !isset ($args['image']) ? null : $args [ 'image' ];
?>
<?php  Capsule::PartialRender ('ProductCardContainer', [], Capsule::CreateElement ('ImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => 'coffee_site_design/' . $scope->image, 'alt' => "ProductCard"]))), Capsule::CreateElement ('DataWrapper', [], Capsule::CreateElement ('h4', [], function($args, CapsuleScopeContext $scope){return $scope->name;}), Capsule::CreateElement ('p', [], function($args, CapsuleScopeContext $scope){return $scope->description;}), Capsule::CreateElement ('div', ['class' => "card-options"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], Capsule::CreateElement ('i', ['class' => "fa fa-cart-plus"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['class' => "uncolored", 'href' => "#", 'role' => "button"], Capsule::CreateElement ('i', ['class' => "fa fa-heart-o"])))), Capsule::CreateElement ('strong', [], function($args, CapsuleScopeContext $scope){return $scope->price;})))); ?>
<?php }); ?>
<?php Capsule::Export ('ProductCard'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>