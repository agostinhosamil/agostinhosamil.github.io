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
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {$arr848060217ay = $scope->sets; for ( $i848060217terator = 0; $i848060217terator < count (is_array ($arr848060217ay) ? $arr848060217ay : []); $i848060217terator++ ) {
	$scope->set = \Saml::Array2Object ($arr848060217ay[ $i848060217terator ]);
        

 Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('TextSet', array_merge ((is_array ($ref06021719028405e = $scope->set) ? $ref06021719028405e : []), [])), Capsule::CreateElement ('br', []));

}});
}}); ?>
<?php }); ?>
<?php Capsule::Export ('TextSets'); ?>

<?php Capsule::Export ('TextSets'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>