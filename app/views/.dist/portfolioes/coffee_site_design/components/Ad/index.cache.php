<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('FlatImage', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('AdContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Ad', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->subTitle = !isset ($args['subTitle']) ? null : $args [ 'subTitle' ];
$scope->content = !isset ($args['content']) ? null : $args [ 'content' ];
$scope->link = !isset ($args['link']) ? '#post' : $args [ 'link' ];
?>
<?php  Capsule::PartialRender ('AdContainer', [], Capsule::CreateElement ('FlatImage', ['src' => "coffee_site_design/coffee-seed.jpg"], Capsule::CreateElement ('data', [], Capsule::CreateElement ('h1', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), function ($args, CapsuleScopeContext $scope) {if ( $scope->subTitle ) {
          

 Capsule::PartialRender ('h2', [], function($args, CapsuleScopeContext $scope){return $scope->subTitle;});

}}, Capsule::CreateElement ('p', [], function($args, CapsuleScopeContext $scope){return $scope->content;}), Capsule::CreateElement ('a', ['href' => $scope->link], 'Leran more')))); ?>
<?php }); ?>
<?php Capsule::Export ('Ad'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>