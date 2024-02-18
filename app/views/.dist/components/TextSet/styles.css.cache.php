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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;margin:auto;box-sizing:border-box;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('TextSetSentence', function ($args, CapsuleScopeContext $scope) {
	$scope->color = !(isset ($args ['color'])) ? null : $args ['color'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TextSetSentence');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TextSetSentence', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;margin:auto;box-sizing:border-box;position:relative;}div.'.$scope->componentSelectorReference.' h1{width:'.call_user_func(function($str){return $str;},'100%').';display:block;color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,''.($scope->color).'.400'):'inherit').';font-size:47px;font-weight:bold;letter-spacing:4px;-webkit-text-stroke-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,''.($scope->color).'.600'):'inherit').';-webkit-text-stroke-width:thin;}@media(max-width:767px){div.'.$scope->componentSelectorReference.' h1{text-align:center;font-size:30px;}}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;}div.'.$scope->componentSelectorReference.' div span{display:block;width:'.call_user_func(function($str){return $str;},'100%').';font-size:22px;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Trebuchet MS").','.call_user_func(function($str){return "'$str'";},"Arial").',helvetica,sans-serif').';word-spacing:3px;letter-spacing:2px;line-height:37px;text-align:justify-all;padding:0px 0px 0px 15px;position:relative;}div.'.$scope->componentSelectorReference.' div span:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';position:absolute;left:0px;top:9px;width:8px;height:17px;background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,''.($scope->color).'.300'):'inherit').';border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['color','children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('TextSetSentence');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}