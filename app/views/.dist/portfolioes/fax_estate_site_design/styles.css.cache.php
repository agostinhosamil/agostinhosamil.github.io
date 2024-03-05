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

Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Title');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Title', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;padding:0px 120px 50px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' h1{font-size:38px;font-family:serif;color:#0A0B21;line-height:42px;display:block;padding:0px 0px 2px;font-weight:700;}div.'.$scope->componentSelectorReference.' p{padding:0px;margin:0px;font-size:18px;color:#3E4452;}@media(max-width: 990px){div.'.$scope->componentSelectorReference.'{padding:10px 30px 50px;}}@media(max-width: 550px){div.'.$scope->componentSelectorReference.'{padding:10px 30px 50px;}div.'.$scope->componentSelectorReference.' h1{font-size:28px;}div.'.$scope->componentSelectorReference.' p{font-size:13px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Title');

Capsule::Def ('Container', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Container');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{box-sizing:border-box;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('AboutSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AboutSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AboutSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;padding:145px 120px 120px;}@media(max-width: 850px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;}}@media(max-width: 780px){div.'.$scope->componentSelectorReference.'{padding:45px 70px 60px;}}@media(max-width: 510px){div.'.$scope->componentSelectorReference.'{padding:45px 30px 60px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AboutSectionContainer');

Capsule::Def ('AboutSectionImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AboutSectionImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AboutSectionImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'60%').';padding-right:90px;position:relative;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;-o-border-radius:15px;-ms-border-radius:15px;position:relative;margin-left:25px;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:inherit;-webkit-border-radius:inherit;-moz-border-radius:inherit;-o-border-radius:inherit;-ms-border-radius:inherit;position:relative;z-index:1;}div.'.$scope->componentSelectorReference.' div:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';border-radius:inherit;-webkit-border-radius:inherit;-moz-border-radius:inherit;-o-border-radius:inherit;-ms-border-radius:inherit;border:3px solid #424851;position:absolute;left:-25px;top:-25px;z-index:-1;}@media(max-width: 850px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:30px 0px 0px;}div.'.$scope->componentSelectorReference.' div{margin:0px;}}@media(max-width: 510px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div{}div.'.$scope->componentSelectorReference.' div:before{left:-10px;top:-10px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AboutSectionImageWrapper');

Capsule::Def ('AboutSectionContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AboutSectionContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AboutSectionContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'40%').';}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;display:flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper h6{text-transform:uppercase;color:#dc972d;font-size:14px;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper h1{font-size:48px;line-height:50px;font-weight:800;font-family:serif;color:#282928;display:block;margin-bottom:15px;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper h4{font-size:16px;color:#a0a0a0;font-weight:400;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:20px 0px;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul li{list-style:none;display:flex;flex-direction:row;margin-bottom:35px;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul li div.icon-wrapper{width:50px;height:50px;margin-right:15px;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul li div.icon-wrapper div{width:50px;height:50px;background-color:#dc972d;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;color:#ffffff;font-size:30px;display:flex;justify-content:center;align-items:center;}@media(max-width:510px){div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul li div.icon-wrapper{width:37px;height:37px;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul li div.icon-wrapper div{width:37px;height:37px;font-size:18px;margin-right:8px;}}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul li div.content-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul li div.content-wrapper span{width:'.call_user_func(function($str){return $str;},'100%').';display:block;font-size:17px;font-weight:700;color:#111111;margin-bottom:6px;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper ul li div.content-wrapper p{display:block;font-size:14px;color:#4a4a4a;padding:0px;margin:0px;}@media(max-width: 850px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;}div.'.$scope->componentSelectorReference.' div.about-section-content-wrapper{margin:0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AboutSectionContentWrapper');

Capsule::Def ('QuickGuideSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'QuickGuideSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'QuickGuideSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:120px;}section.'.$scope->componentSelectorReference.' ul{padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;}section.'.$scope->componentSelectorReference.' ul li{list-style:none;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;border:1px solid #d5dffd;padding:40px;width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;margin:0px 15px;min-height:350px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}section.'.$scope->componentSelectorReference.' ul li span{font-size:26px;display:inline-block;padding:9px 20px;background-color:#d5dffd;color:#0A0B21;font-weight:800;font-family:serif;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;}section.'.$scope->componentSelectorReference.' ul li h4{display:block;text-align:center;margin:20px auto;color:#0A0B21;font-size:18px;}@media(max-width: 1000px){section.'.$scope->componentSelectorReference.'{padding:60px;}}@media(max-width: 920px){section.'.$scope->componentSelectorReference.'{padding:60px 30px;}}@media(max-width: 820px){section.'.$scope->componentSelectorReference.'{}section.'.$scope->componentSelectorReference.' ul{flex-direction:column;}section.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';margin:15px 0px;}}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('QuickGuideSectionContainer');

Capsule::Def ('CategoryListSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CategoryListSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CategoryListSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;background-color:#d5dffd;padding:120px;}@media(max-width: 1100px){section.'.$scope->componentSelectorReference.'{padding:50px;}}@media(max-width: 520px){section.'.$scope->componentSelectorReference.'{padding:50px 20px;}}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CategoryListSectionContainer');

Capsule::Def ('CategoryListRow', function ($args, CapsuleScopeContext $scope) {
	$scope->dir = !(isset ($args ['dir'])) ? "row" : $args ['dir'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CategoryListRow');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CategoryListRow', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:'.(!is_null ($scope->dir) ? $scope->dir : 'inherit').';}div.'.$scope->componentSelectorReference.' div.expanded{width:'.call_user_func(function($str){return $str;},'100% !important').';}@media(max-width: 1100px){div.'.$scope->componentSelectorReference.'{flex-direction:column;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['dir','children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CategoryListRow');

Capsule::Def ('CategoryListCol', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CategoryListCol');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CategoryListCol', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'50%').';margin:10px;}div.'.$scope->componentSelectorReference.' div.col-content{width:'.call_user_func(function($str){return $str;},'100%').';height:320px;background-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 5%)').';}div.'.$scope->componentSelectorReference.' div.col-content div{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';background-repeat:no-repeat;background-attachment:scroll;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;-ms-background-size:cover;position:relative;}div.'.$scope->componentSelectorReference.' div.col-content div span{position:absolute;background-color:#ffffff;color:#010202;font-size:17px;font-weight:500;font-family:serif;padding:9px 16px;bottom:0px;left:0px;user-select:none;}@media(max-width: 1100px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';margin:10px 0px;}}@media(max-width: 520px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div.col-content div span{font-size:12px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CategoryListCol');

Capsule::Def ('AboutWorkSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AboutWorkSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AboutWorkSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:120px;}@media(max-width: 1000px){section.'.$scope->componentSelectorReference.'{padding:60px;}}@media(max-width: 920px){section.'.$scope->componentSelectorReference.'{padding:60px 30px;}}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AboutWorkSectionContainer');

Capsule::Def ('AboutWorkSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AboutWorkSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AboutWorkSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';list-style:none;margin:10px;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;border:1px solid #d5dffd;text-align:center;}div.'.$scope->componentSelectorReference.' ul li div{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:inherit;-webkit-border-radius:inherit;-moz-border-radius:inherit;-o-border-radius:inherit;-ms-border-radius:inherit;padding-bottom:20px;}div.'.$scope->componentSelectorReference.' ul li div img{width:inherit;border-top-left-radius:inherit;border-top-right-radius:inherit;}div.'.$scope->componentSelectorReference.' ul li h5{color:#111111;font-size:17px;font-weight:700;margin:0px;padding:0px 25px;}div.'.$scope->componentSelectorReference.' ul li p{display:block;text-align:center;padding:10px 25px 25px;}@media(max-width:920px){div.'.$scope->componentSelectorReference.' ul{flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';max-width:380px;display:inline-flex;flex-direction:column;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AboutWorkSectionBody');

Capsule::Def ('HomeCtaBannerContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomeCtaBannerContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomeCtaBannerContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;}div.'.$scope->componentSelectorReference.' div.banner-image{width:'.call_user_func(function($str){return $str;},'100%').';height:550px;pointer-events:none;background-attachment:scroll;background-repeat:no-repeat;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;-ms-background-size:cover;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomeCtaBannerContainer');

Capsule::Def ('HomeCtaBanner', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomeCtaBanner');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomeCtaBanner', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';background-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 85%)').';position:absolute;top:0px;left:0px;right:0px;bottom:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div{text-align:center;max-width:420px;}div.'.$scope->componentSelectorReference.' div h3{font-size:35px;color:#ffffff;font-weight:700;font-family:serif;}div.'.$scope->componentSelectorReference.' div p{font-size:17px;font-weight:200;color:#ffffff;}div.'.$scope->componentSelectorReference.' div a{display:inline-block;margin-top:17px;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;-o-border-radius:7px;-ms-border-radius:7px;font-size:15px;color:#ffffff;font-weight:300;background-color:#dc972d;padding:8px 16px 7px;}div.'.$scope->componentSelectorReference.' div a:hover{background-color:#BF842A;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomeCtaBanner');

Capsule::Def ('PartnersSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PartnersSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PartnersSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:50px 120px;pointer-events:none;}section.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;flex-wrap:wrap;}section.'.$scope->componentSelectorReference.' ul li{display:inline-flex;list-style:none;pointer-events:none;width:95px;margin:30px;}section.'.$scope->componentSelectorReference.' ul li img{width:95px;pointer-events:none;user-select:none;}@media(max-width: 990px){section.'.$scope->componentSelectorReference.'{padding:50px 30px;}}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PartnersSectionContainer');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}