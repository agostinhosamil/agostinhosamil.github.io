<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('FlatImage', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('./components/Header')));

?>

<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('./components/Footer')));

?>

<?php
	Capsule::Import ('Product', Capsule::RelativePathDecode (path ('./components/Product')));

?>


<?php
	Capsule::Import ('ProductFeed', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageBanner', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('PageContainer', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('StoreAdsMessage', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageHeadLineCol', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageBannerWrapper', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageHeadLineTitle', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageHeadLineImage', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageBannerContent', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageBulletPointsWrapper', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageBannerTitleWrapper', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageBannerImageWrapper', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageBannerFloatingImage', Capsule::RelativePathDecode (path ('./components/styles.css')));
	Capsule::Import ('HomePageHeadLineWrapper', Capsule::RelativePathDecode (path ('./components/styles.css')));

?>

<?php Capsule::Def ('KwanzaBurroDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('PageContainer', [], Capsule::CreateElement ('Header', []), Capsule::CreateElement ('HomePageHeadLineWrapper', [], Capsule::CreateElement ('HomePageHeadLineCol', [], Capsule::CreateElement ('HomePageHeadLineTitle', [], 'Temos para si o melhor e o que há de mais novo no mundo tecnológico'), Capsule::CreateElement ('HomePageBulletPointsWrapper', [], function ($args, CapsuleScopeContext $scope) {$arr4130203559ay = range(1, 10); for ( $i4130203559terator = 0; $i4130203559terator < count (is_array ($arr4130203559ay) ? $arr4130203559ay : []); $i4130203559terator++ ) {
	$scope->i = \Saml::Array2Object ($arr4130203559ay[ $i4130203559terator ]);

            

 Capsule::PartialRender ('li', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod');

}})), Capsule::CreateElement ('HomePageHeadLineCol', [], Capsule::CreateElement ('div', ['class' => "headline-images-wrapper"], Capsule::CreateElement ('HomePageHeadLineImage', [], Capsule::CreateElement ('Image', ['src' => "computer-0001.png", 'alt' => "Desktop Computer"])), Capsule::CreateElement ('HomePageHeadLineImage', [], Capsule::CreateElement ('Image', ['style' => ['width' => '77%'], 'src' => "phone-0001.png", 'alt' => "Desktop Computer"]))))), Capsule::CreateElement ('HomePageBannerWrapper', [], Capsule::CreateElement ('FlatImage', ['class' => "banner-background-image", 'src' => "../images/apple-store.jpg"], Capsule::CreateElement ('HomePageBanner', [], Capsule::CreateElement ('HomePageBannerContent', [], Capsule::CreateElement ('HomePageBannerImageWrapper', [], Capsule::CreateElement ('div', ['class' => "image1"], Capsule::CreateElement ('Image', ['src' => "phone-0003.png", 'alt' => "Floating Image"])), Capsule::CreateElement ('div', ['class' => "image2"], Capsule::CreateElement ('Image', ['src' => "phone-0002.png", 'alt' => "Floating Image"]))), Capsule::CreateElement ('HomePageBannerTitleWrapper', [], Capsule::CreateElement ('h1', [], 'Tenha o Iphone', Capsule::CreateElement ('i', [], 'dos seus'), 'sonhos'), Capsule::CreateElement ('p', [], 'O Iphone da mais última geração lhe proporcionará uma experiência inesquecível')), Capsule::CreateElement ('HomePageBannerFloatingImage', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "computer-0002.png", 'alt' => "Floating Image"]))))))), Capsule::CreateElement ('StoreAdsMessage', [], Capsule::CreateElement ('div', ['class' => "message-content"], Capsule::CreateElement ('p', [], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'), Capsule::CreateElement ('h1', [], 'Tudo o que precisas... Do bom e do melhor preço, é na UTEK.'), Capsule::CreateElement ('h2', [], 'Veja abaixo os destaques da semana')), Capsule::CreateElement ('div', ['class' => "message-image"], Capsule::CreateElement ('Image', ['src' => "man-holding-pc.png", 'alt' => "Store Ads"]))), Capsule::CreateElement ('ProductFeed', [], Capsule::CreateElement ('div', ['class' => "row"], function ($args, CapsuleScopeContext $scope) {$arr2916203559ay = range(1, 14); for ( $i2916203559terator = 0; $i2916203559terator < count (is_array ($arr2916203559ay) ? $arr2916203559ay : []); $i2916203559terator++ ) {
	$scope->n = \Saml::Array2Object ($arr2916203559ay[ $i2916203559terator ]);

          

 Capsule::PartialRender ('div', ['class' => "col-lg-6"], Capsule::CreateElement ('Product', ['color' => $this->colors[rand(0, -1 + count ($this->colors))], 'title' => 'Product ' . $scope->n, 'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam", 'image' => 'computer-0000' . ($scope->n <= 7 ? $scope->n : round($scope->n / 2)) . '.png']));

}})), Capsule::CreateElement ('Footer', [])); ?>
<?php }); ?>
<?php Capsule::Export ('KwanzaBurroDesign'); ?>

<?php $module->exports = Capsule::Element ('KwanzaBurroDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>