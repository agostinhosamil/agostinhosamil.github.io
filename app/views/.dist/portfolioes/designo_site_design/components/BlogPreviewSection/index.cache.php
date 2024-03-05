<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('FlatImage', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('../../styles.css')));

?>


<?php
	Capsule::Import ('BlogPreviewSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('BlogPreviewSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ListWraper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('BlogPreviewSection', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('BlogPreviewSectionContainer', [], Capsule::CreateElement ('BlogPreviewSectionBody', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'Latest in Blog')), Capsule::CreateElement ('ListWraper', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr7746203550ay = range(1, 16); for ( $i7746203550terator = 0; $i7746203550terator < count (is_array ($arr7746203550ay) ? $arr7746203550ay : []); $i7746203550terator++ ) {
	$scope->i = \Saml::Array2Object ($arr7746203550ay[ $i7746203550terator ]);

            

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('FlatImage', ['src' => "designo_site_design/index.jpg"]), Capsule::CreateElement ('span', [], 'By Admin'), Capsule::CreateElement ('span', [], 'yesterday'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non')));

}})))); ?>
<?php }); ?>
<?php Capsule::Export ('BlogPreviewSection'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>