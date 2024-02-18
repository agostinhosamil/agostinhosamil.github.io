<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('ResumePreviewContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('ResumePreview', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('ResumePreviewContainer', [], Capsule::CreateElement ('Image', ['src' => "agostinho-lopes-resume-preview.png"])); ?>
<?php }); ?>
<?php Capsule::Export ('ResumePreview'); ?>

<?php Capsule::Export ('ResumePreview'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>