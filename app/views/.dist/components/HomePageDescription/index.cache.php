<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('HomePageDescriptionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HomePageDescriptionTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HomePageDescriptionParagraphes', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HomePageDescriptionParagraph', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HomePageDescriptionButton', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HomePageDescriptionLinksWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('HomePageDescriptionLink', function ($args, CapsuleScopeContext $scope) {
$scope->icon = !isset ($args['icon']) ? null : $args [ 'icon' ];
$scope->href = !isset ($args['href']) ? null : $args [ 'href' ];
?>
<?php  Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['title' => 'visit my ' . $scope->icon . ' profile', 'href' => $scope->href, 'target' => "_new"], Capsule::CreateElement ('i', ['class' => join(' ', ['fa', 'fa-' . $scope->icon])]))); ?>
<?php }); ?>
<?php Capsule::Export ('HomePageDescriptionLink'); ?>

<?php Capsule::Def ('HomePageDescription', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('HomePageDescriptionContainer', [], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('div', ['class' => "x-page-desc-body"], Capsule::CreateElement ('HomePageDescriptionTitle', ['class' => "wow bounceInLeft"], 'Website, API and Desktop Application development', Capsule::CreateElement ('HomePageDescriptionLinksWrapper', [], Capsule::CreateElement ('HomePageDescriptionLink', ['icon' => "facebook", 'href' => "https://facebook.com/agostinhosaml"]), Capsule::CreateElement ('HomePageDescriptionLink', ['icon' => "twitter", 'href' => "https://twitter.com/agostinhosaml"]), Capsule::CreateElement ('HomePageDescriptionLink', ['icon' => "github", 'href' => "https://github.com/agostinhosamil"]), Capsule::CreateElement ('HomePageDescriptionLink', ['icon' => "linkedin", 'href' => "https://linkedin.com/in/agostinhosaml"])), Capsule::CreateElement ('span', [], 'Fullstack Developer')), Capsule::CreateElement ('HomePageDescriptionParagraphes', [], Capsule::CreateElement ('HomePageDescriptionParagraph', ['class' => "wow bounceInRight"], 'Hello..! I am Sam and I would like saying that I am really very glad to have you here [at my web site].', Capsule::CreateElement ('br', []), 'As I have sayd before, I am a fullstack web developer working about six years with some of the monst used programming languages in the web.', Capsule::CreateElement ('br', []), 'I would would be wonderfull helping you as I can do; and... Please, do not miss letting a message or a feedback about my work and what I have done for you.'), Capsule::CreateElement ('HomePageDescriptionParagraph', [], 'Trying to know  what else I have to. ✅')), Capsule::CreateElement ('HomePageDescriptionButton', [], Capsule::CreateElement ('a', ['href' => "/assets/files/sam-cv.pdf", 'target' => "_new"], 'View Resume'))))); ?>
<?php }); ?>
<?php Capsule::Export ('HomePageDescription'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>