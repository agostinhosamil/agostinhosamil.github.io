<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Content', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ServiceDetailsContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Footer', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('ServiceDetailsContainer', [], Capsule::CreateElement ('div', ['class' => "details-list-wrapper"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-gift"]))), Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('strong', [], 'Free Shipping'), Capsule::CreateElement ('p', [], 'Free shipping for all the store products'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-whatsapp"]))), Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('strong', [], '24H online support'), Capsule::CreateElement ('p', [], 'Free shipping for all the store products'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-money"]))), Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('strong', [], 'Money Return'), Capsule::CreateElement ('p', [], 'Free shipping for all the store products')))))), Capsule::CreateElement ('Content', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-lg-5"], Capsule::CreateElement ('div', ['class' => "company-data-wrapper"], Capsule::CreateElement ('div', ['class' => "logo-wrapper"], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/logo-light.svg"])), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-facebook"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-twitter"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-pinterest"])))))), Capsule::CreateElement ('div', ['class' => "col-lg-7"], Capsule::CreateElement ('div', ['class' => "footer-menu-lists-wrapper"], Capsule::CreateElement ('div', ['class' => "row"], function ($args, CapsuleScopeContext $scope) {$arr9965203556ay = range(1, 3); for ( $i9965203556terator = 0; $i9965203556terator < count (is_array ($arr9965203556ay) ? $arr9965203556ay : []); $i9965203556terator++ ) {
	$scope->n = \Saml::Array2Object ($arr9965203556ay[ $i9965203556terator ]);

                

 Capsule::PartialRender ('div', ['class' => "col-md-4"], Capsule::CreateElement ('h3', [], 'About the company'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'About US')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Careers')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Press')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Investor relations'))));

}})))), Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-md-12"], Capsule::CreateElement ('div', ['class' => "footer-copy-data-wrapper"], Capsule::CreateElement ('span', [], '2024, Asam - All rights reserved')))))); ?>
<?php }); ?>
<?php Capsule::Export ('Footer'); ?>

<?php $module->exports = Capsule::Element ('Footer'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>