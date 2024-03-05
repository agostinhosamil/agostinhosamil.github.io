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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#d5dffd;display:flex;flex-direction:row;position:relative;}section.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Body', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Body');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Body', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'50%').';display:flex;flex-direction:row;padding:10px 120px;}@media(max-width: 990px){div.'.$scope->componentSelectorReference.'{padding:10px 30px;}}@media(max-width: 640px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';position:absolute;background-color:'.call_user_func(function($str){return $str;},'rgb(213 223 253 / 74%)').';top:0px;left:0px;right:0px;bottom:0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Body');

Capsule::Def ('DataWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'DataWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'DataWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:inline-flex;flex-direction:column;justify-content:center;align-items:flex-start;}div.'.$scope->componentSelectorReference.' strong{font-size:15px;font-weight:400;color:#d98b13;text-transform:uppercase;display:block;font-family:serif;}div.'.$scope->componentSelectorReference.' h1{font-size:33px;font-family:serif;color:#0A0B21;line-height:42px;display:block;padding:20px 0px 2px;font-weight:700;}div.'.$scope->componentSelectorReference.' p{font-size:14px;color:#5d657e;padding:0px;margin:0px 0px 25px;}div.'.$scope->componentSelectorReference.' a{background-color:#d98b13;display:inline-flex;color:#ffffff;padding:8px 18px 7px;font-size:16px;font-weight:500;justify-content:center;align-items:center;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;}div.'.$scope->componentSelectorReference.' a span{margin-right:15px;display:inline-block;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' a i{font-size:26px;}div.'.$scope->componentSelectorReference.' a:hover{background-color:#C37F18;}div.'.$scope->componentSelectorReference.' a:hover span{margin-right:25px;}@media(max-width: 870px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' h1{font-size:23px;line-height:24px;}div.'.$scope->componentSelectorReference.' p{font-size:11px;}div.'.$scope->componentSelectorReference.' a{font-size:12px;padding:6px 18px 5px;}}@media(max-width: 640px){div.'.$scope->componentSelectorReference.'{text-align:center;align-items:center;}div.'.$scope->componentSelectorReference.' strong{font-weight:700;color:#101010;}div.'.$scope->componentSelectorReference.' a i{font-size:18px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('DataWrapper');

Capsule::Def ('Poster', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Poster');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Poster', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'50%').';}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 640px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Poster');

Capsule::Def ('PlayerButton', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PlayerButton');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PlayerButton', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' button.'.$scope->componentSelectorReference.'{background-color:#d98b13;color:#ffffff;width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';flex-direction:row;justify-content:center;align-items:center;cursor:pointer;border:0px;outline:0px;}button.'.$scope->componentSelectorReference.' span{font-size:30px;color:inherit;}button.'.$scope->componentSelectorReference.' span i{margin:9px -9px 0px 0px;}button.'.$scope->componentSelectorReference.':hover{background-color:#C37F18;}@media(max-width: 640px){button.'.$scope->componentSelectorReference.'{}button.'.$scope->componentSelectorReference.' span{font-size:15px;}button.'.$scope->componentSelectorReference.' span i{margin:6px -6px 0px 0px;}}';})), Capsule::CreateElement ('button', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PlayerButton');

Capsule::Def ('PlayerButtonWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PlayerButtonWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PlayerButtonWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:64px;height:64px;position:absolute;top:'.call_user_func(function($str){return $str;},'50%').';left:'.call_user_func(function($str){return $str;},'50%').';margin:-32px 0px 0px -32px;}@media(max-width: 640px){div.'.$scope->componentSelectorReference.'{top:unset;bottom:20px;width:34px;height:34px;margin:0px 0px 0px -17px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PlayerButtonWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}