<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ListWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ControllsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('List', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('SliderSection', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('Title', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::CreateElement ('ListWrapper', ['data-slider' => ""], Capsule::CreateElement ('List', ['data-slider' => ""], Capsule::Yield (null, [])), Capsule::CreateElement ('ControllsWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('button', ['class' => "prev"], Capsule::CreateElement ('i', ['class' => "fa fa-angle-left"])), Capsule::CreateElement ('button', ['class' => "next"], Capsule::CreateElement ('i', ['class' => "fa fa-angle-right"])))))); ?>
<?php }); ?>
<?php Capsule::Export ('SliderSection'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>