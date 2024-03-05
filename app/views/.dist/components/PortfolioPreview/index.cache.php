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
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('PortfolioPreviewContainer', array_merge ((is_array ($ref08353904039531e = $scope->rest) ? $ref08353904039531e : []), []), Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('div', ['class' => "row wow bounceInRight"], Capsule::CreateElement ('div', ['class' => "col-md-12"], Capsule::CreateElement ('PortfolioPreviewTitle', [], 'Projects'))), Capsule::CreateElement ('br', []), Capsule::CreateElement ('PortfolioPreviewBody', ['class' => "wow bounceInLeft"], function ($args, CapsuleScopeContext $scope) {if ( is_array($scope->portfolioProjects) && $scope->portfolioProjects ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {$arr6032203539ay = array_slice ($scope->portfolioProjects, 0, is_numeric($scope->maxLines) ? (int)$scope->maxLines : count($scope->portfolioProjects)); for ( $i6032203539terator = 0; $i6032203539terator < count (is_array ($arr6032203539ay) ? $arr6032203539ay : []); $i6032203539terator++ ) {
	$scope->line = \Saml::Array2Object ($arr6032203539ay[ $i6032203539terator ]);
              

 Capsule::PartialRender ('PortfolioPreviewRow', ['class' => "row"], function ($args, CapsuleScopeContext $scope) {$arr5355203539ay = $scope->line; for ( $i5355203539terator = 0; $i5355203539terator < count (is_array ($arr5355203539ay) ? $arr5355203539ay : []); $i5355203539terator++ ) {
	$scope->project = \Saml::Array2Object ($arr5355203539ay[ $i5355203539terator ]);

                  
Capsule::PartialRender ('PortfolioProject', array_merge ((is_array ($ref08353904033502e = $scope->project) ? $ref08353904033502e : []), []));

}});

}});
}}), Capsule::CreateElement ('br', []), function ($args, CapsuleScopeContext $scope) {if ( !!(is_numeric($scope->maxLines) && $scope->maxLines >= 1) ) {
          

 Capsule::PartialRender ('div', ['class' => "row wow bounceInRight"], Capsule::CreateElement ('div', ['class' => "col-md-12"], Capsule::CreateElement ('PortfolioPreviewLink', ['href' => "/portfolio"], Capsule::CreateElement ('span', [], 'View More Projects'))));

}}))); ?>
<?php }); ?>
<?php Capsule::Export ('PortfolioPreview'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>