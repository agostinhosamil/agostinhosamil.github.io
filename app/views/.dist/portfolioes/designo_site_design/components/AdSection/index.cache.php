<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('AdSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AdSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AdSectionTimer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AdSectionWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AdSectionContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AdSectionImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('AdSection', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('AdSectionContainer', [], Capsule::CreateElement ('AdSectionWrapper', [], Capsule::CreateElement ('AdSectionContentWrapper', [], Capsule::CreateElement ('AdSectionBody', [], Capsule::CreateElement ('strong', [], 'Summer 2023'), Capsule::CreateElement ('h1', [], 'Spring', Capsule::CreateElement ('i', [], 'Collection')), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], Capsule::CreateElement ('span', [], 'Shop now'))), Capsule::CreateElement ('AdSectionTimer', [], Capsule::CreateElement ('strong', [], '06 : 07 : 09 : 03'), Capsule::CreateElement ('span', [], 'Days Hour Min Sec'))), Capsule::CreateElement ('AdSectionImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "designo_site_design/model5.png", 'alt' => "ad"]))))); ?>
<?php }); ?>
<?php Capsule::Export ('AdSection'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>