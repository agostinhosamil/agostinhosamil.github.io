<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('AccordionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AccordionListContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Accordion', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->content = !isset ($args['content']) ? null : $args [ 'content' ];
?>
<?php  Capsule::PartialRender ('AccordionContainer', [], Capsule::CreateElement ('input', ['type' => "radio", 'id' => $scope->title, 'name' => "accordion:cc"]), Capsule::CreateElement ('label', ['for' => $scope->title], Capsule::CreateElement ('h4', [], function($args, CapsuleScopeContext $scope){return $scope->title;}, Capsule::CreateElement ('i', ['class' => "fa fa-minus"]), Capsule::CreateElement ('i', ['class' => "fa fa-plus"])), Capsule::CreateElement ('p', [], function($args, CapsuleScopeContext $scope){return $scope->content;}))); ?>
<?php }); ?>
<?php Capsule::Export ('Accordion'); ?>

<?php Capsule::Def ('AccordionList', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('AccordionListContainer', [], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('AccordionList'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>