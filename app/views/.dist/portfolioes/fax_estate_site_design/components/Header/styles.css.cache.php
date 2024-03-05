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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' header.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#0f191b;}header.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}';})), Capsule::CreateElement ('header', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Body', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Body');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Body', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#d5dffd;display:flex;flex-direction:row;position:relative;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Body');

Capsule::Def ('Banner', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Banner');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Banner', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'50%').';}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';pointer-events:none;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 960px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Banner');

Capsule::Def ('Content', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Content');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Content', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'50%').';display:inline-flex;flex-direction:column;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div{display:inline-flex;flex-direction:column;justify-content:center;align-items:flex-start;padding:0px 45px 0px 120px;}div.'.$scope->componentSelectorReference.' div h1{font-size:54px;color:#0f191b;font-weight:800;font-family:serif;line-height:50px;}div.'.$scope->componentSelectorReference.' div p{font-size:17px;display:block;margin:5px 0px 35px;}div.'.$scope->componentSelectorReference.' div a{display:inline-block;padding:8px 19px 7px;color:#ffffff;background-color:#dc972d;font-size:14px;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;}div.'.$scope->componentSelectorReference.' div a:hover{background-color:#ab7523;}@media(max-width: 1110px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div{}div.'.$scope->componentSelectorReference.' div h1{font-size:38px;line-height:40px;}div.'.$scope->componentSelectorReference.' div p{font-size:14px;line-height:13px;margin-bottom:18px;}div.'.$scope->componentSelectorReference.' div a{font-size:12px;padding:4px 12px 3px;}}@media(max-width: 960px){div.'.$scope->componentSelectorReference.'{position:absolute;top:0px;left:0px;bottom:0px;right:0px;width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';background-color:'.call_user_func(function($str){return $str;},'rgb(213 223 253 / 78%)').';}div.'.$scope->componentSelectorReference.' div{padding:50px;text-align:center;align-items:center;}div.'.$scope->componentSelectorReference.' div h1{font-weight:900;}div.'.$scope->componentSelectorReference.' div p{color:#111111;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Content');

Capsule::Def ('MenuBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;}@media(max-width: 820px){div.'.$scope->componentSelectorReference.'{flex-direction:row-reverse;justify-content:flex-end;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuBody');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:140px;}div.'.$scope->componentSelectorReference.' svg{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('MenuContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;padding:30px 120px;}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{padding:30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuContainer');

Capsule::Def ('MenuCtaWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuCtaWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuCtaWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{display:block;}div.'.$scope->componentSelectorReference.' a{display:block;background-color:#dc972d;color:#ffffff;font-weight:400;font-size:15px;white-space:nowrap;padding:7px 21px;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;}div.'.$scope->componentSelectorReference.' a:hover{background-color:#ab7523;}@media(max-width: 820px){div.'.$scope->componentSelectorReference.'{text-align:right;width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' a{display:inline;padding:7px 14px;font-size:12px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuCtaWrapper');

Capsule::Def ('MenuListWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuListWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuListWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;align-items:center;justify-content:center;}div.'.$scope->componentSelectorReference.' ul{display:flex;flex-direction:row;align-items:center;justify-content:center;padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 16px;list-style:none;}div.'.$scope->componentSelectorReference.' ul li a{color:#ffffff;font-weight:500;font-family:serif;font-size:18px;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}div.'.$scope->componentSelectorReference.' ul li.menu{display:none;}@media(max-width: 820px){div.'.$scope->componentSelectorReference.'{justify-content:flex-end;width:unset;}div.'.$scope->componentSelectorReference.' ul{}div.'.$scope->componentSelectorReference.' ul li{display:none;}div.'.$scope->componentSelectorReference.' ul li.menu{display:inline-flex;}div.'.$scope->componentSelectorReference.' ul li.menu button{font-size:25px;background-color:transparent;border:0px;outline:0px;color:#ffffff;font-weight:700;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuListWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}