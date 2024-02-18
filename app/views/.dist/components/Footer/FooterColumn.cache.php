<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('FooterColumnList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FooterColumnTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FooterColumnListContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('FooterColumn', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->links = !isset ($args['links']) ? [] : $args [ 'links' ];
?>
<?php  Capsule::PartialRender ('div', ['class' => "col-md-3"], Capsule::CreateElement ('div', ['class' => "footer-col-body"], Capsule::CreateElement ('FooterColumnTitle', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::CreateElement ('FooterColumnListContainer', [], Capsule::CreateElement ('FooterColumnList', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->links) ? $scope->links : []); $i++ ) {
	$scope->link = \Saml::Array2Object ($scope->links[ $i ]);

            

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['href' => $scope->link['href']], function($args, CapsuleScopeContext $scope){return $scope->link['label'];}));

} })))); ?>
<?php }); ?>
<?php Capsule::Export ('FooterColumn'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>