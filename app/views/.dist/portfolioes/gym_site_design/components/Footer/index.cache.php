<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FooterBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('DataWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FooterMenuListsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FooterMenuListWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('SocialMediaLinksWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Footer', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('FooterBody', [], Capsule::CreateElement ('DataWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "gym_site_design/logo-primary-light.svg", 'alt' => ""])), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam')), Capsule::CreateElement ('FooterMenuListsWrapper', [], Capsule::CreateElement ('FooterMenuListWrapper', [], Capsule::CreateElement ('h1', [], 'Menu'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home page')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Pricing')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Community')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Progress')))), Capsule::CreateElement ('FooterMenuListWrapper', [], Capsule::CreateElement ('h1', [], 'Services'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home page')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Pricing')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Community')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Progress')))), Capsule::CreateElement ('FooterMenuListWrapper', [], Capsule::CreateElement ('h1', [], 'Pricing'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home page')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Pricing')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Community')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Progress'))))), Capsule::CreateElement ('SocialMediaLinksWrapper', [], Capsule::CreateElement ('h1', [], 'Follow us:'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "https://www.twitter.com/fitness-gym", 'target' => "_blank"], Capsule::CreateElement ('i', ['class' => "fa fa-twitter"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "https://www.facebook.com/fitness-gym", 'target' => "_blank"], Capsule::CreateElement ('i', ['class' => "fa fa-facebook"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "https://www.instagram.com/fitness-gym", 'target' => "_blank"], Capsule::CreateElement ('i', ['class' => "fa fa-instagram"]))))))); ?>
<?php }); ?>
<?php Capsule::Export ('Footer'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>