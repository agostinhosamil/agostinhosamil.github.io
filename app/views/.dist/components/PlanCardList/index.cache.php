<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('PlanCard', Capsule::RelativePathDecode (path ('../PlanCard')));

?>


<?php
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardListContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardRow', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('PlanCardList', function ($args, CapsuleScopeContext $scope) {
$scope->plans = !isset ($args['plans']) ? [] : $args [ 'plans' ];
?>
<?php  Capsule::PartialRender ('PlanCardListContainer', [], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('div', ['class' => "x-product-wdgt"], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('span', [], 'Available plans if you wanna get in touch to talk about your project'), Capsule::CreateElement ('br', []), '👨🏾‍💻'), Capsule::CreateElement ('div', ['class' => "x-product-wdgt-row row wow bounceInLeft"], function ($args, CapsuleScopeContext $scope) {$arr9451225701ay = $scope->plans; for ( $i9451225701terator = 0; $i9451225701terator < count (is_array ($arr9451225701ay) ? $arr9451225701ay : []); $i9451225701terator++ ) {
	$scope->line = \Saml::Array2Object ($arr9451225701ay[ $i9451225701terator ]);

              

 Capsule::PartialRender ('PlanCardRow', [], function ($args, CapsuleScopeContext $scope) {$arr1349225701ay = $scope->line; for ( $i1349225701terator = 0; $i1349225701terator < count (is_array ($arr1349225701ay) ? $arr1349225701ay : []); $i1349225701terator++ ) {
	$scope->plan = \Saml::Array2Object ($arr1349225701ay[ $i1349225701terator ]);

                  
Capsule::PartialRender ('PlanCard', array_merge ((is_array ($ref1057011802197e = $scope->plan) ? $ref1057011802197e : []), []));

}});

}}))))); ?>
<?php }); ?>
<?php Capsule::Export ('PlanCardList'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>