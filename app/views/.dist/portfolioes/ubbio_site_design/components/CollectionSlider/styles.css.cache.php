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

Capsule::Def ('ListItem', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ListItem');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ListItem', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{background-color:#e9f8f3;width:320px;height:auto;margin:0px 16px 0px 0px;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;position:relative;text-align:center;z-index:2;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}li.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}li.'.$scope->componentSelectorReference.' div.slide-content{width:320px;}li.'.$scope->componentSelectorReference.' div.image-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';padding:40px;pointer-events:none;text-align:center;}li.'.$scope->componentSelectorReference.' div.image-wrapper img{width:'.call_user_func(function($str){return $str;},'93%').';}li.'.$scope->componentSelectorReference.' h5{width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;font-weight:600;font-size:#333333;}li.'.$scope->componentSelectorReference.' ul{display:flex;flex-direction:row;justify-content:center;align-items:center;padding:0px;margin:2px 0px 20px;}li.'.$scope->componentSelectorReference.' ul li{margin:0px 5px;text-align:center;}li.'.$scope->componentSelectorReference.' ul li span{display:block;font-weight:900;font-size:16px;}li.'.$scope->componentSelectorReference.' h6{color:#0d9d29;font-weight:400;font-size:15px;}li.'.$scope->componentSelectorReference.' a{padding:12px 18px;font-size:13px;border:1px solid #0d9d29;color:#0d9d29;font-weight:600;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;display:inline-flex;margin:30px auto 50px;}@media(max-width: 760px){li.'.$scope->componentSelectorReference.'{width:260px;}li.'.$scope->componentSelectorReference.' div.slide-content{width:260px;}}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ListItem');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}