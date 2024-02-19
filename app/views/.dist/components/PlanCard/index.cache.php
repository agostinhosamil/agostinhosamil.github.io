<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('DisabledPlanCardDetail', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardButton', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardPrice', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardBody', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('PlanCard', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->icon = !isset ($args['icon']) ? null : $args [ 'icon' ];
$scope->color = !isset ($args['color']) ? null : $args [ 'color' ];
$scope->price = !isset ($args['price']) ? null : $args [ 'price' ];
$scope->href = !isset ($args['href']) ? '#' : $args [ 'href' ];
$scope->details = !isset ($args['details']) ? [] : $args [ 'details' ];
?>
<?php  Capsule::PartialRender ('div', ['class' => "col-lg-4"], Capsule::CreateElement ('PlanCardContainer', ['color' => $scope->color], Capsule::CreateElement ('PlanCardWrapper', [], Capsule::CreateElement ('PlanCardTitle', [], Capsule::CreateElement ('Image', ['src' => $scope->icon]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('span', [], function($args, CapsuleScopeContext $scope){return $scope->title;})), Capsule::CreateElement ('PlanCardBody', [], function ($args, CapsuleScopeContext $scope) {if ( is_array ($scope->details) && $scope->details ) {
            

 Capsule::PartialRender ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr3956060215ay = $scope->details; for ( $i3956060215terator = 0; $i3956060215terator < count (is_array ($arr3956060215ay) ? $arr3956060215ay : []); $i3956060215terator++ ) {
	$scope->detail = \Saml::Array2Object ($arr3956060215ay[ $i3956060215terator ]);

Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( $scope->detail ['enabled'] ) {
                  

 Capsule::PartialRender ('li', [], function($args, CapsuleScopeContext $scope){return join (' ', [$scope->detail ['value'], $scope->detail ['label']]);});

}});
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( !$scope->detail ['enabled'] ) {
                  

 Capsule::PartialRender ('DisabledPlanCardDetail', [], function($args, CapsuleScopeContext $scope){return join (' ', [$scope->detail ['value'], $scope->detail ['label']]);});

}});
}});

}}, Capsule::CreateElement ('PlanCardPrice', [], '$ ', function($args, CapsuleScopeContext $scope){return $scope->price;})), Capsule::CreateElement ('PlanCardButton', [], Capsule::CreateElement ('a', ['target' => "_blank", 'href' => "https://www.workana.com/freelancer/a3937be9f1ea53a68b7166207ae70eeb#hire-a3937be9f1ea53a68b7166207ae70eeb"], 'Hire Now'))))); ?>
<?php }); ?>
<?php Capsule::Export ('PlanCard'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>