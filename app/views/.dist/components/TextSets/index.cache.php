<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('TextSet', Capsule::RelativePathDecode (path ('@components/TextSet')));

?>

<?php Capsule::Def ('TextSets', function ($args, CapsuleScopeContext $scope) {
$scope->sets = !isset ($args['sets']) ? null : $args [ 'sets' ];
?>
<?php  Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( is_array ($scope->sets) && $scope->sets ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {$arr5299203541ay = $scope->sets; for ( $i5299203541terator = 0; $i5299203541terator < count (is_array ($arr5299203541ay) ? $arr5299203541ay : []); $i5299203541terator++ ) {
	$scope->set = \Saml::Array2Object ($arr5299203541ay[ $i5299203541terator ]);
        

 Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('TextSet', array_merge ((is_array ($ref08354104034805e = $scope->set) ? $ref08354104034805e : []), [])), Capsule::CreateElement ('br', []));

}});
}}); ?>
<?php }); ?>
<?php Capsule::Export ('TextSets'); ?>

<?php Capsule::Export ('TextSets'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>