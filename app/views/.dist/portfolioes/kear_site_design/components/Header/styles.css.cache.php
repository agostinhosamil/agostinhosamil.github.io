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

Capsule::Def ('Container', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Container');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' header.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;margin-bottom:60px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';position:relative;}header.'.$scope->componentSelectorReference.' *{transition:inherit;}@media(max-width: 1150px){header.'.$scope->componentSelectorReference.'{margin:0px;}}';})), Capsule::CreateElement ('header', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('MenuContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;background-color:#157cd1;color:#ffffff;padding:15px 0px;z-index:1;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuContainer');

Capsule::Def ('MenuBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';margin:auto;display:flex;flex-direction:row;align-content:center;justify-items:center;}@media(max-width: 1150px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuBody');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:130px;display:flex;align-items:flex-end;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;align-items:flex-end;}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'80%').';}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'80%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('MenuListWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuListWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuListWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;justify-content:center;align-items:center;padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 22px;}div.'.$scope->componentSelectorReference.' ul li a{color:#ffffff;font-weight:400;font-size:14px;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuListWrapper');

Capsule::Def ('CtaWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CtaWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CtaWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:max-content;}div.'.$scope->componentSelectorReference.' ul{margin:0px;padding:0px;display:flex;flex-direction:row;justify-content:flex-end;align-items:center;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 12px;}div.'.$scope->componentSelectorReference.' ul li a{display:block;padding:12px 27px;border:1px solid #ffffff;font-size:12px;color:#ffffff;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;}div.'.$scope->componentSelectorReference.' ul li a:hover{background-color:#ffffff;color:#157cd1;}div.'.$scope->componentSelectorReference.' ul li.menu-button{display:none;}div.'.$scope->componentSelectorReference.' ul li.menu-button a{padding:0px;border:0px;font-size:30px;}div.'.$scope->componentSelectorReference.' ul li.menu-button a:hover{background-color:transparent;color:#ffffff;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul li.menu-button{display:inline-flex;}}@media(max-width: 430px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul li{display:none;}div.'.$scope->componentSelectorReference.' ul li.menu-button{display:inline-flex;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CtaWrapper');

Capsule::Def ('ImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:889px;height:605px;background-color:#ebebeb;border-radius:70px;-webkit-border-radius:70px;-moz-border-radius:70px;-o-border-radius:70px;-ms-border-radius:70px;transform:'.call_user_func(function($str){return $str;},'rotateZ(332deg)').';position:absolute;right:'.call_user_func(function($str){return $str;},'-25%').';top:'.call_user_func(function($str){return $str;},'-20%').';overflow:hidden;}div.'.$scope->componentSelectorReference.' div.content{width:'.call_user_func(function($str){return $str;},'105%').';height:'.call_user_func(function($str){return $str;},'105%').';margin:-16px 0px 0px -318px;}div.'.$scope->componentSelectorReference.' div.content div{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';background-attachment:scroll;background-repeat:no-repeat;background-size:'.call_user_func(function($str){return $str;},'100% 100%').';-webkit-background-size:'.call_user_func(function($str){return $str;},'100% 100%').';-moz-background-size:'.call_user_func(function($str){return $str;},'100% 100%').';-o-background-size:'.call_user_func(function($str){return $str;},'100% 100%').';-ms-background-size:'.call_user_func(function($str){return $str;},'100% 100%').';background-position:center;transform:'.call_user_func(function($str){return $str;},'rotateZ(28deg)').';}@media(max-width: 1150px){div.'.$scope->componentSelectorReference.'{transform:'.call_user_func(function($str){return $str;},'rotateZ(348deg)').';right:'.call_user_func(function($str){return $str;},'-34%').';}}@media(max-width: 1060px){div.'.$scope->componentSelectorReference.'{width:809px;height:543px;}}@media(max-width: 960px){div.'.$scope->componentSelectorReference.'{position:relative;width:'.call_user_func(function($str){return $str;},'100%').';transform:none;left:0px;right:unset;top:0px;border-radius:0px;-webkit-border-radius:0px;-moz-border-radius:0px;-o-border-radius:0px;-ms-border-radius:0px;}div.'.$scope->componentSelectorReference.' div.content{margin:0px;width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.content div{transform:none;}}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{height:350px;}}@media(max-width: 320px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ImageWrapper');

Capsule::Def ('BodyContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'BodyContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'BodyContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:650px;position:relative;overflow:clip visible;}@media(max-width: 960px){div.'.$scope->componentSelectorReference.'{height:auto;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('BodyContainer');

Capsule::Def ('Body', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Body');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Body', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';margin:auto;height:inherit;display:flex;align-items:center;justify-content:flex-start;flex-direction:row;}@media(max-width: 1150px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 30px;}}@media(max-width: 960px){div.'.$scope->componentSelectorReference.'{align-items:flex-start;padding:0px;position:relative;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Body');

Capsule::Def ('Content', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Content');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Content', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'60%').';padding:120px 120px 0px 0px;}div.'.$scope->componentSelectorReference.' h1{color:#434343;font-size:48px;font-weight:900;line-height:49px;}div.'.$scope->componentSelectorReference.' p{font-size:14px;font-weight:300;line-height:18px;color:#a3a3a3;display:block;margin:14px 0px 35px;}div.'.$scope->componentSelectorReference.' ul{display:flex;flex-direction:row;justify-content:flex-start;align-items:center;padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' ul li{display:inline-flex;margin:0px 22px 22px 0px;}div.'.$scope->componentSelectorReference.' ul li a{padding:13px 25px;font-size:13px;color:#ffffff;background-color:#157cd1;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;border:1px solid #157cd1;font-weight:500;user-select:none;-webkit-user-select:none;}div.'.$scope->componentSelectorReference.' ul li a:hover{background-color:#ffffff;color:#127cd1;}div.'.$scope->componentSelectorReference.' ul li a.outlined{color:#157cd1;background-color:#ffffff;border-color:#157cd1;}div.'.$scope->componentSelectorReference.' ul li a.outlined:hover{background-color:#127cd1;color:#ffffff;}@media(max-width: 1150px){div.'.$scope->componentSelectorReference.'{padding:0px 120px 70px 0px;}}@media(max-width: 960px){div.'.$scope->componentSelectorReference.'{position:absolute;z-index:2;width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;padding:0px 120px;background-color:'.call_user_func(function($str){return $str;},'rgb(255 255 255 / 75%)').';}}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{padding:0px 40px;}div.'.$scope->componentSelectorReference.' h1{font-size:32px;line-height:30px;}div.'.$scope->componentSelectorReference.' ul li a{font-size:11px;padding:7px 15px;}}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{background-color:'.call_user_func(function($str){return $str;},'rgb(255 255 255 / 96%)').';}div.'.$scope->componentSelectorReference.' h1{font-size:25px;line-height:26px;}div.'.$scope->componentSelectorReference.' p{font-size:11px;color:#404040;}}@media(max-width: 320px){div.'.$scope->componentSelectorReference.'{position:relative;padding:30px;}div.'.$scope->componentSelectorReference.' p{margin-bottom:15px;}div.'.$scope->componentSelectorReference.' ul{flex-direction:column;align-items:center;justify-content:center;}div.'.$scope->componentSelectorReference.' ul li{margin:7px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Content');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}