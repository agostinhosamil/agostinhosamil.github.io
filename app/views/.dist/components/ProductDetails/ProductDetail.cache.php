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

}})), Capsule::CreateElement ('ProductDetailBody', [], Capsule::CreateElement ('ProductDetailTitle', [], Capsule::CreateElement ('span', [], function($args, CapsuleScopeContext $scope){return $scope->skill->title;})), Capsule::CreateElement ('ProductDetailDesc', [], Capsule::CreateElement ('ProductDetailDescList', [], function ($args, CapsuleScopeContext $scope) {$arr1831203540ay = $scope->skill->getDetails (); for ( $i1831203540terator = 0; $i1831203540terator < count (is_array ($arr1831203540ay) ? $arr1831203540ay : []); $i1831203540terator++ ) {
	$scope->paragraph = \Saml::Array2Object ($arr1831203540ay[ $i1831203540terator ]);

              

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['style' => ['backgroundColor' => $scope->skill->color ]]), function($args, CapsuleScopeContext $scope){return $scope->paragraph;}));

}}))))); ?>
<?php }); ?>
<?php Capsule::Export ('ProductDetail'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>