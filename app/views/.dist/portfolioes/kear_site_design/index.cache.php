<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('./components/Header')));

?>

<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('./components/Footer')));

?>


<?php
	Capsule::Import ('GlobalStyles', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('WorkDetailsSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('WorkDetailsSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSectionContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('CardListWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('KearSiteDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('GlobalStyles', []), Capsule::CreateElement ('Header', []), Capsule::CreateElement ('WorkDetailsSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'My skill depends on work'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse')), Capsule::CreateElement ('WorkDetailsSectionBody', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr7342203555ay = range(1, 6); for ( $i7342203555terator = 0; $i7342203555terator < count (is_array ($arr7342203555ay) ? $arr7342203555ay : []); $i7342203555terator++ ) {
	$scope->i = \Saml::Array2Object ($arr7342203555ay[ $i7342203555terator ]);

            

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-ambulance"]))), Capsule::CreateElement ('h4', [], 'Service Details ', function($args, CapsuleScopeContext $scope){return $scope->i;}), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'));

}}))), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-md-7 pr"], Capsule::CreateElement ('PageSectionContentWrapper', [], Capsule::CreateElement ('h2', [], 'About us'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non', 'proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Lets talk'))), Capsule::CreateElement ('div', ['class' => "col-md-5"], Capsule::CreateElement ('div', ['class' => "image-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "kear_site_design/image1.jpg", 'alt' => "Service"]))))))), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-md-5"], Capsule::CreateElement ('div', ['class' => "image-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "kear_site_design/image2.jpg", 'alt' => "Service"])))), Capsule::CreateElement ('div', ['class' => "col-md-7 pl"], Capsule::CreateElement ('PageSectionContentWrapper', [], Capsule::CreateElement ('h1', [], 'Fatest emergency departments'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet,', Capsule::CreateElement ('b', [], 'consectetur'), 'adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'cillum dolore eu fugiat nulla pariatur.', Capsule::CreateElement ('b', [], 'Excepteur'), 'sint occaecat cupidatat non', 'proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'), Capsule::CreateElement ('a', ['href' => "#", 'class' => "uncolored"], Capsule::CreateElement ('i', ['class' => "fa fa-play"]), Capsule::CreateElement ('span', [], 'Watch video'))))))), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'Our Doctors')), Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('CardListWrapper', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "kear_site_design/doctor1.png", 'alt' => "Doctor"])), Capsule::CreateElement ('strong', [], 'Michael Lee'), Capsule::CreateElement ('span', [], 'Neurology'), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-phone"]), '+61 234-3434-334')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "kear_site_design/doctor2.png", 'alt' => "Doctor"])), Capsule::CreateElement ('strong', [], 'Robert Ward'), Capsule::CreateElement ('span', [], 'Radiology'), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-phone"]), '+61 234-3434-354')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "kear_site_design/doctor3.png", 'alt' => "Doctor"])), Capsule::CreateElement ('strong', [], 'Fernanda Breei'), Capsule::CreateElement ('span', [], 'Cardiology'), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-phone"]), '+61 234-3434-335')))))), Capsule::CreateElement ('Footer', [])); ?>
<?php }); ?>
<?php Capsule::Export ('KearSiteDesign'); ?>

<?php $module->exports = Capsule::Element ('KearSiteDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>