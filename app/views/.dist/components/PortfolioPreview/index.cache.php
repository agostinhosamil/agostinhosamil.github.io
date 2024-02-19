<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('PortfolioProject', Capsule::RelativePathDecode (path ('./PortfolioProject')));

?>


<?php
	Capsule::Import ('PortfolioPreviewContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PortfolioPreviewTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PortfolioPreviewLink', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PortfolioPreviewBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PortfolioPreviewRow', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('PortfolioPreview', function ($args, CapsuleScopeContext $scope) {
$scope->portfolioProjects = !isset ($args['portfolioProjects']) ? [] : $args [ 'portfolioProjects' ];
$scope->maxLines = !isset ($args['maxLines']) ? null : $args [ 'maxLines' ];
$scope->rest = ArrayHelper::PropsBeyond (['children', 'portfolioProjects', 'maxLines'], $args);
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('PortfolioPreviewContainer', array_merge ((is_array ($ref0602161902864e = $scope->rest) ? $ref0602161902864e : []), []), Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('div', ['class' => "row wow bounceInRight"], Capsule::CreateElement ('div', ['class' => "col-md-12"], Capsule::CreateElement ('PortfolioPreviewTitle', [], 'Projects'))), Capsule::CreateElement ('br', []), Capsule::CreateElement ('PortfolioPreviewBody', ['class' => "wow bounceInLeft"], function ($args, CapsuleScopeContext $scope) {if ( is_array($scope->portfolioProjects) && $scope->portfolioProjects ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {$arr9614060216ay = array_slice ($scope->portfolioProjects, 0, is_numeric($scope->maxLines) ? (int)$scope->maxLines : count($scope->portfolioProjects)); for ( $i9614060216terator = 0; $i9614060216terator < count (is_array ($arr9614060216ay) ? $arr9614060216ay : []); $i9614060216terator++ ) {
	$scope->line = \Saml::Array2Object ($arr9614060216ay[ $i9614060216terator ]);
              

 Capsule::PartialRender ('PortfolioPreviewRow', ['class' => "row"], function ($args, CapsuleScopeContext $scope) {$arr8831060216ay = $scope->line; for ( $i8831060216terator = 0; $i8831060216terator < count (is_array ($arr8831060216ay) ? $arr8831060216ay : []); $i8831060216terator++ ) {
	$scope->project = \Saml::Array2Object ($arr8831060216ay[ $i8831060216terator ]);

                  
Capsule::PartialRender ('PortfolioProject', array_merge ((is_array ($ref06021619027487e = $scope->project) ? $ref06021619027487e : []), []));

}});

}});
}}), Capsule::CreateElement ('br', []), function ($args, CapsuleScopeContext $scope) {if ( !!(is_numeric($scope->maxLines) && $scope->maxLines >= 1) ) {
          

 Capsule::PartialRender ('div', ['class' => "row wow bounceInRight"], Capsule::CreateElement ('div', ['class' => "col-md-12"], Capsule::CreateElement ('PortfolioPreviewLink', ['href' => "/portfolio"], Capsule::CreateElement ('span', [], 'View More Projects'))));

}}))); ?>
<?php }); ?>
<?php Capsule::Export ('PortfolioPreview'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>