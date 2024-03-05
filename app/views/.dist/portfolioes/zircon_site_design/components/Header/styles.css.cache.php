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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' header.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;}header.'.$scope->componentSelectorReference.' *{list-style:none;list-style-type:none;}';})), Capsule::CreateElement ('header', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('MenuContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;align-items:center;justify-content:center;padding:40px 120px;position:relative;z-index:3;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuContainer');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:140px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('MenuBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:inline-flex;flex-direction:row;align-items:center;justify-content:flex-end;}@media(max-width: 850px){div.'.$scope->componentSelectorReference.'{position:fixed;background-color:'.call_user_func(function($str){return $str;},'rgb(54 54 54 / 98%)').';width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';top:0px;left:0px;right:0px;z-index:5;display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuBody');

Capsule::Def ('MenuButtonWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuButtonWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuButtonWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{display:none;}@media(max-width: 851px){div.'.$scope->componentSelectorReference.'{display:block;position:absolute;top:37px;right:37px;}div.'.$scope->componentSelectorReference.' div{position:relative;z-index:3;}div.'.$scope->componentSelectorReference.' div button{background-color:transparent;color:#363636;font-size:32px;outline:0px;border:0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuButtonWrapper');

Capsule::Def ('Menu', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Menu');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Menu', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{display:inline-flex;padding:0px;margin:0px;}ul.'.$scope->componentSelectorReference.' li{margin-left:15px;}ul.'.$scope->componentSelectorReference.' li a{color:#333333;font-size:16px;}ul.'.$scope->componentSelectorReference.' li a.selected{color:#222222;font-weight:700;}ul.'.$scope->componentSelectorReference.' li.menu-close-button{display:none;}@media(max-width: 850px){ul.'.$scope->componentSelectorReference.'{flex-direction:column;padding:60px;}ul.'.$scope->componentSelectorReference.' li.menu-close-button{position:absolute;top:10px;right:44px;display:block;}ul.'.$scope->componentSelectorReference.' li.menu-close-button a{font-size:45px;}ul.'.$scope->componentSelectorReference.' li{margin:14px 0px;text-align:right;}ul.'.$scope->componentSelectorReference.' li a{color:#ffffff;font-size:31px;text-align:right;}ul.'.$scope->componentSelectorReference.' li a.selected{color:#65abe7;font-weight:700;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Menu');

Capsule::Def ('HeaderBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;padding:30px 120px 180px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}@media(max-width: 950px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;padding:30px 80px 180px;}}@media(max-width: 620px){div.'.$scope->componentSelectorReference.'{padding:30px 20px 180px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBody');

Capsule::Def ('HeaderBodyImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBodyImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBodyImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{display:inline-flex;flex-direction:column;width:'.call_user_func(function($str){return $str;},'100%').';max-width:360px;position:relative;}div.'.$scope->componentSelectorReference.':before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';position:absolute;z-index:1;width:520px;height:520px;background-color:#ebebeb;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';top:'.call_user_func(function($str){return $str;},'-36%').';left:'.call_user_func(function($str){return $str;},'-81%').';transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}@media(max-width:700px){div.'.$scope->componentSelectorReference.':before{left:'.call_user_func(function($str){return $str;},'-91%').';}}div.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';position:absolute;z-index:1;width:420px;height:420px;background-color:#ebebeb;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';bottom:'.call_user_func(function($str){return $str;},'-18%').';right:'.call_user_func(function($str){return $str;},'-6%').';}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;z-index:2;}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 950px){div.'.$scope->componentSelectorReference.'{padding:50px 0px 0px;margin:auto;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBodyImageWrapper');

Capsule::Def ('HeaderBodyContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBodyContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBodyContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:inline-flex;flex-direction:column;justify-content:center;align-items:flex-start;padding:0px 0px 0px 90px;}div.'.$scope->componentSelectorReference.' div.content{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;}div.'.$scope->componentSelectorReference.' div.content h1{font-size:45px;color:#424242;font-weight:500;padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' div.content h2{font-size:26px;font-weight:300;color:#444444;}div.'.$scope->componentSelectorReference.' div.content p{font-size:12px;line-height:26px;display:block;max-width:611px;color:#a7a7a7;}div.'.$scope->componentSelectorReference.' div.content div.cta-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';padding:5px 0px 0px;}div.'.$scope->componentSelectorReference.' div.content div.cta-wrapper button{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.500'):'inherit').';padding:6px 22px 5px;color:#ffffff;font-size:14px;border-radius:30px;-webkit-border-radius:30px;-moz-border-radius:30px;-o-border-radius:30px;-ms-border-radius:30px;border:0px;outline:0px;}div.'.$scope->componentSelectorReference.' div.content div.cta-wrapper button:hover{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.700'):'inherit').';}div.'.$scope->componentSelectorReference.' div.content div.cta-wrapper button:active{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.800'):'inherit').';}div.'.$scope->componentSelectorReference.' div.content div.cta-wrapper button span{margin-right:8px;}@media(max-width:950px){div.'.$scope->componentSelectorReference.' div.content{align-items:flex-end;text-align:center;position:relative;z-index:2;}div.'.$scope->componentSelectorReference.' div.content p{max-width:'.call_user_func(function($str){return $str;},'100%').';}}@media(max-width: 950px){div.'.$scope->componentSelectorReference.'{padding:0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBodyContentWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}