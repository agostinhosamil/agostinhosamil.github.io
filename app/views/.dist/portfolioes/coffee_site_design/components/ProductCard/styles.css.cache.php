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

Capsule::Def ('ProductCardContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductCardContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductCardContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#d7cfc2;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;position:relative;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductCardContainer');

Capsule::Def ('ImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;justify-content:center;align-items:flex-end;}div.'.$scope->componentSelectorReference.' div{width:max-content;}div.'.$scope->componentSelectorReference.' div img{width:220px;margin-top:-110px;}@media(max-width:950px){div.'.$scope->componentSelectorReference.' div img{width:180px;}}@media(max-width:650px){div.'.$scope->componentSelectorReference.' div img{width:120px;margin-top:-57px;}}@media(max-width:350px){div.'.$scope->componentSelectorReference.' div img{width:80px;margin-top:-42px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ImageWrapper');

Capsule::Def ('DataWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'DataWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'DataWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' h4{font-size:32px;font-weight:600;padding:5px 30px 0px;color:#320200;margin:0px;}div.'.$scope->componentSelectorReference.' p{width:'.call_user_func(function($str){return $str;},'100%').';padding:10px 30px 30px;display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;max-height:105px;overflow:hidden;font-size:15px;margin:0px 0px 20px;color:#320200;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:space-between;padding:5px 30px 30px;}div.'.$scope->componentSelectorReference.' div ul{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:0px 8px 0px 0px;margin:0px;display:flex;flex-direction:row;justify-content:flex-start;align-items:center;}div.'.$scope->componentSelectorReference.' div ul li{margin-right:14px;}div.'.$scope->componentSelectorReference.' div ul li a{display:flex;width:37px;height:37px;font-weight:700;font-size:18px;flex-direction:row;justify-content:center;align-items:center;background-color:#320200;color:#ffffff;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;}div.'.$scope->componentSelectorReference.' div ul li a.uncolored{color:#320200;background-color:transparent;}div.'.$scope->componentSelectorReference.' div strong{white-space:nowrap;font-size:12px;background-color:#320200;color:#ffffff;font-weight:600;border-radius:25px;-webkit-border-radius:25px;-moz-border-radius:25px;-o-border-radius:25px;-ms-border-radius:25px;padding:11px 32px 10px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('DataWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}