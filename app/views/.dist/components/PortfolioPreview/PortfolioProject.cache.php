<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('FlatImage', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('PortfolioProjectLink', Capsule::RelativePathDecode (path ('./PortfolioProjectLink')));

?>


<?php
	Capsule::Import ('PortfolioProjectContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PortfolioProjectWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PortfolioProjectButtons', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PortfolioProjectBody', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('PortfolioProject', function ($args, CapsuleScopeContext $scope) {
$scope->url = !isset ($args['url']) ? null : $args [ 'url' ];
$scope->githubUrl = !isset ($args['githubUrl']) ? null : $args [ 'githubUrl' ];
$scope->thumbnail = !isset ($args['thumbnail']) ? '' : $args [ 'thumbnail' ];
?>
<?php  Capsule::PartialRender ('PortfolioProjectContainer', ['class' => "col-lg-6"], Capsule::CreateElement ('PortfolioProjectBody', [], Capsule::CreateElement ('PortfolioProjectWrapper', [], Capsule::CreateElement ('FlatImage', ['class' => "thumb", 'src' => join ('/', ['portfolio', $scope->thumbnail])], Capsule::CreateElement ('PortfolioProjectButtons', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('PortfolioProjectLink', ['title' => "View Project", 'icon' => "eye", 'href' => $scope->url]), Capsule::CreateElement ('PortfolioProjectLink', ['title' => "View Project on Github", 'icon' => "github", 'href' => $scope->githubUrl]))))))); ?>
<?php }); ?>
<?php Capsule::Export ('PortfolioProject'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>