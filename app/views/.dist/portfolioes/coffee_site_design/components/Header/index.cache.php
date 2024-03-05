<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('HeaderContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('CtaWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Content', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('HeaderContainer', [], Capsule::CreateElement ('MenuContainer', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "coffee_site_design/logo-primary.svg"]))), Capsule::CreateElement ('MenuBody', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['class' => "selected", 'href' => "#"], 'Home')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Menu')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'About us')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Promotions')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Contact us')))), Capsule::CreateElement ('CtaWrapper', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['class' => "outlined", 'href' => "#"], 'Sign in')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Sign up')), Capsule::CreateElement ('li', ['class' => "menu-button-wrapper"], Capsule::CreateElement ('button', ['type' => "button"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"])))))), Capsule::CreateElement ('HeaderBody', [], Capsule::CreateElement ('Content', [], Capsule::CreateElement ('h1', [], 'The best coffee for you'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'), Capsule::CreateElement ('a', ['href' => "#"], 'View menu')), Capsule::CreateElement ('ImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "coffee_site_design/coffee.png", 'alt' => "Coffee - The best for you"]))))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>