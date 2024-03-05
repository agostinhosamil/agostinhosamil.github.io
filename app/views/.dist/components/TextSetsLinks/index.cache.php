<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Link', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('TextSetsLinks', function ($args, CapsuleScopeContext $scope) {
$scope->sets = !isset ($args['sets']) ? null : $args [ 'sets' ];
?>
<?php  Capsule::PartialRender ('Container', [], function ($args, CapsuleScopeContext $scope) {$arr1988203541ay = $scope->sets; for ( $i1988203541terator = 0; $i1988203541terator < count (is_array ($arr1988203541ay) ? $arr1988203541ay : []); $i1988203541terator++ ) {
	$scope->set = \Saml::Array2Object ($arr1988203541ay[ $i1988203541terator ]);

      

 Capsule::PartialRender ('Link', [], Capsule::CreateElement ('a', ['href' => join ('', ['#', base64_encode($scope->set['title'])])], Capsule::CreateElement ('span', [], function($args, CapsuleScopeContext $scope){return $scope->set['title'];})));

}}); ?>
<?php }); ?>
<?php Capsule::Export ('TextSetsLinks'); ?>

<?php Capsule::Export ('TextSetsLinks'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>