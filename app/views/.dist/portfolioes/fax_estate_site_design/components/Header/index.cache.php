<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Body', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Banner', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Content', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuCtaWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuListWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('MenuContainer', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "fax_estate_site_design/logo-light.svg", 'alt' => "Fax Estate"]))), Capsule::CreateElement ('MenuBody', [], Capsule::CreateElement ('MenuListWrapper', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'About')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Portfolio')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Blog')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Contact')), Capsule::CreateElement ('li', ['class' => "menu"], Capsule::CreateElement ('button', ['type' => "button"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"]))))), Capsule::CreateElement ('MenuCtaWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('a', ['href' => "#"], 'Add living'))))), Capsule::CreateElement ('Body', [], Capsule::CreateElement ('Content', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('h1', [], 'Unlock your dream home now!'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Learn more'))), Capsule::CreateElement ('Banner', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "fax_estate_site_design/home.jpg", 'alt' => "Banner of today"]))))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>