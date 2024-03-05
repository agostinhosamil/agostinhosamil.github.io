<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('FlatImage', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuListWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('BodyContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('CtaWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Body', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Content', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('MenuContainer', [], Capsule::CreateElement ('MenuBody', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "kear_site_design/logo-light.svg"]))), Capsule::CreateElement ('MenuListWrapper', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'About us')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Services')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Pricing')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Contact us')))), Capsule::CreateElement ('CtaWrapper', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Login')), Capsule::CreateElement ('li', ['class' => "menu-button"], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"]))))))), Capsule::CreateElement ('BodyContainer', [], Capsule::CreateElement ('Body', [], Capsule::CreateElement ('Content', [], Capsule::CreateElement ('h1', [], 'A better life starts with a beautyful smile'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Book online')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['class' => "outlined", 'href' => "#"], 'Apointment')))), Capsule::CreateElement ('ImageWrapper', [], Capsule::CreateElement ('div', ['class' => "content"], Capsule::CreateElement ('FlatImage', ['src' => "kear_site_design/doctor.jpg"])))))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>