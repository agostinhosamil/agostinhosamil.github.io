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
<?php  Capsule::PartialRender ('Container', [], function ($args, CapsuleScopeContext $scope) {$arr730060217ay = $scope->sets; for ( $i730060217terator = 0; $i730060217terator < count (is_array ($arr730060217ay) ? $arr730060217ay : []); $i730060217terator++ ) {
	$scope->set = \Saml::Array2Object ($arr730060217ay[ $i730060217terator ]);

      

 Capsule::PartialRender ('Link', [], Capsule::CreateElement ('a', ['href' => join ('', ['#', base64_encode($scope->set['title'])])], Capsule::CreateElement ('span', [], function($args, CapsuleScopeContext $scope){return $scope->set['title'];})));

}}); ?>
<?php }); ?>
<?php Capsule::Export ('TextSetsLinks'); ?>

<?php Capsule::Export ('TextSetsLinks'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>