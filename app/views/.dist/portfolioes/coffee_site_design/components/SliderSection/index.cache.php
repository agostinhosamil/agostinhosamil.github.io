<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('PageSectionContainer', Capsule::RelativePathDecode (path ('../../styles.css')));
	Capsule::Import ('PageSectionBody', Capsule::RelativePathDecode (path ('../../styles.css')));
	Capsule::Import ('PageSectionTitle', Capsule::RelativePathDecode (path ('../../styles.css')));

?>


<?php
	Capsule::Import ('SliderContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('SliderListWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('SliderNavigation', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('SliderList', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('SliderSection', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->subTitle = !isset ($args['subTitle']) ? null : $args [ 'subTitle' ];
?>
<?php  Capsule::PartialRender ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], function ($args, CapsuleScopeContext $scope) {if ( $scope->title ) {
        

 Capsule::PartialRender ('PageSectionTitle', [], Capsule::CreateElement ('h1', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), function ($args, CapsuleScopeContext $scope) {if ( $scope->subTitle ) {
            

 Capsule::PartialRender ('p', [], function($args, CapsuleScopeContext $scope){return $scope->subTitle;});

}});

}}, Capsule::CreateElement ('SliderContainer', [], Capsule::CreateElement ('SliderListWrapper', [], Capsule::CreateElement ('SliderList', [], Capsule::Yield (null, []))), Capsule::CreateElement ('SliderNavigation', [], Capsule::CreateElement ('button', ['class' => "btn-prev"], Capsule::CreateElement ('i', ['class' => "fa fa-angle-left"])), Capsule::CreateElement ('button', ['class' => "btn-next"], Capsule::CreateElement ('i', ['class' => "fa fa-angle-right"])))))); ?>
<?php }); ?>
<?php Capsule::Export ('SliderSection'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>