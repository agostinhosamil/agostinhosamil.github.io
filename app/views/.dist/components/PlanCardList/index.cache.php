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
<?php  Capsule::PartialRender ('PlanCardListContainer', [], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('div', ['class' => "x-product-wdgt"], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('span', [], 'Available plans if you wanna get in touch to talk about your project'), Capsule::CreateElement ('br', []), '👨🏾‍💻'), Capsule::CreateElement ('div', ['class' => "x-product-wdgt-row row wow bounceInLeft"], function ($args, CapsuleScopeContext $scope) {$arr1526060215ay = $scope->plans; for ( $i1526060215terator = 0; $i1526060215terator < count (is_array ($arr1526060215ay) ? $arr1526060215ay : []); $i1526060215terator++ ) {
	$scope->line = \Saml::Array2Object ($arr1526060215ay[ $i1526060215terator ]);

              

 Capsule::PartialRender ('PlanCardRow', [], function ($args, CapsuleScopeContext $scope) {$arr5323060215ay = $scope->line; for ( $i5323060215terator = 0; $i5323060215terator < count (is_array ($arr5323060215ay) ? $arr5323060215ay : []); $i5323060215terator++ ) {
	$scope->plan = \Saml::Array2Object ($arr5323060215ay[ $i5323060215terator ]);

                  
Capsule::PartialRender ('PlanCard', array_merge ((is_array ($ref06021519024343e = $scope->plan) ? $ref06021519024343e : []), []));

}});

}}))))); ?>
<?php }); ?>
<?php Capsule::Export ('PlanCardList'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>