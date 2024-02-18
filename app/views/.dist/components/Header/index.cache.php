<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Fragment', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('HeaderContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>


<?php
	Capsule::Import ('HeaderMenuItem', Capsule::RelativePathDecode (path ('./HeaderMenuItem')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('HeaderContainer', ['class' => "header-container", 'id' => "header"], Capsule::CreateElement ('div', ['class' => "header-menu"], Capsule::CreateElement ('div', ['class' => "header-menu-body"], Capsule::CreateElement ('div', ['class' => "header-menu-list-container"], Capsule::CreateElement ('ul', ['class' => "header-menu-list"], Capsule::CreateElement ('HeaderMenuItem', ['link' => "/", 'iconName' => "home", 'selected' => $this->selected], 'Home'), Capsule::CreateElement ('HeaderMenuItem', ['link' => "/about", 'iconName' => "user"], 'About'), Capsule::CreateElement ('HeaderMenuItem', ['link' => "/portfolio", 'iconName' => "trophy"], 'Portfolio'), Capsule::CreateElement ('HeaderMenuItem', ['link' => "/blog", 'iconName' => "feed"], 'Blog'), Capsule::CreateElement ('HeaderMenuItem', ['link' => "/contact", 'iconName' => "phone"], 'Contact'))), Capsule::CreateElement ('div', ['class' => "header-menu-button-container"], Capsule::CreateElement ('a', ['class' => "header-menu-button", 'href' => "#menu"], Capsule::CreateElement ('i', ['class' => "fa fa-bars"]))))), Capsule::CreateElement ('div', ['class' => "header-details wow hinge"], Capsule::CreateElement ('div', ['class' => "header-details-body"], Capsule::CreateElement ('div', ['class' => "header-details-title"], 'Agostinho (Sam)'), Capsule::CreateElement ('div', ['class' => "header-details-desc"], 'Trying to know what else I have to.', Capsule::CreateElement ('br', [])), Capsule::CreateElement ('div', ['class' => "header-details-action"], Capsule::CreateElement ('a', ['href' => "/about.html"], 'About'))))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?>

<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>