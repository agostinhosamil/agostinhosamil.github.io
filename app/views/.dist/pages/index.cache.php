<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('HomePageDescription', Capsule::RelativePathDecode (path ('@components/HomePageDescription')));

?>

<?php
	Capsule::Import ('PortfolioPreview', Capsule::RelativePathDecode (path ('@components/PortfolioPreview')));

?>

<?php
	Capsule::Import ('ProductDetails', Capsule::RelativePathDecode (path ('@components/ProductDetails')));

?>

<?php
	Capsule::Import ('ResumePreview', Capsule::RelativePathDecode (path ('@components/ResumePreview')));

?>

<?php
	Capsule::Import ('PlanCardList', Capsule::RelativePathDecode (path ('@components/PlanCardList')));

?>

<?php
	Capsule::Import ('ContactForm', Capsule::RelativePathDecode (path ('@components/ContactForm')));

?>

<?php Capsule::Def ('Index', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('HomePageDescription', []), Capsule::CreateElement ('ProductDetails', ['productDetails' => $this->skills]), Capsule::CreateElement ('PortfolioPreview', ['portfolioProjects' => $this->portfolioProjects, 'maxLines' => 2]), Capsule::CreateElement ('ResumePreview', []), Capsule::CreateElement ('ContactForm', []), Capsule::CreateElement ('PlanCardList', ['plans' => $this->hirePlans])); ?>
<?php }); ?>
<?php Capsule::Export ('Index'); ?>

<?php $module->exports = Capsule::Element ('Index'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>