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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' footer.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:flex;justify-content:center;align-items:center;background-color:#1a1a1a;padding:70px 0px 40px;}@media(max-width: 700px){footer.'.$scope->componentSelectorReference.'{padding:25px 0px 15px;}}';})), Capsule::CreateElement ('footer', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('FooterBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';display:flex;flex-direction:row;justify-content:center;align-items:flex-start;}@media(max-width: 1030px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:30px;}}@media(max-width: 700px){div.'.$scope->componentSelectorReference.'{flex-direction:column;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterBody');

Capsule::Def ('DataWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'DataWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'DataWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:250px;padding-right:50px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';max-width:170px;}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' p{display:block;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;font-size:11px;color:#d0d0d0;padding:30px 0px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('DataWrapper');

Capsule::Def ('FooterMenuListsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterMenuListsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterMenuListsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;}@media(max-width: 480px){div.'.$scope->componentSelectorReference.'{flex-direction:column;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterMenuListsWrapper');

Capsule::Def ('FooterMenuListWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterMenuListWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterMenuListWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' h1{font-weight:600;font-size:14px;color:#ffffff;text-transform:uppercase;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' ul li{margin:12px 0px;}div.'.$scope->componentSelectorReference.' ul li a{color:#ffffff;font-weight:200;font-size:12px;white-space:nowrap;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}@media(max-width:480px){div.'.$scope->componentSelectorReference.' ul{display:flex;flex-direction:row;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 8px 8px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterMenuListWrapper');

Capsule::Def ('SocialMediaLinksWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'SocialMediaLinksWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'SocialMediaLinksWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:max-content;display:inline-flex;flex-direction:column;justify-content:flex-start;align-items:flex-end;}div.'.$scope->componentSelectorReference.' h1{font-weight:600;font-size:14px;color:#ffffff;text-transform:uppercase;margin-right:7px;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';margin:0px 0px 0px 12px;padding:0px;display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 0px 0px 14px;}div.'.$scope->componentSelectorReference.' ul li a{display:block;color:#ffffff;font-weight:600;font-size:20px;}div.'.$scope->componentSelectorReference.' ul li a:hover{transform:'.call_user_func(function($str){return $str;},'scale(1.6)').';}@media(max-width: 700px){div.'.$scope->componentSelectorReference.'{align-items:center;width:'.call_user_func(function($str){return $str;},'100%').';padding:20px 0px 0px;border-top:1px solid #2c2c2c;margin-top:20px;}div.'.$scope->componentSelectorReference.' ul{justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 14px 0px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('SocialMediaLinksWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}