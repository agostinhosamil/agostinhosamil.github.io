<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('FooterColumn', Capsule::RelativePathDecode (path ('./FooterColumn')));

?>

<?php
	Capsule::Import ('SocialMediaLink', Capsule::RelativePathDecode (path ('./SocialMediaLink')));

?>


<?php
	Capsule::Import ('FooterContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FooterBody', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Footer', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('FooterContainer', [], Capsule::CreateElement ('FooterBody', [], Capsule::CreateElement ('div', ['class' => "container"], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('FooterColumn', ['title' => "Pages", 'links' => [
              ['label' => 'Home', 'href' => '/'],
              ['label' => 'About', 'href' => '/about'],
              ['label' => 'Portfolio', 'href' => '/portfolio'],
              ['label' => 'Contact', 'href' => '/contact']
            ]]), Capsule::CreateElement ('FooterColumn', ['title' => "About Me", 'links' => [
              ['label' => 'Self Introduction', 'href' => '/about?XAboutMe#SelfIntro'],
              ['label' => 'Experience Description', 'href' => '/about?XAboutMe#ExperienceDescription'],
              ['label' => 'Where Finding Me', 'href' => '/about?XAboutMe#WhereFindingMe'],
              ['label' => 'Languages', 'href' => '/about?XAboutMe#Languages']
            ]]), Capsule::CreateElement ('FooterColumn', ['title' => "Get in Touch", 'links' => [
              ['label' => 'Send email', 'href' => 'mailto:agostinhosaml832@gmail.com'],
              ['label' => 'WhatsApp', 'href' => 'https://wa.me/923285171'],
              ['label' => 'Give a call', 'href' => 'tel:923285171'],
              ['label' => 'Hire me', 'href' => '/hire'],
              ['label' => 'Contact', 'href' => '/contact']
            ]]), Capsule::CreateElement ('FooterColumn', ['title' => "References", 'links' => [
              ['label' => 'Send Feedback', 'href' => '/'],
              ['label' => 'My Blog', 'href' => '/about'],
              ['label' => 'View my Resume', 'href' => '/portfolio'],
              ['label' => 'Visit my YOUTUBE channel', 'href' => '/contact']
            ]])), Capsule::CreateElement ('hr', []), Capsule::CreateElement ('div', ['class' => "row footer-details"], Capsule::CreateElement ('div', ['class' => "col-md-8"], Capsule::CreateElement ('span', ['class' => "footer-details-copyright"], 'Agostinho Lopes, ©2024. All rights reserved')), Capsule::CreateElement ('div', ['class' => "col-md-4"], Capsule::CreateElement ('div', ['class' => "footer-details-icons"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('SocialMediaLink', ['icon' => "facebook", 'href' => "https://facebook.com/agostinhosaml"]), Capsule::CreateElement ('SocialMediaLink', ['icon' => "twitter", 'href' => "https://twitter.com/agostinhosaml"]), Capsule::CreateElement ('SocialMediaLink', ['icon' => "github", 'href' => "https://github.com/agostinhosamil"]), Capsule::CreateElement ('SocialMediaLink', ['icon' => "linkedin", 'href' => "https://linkedin.com/in/agostinhosaml"])))))))); ?>
<?php }); ?>
<?php Capsule::Export ('Footer'); ?>

<?php Capsule::Export ('Footer'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>