<?php 
namespace App\View; 
use Saml; 
use Sami;
use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; 
use Sammy\Packs\CapsuleHelper; 
use Sammy\Packs\CapsuleHelper\ArrayHelper; 
use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body


if (!function_exists ('App\View\generateComponentSelectorRef')) {
function generateComponentSelectorRef ($componentName) {
	return join ('', [
		$componentName,
		rand (0, 99999),
		rand (111, 9999) * rand (222, 99999),
		(int)time () * rand (111, 99999),
		time (),
		'r'
	]);
}}

Capsule::Def ('PageContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageContainer');

Capsule::Def ('HomePageHeadLineTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageHeadLineTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageHeadLineTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' h1.'.$scope->componentSelectorReference.'{font-size:58px;color:'.call_user_func(function($str){return $str;},'rgb(0 113 189)').';line-height:52px;position:relative;font-weight:900;transition:'.call_user_func(function($str){return $str;},'all .3s ease').';}h1.'.$scope->componentSelectorReference.':before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:60px;height:8px;position:absolute;top:-25px;left:0px;background-color:'.call_user_func(function($str){return $str;},'rgb(0 113 189)').';}@media(max-width: 730px){h1.'.$scope->componentSelectorReference.'{font-size:35px;line-height:32px;}}';})), Capsule::CreateElement ('h1', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageHeadLineTitle');

Capsule::Def ('HomePageBulletPointsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageBulletPointsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageBulletPointsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';margin:40px 0px 0px;padding:0px;}ul.'.$scope->componentSelectorReference.' li{list-style:none;font-size:17px;position:relative;display:block;width:'.call_user_func(function($str){return $str;},'65%').';padding:0px 0px 32px 15px;}ul.'.$scope->componentSelectorReference.' li:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';position:absolute;left:0px;top:5px;background-color:#cdcdcd;width:5px;height:22px;border-radius:22px;-webkit-border-radius:22px;-moz-border-radius:22px;-o-border-radius:22px;-ms-border-radius:22px;}@media(max-width:930px){ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'100%').';}ul.'.$scope->componentSelectorReference.' li:before{height:12px}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageBulletPointsWrapper');

Capsule::Def ('HomePageHeadLineWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageHeadLineWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageHeadLineWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;padding:140px 70px 110px;}@media(max-width: 930px){div.'.$scope->componentSelectorReference.'{flex-direction:column;}}@media(max-width: 890px){div.'.$scope->componentSelectorReference.'{padding-top:80px;}}@media(max-width: 410px){div.'.$scope->componentSelectorReference.'{padding:80px 30px 110px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageHeadLineWrapper');

Capsule::Def ('HomePageHeadLineCol', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageHeadLineCol');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageHeadLineCol', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' .headline-images-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width:930px){div.'.$scope->componentSelectorReference.' .headline-images-wrapper{display:flex;flex-direction:row;padding:41px 0px 170px;}}@media(max-width:750px){div.'.$scope->componentSelectorReference.' .headline-images-wrapper{flex-direction:column;}}@media(max-width:620px){div.'.$scope->componentSelectorReference.' .headline-images-wrapper{padding-bottom:75px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageHeadLineCol');

