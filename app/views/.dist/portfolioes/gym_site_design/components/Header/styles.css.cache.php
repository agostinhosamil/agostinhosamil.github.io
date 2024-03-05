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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' header.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;position:relative;background-color:#000000;display:flex;flex-direction:column;align-items:center;}header.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';display:block;position:absolute;width:'.call_user_func(function($str){return $str;},'50%').';max-width:420px;height:'.call_user_func(function($str){return $str;},'100%').';top:0px;right:0px;background-color:#ff4a41;}@media(max-width:700px){header.'.$scope->componentSelectorReference.':after{display:none;background-color:transparent;}}';})), Capsule::CreateElement ('header', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('MenuContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';display:flex;flex-direction:row;justify-content:center;align-items:center;padding:30px 0px;position:relative;z-index:1;}@media(max-width: 1030px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuContainer');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:130px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('MenuListContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuListContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuListContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:inline-flex;flex-direction:row;align-items:center;justify-content:center;}div.'.$scope->componentSelectorReference.' ul{width:fit-content;padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;overflow:hidden;position:relative;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 19px;position:relative;}div.'.$scope->componentSelectorReference.' ul li a{color:#d1d1d1;white-space:nowrap;font-size:13px;font-weight:500;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}div.'.$scope->componentSelectorReference.' ul li:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';display:block;width:8px;height:8px;background-color:#ffffff;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';position:absolute;left:-24px;top:'.call_user_func(function($str){return $str;},'calc(50% - 4px)').';}div.'.$scope->componentSelectorReference.' ul:after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';display:block;width:10px;height:10px;background-color:#000000;position:absolute;left:0px;top:'.call_user_func(function($str){return $str;},'calc(50% - 5px)').';}@media(max-width: 860px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuListContainer');

Capsule::Def ('CtaWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CtaWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CtaWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:max-content;display:inline-flex;flex-direction:row;justify-content:flex-end;align-items:center;}div.'.$scope->componentSelectorReference.' ul{width:max-content;height:auto;display:flex;flex-direction:row;align-items:center;margin:0px;padding:0px;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 6px;}div.'.$scope->componentSelectorReference.' ul li a{padding:8px 16px;background-color:#ffffff;color:#ff4a41;font-size:13px;font-weight:500;display:block;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;}div.'.$scope->componentSelectorReference.' ul li a i{margin-right:8px;}div.'.$scope->componentSelectorReference.' ul li a.uncolored{background-color:transparent;color:#ffffff;}div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper{display:none;padding-left:25px;}div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper a{padding:0px;background-color:transparent;color:#ffffff;font-size:25px;}@media(max-width: 860px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper{display:unset;}}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{display:none;}div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper{display:unset;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CtaWrapper');

Capsule::Def ('HeaderBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';height:550px;position:relative;z-index:1;display:flex;flex-direction:row;justify-content:center;align-items:flex-end;}@media(max-width: 1030px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 30px;}}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{overflow:clip;}div.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';display:block;height:'.call_user_func(function($str){return $str;},'100%').';width:42px;position:absolute;top:0px;right:0px;background-color:#ff4a41;box-shadow:-2px 0px 20px 20px #ff4a41;}@media(max-width:700px){div.'.$scope->componentSelectorReference.':after{display:none;background-color:transparent;box-shadow:none;}}}@media(max-width: 700px){div.'.$scope->componentSelectorReference.'{background-color:#fc433c;align-items:center;height:470px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBody');

Capsule::Def ('HeaderContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 0px 80px;}div.'.$scope->componentSelectorReference.' h1{font-size:60px;color:#fc433c;font-weight:600;text-transform:uppercase;padding:0px;margin:0px;line-height:54px;}div.'.$scope->componentSelectorReference.' p{font-size:14px;color:#ffffff;display:block;margin:13px 0px 20px;}div.'.$scope->componentSelectorReference.' a{display:inline-block;padding:12px 24px;font-size:13px;color:#ffffff;background-color:#fc433c;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;}div.'.$scope->componentSelectorReference.' a:hover{background-color:#ffffff;color:#fc433c;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:55px 0px 0px;display:flex;flex-direction:row;justify-content:flex-start;align-items:center;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 25px 0px 0px;display:inline-flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;}div.'.$scope->componentSelectorReference.' ul li *{text-align:center;display:block;width:'.call_user_func(function($str){return $str;},'100%').';white-space:nowrap;}div.'.$scope->componentSelectorReference.' ul li strong{color:#ffffff;font-size:45px;font-weight:700;margin-bottom:8px;line-height:43px;}div.'.$scope->componentSelectorReference.' ul li span{font-size:15px;font-weight:400;color:#9f9f9f;}@media(max-width:500px){div.'.$scope->componentSelectorReference.' ul li{margin-right:10px;}div.'.$scope->componentSelectorReference.' ul li strong{font-size:'.call_user_func(function($str){return $str;},'23px !important').';}div.'.$scope->componentSelectorReference.' ul li span{font-size:'.call_user_func(function($str){return $str;},'12px !important').';}}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' h1{font-size:45px;line-height:39px;}div.'.$scope->componentSelectorReference.' ul li{}div.'.$scope->componentSelectorReference.' ul li strong{font-size:36px;}div.'.$scope->componentSelectorReference.' ul li span{font-size:13px;}}@media(max-width: 700px){div.'.$scope->componentSelectorReference.'{padding:0px;text-align:center;}div.'.$scope->componentSelectorReference.' *{text-align:center;}div.'.$scope->componentSelectorReference.' h1{color:#000000;}div.'.$scope->componentSelectorReference.' a{background-color:#000000;}div.'.$scope->componentSelectorReference.' ul{justify-content:center;}div.'.$scope->componentSelectorReference.' ul li span{color:#fff0f0;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderContentWrapper');

Capsule::Def ('HeaderImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';text-align:right;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';text-align:right;display:flex;justify-content:flex-end;align-items:flex-end;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'60%').';position:relative;}div.'.$scope->componentSelectorReference.' div img{width:unset;height:'.call_user_func(function($str){return $str;},'100%').';margin-right:-194px;}}@media(max-width: 700px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderImageWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}