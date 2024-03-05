<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('CopyData', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('DataWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuListsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Footer', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-lg-4"], Capsule::CreateElement ('DataWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "fax_estate_site_design/logo-light.svg", 'alt' => "Fax estate"])), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.'), Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', ['class' => "fa fa-envelope-o"]), 'info@fax-estate.co'))), Capsule::CreateElement ('div', ['class' => "col-lg-8"], Capsule::CreateElement ('MenuListsWrapper', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-md-4"], Capsule::CreateElement ('h4', [], 'Important links'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Themeforest')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Themeforest')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Themeforest')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Themeforest')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Themeforest')))), Capsule::CreateElement ('div', ['class' => "col-md-4"], Capsule::CreateElement ('h4', [], 'Quick link'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'FAQ')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Support')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Blog')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Pricing')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Categories')))), Capsule::CreateElement ('div', ['class' => "col-md-4"], Capsule::CreateElement ('h4', [], 'Contact'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], '+244 923-285-171')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], '+244 923-285-171')), Capsule::CreateElement ('li', ['class' => "expanded"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-facebook"])), Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-twitter"])), Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-pinterest"])))))))))), Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('CopyData', [], Capsule::CreateElement ('span', [], 'Fax Estate, ©2024 - All rights reserved')))); ?>
<?php }); ?>
<?php Capsule::Export ('Footer'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>