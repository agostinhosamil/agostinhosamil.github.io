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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' footer.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#0f191b;padding:90px 120px 50px;}@media(max-width: 990px){footer.'.$scope->componentSelectorReference.'{padding:50px 50px;}}';})), Capsule::CreateElement ('footer', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('DataWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'DataWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'DataWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-right:120px;}div.'.$scope->componentSelectorReference.' div{width:140px;}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' p{display:block;padding:30px 0px 15px;font-size:14px;color:#cfdee1;margin:0px;}div.'.$scope->componentSelectorReference.' span{color:#ffffff;}div.'.$scope->componentSelectorReference.' span i{margin-right:14px;}@media(max-width: 991px){div.'.$scope->componentSelectorReference.'{padding:0px 0px 30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('DataWrapper');

Capsule::Def ('MenuListsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuListsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuListsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-left:60px;}div.'.$scope->componentSelectorReference.' h4{color:#ffffff;font-size:18px;font-family:serif;font-weight:700;margin-bottom:25px;}div.'.$scope->componentSelectorReference.' ul{padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' ul li{list-style:none;margin:9px 0px;}div.'.$scope->componentSelectorReference.' ul li a{color:#ffffff;font-size:15px;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}div.'.$scope->componentSelectorReference.' ul li div{width:'.call_user_func(function($str){return $str;},'100%').';padding-top:25px;display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' ul li div a{width:35px;height:35px;display:flex;margin:0px 8px;color:#0f191b;background-color:#ffffff;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;justify-content:center;align-items:center;font-size:19px;}div.'.$scope->componentSelectorReference.' ul li div a:hover{text-decoration:none;background-color:'.call_user_func(function($str){return $str;},'rgb(255 255 255 / 62%)').';}@media(max-width: 991px){div.'.$scope->componentSelectorReference.'{padding:0px;}}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{padding:0px;}div.'.$scope->componentSelectorReference.' h4{margin-bottom:7px;}div.'.$scope->componentSelectorReference.' ul{display:flex;flex-direction:row;flex-wrap:wrap;margin:0px 0px 40px;}div.'.$scope->componentSelectorReference.' ul li{margin:6px;}div.'.$scope->componentSelectorReference.' ul li.expanded{margin:0px;width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuListsWrapper');

Capsule::Def ('CopyData', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CopyData');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CopyData', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';border-top:1px solid #1e3034;padding:50px 0px 0px;margin-top:90px;text-align:center;}div.'.$scope->componentSelectorReference.' span{font-size:13px;color:#ffffff;}@media(max-width: 991px){div.'.$scope->componentSelectorReference.'{padding-top:25px;margin-top:25px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CopyData');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}