<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Skills', function ($args, CapsuleScopeContext $scope) {
$scope->skills = !(isset ($args ['data'])) ? null : $args ['data'];
?>
<?php  Capsule::PartialRender ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr3539203559ay = $scope->skills; for ( $i3539203559terator = 0; $i3539203559terator < count (is_array ($arr3539203559ay) ? $arr3539203559ay : []); $i3539203559terator++ ) {
	$scope->skill = \Saml::Array2Object ($arr3539203559ay[ $i3539203559terator ]);

      

 Capsule::PartialRender ('li', ['style' => ['backgroundColor' => $scope->skill->color
        ]], function($args, CapsuleScopeContext $scope){return $scope->skill->title;});

}}); ?>
<?php }); ?>
<?php Capsule::Export ('Skills'); ?>

<?php $module->exports = Capsule::Element ('Skills'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>