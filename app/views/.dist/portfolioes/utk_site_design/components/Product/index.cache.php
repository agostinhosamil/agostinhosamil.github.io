<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Bullet', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ImageContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('DataWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Product', function ($args, CapsuleScopeContext $scope) {
$scope->color = !isset ($args['color']) ? null : $args [ 'color' ];
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->description = !isset ($args['description']) ? null : $args [ 'description' ];
$scope->style = !isset ($args['style']) ? null : $args [ 'style' ];
$scope->image = !isset ($args['image']) ? null : $args [ 'image' ];
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('ImageWrapper', [], Capsule::CreateElement ('ImageContainer', ['color' => $scope->color], Capsule::CreateElement ('Image', ['src' => $scope->image, 'alt' => $scope->title]))), Capsule::CreateElement ('DataWrapper', [], Capsule::CreateElement ('h4', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('Bullet', ['color' => "orange"]), Capsule::CreateElement ('Bullet', ['color' => "red"]), Capsule::CreateElement ('Bullet', ['color' => "teal"]), Capsule::CreateElement ('Bullet', ['color' => "blue"]), Capsule::CreateElement ('Bullet', ['color' => "yellow"])), Capsule::CreateElement ('p', [], function($args, CapsuleScopeContext $scope){return $scope->description;}), Capsule::CreateElement ('div', [], Capsule::CreateElement ('button', [], Capsule::CreateElement ('i', ['class' => "fa fa-cart-plus"]), Capsule::CreateElement ('span', [], 'Adicionar ao carrinho'))))); ?>
<?php }); ?>
<?php Capsule::Export ('Product'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>