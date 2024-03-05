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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;padding:10px 120px 110px;}@media(max-width: 990px){div.'.$scope->componentSelectorReference.'{padding:28px 20px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('ContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;background-color:#004952;padding:80px 100px;text-align:center;border-radius:25px;-webkit-border-radius:25px;-moz-border-radius:25px;-o-border-radius:25px;-ms-border-radius:25px;}div.'.$scope->componentSelectorReference.' h1{font-size:55px;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Trebuchet MS").','.call_user_func(function($str){return "'$str'";},"Arial Narraw").','.call_user_func(function($str){return "'$str'";},"Roboto Regular").','.call_user_func(function($str){return "'$str'";},"Verdana").',sans-serif').';color:#ffffff;font-weight:700;display:block;width:'.call_user_func(function($str){return $str;},'100%').';max-width:730px;margin:0px auto;}div.'.$scope->componentSelectorReference.' p{font-size:19px;color:#d0d0d0;font-weight:400;display:block;width:'.call_user_func(function($str){return $str;},'100%').';max-width:730px;margin:20px auto;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;padding:0px;margin:28px 0px 0px;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 15px;display:inline-flex;justify-content:center;}div.'.$scope->componentSelectorReference.' ul li a{padding:14px 45px;background-color:#E3FF53;color:#252525;display:flex;flex-direction:row;justify-content:center;align-items:center;border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;-o-border-radius:15px;-ms-border-radius:15px;}div.'.$scope->componentSelectorReference.' ul li a div.icon-wrapper{font-size:29px;margin-right:15px;}div.'.$scope->componentSelectorReference.' ul li a div{display:inline-flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' ul li a div *{text-align:left;}div.'.$scope->componentSelectorReference.' ul li a.white{background-color:#ffffff;}@media(max-width: 990px){div.'.$scope->componentSelectorReference.'{padding:28px 20px;}}@media(max-width: 820px){div.'.$scope->componentSelectorReference.'{padding:45px;}div.'.$scope->componentSelectorReference.' h1{font-size:35px;line-height:38px;}div.'.$scope->componentSelectorReference.' p{font-size:13px;}div.'.$scope->componentSelectorReference.' ul{flex-direction:column;}div.'.$scope->componentSelectorReference.' ul li{margin:8px 0px;}div.'.$scope->componentSelectorReference.' ul li a{padding:9px 25px;font-size:13px;}div.'.$scope->componentSelectorReference.' ul li a div.icon-wrapper{font-size:'.call_user_func(function($str){return $str;},'18px !important').';margin-right:9px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ContentWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}