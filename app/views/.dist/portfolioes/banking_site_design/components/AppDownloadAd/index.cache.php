<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('AppDownloadAd', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('ContentWrapper', [], Capsule::CreateElement ('h1', [], 'Discover our mobile app'), Capsule::CreateElement ('p', [], 'Discover our mobile app and get the best outcome of online banking enjoy your everyday transaction'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('i', ['class' => "fa fa-android"])), Capsule::CreateElement ('div', [], Capsule::CreateElement ('span', [], 'Get it on'), Capsule::CreateElement ('strong', [], 'Play Store')))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['class' => "white", 'href' => "#", 'role' => "button"], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('i', ['class' => "fa fa-apple"])), Capsule::CreateElement ('div', [], Capsule::CreateElement ('span', [], 'Download on the'), Capsule::CreateElement ('strong', [], 'App Store'))))))); ?>
<?php }); ?>
<?php Capsule::Export ('AppDownloadAd'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>