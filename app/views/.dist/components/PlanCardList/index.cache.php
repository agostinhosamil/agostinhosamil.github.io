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
<?php  Capsule::PartialRender ('PlanCardListContainer', [], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('div', ['class' => "x-product-wdgt"], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('span', [], 'Available plans if you wanna get in touch to talk about your project'), Capsule::CreateElement ('br', []), '👨🏾‍💻'), Capsule::CreateElement ('div', ['class' => "x-product-wdgt-row row wow bounceInLeft"], function ($args, CapsuleScopeContext $scope) {$arr8569203539ay = $scope->plans; for ( $i8569203539terator = 0; $i8569203539terator < count (is_array ($arr8569203539ay) ? $arr8569203539ay : []); $i8569203539terator++ ) {
	$scope->line = \Saml::Array2Object ($arr8569203539ay[ $i8569203539terator ]);

              

 Capsule::PartialRender ('PlanCardRow', [], function ($args, CapsuleScopeContext $scope) {$arr5138203539ay = $scope->line; for ( $i5138203539terator = 0; $i5138203539terator < count (is_array ($arr5138203539ay) ? $arr5138203539ay : []); $i5138203539terator++ ) {
	$scope->plan = \Saml::Array2Object ($arr5138203539ay[ $i5138203539terator ]);

                  
Capsule::PartialRender ('PlanCard', array_merge ((is_array ($ref08353904036327e = $scope->plan) ? $ref08353904036327e : []), []));

}});

}}))))); ?>
<?php }); ?>
<?php Capsule::Export ('PlanCardList'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>