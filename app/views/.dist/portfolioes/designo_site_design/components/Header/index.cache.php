<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('FlatImage', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('MenuBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('IconsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('NavigationMenu', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBannerLabel', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('BannerCaptionTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderMenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBannerContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBannerImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBannerContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('HeaderContainer', [], Capsule::CreateElement ('HeaderMenuContainer', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "designo_site_design/logo-dark.svg", 'alt' => "Designo"]))), Capsule::CreateElement ('MenuBody', [], Capsule::CreateElement ('MenuWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Collection')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Shop')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Journal')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Lookbook'))))), Capsule::CreateElement ('IconsWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-search"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-user-o"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-heart-o"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-shopping-bag"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'class' => "menu-button"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"])))))), Capsule::CreateElement ('NavigationMenu', ['id' => "data-navigation-menu"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('hr', []), Capsule::CreateElement ('ol', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Help center')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Data policy')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Privacy')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Terms and Conditions'))))))), Capsule::CreateElement ('HeaderBody', [], Capsule::CreateElement ('HeaderBannerContainer', [], Capsule::CreateElement ('BannerCaptionTitle', [], Capsule::CreateElement ('code', [], 'Season')), Capsule::CreateElement ('HeaderBannerContentWrapper', [], Capsule::CreateElement ('strong', [], 'Summer ', function($args, CapsuleScopeContext $scope){return date('Y');}), Capsule::CreateElement ('h1', [], 'Hello new season'), Capsule::CreateElement ('p', [], 'Limited time offer - Up to 60% off & Free shipping'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], Capsule::CreateElement ('span', [], 'Discover Now'))), Capsule::CreateElement ('HeaderBannerLabel', [], 'Scroll'), Capsule::CreateElement ('HeaderBannerImageWrapper', [], Capsule::CreateElement ('FlatImage', ['src' => "designo_site_design/header-banner-background.jpg"], Capsule::CreateElement ('Image', ['src' => "designo_site_design/model.png", 'alt' => "Designo - Model"])))))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>