<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Body', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('BodyContent', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuIconsList', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('MenuContainer', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "ubbio_site_design/logo-light.svg", 'alt' => "Logo"]))), Capsule::CreateElement ('MenuList', [], Capsule::CreateElement ('li', ['class' => "collapse"], Capsule::CreateElement ('button', ['type' => "button"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Furniture')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Shop')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Page')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Contact'))), Capsule::CreateElement ('MenuIconsList', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-search"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-heart"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-shopping-cart"]))))), Capsule::CreateElement ('Body', [], Capsule::CreateElement ('BodyContent', [], Capsule::CreateElement ('h1', [], 'Home Modern Furniture'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Shop Now')))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?>

<?php $module->exports = Capsule::Element ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>