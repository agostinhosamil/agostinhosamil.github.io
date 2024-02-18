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
	$scope->dir = !(isset ($args ['dir'])) ? "row" : $args ['dir'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Container');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:flex;flex-direction:row;margin:0px auto 180px;transition:'.call_user_func(function($str){return $str;},'all .4s ease-in-out').';}@media(max-width: 760px){div.'.$scope->componentSelectorReference.'{flex-direction:column;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['dir','children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('ImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{widows:1;width:'.call_user_func(function($str){return $str;},'100%').';max-width:420px;}@media(max-width: 760px){div.'.$scope->componentSelectorReference.'{margin-bottom:40px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ImageWrapper');

Capsule::Def ('ImageContainer', function ($args, CapsuleScopeContext $scope) {
	$scope->color = !(isset ($args ['color'])) ? null : $args ['color'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ImageContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ImageContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:220px;height:220px;background-color:'.(!is_null ($scope->theme) ? ObjectHelper::ReadProperty ($scope->theme, 'colors.'.($scope->color).'.400') : 'inherit').';border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';position:relative;}div.'.$scope->componentSelectorReference.' img{width:270px;position:absolute;top:'.call_user_func(function($str){return $str;},'-40%').';left:'.call_user_func(function($str){return $str;},'-20%').';}@media(max-width: 410px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' img{left:0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['color','children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ImageContainer');

Capsule::Def ('DataWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'DataWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'DataWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{widows:1;width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' h4{font-size:22px;font-weight:900;text-transform:capitalize;color:#000000;}div.'.$scope->componentSelectorReference.' p{font-size:14px;color:#7c7c7c;line-height:18px;margin-top:9px;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;margin:0px;padding:0px;}div.'.$scope->componentSelectorReference.' ul li{list-style:none;margin:0px 5px 5px 0px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';margin:28px 0px 0px;}div.'.$scope->componentSelectorReference.' div button{padding:10px 18px 9px;font-size:16px;color:#ffffff;background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.400'):'inherit').';border:0px;outline:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;border-radius:10px;-webkit-border-radius:10px;-moz-border-radius:10px;-o-border-radius:10px;-ms-border-radius:10px;}div.'.$scope->componentSelectorReference.' div button:hover{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.600'):'inherit').';}div.'.$scope->componentSelectorReference.' div button:active{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.800'):'inherit').';}div.'.$scope->componentSelectorReference.' div button span{margin-left:12px;font-size:12px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('DataWrapper');

Capsule::Def ('Bullet', function ($args, CapsuleScopeContext $scope) {
	$scope->color = !(isset ($args ['color'])) ? "white" : $args ['color'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Bullet');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Bullet', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{width:9px;height:9px;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';background-color:'.(!is_null ($scope->theme) ? ObjectHelper::ReadProperty ($scope->theme, 'colors.'.($scope->color).'.300') : 'inherit').';}li.'.$scope->componentSelectorReference.':hover{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.'.($scope->color).'.600'):'inherit').';}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['color','children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Bullet');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}