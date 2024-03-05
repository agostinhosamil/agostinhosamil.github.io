<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import (['Title' => 'DocumentTitle'], Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Script', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('./components/Header')));

?>

<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('./components/Footer')));

?>

<?php
	Capsule::Import ('AdSection', Capsule::RelativePathDecode (path ('./components/AdSection')));

?>

<?php
	Capsule::Import ('BlogPreviewSection', Capsule::RelativePathDecode (path ('./components/BlogPreviewSection')));

?>


<?php
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('GlobalSyles', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('DesignoSiteDesignContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TrendingSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TrendingSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TrendingSectionCategoryList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TrendingSectionRow', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TrendingSectionCol', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TrendingSectionColsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TestimonialsSectionContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TestimonialsSectionBody', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TestimonialsSectionNavigation', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TestimonialsSectionPagination', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ServiceDetailsContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ServiceDetail', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('DesignoSiteDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('DesignoSiteDesignContainer', [], Capsule::CreateElement ('GlobalSyles', []), Capsule::CreateElement ('DocumentTitle', [], 'Designo - Model Agency'), Capsule::CreateElement ('head', [], Capsule::CreateElement ('Script', ['src' => "designo_site_design/main.js"])), Capsule::CreateElement ('Header', []), Capsule::CreateElement ('TrendingSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'Trending')), Capsule::CreateElement ('TrendingSectionCategoryList', [], Capsule::CreateElement ('li', ['class' => "selected"], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'All')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Kids')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Men')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'role' => "button"], 'Women'))), Capsule::CreateElement ('TrendingSectionBody', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr2579203551ay = range(1, 12); for ( $i2579203551terator = 0; $i2579203551terator < count (is_array ($arr2579203551ay) ? $arr2579203551ay : []); $i2579203551terator++ ) {
	$scope->i = \Saml::Array2Object ($arr2579203551ay[ $i2579203551terator ]);

            

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('Image', ['src' => "designo_site_design/1.jpg", 'alt' => "Product"]), Capsule::CreateElement ('h6', [], 'Dresses'), Capsule::CreateElement ('h4', [], 'Black Jaquet'), Capsule::CreateElement ('strong', [], '$', function($args, CapsuleScopeContext $scope){return $scope->i;}, '00')));

}})), Capsule::CreateElement ('TrendingSectionColsWrapper', [], Capsule::CreateElement ('TrendingSectionCol', [], Capsule::CreateElement ('TrendingSectionRow', ['imageWidth' => "1280"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], 'Basic collections')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('h4', [], 'New Arrivals')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Shop Now'))), Capsule::CreateElement ('div', [], Capsule::CreateElement ('data', [], Capsule::CreateElement ('Image', ['src' => "designo_site_design/model1.png"])))), Capsule::CreateElement ('TrendingSectionRow', ['height' => "220", 'backgroundColor' => "#eceaed"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], 'Basic collections')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('h4', [], 'New Arrivals')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Shop Now'))), Capsule::CreateElement ('div', [], Capsule::CreateElement ('data', [], Capsule::CreateElement ('Image', ['src' => "designo_site_design/model2.png"]))))), Capsule::CreateElement ('TrendingSectionCol', [], Capsule::CreateElement ('TrendingSectionRow', ['height' => "220", 'backgroundColor' => "#eceaed"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], 'Basic collections')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('h4', [], 'New Arrivals')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Shop Now'))), Capsule::CreateElement ('div', [], Capsule::CreateElement ('data', [], Capsule::CreateElement ('Image', ['src' => "designo_site_design/model3.png"])))), Capsule::CreateElement ('TrendingSectionRow', ['imageWidth' => "590"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('strong', [], 'Basic collections')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('h4', [], 'New Arrivals')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Shop Now'))), Capsule::CreateElement ('div', [], Capsule::CreateElement ('data', [], Capsule::CreateElement ('Image', ['src' => "designo_site_design/model4.png"]))))))), Capsule::CreateElement ('TestimonialsSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'Testimonials')), Capsule::CreateElement ('TestimonialsSectionBody', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr8684203551ay = range(1, 15); for ( $i8684203551terator = 0; $i8684203551terator < count (is_array ($arr8684203551ay) ? $arr8684203551ay : []); $i8684203551terator++ ) {
	$scope->testimonialId = \Saml::Array2Object ($arr8684203551ay[ $i8684203551terator ]);

            

 Capsule::PartialRender ('li', ['data-id' => $scope->testimonialId], Capsule::CreateElement ('p', [], 'Lorem ', function($args, CapsuleScopeContext $scope){return $scope->testimonialId;}, ' ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non', 'proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'), Capsule::CreateElement ('span', [], 'Lara Dorfill - Appril 2023'), Capsule::CreateElement ('Image', ['src' => "designo_site_design/1.jpg", 'alt' => "client"]));

}}, Capsule::CreateElement ('TestimonialsSectionNavigation', [], Capsule::CreateElement ('button', ['type' => "button", 'class' => "btn-prev"], Capsule::CreateElement ('i', ['class' => "fa fa-angle-left"])), Capsule::CreateElement ('button', ['type' => "button", 'class' => "btn-next"], Capsule::CreateElement ('i', ['class' => "fa fa-angle-right"])))), Capsule::CreateElement ('TestimonialsSectionPagination', [], function ($args, CapsuleScopeContext $scope) {$arr7701203551ay = range(1, 15); for ( $i7701203551terator = 0; $i7701203551terator < count (is_array ($arr7701203551ay) ? $arr7701203551ay : []); $i7701203551terator++ ) {
	$scope->i = \Saml::Array2Object ($arr7701203551ay[ $i7701203551terator ]);

            

 Capsule::PartialRender ('li', [], function ($args, CapsuleScopeContext $scope) {if ( $scope->i == 1 ) {
                
Capsule::PartialRender ('button', ['class' => "selected", 'data-id' => $scope->i]);

              
} else {
                
Capsule::PartialRender ('button', ['data-id' => $scope->i]);

}});

}}))), Capsule::CreateElement ('TrendingSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'The inside collection')), Capsule::CreateElement ('TrendingSectionBody', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr8203203551ay = range(1, 4); for ( $i8203203551terator = 0; $i8203203551terator < count (is_array ($arr8203203551ay) ? $arr8203203551ay : []); $i8203203551terator++ ) {
	$scope->i = \Saml::Array2Object ($arr8203203551ay[ $i8203203551terator ]);

            

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('Image', ['src' => "designo_site_design/1.jpg", 'alt' => "Product"]), Capsule::CreateElement ('h6', [], 'Dresses'), Capsule::CreateElement ('h4', [], 'Black Jaquet'), Capsule::CreateElement ('strong', [], '$', function($args, CapsuleScopeContext $scope){return $scope->i;}, '00')));

}}))), Capsule::CreateElement ('AdSection', []), Capsule::CreateElement ('TrendingSectionContainer', [], Capsule::CreateElement ('Title', [], Capsule::CreateElement ('h1', [], 'Limited Edition')), Capsule::CreateElement ('TrendingSectionBody', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr9066203551ay = range(1, 4); for ( $i9066203551terator = 0; $i9066203551terator < count (is_array ($arr9066203551ay) ? $arr9066203551ay : []); $i9066203551terator++ ) {
	$scope->i = \Saml::Array2Object ($arr9066203551ay[ $i9066203551terator ]);

            

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('Image', ['src' => "designo_site_design/1.jpg", 'alt' => "Product"]), Capsule::CreateElement ('h6', [], 'Dresses'), Capsule::CreateElement ('h4', [], 'Black Jaquet'), Capsule::CreateElement ('strong', [], '$', function($args, CapsuleScopeContext $scope){return $scope->i;}, '00')));

}}))), Capsule::CreateElement ('BlogPreviewSection', []), Capsule::CreateElement ('ServiceDetailsContainer', [], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('ServiceDetail', ['color' => "red"], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-truck"]))), Capsule::CreateElement ('div', ['class' => "body"], Capsule::CreateElement ('strong', [], 'Fast and free delivery'), Capsule::CreateElement ('span', [], 'Free delivery for all orders over $40'))), Capsule::CreateElement ('ServiceDetail', ['color' => "teal"], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-headphones"]))), Capsule::CreateElement ('div', ['class' => "body"], Capsule::CreateElement ('strong', [], '24/7 Customer Support'), Capsule::CreateElement ('span', [], 'Friendly 24/7 Customer support'))), Capsule::CreateElement ('ServiceDetail', ['color' => "green"], Capsule::CreateElement ('div', ['class' => "icon-wrapper"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-money"]))), Capsule::CreateElement ('div', ['class' => "body"], Capsule::CreateElement ('strong', [], 'Money Guarantee'), Capsule::CreateElement ('span', [], 'We return money whithin 30 days'))))), Capsule::CreateElement ('Footer', [])); ?>
<?php }); ?>
<?php Capsule::Export ('DesignoSiteDesign'); ?>

<?php $module->exports = Capsule::Element ('DesignoSiteDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>