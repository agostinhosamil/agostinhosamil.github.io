<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('$logo', Capsule::RelativePathDecode (path ('./logo.svg')));

?>

<?php
	Capsule::Import ('$image', Capsule::RelativePathDecode (path ('./header-img1.svg')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuButtonWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBodyImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBodyContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Menu', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('MenuContainer', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('img', ['src' => $scope->logo, 'alt' => "Zircon App"]))), Capsule::CreateElement ('MenuBody', [], Capsule::CreateElement ('Menu', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'class' => "selected"], 'Home page')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Features')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'About')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Pricing')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Contact')), Capsule::CreateElement ('li', ['class' => "menu-close-button"], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-close"]))))), Capsule::CreateElement ('MenuButtonWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('button', ['type' => "button", 'id' => "header-menu-button"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"]))))), Capsule::CreateElement ('HeaderBody', [], Capsule::CreateElement ('HeaderBodyImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('img', ['src' => $scope->image]))), Capsule::CreateElement ('HeaderBodyContentWrapper', [], Capsule::CreateElement ('div', ['class' => "content"], Capsule::CreateElement ('h1', [], 'World Number 01'), Capsule::CreateElement ('h2', [], 'Product review App'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non', 'proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'), Capsule::CreateElement ('div', ['class' => "cta-wrapper"], Capsule::CreateElement ('button', ['type' => "button"], Capsule::CreateElement ('span', [], 'Download Now'), Capsule::CreateElement ('i', ['class' => "fa fa-arrow-right"]))))))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>