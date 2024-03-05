<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Body', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Poster', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('DataWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlayerButton', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlayerButtonWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Ad', function ($args, CapsuleScopeContext $scope) {
$scope->subject = !isset ($args['subject']) ? null : $args [ 'subject' ];
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->description = !isset ($args['description']) ? null : $args [ 'description' ];
$scope->link = !isset ($args['link']) ? null : $args [ 'link' ];
$scope->videoPoster = !isset ($args['videoPoster']) ? null : $args [ 'videoPoster' ];
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('Body', [], Capsule::CreateElement ('DataWrapper', [], function ($args, CapsuleScopeContext $scope) {if ( !empty(trim($scope->subject)) ) {
          

 Capsule::PartialRender ('strong', [], function($args, CapsuleScopeContext $scope){return $scope->subject;});

}}, Capsule::CreateElement ('h1', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::CreateElement ('p', [], function($args, CapsuleScopeContext $scope){return $scope->description;}), function ($args, CapsuleScopeContext $scope) {if ( !empty(trim($scope->link)) ) {
          

 Capsule::PartialRender ('a', ['href' => $scope->link, 'role' => "button", 'target' => "_blank"], Capsule::CreateElement ('span', [], 'View property'), Capsule::CreateElement ('i', ['class' => "fa fa-long-arrow-right"]));

}})), Capsule::CreateElement ('Poster', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => $scope->videoPoster, 'alt' => "Property Ad"]))), Capsule::CreateElement ('PlayerButtonWrapper', [], Capsule::CreateElement ('PlayerButton', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-play"]))))); ?>
<?php }); ?>
<?php Capsule::Export ('Ad'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>