<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Script', Capsule::RelativePathDecode (path ('capsule')));

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
	Capsule::Import ('PostCard', Capsule::RelativePathDecode (path ('./components/PostCard')));

?>

<?php
	Capsule::Import ('ProductCard', Capsule::RelativePathDecode (path ('./components/ProductCard')));

?>

<?php
	Capsule::Import ('SliderSection', Capsule::RelativePathDecode (path ('./components/SliderSection')));

?>


<?php
	Capsule::Import ('Accordion', Capsule::RelativePathDecode (path ('./components/Accordion')));
	Capsule::Import ('AccordionList', Capsule::RelativePathDecode (path ('./components/Accordion')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('GlobalStyles', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HightlightContent', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HightlightList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HightlightListItem', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSectionTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('SearchFormContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductSlide', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductSlideWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ProductSlideSectionContaier', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ServiceInfoContent', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TestimonialCardContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TestimonialSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TestimonialsList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TestimonialContent', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PostCardContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('CoffeeSiteDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('GlobalStyles', []), Capsule::CreateElement ('Header', []), Capsule::CreateElement ('head', [], Capsule::CreateElement ('Script', ['src' => 'capsule/aplpha.js']), Capsule::CreateElement ('Script', ['src' => 'coffee_site_design/main.js'])), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('HightlightContent', [], Capsule::CreateElement ('HightlightList', [], Capsule::CreateElement ('HightlightListItem', [], Capsule::CreateElement ('ProductCard', ['name' => "Americano", 'description' => "
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                ", 'price' => "$ 33.98", 'image' => "coffee1.png"])), Capsule::CreateElement ('HightlightListItem', [], Capsule::CreateElement ('ProductCard', ['name' => "Cappuccino", 'description' => "
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                ", 'price' => "$ 123.98", 'image' => "coffee1.png"]))), Capsule::CreateElement ('div', ['class' => "content-wrapper"], Capsule::CreateElement ('h2', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Learn more'))))), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('PageSectionTitle', [], Capsule::CreateElement ('h1', [], 'Most popular coffee'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo')), Capsule::CreateElement ('SearchFormContainer', [], Capsule::CreateElement ('form', ['method' => "get", 'action' => "/search"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], 'Location'), Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-location-arrow"]), Capsule::CreateElement ('select', ['name' => "location", 'id' => "select"], function ($args, CapsuleScopeContext $scope) {$arr3106232227ay = range(1, 100); for ( $i3106232227terator = 0; $i3106232227terator < count (is_array ($arr3106232227ay) ? $arr3106232227ay : []); $i3106232227terator++ ) {
	$scope->i = \Saml::Array2Object ($arr3106232227ay[ $i3106232227terator ]);

                      

 Capsule::PartialRender ('option', ['value' => $scope->i], 'Location, City Nº - ', function($args, CapsuleScopeContext $scope){return $scope->i;});

}}))), Capsule::CreateElement ('li', ['class' => "outlined"], Capsule::CreateElement ('strong', [], 'Availability'), Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-table"]), Capsule::CreateElement ('select', ['name' => "availability", 'id' => "select"], Capsule::CreateElement ('option', ['value' => "yes"], 'Available'), Capsule::CreateElement ('option', ['value' => "no"], 'Not Available')))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], 'Price Range'), Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-money"]), Capsule::CreateElement ('select', ['name' => "price-range", 'id' => "select"], function ($args, CapsuleScopeContext $scope) {$arr2975232227ay = range(1, 6); for ( $i2975232227terator = 0; $i2975232227terator < count (is_array ($arr2975232227ay) ? $arr2975232227ay : []); $i2975232227terator++ ) {
	$scope->i = \Saml::Array2Object ($arr2975232227ay[ $i2975232227terator ]);

                      

 Capsule::PartialRender ('option', ['value' => $scope->i], 'Location, City Nº - ', function($args, CapsuleScopeContext $scope){return $scope->i;});

}}))), Capsule::CreateElement ('li', ['class' => "input"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('data', [], Capsule::CreateElement ('input', ['type' => "text", 'name' => "query", 'autocomplete' => "off", 'placeholder' => "Search"]), Capsule::CreateElement ('i', ['class' => "fa fa-search"]))))))))), Capsule::CreateElement ('ProductSlideSectionContaier', [], Capsule::CreateElement ('SliderSection', [], function ($args, CapsuleScopeContext $scope) {$arr8348232227ay = range(1, 50); for ( $i8348232227terator = 0; $i8348232227terator < count (is_array ($arr8348232227ay) ? $arr8348232227ay : []); $i8348232227terator++ ) {
	$scope->i = \Saml::Array2Object ($arr8348232227ay[ $i8348232227terator ]);

          

 Capsule::PartialRender ('ProductSlideWrapper', [], Capsule::CreateElement ('ProductSlide', [], Capsule::CreateElement ('ProductCard', ['name' => "Product " . $scope->i, 'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 'image' => "coffee1.png", 'price' => '$' . (10 * $scope->i)])));

}})), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('ServiceInfoContent', [], Capsule::CreateElement ('div', ['class' => "image-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "coffee_site_design/coffee-seed.jpg"]))), Capsule::CreateElement ('div', ['class' => "content-wrapper x-large"], Capsule::CreateElement ('h2', [], 'Lorem ipsum dolor sit amet'), Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'), Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Learn more'))))), Capsule::CreateElement ('Ad', ['title' => "Get a free gift with purchase of $75 or more", 'subTitle' => "Dont miss out on our flash sale", 'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."]), Capsule::CreateElement ('TestimonialSectionContainer', [], Capsule::CreateElement ('SliderSection', ['title' => "Our customer testimonials", 'subTitle' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."], function ($args, CapsuleScopeContext $scope) {$arr1165232227ay = $scope->testimonials; for ( $i1165232227terator = 0; $i1165232227terator < count (is_array ($arr1165232227ay) ? $arr1165232227ay : []); $i1165232227terator++ ) {
	$scope->customer = \Saml::Array2Object ($arr1165232227ay[ $i1165232227terator ]);

          

 Capsule::PartialRender ('TestimonialCardContainer', ['data-customer-id' => $scope->customer['id'], 'data' => $scope->customer, 'class' => $scope->customer['id'] === 1 ? 'selected' : 'x-'], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => 'coffee_site_design/' . $scope->customer['photo'], 'alt' => $scope->customer['name']])));

}}), Capsule::CreateElement ('TestimonialsList', [], function ($args, CapsuleScopeContext $scope) {$arr8135232227ay = $scope->testimonials; for ( $i8135232227terator = 0; $i8135232227terator < count (is_array ($arr8135232227ay) ? $arr8135232227ay : []); $i8135232227terator++ ) {
	$scope->customer = \Saml::Array2Object ($arr8135232227ay[ $i8135232227terator ]);

          

 Capsule::PartialRender ('TestimonialContent', ['data-customer-id' => $scope->customer['id'], 'class' => $scope->customer['id'] === 1 ? 'x-shown' : 'x-hidden'], Capsule::CreateElement ('h5', [], function($args, CapsuleScopeContext $scope){return $scope->customer['name'];}), Capsule::CreateElement ('strong', [], 'Standard customer'), Capsule::CreateElement ('div', [], function ($args, CapsuleScopeContext $scope) {$arr8895232227ay = range(1, 5); for ( $i8895232227terator = 0; $i8895232227terator < count (is_array ($arr8895232227ay) ? $arr8895232227ay : []); $i8895232227terator++ ) {
	$scope->n = \Saml::Array2Object ($arr8895232227ay[ $i8895232227terator ]);

                

 Capsule::PartialRender ('span', [], Capsule::CreateElement ('i', ['class' => "fa " . ($scope->customer['rate'] >= $scope->n ? 'fa-star' : 'fa-star-o')]));

}}), Capsule::CreateElement ('p', [], function($args, CapsuleScopeContext $scope){return $scope->customer['message'];}));

}})), Capsule::CreateElement ('SliderSection', ['title' => "Our latest blog & News", 'subTitle' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."], function ($args, CapsuleScopeContext $scope) {$arr9158232227ay = range(1, 100); for ( $i9158232227terator = 0; $i9158232227terator < count (is_array ($arr9158232227ay) ? $arr9158232227ay : []); $i9158232227terator++ ) {
	$scope->postId = \Saml::Array2Object ($arr9158232227ay[ $i9158232227terator ]);

        

 Capsule::PartialRender ('PostCardContainer', [], Capsule::CreateElement ('PostCard', ['title' => "Post (" . $scope->postId . ") - Lorem ipsum dolor sit amet, consectetur", 'image' => "image1.jpg"]));

}}), Capsule::CreateElement ('PageSectionContainer', [], Capsule::CreateElement ('PageSectionBody', [], Capsule::CreateElement ('PageSectionTitle', [], Capsule::CreateElement ('h1', [], 'Question? Look here')), Capsule::CreateElement ('AccordionList', [], Capsule::CreateElement ('Accordion', ['title' => "What payment methods does coffee app accept?", 'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."]), Capsule::CreateElement ('Accordion', ['title' => "How can I save my favorite coffee as bookmark?", 'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."]), Capsule::CreateElement ('Accordion', ['title' => "What are the benefits of using coffee shop app?", 'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."]), Capsule::CreateElement ('Accordion', ['title' => "Is it possible to share coffee details with friend?", 'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."]), Capsule::CreateElement ('Accordion', ['title' => "How to discover new coffee in the app?", 'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."]), Capsule::CreateElement ('Accordion', ['title' => "Id app available on both IOS and Android?", 'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."])))), Capsule::CreateElement ('Footer', [])); ?>
<?php }); ?>
<?php Capsule::Export ('CoffeeSiteDesign'); ?>

<?php $module->exports = Capsule::Element ('CoffeeSiteDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>