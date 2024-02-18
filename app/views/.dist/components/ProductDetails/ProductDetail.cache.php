<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('ProductDetailDesc', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductDetailBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductDetailTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductDetailCounter', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductDetailDescList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductDetailContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductDetailCounterContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

                                                                                                       

<?php Capsule::Def ('ProductDetail', function ($args, CapsuleScopeContext $scope) {
$scope->skill = !isset ($args['skill']) ? null : $args [ 'skill' ];
?>
<?php  Capsule::PartialRender ('div', ['class' => "col-md-4"], Capsule::CreateElement ('ProductDetailContainer', ['class' => "color"], Capsule::CreateElement ('ProductDetailCounterContainer', [], Capsule::CreateElement ('ProductDetailCounter', [], Capsule::CreateElement ('div', ['style' => ['width' => join ('', [$scope->skill->level, '%']),'backgroundColor' => $scope->skill->color
            ]]), function ($args, CapsuleScopeContext $scope) {if ( $scope->skill->level >= 60 ) {
            

 Capsule::PartialRender ('i', [], function($args, CapsuleScopeContext $scope){return $scope->skill->level;}, '%');

}}, function ($args, CapsuleScopeContext $scope) {if ( $scope->skill->level < 60 ) {
            

 Capsule::PartialRender ('i', ['style' => ['color' => '#333333' ]], function($args, CapsuleScopeContext $scope){return $scope->skill->level;}, '%');

}})), Capsule::CreateElement ('ProductDetailBody', [], Capsule::CreateElement ('ProductDetailTitle', [], Capsule::CreateElement ('span', [], function($args, CapsuleScopeContext $scope){return $scope->skill->title;})), Capsule::CreateElement ('ProductDetailDesc', [], Capsule::CreateElement ('ProductDetailDescList', [], function ($args, CapsuleScopeContext $scope) {$arr5672225703ay = $scope->skill->getDetails (); for ( $i5672225703terator = 0; $i5672225703terator < count (is_array ($arr5672225703ay) ? $arr5672225703ay : []); $i5672225703terator++ ) {
	$scope->paragraph = \Saml::Array2Object ($arr5672225703ay[ $i5672225703terator ]);

              

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['style' => ['backgroundColor' => $scope->skill->color ]]), function($args, CapsuleScopeContext $scope){return $scope->paragraph;}));

}}))))); ?>
<?php }); ?>
<?php Capsule::Export ('ProductDetail'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>