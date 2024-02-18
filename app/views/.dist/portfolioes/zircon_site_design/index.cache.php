<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('./components/Header')));

?>

<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('./components/Footer')));

?>


<?php
	Capsule::Import ('Styles', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('InfoCard', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('InfoCardsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('InfoCardIcon', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FeaturesListContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FeaturesListsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FeaturesList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FeaturesPreview', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FeaturesListBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppOverViewDetailsContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppOverViewDetailsTitleWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppOverViewDetailsBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppOverViewDetailsImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppOverViewDetailsContent', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppOverViewDetailsList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppOverViewDetail', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppOverViewCtaWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardsListContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardsListTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardsListBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCard', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppDownloadAdContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppDownloadAd', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppDownloadAdImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppDownloadAdBody', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('ZirconSiteDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('Styles', []), Capsule::CreateElement ('Header', []), Capsule::CreateElement ('InfoCardsWrapper', [], function ($args, CapsuleScopeContext $scope) {$arr3444225714ay = range(1, 3); for ( $i3444225714terator = 0; $i3444225714terator < count (is_array ($arr3444225714ay) ? $arr3444225714ay : []); $i3444225714terator++ ) {
	$scope->i = \Saml::Array2Object ($arr3444225714ay[ $i3444225714terator ]);

        

 Capsule::PartialRender ('InfoCard', [], Capsule::CreateElement ('InfoCardIcon', [], Capsule::CreateElement ('Image', ['src' => "icon-plan-m.svg"])), Capsule::CreateElement ('h3', [], 'Pricing Guide'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'), Capsule::CreateElement ('div', ['class' => "button-wrapper"], Capsule::CreateElement ('a', ['role' => "button", 'href' => "#"], Capsule::CreateElement ('span', [], 'Learn more'), Capsule::CreateElement ('i', ['class' => "fa fa-arrow-right"]))));

}}), Capsule::CreateElement ('FeaturesListContainer', [], Capsule::CreateElement ('FeaturesListBody', [], Capsule::CreateElement ('div', ['class' => "features-list-title-wrapper"], Capsule::CreateElement ('h1', [], 'Featues'), Capsule::CreateElement ('h3', [], 'User friendly easy')), Capsule::CreateElement ('FeaturesListsWrapper', [], Capsule::CreateElement ('FeaturesList', [], function ($args, CapsuleScopeContext $scope) {$arr4282225714ay = range(1, 5); for ( $i4282225714terator = 0; $i4282225714terator < count (is_array ($arr4282225714ay) ? $arr4282225714ay : []); $i4282225714terator++ ) {
	$scope->i = \Saml::Array2Object ($arr4282225714ay[ $i4282225714terator ]);

              

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('div', ['class' => "icon-container"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-cubes"]))), Capsule::CreateElement ('div', ['class' => "feature-details-content"], Capsule::CreateElement ('strong', [], 'Featues ', function($args, CapsuleScopeContext $scope){return $scope->i;}), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod')));

}}), Capsule::CreateElement ('FeaturesPreview', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "phone-prev.png", 'alt' => "App Featues"]))), Capsule::CreateElement ('FeaturesList', [], function ($args, CapsuleScopeContext $scope) {$arr4834225714ay = range(1, 5); for ( $i4834225714terator = 0; $i4834225714terator < count (is_array ($arr4834225714ay) ? $arr4834225714ay : []); $i4834225714terator++ ) {
	$scope->i = \Saml::Array2Object ($arr4834225714ay[ $i4834225714terator ]);

              

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('div', ['class' => "icon-container"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-cubes"]))), Capsule::CreateElement ('div', ['class' => "feature-details-content"], Capsule::CreateElement ('strong', [], 'Featues ', function($args, CapsuleScopeContext $scope){return $scope->i;}), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod')));

}})))), Capsule::CreateElement ('AppOverViewDetailsContainer', [], Capsule::CreateElement ('AppOverViewDetailsTitleWrapper', [], Capsule::CreateElement ('h1', [], 'App overview'), Capsule::CreateElement ('h3', [], 'Our App Featues')), Capsule::CreateElement ('AppOverViewDetailsBody', [], Capsule::CreateElement ('AppOverViewDetailsImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "app-overview-image.png", 'alt' => "App overview"]))), Capsule::CreateElement ('AppOverViewDetailsContent', [], Capsule::CreateElement ('AppOverViewDetailsList', [], function ($args, CapsuleScopeContext $scope) {$arr5937225714ay = range(1, 4); for ( $i5937225714terator = 0; $i5937225714terator < count (is_array ($arr5937225714ay) ? $arr5937225714ay : []); $i5937225714terator++ ) {
	$scope->i = \Saml::Array2Object ($arr5937225714ay[ $i5937225714terator ]);

              

 Capsule::PartialRender ('AppOverViewDetail', [], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-check"]))), Capsule::CreateElement ('div', ['class' => "data-wrapper"], Capsule::CreateElement ('strong', [], 'AppOverViewDetailsBody'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam')));

}}), Capsule::CreateElement ('AppOverViewCtaWrapper', [], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], Capsule::CreateElement ('span', [], 'Get started now'), Capsule::CreateElement ('i', ['class' => "fa fa-arrow-right"])))))), Capsule::CreateElement ('PlanCardsListContainer', [], Capsule::CreateElement ('PlanCardsListTitle', [], Capsule::CreateElement ('h1', [], 'Pricing Plans'), Capsule::CreateElement ('h4', [], 'App subscription plan')), Capsule::CreateElement ('PlanCardsListBody', [], Capsule::CreateElement ('PlanCard', [], Capsule::CreateElement ('h3', [], 'Standard Edition'), Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-suitcase"]))), Capsule::CreateElement ('h5', [], '$ 2,340 / month'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', ['class' => "disabled"], 'Lorem ipsum'), Capsule::CreateElement ('li', ['class' => "disabled"], 'Lorem Laks Ans'), Capsule::CreateElement ('li', ['class' => "disabled"], 'Lorem Nams')), Capsule::CreateElement ('div', ['class' => "cta-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('button', ['type' => "button"], Capsule::CreateElement ('span', [], 'Purchase'), Capsule::CreateElement ('i', ['class' => "fa fa-arrow-right"]))))), Capsule::CreateElement ('PlanCard', ['class' => "highlight"], Capsule::CreateElement ('h3', [], 'Business Edition'), Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-suitcase"]))), Capsule::CreateElement ('h5', [], '$ 2,340 / month'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet')), Capsule::CreateElement ('div', ['class' => "cta-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('button', ['type' => "button"], Capsule::CreateElement ('span', [], 'Purchase'), Capsule::CreateElement ('i', ['class' => "fa fa-arrow-right"]))))), Capsule::CreateElement ('PlanCard', [], Capsule::CreateElement ('h3', [], 'Premium Edition'), Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-suitcase"]))), Capsule::CreateElement ('h5', [], '$ 2,340 / month'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('li', [], 'Lorem ipsum dolor sit amet')), Capsule::CreateElement ('div', ['class' => "cta-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('button', ['type' => "button"], Capsule::CreateElement ('span', [], 'Purchase'), Capsule::CreateElement ('i', ['class' => "fa fa-arrow-right"]))))))), Capsule::CreateElement ('AppDownloadAdContainer', [], Capsule::CreateElement ('AppDownloadAd', [], Capsule::CreateElement ('AppDownloadAdImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "phone-ad-mockup.png", 'alt' => "Download our app"]))), Capsule::CreateElement ('AppDownloadAdBody', [], Capsule::CreateElement ('h1', [], 'Download our App'), Capsule::CreateElement ('h3', [], 'Product review App'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'), Capsule::CreateElement ('div', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'title' => "Download at app store"], Capsule::CreateElement ('i', ['class' => "fa fa-apple"]), Capsule::CreateElement ('span', [], 'Download IOS'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'title' => "Download at playstore"], Capsule::CreateElement ('i', ['class' => "fa fa-google"]), Capsule::CreateElement ('span', [], 'Download Android'))))))))); ?>
<?php }); ?>
<?php Capsule::Export ('ZirconSiteDesign'); ?>

<?php $module->exports = Capsule::Element ('ZirconSiteDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>