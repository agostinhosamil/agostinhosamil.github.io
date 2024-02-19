<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Skills', function ($args, CapsuleScopeContext $scope) {
$scope->skills = !(isset ($args ['data'])) ? null : $args ['data'];
?>
<?php  Capsule::PartialRender ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr6632060224ay = $scope->skills; for ( $i6632060224terator = 0; $i6632060224terator < count (is_array ($arr6632060224ay) ? $arr6632060224ay : []); $i6632060224terator++ ) {
	$scope->skill = \Saml::Array2Object ($arr6632060224ay[ $i6632060224terator ]);

      

 Capsule::PartialRender ('li', ['style' => ['backgroundColor' => $scope->skill->color
        ]], function($args, CapsuleScopeContext $scope){return $scope->skill->title;});

}}); ?>
<?php }); ?>
<?php Capsule::Export ('Skills'); ?>

<?php $module->exports = Capsule::Element ('Skills'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>