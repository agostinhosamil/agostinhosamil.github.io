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

Capsule::Def ('HeaderContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#d7cfc2;position:relative;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderContainer');

Capsule::Def ('MenuContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#ffffff;display:flex;flex-direction:row;justify-content:center;align-items:center;padding:'.call_user_func(function($str){return $str;},'35px 5%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuContainer');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:140px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('MenuBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;display:inline-flex;justify-content:center;align-items:center;flex-direction:row;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 12px;}div.'.$scope->componentSelectorReference.' ul li a{color:#320200;font-weight:500;font-size:13px;white-space:nowrap;position:relative;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}div.'.$scope->componentSelectorReference.' ul li a.selected:after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:'.call_user_func(function($str){return $str;},'100%').';height:2px;display:block;position:absolute;bottom:-4px;left:0px;right:0px;background-color:#320200;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuBody');

Capsule::Def ('CtaWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CtaWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CtaWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:max-content;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;display:inline-flex;justify-content:flex-end;align-items:center;flex-direction:row;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 7px;}div.'.$scope->componentSelectorReference.' ul li a{color:#ffffff;background-color:#320200;font-weight:500;font-size:13px;display:block;padding:11px 22px;border:1px solid #320200;white-space:nowrap;border-radius:25px;-webkit-border-radius:25px;-moz-border-radius:25px;-o-border-radius:25px;-ms-border-radius:25px;}div.'.$scope->componentSelectorReference.' ul li a:hover{background-color:#ffffff;color:#320200;}@media(max-width:550px){div.'.$scope->componentSelectorReference.' ul li a{padding:5px 11px 4px;font-size:10px;}}div.'.$scope->componentSelectorReference.' ul li a.outlined{background-color:transparent;color:#320200;}div.'.$scope->componentSelectorReference.' ul li a.outlined:hover{background-color:#f1f1f1;}div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper{position:relative;display:none;}div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper a{border:0px;color:#320200;background-color:transparent;font-size:20px;padding:11px 0px;}div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper button{border:0px;outline:0px;color:#320200;cursor:pointer;background-color:transparent;font-size:20px;}@media(max-width:900px){div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper{display:inline-flex;}}@media(max-width:400px){div.'.$scope->componentSelectorReference.' ul{}div.'.$scope->componentSelectorReference.' ul li{display:none;}div.'.$scope->componentSelectorReference.' ul li.menu-button-wrapper{display:inline-flex;}}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:flex-end;align-items:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CtaWrapper');

Capsule::Def ('HeaderBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:570px;display:flex;flex-direction:row;justify-content:center;align-items:center;padding:'.call_user_func(function($str){return $str;},'30px 5%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBody');

Capsule::Def ('Content', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Content');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Content', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-right:80px;}div.'.$scope->componentSelectorReference.' h1{color:#320200;font-weight:900;font-size:72px;line-height:70px;padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' p{font-weight:400;font-size:16px;color:#320200;display:block;padding:12px 0px 25px;}div.'.$scope->componentSelectorReference.' a{display:inline-block;padding:15px 35px;border-radius:35px;-webkit-border-radius:35px;-moz-border-radius:35px;-o-border-radius:35px;-ms-border-radius:35px;background-color:#320200;color:#ffffff;}div.'.$scope->componentSelectorReference.' a:hover{background-color:#ffffff;color:#320200;}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{padding-right:60px;}div.'.$scope->componentSelectorReference.' h1{font-size:56px;}}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{padding:0px;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;}div.'.$scope->componentSelectorReference.' *{text-align:center;}}@media(max-width: 400px){div.'.$scope->componentSelectorReference.'{padding:10px;}div.'.$scope->componentSelectorReference.' h1{font-size:35px;line-height:36px;}div.'.$scope->componentSelectorReference.' a{padding:7px 15px 6px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Content');

Capsule::Def ('ImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:480px;height:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;align-items:center;justify-content:flex-end;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';max-width:480px;}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ImageWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}