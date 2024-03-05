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
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('TextSetSentence', array_merge ((is_array ($ref08354104036991e = $scope->rest) ? $ref08354104036991e : []), ['id' => base64_encode($scope->title)]), Capsule::CreateElement ('h1', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::CreateElement ('div', [], function ($args, CapsuleScopeContext $scope) {$arr8087203541ay = $scope->paragraphs; for ( $i8087203541terator = 0; $i8087203541terator < count (is_array ($arr8087203541ay) ? $arr8087203541ay : []); $i8087203541terator++ ) {
	$scope->paragraph = \Saml::Array2Object ($arr8087203541ay[ $i8087203541terator ]);

          

 Capsule::PartialRender ('span', [], Capsule::CreateElement ('Fragment', [], function($args, CapsuleScopeContext $scope){return $scope->paragraph;}, Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', [])));

}}))); ?>
<?php }); ?>
<?php Capsule::Export ('TextSet'); ?>

<?php Capsule::Export ('TextSet'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>