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
<?php  Capsule::PartialRender ('Container', [], function ($args, CapsuleScopeContext $scope) {$arr4411225704ay = $scope->sets; for ( $i4411225704terator = 0; $i4411225704terator < count (is_array ($arr4411225704ay) ? $arr4411225704ay : []); $i4411225704terator++ ) {
	$scope->set = \Saml::Array2Object ($arr4411225704ay[ $i4411225704terator ]);

      

 Capsule::PartialRender ('Link', [], Capsule::CreateElement ('a', ['href' => join ('', ['#', base64_encode($scope->set['title'])])], Capsule::CreateElement ('span', [], function($args, CapsuleScopeContext $scope){return $scope->set['title'];})));

}}); ?>
<?php }); ?>
<?php Capsule::Export ('TextSetsLinks'); ?>

<?php Capsule::Export ('TextSetsLinks'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>