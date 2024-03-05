<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Script', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('./components/Header')));

?>

<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('./components/Footer')));

?>

<?php
	Capsule::Import ('SliderSection', Capsule::RelativePathDecode (path ('./components/SliderSection')));

?>

<?php
	Capsule::Import ('CollectionSlider', Capsule::RelativePathDecode (path ('./components/CollectionSlider')));
	Capsule::Import ('ListItem', Capsule::RelativePathDecode (path ('./components/CollectionSlider')));

?>


<?php
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ArrivalsList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ArrivalsSection', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AboutCompanySection', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ArrivalsSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductsBannerContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ServiceDescriptionContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('UbbioSiteDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('title', [], 'Ubbio'), Capsule::CreateElement ('Script', ['src' => "ubbio_site_design/main.js"])), Capsule::CreateElement ('Header', []), Capsule::CreateElement ('CollectionSlider', []), Capsule::CreateElement ('ServiceDescriptionContainer', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-lg-5"], Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('h2', [], 'Premium office Decor'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'), Capsule::CreateElement ('div', [], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Shop now')))), Capsule::CreateElement ('div', ['class' => "col-lg-7"], Capsule::CreateElement ('div', ['class' => "image-wrapper"], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/room.jpg", 'alt' => "Decor"])))), Capsule::CreateElement ('div', ['class' => "details-list-container"], Capsule::CreateElement ('ul', ['class' => "details-list"], function ($args, CapsuleScopeContext $scope) {$arr4812203557ay = range(1, 3); for ( $i4812203557terator = 0; $i4812203557terator < count (is_array ($arr4812203557ay) ? $arr4812203557ay : []); $i4812203557terator++ ) {
	$scope->i = \Saml::Array2Object ($arr4812203557ay[ $i4812203557terator ]);

            

 Capsule::PartialRender ('li', ['class' => "details-list-item"], Capsule::CreateElement ('div', ['class' => "details-list-item-container"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/tv.png"])), Capsule::CreateElement ('h5', [], 'Premium office Decor'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-star"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-star"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-star"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-star"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-star"])))), Capsule::CreateElement ('strong', [], '$40.00')));

}}))), Capsule::CreateElement ('AboutCompanySection', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-lg-5"], Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('span', [], 'About us'), Capsule::CreateElement ('h3', [], 'The company'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Learn more'))), Capsule::CreateElement ('div', ['class' => "col-lg-7"], Capsule::CreateElement ('div', ['class' => "image-wrapper"], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/room2.png"]))))), Capsule::CreateElement ('ArrivalsSection', [], Capsule::CreateElement ('Title', [], 'New Arrivals'), Capsule::CreateElement ('ArrivalsSectionBody', [], Capsule::CreateElement ('ArrivalsList', [], function ($args, CapsuleScopeContext $scope) {$arr7220203557ay = range(1, 6); for ( $i7220203557terator = 0; $i7220203557terator < count (is_array ($arr7220203557ay) ? $arr7220203557ay : []); $i7220203557terator++ ) {
	$scope->i = \Saml::Array2Object ($arr7220203557ay[ $i7220203557terator ]);

            

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/mov.png"]), Capsule::CreateElement ('div', [], Capsule::CreateElement ('span', [], 'Some Text - ', function($args, CapsuleScopeContext $scope){return $scope->i;})));

}}))), Capsule::CreateElement ('ProductsBannerContainer', [], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/room3.jpg"])), Capsule::CreateElement ('SliderSection', ['title' => "Best Seller"], function ($args, CapsuleScopeContext $scope) {$arr2133203557ay = range(1, 50); for ( $i2133203557terator = 0; $i2133203557terator < count (is_array ($arr2133203557ay) ? $arr2133203557ay : []); $i2133203557terator++ ) {
	$scope->n = \Saml::Array2Object ($arr2133203557ay[ $i2133203557terator ]);

        

 Capsule::PartialRender ('ListItem', [], Capsule::CreateElement ('div', ['class' => "slide-content"], Capsule::CreateElement ('div', ['class' => "image-wrapper"], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/tv.png", 'alt' => "Tv"])), Capsule::CreateElement ('h5', [], 'HD Television (', function($args, CapsuleScopeContext $scope){return $scope->n;}, ')')));

}}), Capsule::CreateElement ('Footer', [])); ?>
<?php }); ?>
<?php Capsule::Export ('UbbioSiteDesign'); ?>

<?php $module->exports = Capsule::Element ('UbbioSiteDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>