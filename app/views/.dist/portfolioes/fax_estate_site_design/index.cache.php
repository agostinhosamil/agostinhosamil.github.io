<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('FlatImage', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Ad', Capsule::RelativePathDecode (path ('./components/Ad')));

?>

<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('./components/Header')));

?>

<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('./components/Footer')));

?>


<?php
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HomeCtaBanner', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('CategoryListCol', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('CategoryListRow', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AboutWorkSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AboutSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HomeCtaBannerContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PartnersSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AboutSectionImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AboutWorkSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AboutSectionContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('QuickGuideSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('CategoryListSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('FaxEstateSiteDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('Header', []), Capsule::CreateElement ('AboutSectionContainer', [], Capsule::CreateElement ('AboutSectionImageWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "fax_estate_site_design/room.jpg", 'alt' => "Room"]))), Capsule::CreateElement ('AboutSectionContentWrapper', [], Capsule::CreateElement ('div', ['class' => "about-section-content-wrapper"], Capsule::CreateElement ('h6', [], 'About Us'), Capsule::CreateElement ('h1', [], 'Deram living spaces setting new build'), Capsule::CreateElement ('h4', [], 'Handpicked properties by our team'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-home"]))), Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('span', [], 'The perfect residency'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-home"]))), Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('span', [], 'The perfect residency'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-home"]))), Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('span', [], 'The perfect residency'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'))))))), Capsule::CreateElement ('Ad', ['subject' => "Explore neighborhood", 'title' => "Whats in neighborhood? Explore bellow", 'description' => "Single family residential property means a developed property which serves the primary purpose of providing a permanent.", 'link' => "/property/092", 'videoPoster' => "fax_estate_site_design/home1.jpg"]), Capsule::CreateElement ('QuickGuideSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'Find your dream home in a minute'), Capsule::CreateElement ('p', [], 'Handpicked properties by our team')), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('span', [], '1'), Capsule::CreateElement ('h4', [], 'Find a property you love'), Capsule::CreateElement ('p', [], 'Browse through our different homes and properties, save your favorite and contact us for a free tour.')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('span', [], '2'), Capsule::CreateElement ('h4', [], 'Meet an agent'), Capsule::CreateElement ('p', [], 'We connect to agents and property owners for a tour around your preffered home.')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('span', [], '3'), Capsule::CreateElement ('h4', [], 'Make it official'), Capsule::CreateElement ('p', [], 'Sign official documents and make payments so your can claim your new property or home.')))), Capsule::CreateElement ('CategoryListSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'Our most popular categories'), Capsule::CreateElement ('p', [], 'Handpicked properties by our team.')), Capsule::CreateElement ('CategoryListRow', [], Capsule::CreateElement ('CategoryListCol', ['class' => "expanded"], Capsule::CreateElement ('div', ['class' => "col-content"], Capsule::CreateElement ('FlatImage', ['src' => "fax_estate_site_design/room1.jpg"], Capsule::CreateElement ('span', [], 'Condos & Vilas')))), Capsule::CreateElement ('CategoryListCol', [], Capsule::CreateElement ('div', ['class' => "col-content"], Capsule::CreateElement ('FlatImage', ['src' => "fax_estate_site_design/room2.jpg"], Capsule::CreateElement ('span', [], 'Cozy Homes'))))), Capsule::CreateElement ('CategoryListRow', [], Capsule::CreateElement ('CategoryListCol', [], Capsule::CreateElement ('div', ['class' => "col-content"], Capsule::CreateElement ('FlatImage', ['src' => "fax_estate_site_design/room2.jpg"], Capsule::CreateElement ('span', [], 'Family Homes')))), Capsule::CreateElement ('CategoryListCol', ['class' => "expanded"], Capsule::CreateElement ('div', ['class' => "col-content"], Capsule::CreateElement ('FlatImage', ['src' => "fax_estate_site_design/room1.jpg"], Capsule::CreateElement ('span', [], 'Waterfront homes')))))), Capsule::CreateElement ('AboutWorkSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'Our work process'), Capsule::CreateElement ('p', [], 'Construction of itself, because it is pain, but because some proper style design occur in tail and pain pleasure we have expert team.')), Capsule::CreateElement ('AboutWorkSectionBody', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "fax_estate_site_design/1.jpg", 'alt' => "Meeting with our clients"])), Capsule::CreateElement ('h5', [], 'Meeting with our clients'), Capsule::CreateElement ('p', [], 'Meeting with our clients for all requirements for this project we start now')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "fax_estate_site_design/2.jpg", 'alt' => "Project planning"])), Capsule::CreateElement ('h5', [], 'Project planning'), Capsule::CreateElement ('p', [], 'Meeting with our clients for all requirements for this project we start now')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "fax_estate_site_design/3.jpg", 'alt' => "Construction & Finalize"])), Capsule::CreateElement ('h5', [], 'Construction & Finalize'), Capsule::CreateElement ('p', [], 'Meeting with our clients for all requirements for this project we start now'))))), Capsule::CreateElement ('HomeCtaBannerContainer', [], Capsule::CreateElement ('FlatImage', ['src' => "fax_estate_site_design/home.jpg", 'class' => "banner-image"]), Capsule::CreateElement ('HomeCtaBanner', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('h3', [], 'Looking for a dream home?'), Capsule::CreateElement ('p', [], 'Construction of itself, because it is pain, but because some proper style design occur in tail'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Explore more')))), Capsule::CreateElement ('PartnersSectionContainer', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr1179203553ay = range(1, 6); for ( $i1179203553terator = 0; $i1179203553terator < count (is_array ($arr1179203553ay) ? $arr1179203553ay : []); $i1179203553terator++ ) {
	$scope->id = \Saml::Array2Object ($arr1179203553ay[ $i1179203553terator ]);

          

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('Image', ['src' => 'fax_estate_site_design/company' . $scope->id . '.png', 'alt' => "Partner"]));

}})), Capsule::CreateElement ('Footer', [])); ?>
<?php }); ?>
<?php Capsule::Export ('FaxEstateSiteDesign'); ?>

<?php $module->exports = Capsule::Element ('FaxEstateSiteDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>