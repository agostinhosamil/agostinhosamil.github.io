<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('PortfolioPreview', Capsule::RelativePathDecode (path ('@components/PortfolioPreview')));

?>

<?php Capsule::Def ('Portfolio', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('PortfolioPreview', ['portfolioProjects' => $this->portfolioProjects, 'paddingTop' => "0", 'paddingBottom' => "0", 'background' => "#ffffff"])); ?>
<?php }); ?>
<?php Capsule::Export ('Portfolio'); ?>

<?php $module->exports = Capsule::Element ('Portfolio'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>