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

Capsule::Def ('BlogPreviewSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'BlogPreviewSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'BlogPreviewSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 30px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}section.'.$scope->componentSelectorReference.' *{transition:inherit;}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('BlogPreviewSectionContainer');

Capsule::Def ('BlogPreviewSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'BlogPreviewSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'BlogPreviewSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#f4ecdf;padding:50px 104px;border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;-o-border-radius:15px;-ms-border-radius:15px;}@media(max-width: 1150px){div.'.$scope->componentSelectorReference.'{padding:0px 0px 50px;background-color:transparent;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('BlogPreviewSectionBody');

Capsule::Def ('ListWraper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ListWraper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ListWraper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul{padding:20px 0px 0px;margin:0px;width:'.call_user_func(function($str){return $str;},'100%').';position:relative;display:flex;flex-direction:row;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 4)').';padding:8px;}div.'.$scope->componentSelectorReference.' ul li a{display:block;background-color:#ffffff;border-radius:9px;-webkit-border-radius:9px;-moz-border-radius:9px;-o-border-radius:9px;-ms-border-radius:9px;display:flex;flex-direction:row;flex-wrap:wrap;padding:0px 0px 15px;}div.'.$scope->componentSelectorReference.' ul li a div{width:'.call_user_func(function($str){return $str;},'100%').';height:160px;background-attachment:scroll;background-repeat:no-repeat;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;-ms-background-size:cover;background-position:center;background-color:#e0e0e0;border-top-left-radius:inherit;border-top-right-radius:inherit;}div.'.$scope->componentSelectorReference.' ul li a span{display:inline-flex;width:'.call_user_func(function($str){return $str;},'50%').';padding:15px 0px;justify-content:center;text-align:center;color:#a0a0a0;}div.'.$scope->componentSelectorReference.' ul li a p{width:'.call_user_func(function($str){return $str;},'100%').';display:-webkit-box;padding:0px 20px 20px;font-size:13px;line-height:14px;color:#504c4c;text-align:center;max-height:43px;overflow:hidden;-webkit-box-orient:vertical;-webkit-line-clamp:3;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';}}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 2)').';}}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul li a div{height:300px;}}@media(max-width: 370px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li a div{height:170px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ListWraper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}