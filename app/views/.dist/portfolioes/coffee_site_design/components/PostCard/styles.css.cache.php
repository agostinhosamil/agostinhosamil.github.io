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

Capsule::Def ('PostCardContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PostCardContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PostCardContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:280px;}div.'.$scope->componentSelectorReference.' a{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;height:auto;position:relative;flex-direction:column;justify-content:center;align-items:flex-start;background-color:#d7cfc2;border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;-o-border-radius:15px;-ms-border-radius:15px;}div.'.$scope->componentSelectorReference.' a div{width:'.call_user_func(function($str){return $str;},'100%').';margin:0px 0px 20px;}div.'.$scope->componentSelectorReference.' a div img{width:'.call_user_func(function($str){return $str;},'100%').';border-top-left-radius:15px;border-top-right-radius:15px;}div.'.$scope->componentSelectorReference.' a strong{display:inline-block;padding:4px 11px 3px;background-color:#6f544d;color:#ffffff;font-size:11px;font-weight:600;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;margin:0px 22px;}div.'.$scope->componentSelectorReference.' a h4{font-size:18px;font-weight:700;color:#320200;display:-webkit-box;margin:8px 0px 13px;padding:0px 20px;overflow:hidden;height:83px;-webkit-box-orient:vertical;-webkit-line-clamp:3;}div.'.$scope->componentSelectorReference.' a data{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 20px 20px;display:flex;flex-direction:row;justify-content:space-between;}div.'.$scope->componentSelectorReference.' a data span{display:inline-flex;font-size:11px;color:#404040;align-items:center;justify-content:flex-start;flex-direction:row;}div.'.$scope->componentSelectorReference.' a data span i{margin-right:7px;font-size:16px;margin-top:-5px;}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{width:220px;}}@media(max-width: 400px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' a h4{font-size:13px;line-height:14px;}}@media(max-width: 375px){div.'.$scope->componentSelectorReference.'{width:170px;}div.'.$scope->componentSelectorReference.' a data{flex-direction:column;}div.'.$scope->componentSelectorReference.' a data span{margin:7px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PostCardContainer');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}