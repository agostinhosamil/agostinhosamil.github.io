<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Styles', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuListWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuCtaWrappper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderCtaWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppStatsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('Styles', []), Capsule::CreateElement ('MenuContainer', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "banking_site_design/logo.png", 'alt' => "Banking site design"]))), Capsule::CreateElement ('MenuListWrapper', [], Capsule::CreateElement ('MenuList', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Company')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Features')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Contacts')), Capsule::CreateElement ('li', ['class' => "menu-button"], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"]))))), Capsule::CreateElement ('MenuCtaWrappper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('a', ['href' => "#"], 'Get card')))), Capsule::CreateElement ('HeaderBody', [], Capsule::CreateElement ('HeaderContentWrapper', [], Capsule::CreateElement ('h1', [], 'Smart Banking for your transaction'), Capsule::CreateElement ('p', [], 'a new way to make payments, easy reliable and secure. You can manage all your transactions from your mobile phone.'), Capsule::CreateElement ('HeaderCtaWrapper', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Get started')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['class' => "outlined", 'href' => "#"], 'Download app'))), Capsule::CreateElement ('AppStatsWrapper', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-shield"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('strong', [], '$12M+'), Capsule::CreateElement ('span', [], 'Transactions'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('strong', [], '12000+'), Capsule::CreateElement ('span', [], 'Active users'))))), Capsule::CreateElement ('HeaderImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "banking_site_design/cards.png"]))))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>