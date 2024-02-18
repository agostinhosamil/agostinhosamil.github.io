<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>


<?php
	Capsule::Import ('$undrawBlogingRe', Capsule::RelativePathDecode (path ('./undraw_blogging_re_kl0d.svg')));

?>

<?php Capsule::Def ('Blog', function ($args, CapsuleScopeContext $scope) {
$scope->props = !isset ($args['props']) ? null : $args [ 'props' ];
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('ImageWrapper', [], Capsule::CreateElement ('img', ['src' => $scope->undrawBlogingRe])), Capsule::CreateElement ('Title', [], 'Blog available soon :)')); ?>
<?php }); ?>
<?php Capsule::Export ('Blog'); ?>

<?php $module->exports = Capsule::Element ('Blog'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>