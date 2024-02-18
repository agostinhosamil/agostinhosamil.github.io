<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('ProductDetailsContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductDetailsTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductDetailsBody', Capsule::RelativePathDecode (path ('./styles.css')));

?>


<?php
	Capsule::Import ('ProductDetailsRow', Capsule::RelativePathDecode (path ('./ProductDetailsRow')));

?>

<?php
	Capsule::Import ('ProductDetail', Capsule::RelativePathDecode (path ('./ProductDetail')));

?>

<?php Capsule::Def ('ProductDetails', function ($args, CapsuleScopeContext $scope) {
$scope->productDetails = !isset ($args['productDetails']) ? [] : $args [ 'productDetails' ];
?>
<?php  Capsule::PartialRender ('ProductDetailsContainer', [], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('ProductDetailsTitle', [], 'Skills & Abilities'), Capsule::CreateElement ('ProductDetailsBody', [], function ($args, CapsuleScopeContext $scope) {if ( is_array ($scope->productDetails) ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->productDetails) ? $scope->productDetails : []); $i++ ) {
	$scope->line = \Saml::Array2Object ($scope->productDetails[ $i ]);
            

 Capsule::PartialRender ('ProductDetailsRow', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->line) ? $scope->line : []); $i++ ) {
	$scope->productDetail = \Saml::Array2Object ($scope->line[ $i ]);

                
Capsule::PartialRender ('ProductDetail', ['skill' => $scope->productDetail]);

} });

}});
}}))); ?>
<?php }); ?>
<?php Capsule::Export ('ProductDetails'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>