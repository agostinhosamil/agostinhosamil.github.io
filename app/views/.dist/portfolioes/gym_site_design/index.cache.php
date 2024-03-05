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
	Capsule::Import ('GlobalStyles', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ParthnersList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ServiceSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ServiceCard', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCardList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PlanCard', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TrainersCardList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AboutCompanySectionContentWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ScheduleListsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ScheduleListItem', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ScheduleList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductCard', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductsCardList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductsCardListWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductsCardListNavigation', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('GallerySectionBody', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('GymSiteDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('GlobalStyles', []), Capsule::CreateElement ('Header', []), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('ParthnersList', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array (range(1, 8)) ? range(1, 8) : []); $i++ ) {
	$scope->i = \Saml::Array2Object (range(1, 8)[ $i ]);

            

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('Image', ['src' => "gym_site_design/parthner.png"]));

} }))), Capsule::CreateElement ('PageSectionContainer', ['backgroundColor' => "#000000"], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('AboutCompanySectionContentWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "gym_site_design/trainer1.png"])), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], 'About us')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('h2', [], 'Welcome to our fitness gym')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('p', [], 'I made the right choise choosing the fitclub and by', 'choosing the right plan and program I already achieved my ideal body')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Explore more')))))), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('ServiceSectionBody', [], Capsule::CreateElement ('h1', [], 'Our', Capsule::CreateElement ('b', [], 'services')), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse'), Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr9322203554ay = range(1, 9); for ( $i9322203554terator = 0; $i9322203554terator < count (is_array ($arr9322203554ay) ? $arr9322203554ay : []); $i9322203554terator++ ) {
	$scope->i = \Saml::Array2Object ($arr9322203554ay[ $i9322203554terator ]);

              

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('ServiceCard', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "gym_site_design/image1.jpg"])), Capsule::CreateElement ('strong', [], 'Service Name ', function($args, CapsuleScopeContext $scope){return $scope->i;}), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non')));

}})))), Capsule::CreateElement ('PageSectionContainer', ['backgroundColor' => "#000000"], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h5', [], 'Pricing plan'), Capsule::CreateElement ('h2', [], 'Member special plan'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse')), Capsule::CreateElement ('PlanCardList', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('PlanCard', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('h5', [], 'Daily Plan'), Capsule::CreateElement ('strong', [], '$16'), Capsule::CreateElement ('data', [], Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], 'Connection with coach')), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], '3 hour of practice')))), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Join now'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('PlanCard', ['class' => "colored"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('h5', [], 'Weekly Plan'), Capsule::CreateElement ('strong', [], '$24'), Capsule::CreateElement ('data', [], Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], 'Consultation with coach')), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], '6 hour of practice')), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], 'Free Consultation')))), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Join now'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('PlanCard', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('h5', [], 'Monthly Plan'), Capsule::CreateElement ('strong', [], '$32'), Capsule::CreateElement ('data', [], Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], 'Free Consultation')), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], 'Consultation with coach')), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], '3 hour of practice')), Capsule::CreateElement ('p', [], Capsule::CreateElement ('i', ['class' => "fa fa-check-circle-o"]), Capsule::CreateElement ('span', [], 'Free fitness shifts')))), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Join now')))))), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h5', [], 'Meet our team'), Capsule::CreateElement ('h2', [], 'Expert trainers'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam')), Capsule::CreateElement ('TrainersCardList', [], function ($args, CapsuleScopeContext $scope) {$arr2853203554ay = range(1, 3); for ( $i2853203554terator = 0; $i2853203554terator < count (is_array ($arr2853203554ay) ? $arr2853203554ay : []); $i2853203554terator++ ) {
	$scope->trainerId = \Saml::Array2Object ($arr2853203554ay[ $i2853203554terator ]);

            

 Capsule::PartialRender ('li', ['class' => $scope->trainerId == 1 ? "colored" : "default"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => 'gym_site_design/trainer' . $scope->trainerId . '.jpg', 'alt' => "trainer"]), Capsule::CreateElement ('data', [], Capsule::CreateElement ('strong', [], 'Trainer ', function($args, CapsuleScopeContext $scope){return $scope->trainerId;}), Capsule::CreateElement ('span', [], 'Trainer'))));

}}))), Capsule::CreateElement ('PageSectionContainer', ['backgroundColor' => "#000000"], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h5', [], 'Our schedule'), Capsule::CreateElement ('h2', [], 'Check Our class schedule')), Capsule::CreateElement ('ScheduleListsWrapper', [], Capsule::CreateElement ('ScheduleList', [], Capsule::CreateElement ('ScheduleListItem', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-clock-o"]))), function ($args, CapsuleScopeContext $scope) {$arr4410203554ay = range(7, 12); for ( $i4410203554terator = 0; $i4410203554terator < count (is_array ($arr4410203554ay) ? $arr4410203554ay : []); $i4410203554terator++ ) {
	$scope->t = \Saml::Array2Object ($arr4410203554ay[ $i4410203554terator ]);

              

 Capsule::PartialRender ('ScheduleListItem', ['color' => "#fc4b43"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('span', [], function($args, CapsuleScopeContext $scope){return $scope->t;}, ':30 AM')));

}}), function ($args, CapsuleScopeContext $scope) {$arr3047203554ay = $scope->days; for ( $i3047203554terator = 0; $i3047203554terator < count (is_array ($arr3047203554ay) ? $arr3047203554ay : []); $i3047203554terator++ ) {
	$scope->day = \Saml::Array2Object ($arr3047203554ay[ $i3047203554terator ]);

            

 Capsule::PartialRender ('ScheduleList', [], Capsule::CreateElement ('ScheduleListItem', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('span', [], function($args, CapsuleScopeContext $scope){return $scope->day;}))), function ($args, CapsuleScopeContext $scope) {$arr3361203554ay = range(7, 12); for ( $i3361203554terator = 0; $i3361203554terator < count (is_array ($arr3361203554ay) ? $arr3361203554ay : []); $i3361203554terator++ ) {
	$scope->a = \Saml::Array2Object ($arr3361203554ay[ $i3361203554terator ]);

                

 Capsule::PartialRender ('ScheduleListItem', ['color' => "#1a1a1a"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('span', [], 'Activity ', function($args, CapsuleScopeContext $scope){return $scope->a;})));

}});

}}))), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('Title', ['color' => "#ff4a41"], Capsule::CreateElement ('h2', [], 'Special products'), Capsule::CreateElement ('p', [], 'Look for your favorite, free for the first month')), Capsule::CreateElement ('ProductsCardListWrapper', [], Capsule::CreateElement ('ProductsCardList', [], function ($args, CapsuleScopeContext $scope) {$arr554203554ay = range(1, 50); for ( $i554203554terator = 0; $i554203554terator < count (is_array ($arr554203554ay) ? $arr554203554ay : []); $i554203554terator++ ) {
	$scope->productId = \Saml::Array2Object ($arr554203554ay[ $i554203554terator ]);

              

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('ProductCard', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "gym_site_design/product.png", 'alt' => "products"])), Capsule::CreateElement ('strong', [], 'ProductCard ', function($args, CapsuleScopeContext $scope){return $scope->productId;}), Capsule::CreateElement ('span', [], '$72.00'), Capsule::CreateElement ('p', [], 'Some detail here')));

}}), Capsule::CreateElement ('ProductsCardListNavigation', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('button', ['type' => "button", 'class' => "btn-prev"], Capsule::CreateElement ('i', ['class' => "fa fa-angle-left"]))), Capsule::CreateElement ('div', [], Capsule::CreateElement ('button', ['type' => "button", 'class' => "btn-next"], Capsule::CreateElement ('i', ['class' => "fa fa-angle-right"]))))))), Capsule::CreateElement ('PageSectionContainer', ['backgroundColor' => "#000000"], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h5', [], 'Photo Gallery'), Capsule::CreateElement ('h2', [], 'Momments with customers')), Capsule::CreateElement ('GallerySectionBody', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr5093203554ay = range(1, 12); for ( $i5093203554terator = 0; $i5093203554terator < count (is_array ($arr5093203554ay) ? $arr5093203554ay : []); $i5093203554terator++ ) {
	$scope->i = \Saml::Array2Object ($arr5093203554ay[ $i5093203554terator ]);

              

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "gym_site_design/trainer4.jpg"])));

}})))), Capsule::CreateElement ('Footer', [])); ?>
<?php }); ?>
<?php Capsule::Export ('GymSiteDesign'); ?>

<?php $module->exports = Capsule::Element ('GymSiteDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>