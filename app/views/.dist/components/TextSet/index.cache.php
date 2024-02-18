<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TextSetSentence', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('TextSet', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->paragraphs = !isset ($args['paragraphs']) ? null : $args [ 'paragraphs' ];
$scope->rest = ArrayHelper::PropsBeyond (['children', 'title', 'paragraphs'], $args);
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('TextSetSentence', array_merge ((is_array ($ref10570418022928e = $scope->rest) ? $ref10570418022928e : []), ['id' => base64_encode($scope->title)]), Capsule::CreateElement ('h1', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::CreateElement ('div', [], function ($args, CapsuleScopeContext $scope) {$arr2245225704ay = $scope->paragraphs; for ( $i2245225704terator = 0; $i2245225704terator < count (is_array ($arr2245225704ay) ? $arr2245225704ay : []); $i2245225704terator++ ) {
	$scope->paragraph = \Saml::Array2Object ($arr2245225704ay[ $i2245225704terator ]);

          

 Capsule::PartialRender ('span', [], Capsule::CreateElement ('Fragment', [], function($args, CapsuleScopeContext $scope){return $scope->paragraph;}, Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', [])));

}}))); ?>
<?php }); ?>
<?php Capsule::Export ('TextSet'); ?>

<?php Capsule::Export ('TextSet'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>