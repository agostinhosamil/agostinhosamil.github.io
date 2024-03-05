<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('ListItem', Capsule::RelativePathDecode (path ('./styles.css')));

?>


<?php
	Capsule::Import ('SliderSection', Capsule::RelativePathDecode (path ('../SliderSection')));

?>

<?php Capsule::Export ('ListItem'); ?>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       

<?php Capsule::Def ('CollectionSlider', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('SliderSection', ['title' => "Home SliderSection"], function ($args, CapsuleScopeContext $scope) {$arr4033203556ay = range(1, 10); for ( $i4033203556terator = 0; $i4033203556terator < count (is_array ($arr4033203556ay) ? $arr4033203556ay : []); $i4033203556terator++ ) {
	$scope->i = \Saml::Array2Object ($arr4033203556ay[ $i4033203556terator ]);

      

 Capsule::PartialRender ('ListItem', [], Capsule::CreateElement ('div', ['class' => "slide-content"], Capsule::CreateElement ('div', ['class' => "image-wrapper"], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/tv.png", 'alt' => "Tv"])), Capsule::CreateElement ('h5', [], 'HD Television (', function($args, CapsuleScopeContext $scope){return $scope->i;}, ')'), Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr9052203556ay = range(1, 5); for ( $i9052203556terator = 0; $i9052203556terator < count (is_array ($arr9052203556ay) ? $arr9052203556ay : []); $i9052203556terator++ ) {
	$scope->n = \Saml::Array2Object ($arr9052203556ay[ $i9052203556terator ]);

              

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-star"])));

}}), Capsule::CreateElement ('h6', [], '$40.00'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Add to cart')));

}}); ?>
<?php }); ?>
<?php Capsule::Export ('CollectionSlider'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>