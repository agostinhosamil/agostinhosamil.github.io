<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('TextSets', Capsule::RelativePathDecode (path ('@components/TextSets')));

?>

<?php
	Capsule::Import ('TextSetsLinks', Capsule::RelativePathDecode (path ('@components/TextSetsLinks')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('About', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-md-3"], Capsule::CreateElement ('TextSetsLinks', ['sets' => $this->textSets])), Capsule::CreateElement ('div', ['class' => "col-md-7"], Capsule::CreateElement ('TextSets', ['sets' => $this->textSets])))); ?>
<?php }); ?>
<?php Capsule::Export ('About'); ?>

<?php $module->exports = Capsule::Element ('About'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>