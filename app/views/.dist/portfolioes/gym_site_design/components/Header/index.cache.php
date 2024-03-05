<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuListContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('CtaWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('MenuContainer', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "gym_site_design/logo-primary.svg"]))), Capsule::CreateElement ('MenuListContainer', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Home')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Programs')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Schedule')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Trainers')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Contact us')))), Capsule::CreateElement ('CtaWrapper', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['class' => "uncolored", 'href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-user"]), Capsule::CreateElement ('span', [], 'Login'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('span', [], 'Register'))), Capsule::CreateElement ('li', ['class' => "menu-button-wrapper"], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"])))))), Capsule::CreateElement ('HeaderBody', [], Capsule::CreateElement ('HeaderContentWrapper', [], Capsule::CreateElement ('h1', [], 'Transform your body'), Capsule::CreateElement ('p', [], 'We help you to create shape of your body and saty healthy'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Join now'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], '120 K'), Capsule::CreateElement ('span', [], 'Happy clients')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], '24'), Capsule::CreateElement ('span', [], 'Years experience')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], '45+'), Capsule::CreateElement ('span', [], 'Expert trainers')))), Capsule::CreateElement ('HeaderImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "gym_site_design/trainers.png", 'alt' => "Trainers"]))))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>