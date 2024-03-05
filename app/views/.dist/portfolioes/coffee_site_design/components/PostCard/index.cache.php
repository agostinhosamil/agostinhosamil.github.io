<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('PostCardContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('PostCard', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->image = !isset ($args['image']) ? null : $args [ 'image' ];
$scope->subject = !isset ($args['subject']) ? 'Coffee Shop App' : $args [ 'subject' ];
?>
<?php  Capsule::PartialRender ('PostCardContainer', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => 'coffee_site_design/' . $scope->image, 'alt' => $scope->title])), Capsule::CreateElement ('strong', [], function($args, CapsuleScopeContext $scope){return $scope->subject;}), Capsule::CreateElement ('h4', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::CreateElement ('data', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-user-o"]), 'By Admin'), Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-calendar"]), 'Yesterday')))); ?>
<?php }); ?>
<?php Capsule::Export ('PostCard'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>