Capsule::Def ('HomePageHeadLineImage', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageHeadLineImage');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageHeadLineImage', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:380px;text-align:center;margin:auto;padding-bottom:55px;}div.'.$scope->componentSelectorReference.' img{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageHeadLineImage');

Capsule::Def ('HomePageBannerWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageBannerWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageBannerWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;}div.'.$scope->componentSelectorReference.' div.banner-background-image{background-repeat:no-repeat;background-size:'.call_user_func(function($str){return $str;},'100%').';-webkit-background-size:'.call_user_func(function($str){return $str;},'100%').';-moz-background-size:'.call_user_func(function($str){return $str;},'100%').';-o-background-size:'.call_user_func(function($str){return $str;},'100%').';-ms-background-size:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageBannerWrapper');

Capsule::Def ('HomePageBanner', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageBanner');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageBanner', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{background-color:'.call_user_func(function($str){return $str;},'rgb(227 165 160 / 92%)').';height:850px;color:#ffffff;position:relative;}div.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:'.call_user_func(function($str){return $str;},'100%').';background-color:#ffffff;height:180px;transform:'.call_user_func(function($str){return $str;},'skewY(6deg)').';position:absolute;top:-90px;left:0px;right:0px;}div.'.$scope->componentSelectorReference.':before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:'.call_user_func(function($str){return $str;},'100%').';background-color:#ffffff;height:180px;transform:'.call_user_func(function($str){return $str;},'skewY(-6deg)').';position:absolute;bottom:-90px;left:0px;right:0px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageBanner');

Capsule::Def ('HomePageBannerContent', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageBannerContent');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageBannerContent', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';padding:120px 150px;display:flex;flex-direction:row;justify-content:center;align-items:center;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageBannerContent');

Capsule::Def ('HomePageBannerImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageBannerImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageBannerImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:inline-flex;text-align:left;flex-direction:column;position:relative;transition:'.call_user_func(function($str){return $str;},'all .4s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .4s ease-in-out').';}div.'.$scope->componentSelectorReference.' div{position:relative;width:'.call_user_func(function($str){return $str;},'100%').';max-width:250px;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.image1{}div.'.$scope->componentSelectorReference.' div.image2{position:absolute;left:190px;}@media(max-width:1040px){div.'.$scope->componentSelectorReference.' div.image2{left:60px;}}@media(max-width: 1150px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div{max-width:170px;}}@media(max-width: 870px){div.'.$scope->componentSelectorReference.'{position:absolute;bottom:0px;margin-bottom:-52px;left:63px;width:unset;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageBannerImageWrapper');

Capsule::Def ('HomePageBannerTitleWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageBannerTitleWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageBannerTitleWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:430px;text-align:right;display:inline-flex;flex-direction:column;align-items:flex-end;justify-content:center;}div.'.$scope->componentSelectorReference.' h1{font-size:64px;font-weight:900;color:#ffffff;line-height:48px;text-transform:uppercase;}div.'.$scope->componentSelectorReference.' h1 i{display:block;font-size:45px;}div.'.$scope->componentSelectorReference.' p{font-size:22px;color:#ffffff;font-weight:500;line-height:20px;margin:0px;padding:20px 0px 0px;}@media(max-width: 870px){div.'.$scope->componentSelectorReference.'{max-width:unset;align-items:center;text-align:center;}}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' h1{font-size:48px;}div.'.$scope->componentSelectorReference.' h1 i{font-size:31px;}div.'.$scope->componentSelectorReference.' p{font-size:16px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageBannerTitleWrapper');

Capsule::Def ('HomePageBannerFloatingImage', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageBannerFloatingImage');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageBannerFloatingImage', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:411px;position:absolute;top:0px;right:80px;pointer-events:none;z-index:2;transition:'.call_user_func(function($str){return $str;},'all .4s ease-in-out').';}div.'.$scope->componentSelectorReference.' div{width:inherit;transform:'.call_user_func(function($str){return $str;},'skewY(6deg)').';margin-top:'.call_user_func(function($str){return $str;},'-53%').';}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 910px){div.'.$scope->componentSelectorReference.'{max-width:485px;}div.'.$scope->componentSelectorReference.' div{margin-top:'.call_user_func(function($str){return $str;},'-60%').';}}@media(max-width: 610px){div.'.$scope->componentSelectorReference.'{max-width:348px;}div.'.$scope->componentSelectorReference.' div{margin-top:'.call_user_func(function($str){return $str;},'-56%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageBannerFloatingImage');

Capsule::Def ('StoreAdsMessage', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'StoreAdsMessage');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'StoreAdsMessage', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;z-index:5;padding:120px;display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .4s ease-in-out').';}div.'.$scope->componentSelectorReference.' div{position:relative;width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.message-content{max-width:550px;}div.'.$scope->componentSelectorReference.' div.message-content p{font-size:20px;color:#8f8f8f;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto Regular").'').';}div.'.$scope->componentSelectorReference.' div.message-content h1{font-size:60px;font-weight:400;line-height:79px;text-transform:uppercase;color:#af756c;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto Thin").'').';margin-top:5px;}div.'.$scope->componentSelectorReference.' div.message-content h2{font-size:45px;margin-top:55px;position:relative;font-weight:900;line-height:50px;}div.'.$scope->componentSelectorReference.' div.message-content h2:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';position:absolute;left:0px;top:-20px;width:'.call_user_func(function($str){return $str;},'100%').';max-width:124px;height:7px;background-color:#455a64;border-radius:40px;-webkit-border-radius:40px;-moz-border-radius:40px;-o-border-radius:40px;-ms-border-radius:40px;}div.'.$scope->componentSelectorReference.' div.message-image{max-width:450px;}div.'.$scope->componentSelectorReference.' div.message-image img{width:'.call_user_func(function($str){return $str;},'100%').';margin-top:'.call_user_func(function($str){return $str;},'-85%').';}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{padding:120px 70px;}div.'.$scope->componentSelectorReference.' div.message-image{display:none;}}@media(max-width: 930px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div.message-content{max-width:unset;}div.'.$scope->componentSelectorReference.' div.message-content h1{font-size:32px;line-height:35px;}div.'.$scope->componentSelectorReference.' div.message-content h2{font-size:26px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('StoreAdsMessage');

Capsule::Def ('ProductFeed', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductFeed');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductFeed', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:10px 120px;}@media(max-width: 410px){div.'.$scope->componentSelectorReference.'{padding:10px 30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductFeed');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}