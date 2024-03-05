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

Capsule::Def ('AdContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AdContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AdContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';min-height:750px;position:relative;margin:70px 0px 0px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';min-height:inherit;background-attachment:scroll;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;-ms-background-size:cover;background-position:center;background-repeat:no-repeat;}div.'.$scope->componentSelectorReference.' div data{width:'.call_user_func(function($str){return $str;},'100%').';min-height:inherit;display:flex;flex-direction:column;justify-content:center;align-items:center;background-color:'.call_user_func(function($str){return $str;},'rgb(244 244 244 / 60%)').';padding:70px 0px;}div.'.$scope->componentSelectorReference.' div data *{text-align:center;color:#320200;}div.'.$scope->componentSelectorReference.' div data h1{display:inline-block;margin:0px;padding:0px;width:'.call_user_func(function($str){return $str;},'60%').';font-size:53px;font-weight:800;line-height:50px;}div.'.$scope->componentSelectorReference.' div data h2{display:inline-block;margin:0px;padding:0px;width:'.call_user_func(function($str){return $str;},'60%').';font-size:28px;font-weight:500;line-height:30px;padding:15px 0px 25px;}div.'.$scope->componentSelectorReference.' div data p{display:inline-block;margin:0px;padding:0px;width:'.call_user_func(function($str){return $str;},'60%').';font-weight:2s00;font-size:13px;line-height:22px;}div.'.$scope->componentSelectorReference.' div data a{display:inline-block;padding:18px 32px;border-radius:32px;-webkit-border-radius:32px;-moz-border-radius:32px;-o-border-radius:32px;-ms-border-radius:32px;background-color:#320200;color:#ffffff;font-size:14px;font-weight:600;margin-top:37px;}@media(max-width:400px){div.'.$scope->componentSelectorReference.' div data{padding:130px 0px;}div.'.$scope->componentSelectorReference.' div data h1{font-size:38px;line-height:38px;}div.'.$scope->componentSelectorReference.' div data a{font-size:11px;padding:7px 15px 6px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AdContainer');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}