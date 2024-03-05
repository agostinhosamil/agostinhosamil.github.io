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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' footer.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#000000;position:relative;padding:50px 120px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}footer.'.$scope->componentSelectorReference.' *{transition:inherit;}@media(max-width: 820px){footer.'.$scope->componentSelectorReference.'{padding:50px 30px;}}';})), Capsule::CreateElement ('footer', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('RegisterSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'RegisterSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'RegisterSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:510px;margin:auto;padding:50px 0px 100px;display:flex;flex-direction:column;justify-content:center;align-items:center;}section.'.$scope->componentSelectorReference.' *{text-align:center;}section.'.$scope->componentSelectorReference.' h1{color:#5a5a5a;font-size:29px;font-weight:400;text-transform:uppercase;padding:0px;margin:0px;}section.'.$scope->componentSelectorReference.' p{color:#c3c3c3;font-size:15px;padding:14px 0px 20px;}section.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;justify-content:center;align-items:center;flex-direction:row;}section.'.$scope->componentSelectorReference.' div form{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;}section.'.$scope->componentSelectorReference.' div form input{width:'.call_user_func(function($str){return $str;},'100%').';padding:10px 20px;border:1px solid #444444;outline:0px;text-align:left;background-color:'.call_user_func(function($str){return $str;},'rgb(255 255 255 / 13%)').';color:#ffffff;font-weight:500;margin-right:25px;}section.'.$scope->componentSelectorReference.' div form button{background-color:#ffffff;color:#444444;font-weight:500;font-size:12px;white-space:nowrap;border:0px;outline:0px;padding:0px 25px;display:flex;justify-content:center;align-items:center;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}section.'.$scope->componentSelectorReference.' div form button:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';display:block;width:19px;height:2px;background-color:#444444;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}section.'.$scope->componentSelectorReference.' div form button span{padding-left:13px;}section.'.$scope->componentSelectorReference.' div form button:hover{background-color:'.call_user_func(function($str){return $str;},'rgb(244 244 244 / 90%)').';}section.'.$scope->componentSelectorReference.' div form button:hover:before{width:25px;}@media(max-width:450px){section.'.$scope->componentSelectorReference.' div form{flex-direction:column;}section.'.$scope->componentSelectorReference.' div form button{margin-top:15px;height:45px;}}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('RegisterSectionContainer');

Capsule::Def ('CompanyInfoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CompanyInfoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CompanyInfoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-right:80px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';max-width:140px;margin-bottom:15px;}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';margin-top:-40px;}div.'.$scope->componentSelectorReference.' p{font-weight:100;font-size:13px;color:#d5d5d5;}div.'.$scope->componentSelectorReference.' span{display:block;padding:8px 0px;font-size:12px;color:#d5d5d5;}div.'.$scope->componentSelectorReference.' ul{padding:0px;margin:30px 0px 0px;width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;align-items:center;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 20px 20px 0px;}div.'.$scope->componentSelectorReference.' ul li a{display:block;color:#ffffff;font-size:20px;font-weight:900;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' ul li a:hover{transform:'.call_user_func(function($str){return $str;},'scale(1.6)').';}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{padding:0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CompanyInfoWrapper');

Capsule::Def ('MenuListsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuListsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuListsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-left:10px;}div.'.$scope->componentSelectorReference.' h1{display:block;font-weight:800;font-size:14px;color:#d3d3d3;margin:0px 0px 18px;text-transform:uppercase;}div.'.$scope->componentSelectorReference.' ul{padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' ul li{margin:25px 0px;}div.'.$scope->componentSelectorReference.' ul li a{display:block;line-height:15px;font-size:13px;color:#d3d3d3;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}div.'.$scope->componentSelectorReference.' ul li span{display:block;line-height:15px;font-size:13px;color:#d3d3d3;pointer-events:none;user-select:none;-webkit-user-select:none;}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{padding:0px;}div.'.$scope->componentSelectorReference.' ul.x-menu{display:flex;flex-direction:row;margin-bottom:25px;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul.x-menu li{margin:0px 12px 12px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuListsWrapper');

Capsule::Def ('CopyData', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CopyData');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CopyData', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:50px 0px 0px;margin:50px auto 0px;border-top:1px solid #1a1a1a;text-align:center;}div.'.$scope->componentSelectorReference.' span{font-size:12px;font-weight:300;color:#d3d3d3;text-transform:uppercase;letter-spacing:2px;word-spacing:5px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CopyData');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}