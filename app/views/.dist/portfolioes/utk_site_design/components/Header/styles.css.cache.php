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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' header.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#00bfff;position:relative;padding-top:40px;}';})), Capsule::CreateElement ('header', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Content', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Content');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Content', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';position:absolute;top:0px;left:0px;height:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Content');

Capsule::Def ('Body', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Body');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Body', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;align-items:center;justify-content:center;flex-direction:column;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Body');

Capsule::Def ('TopContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TopContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TopContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;padding:20px 50px;background-color:#ffffff;align-items:center;justify-content:center;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('TopContainer');

Capsule::Def ('MenuContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;justify-content:center;align-items:flex-end;list-style-type:none;}@media(max-width: 630px){div.'.$scope->componentSelectorReference.'{align-items:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuContainer');

Capsule::Def ('Menu', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Menu');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Menu', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{margin:0px;padding:0px;}ul.'.$scope->componentSelectorReference.' li{list-style:none;display:inline-block;margin:0px 9px;}ul.'.$scope->componentSelectorReference.' li a{display:block;color:#000000;}ul.'.$scope->componentSelectorReference.' li a span{margin-left:9px;}ul.'.$scope->componentSelectorReference.' li a:hover{text-decoration:underline;}@media(max-width:1000px){ul.'.$scope->componentSelectorReference.' li a{font-size:18px;background-color:#000000;color:#ffffff;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';width:35px;height:35px;display:flex;flex-direction:row;justify-content:center;align-items:center;}ul.'.$scope->componentSelectorReference.' li a span{display:none;}}@media(max-width:410px){ul.'.$scope->componentSelectorReference.' li{margin:0px 4px;}ul.'.$scope->componentSelectorReference.' li a{font-size:13px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Menu');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:140px;display:flex;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' img{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 630px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('HeaderLinksWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderLinksWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderLinksWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{display:inline-flex;flex-direction:row;margin:0px 0px 12px;padding:0px 12px 0px 0px;}ul.'.$scope->componentSelectorReference.' li{display:inline-block;margin-left:25px;}ul.'.$scope->componentSelectorReference.' li a{display:block;font-size:19px;color:#000000;}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderLinksWrapper');

Capsule::Def ('VideoContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'VideoContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'VideoContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';pointer-events:none;opacity:'.call_user_func(function($str){return $str;},'.2').';}div.'.$scope->componentSelectorReference.' video{width:'.call_user_func(function($str){return $str;},'100%').';margin:0px 0px -6px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('VideoContainer');

Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Title');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Title', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' h1.'.$scope->componentSelectorReference.'{font-size:80px;font-weight:900;display:block;width:'.call_user_func(function($str){return $str;},'60%').';text-align:center;line-height:72px;color:#ffffff;text-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 24%)2px 2px 2px').';pointer-events:none;user-select:none;-webkit-user-select:none;transition:'.call_user_func(function($str){return $str;},'all .3s ease').';}@media(max-width: 950px){h1.'.$scope->componentSelectorReference.'{font-size:65px;line-height:59px;}}@media(max-width: 820px){h1.'.$scope->componentSelectorReference.'{font-size:35px;line-height:42px;}}@media(max-width: 610px){h1.'.$scope->componentSelectorReference.'{font-size:19px;line-height:21px;}}';})), Capsule::CreateElement ('h1', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Title');

Capsule::Def ('KeywordList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'KeywordList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'KeywordList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{padding:0px;margin:0px 0px 30px;}ul.'.$scope->componentSelectorReference.' li{padding:4px 20px 3px;display:inline-block;list-style:none;font-size:13px;border-radius:40px;-webkit-border-radius:40px;-moz-border-radius:40px;-o-border-radius:40px;-ms-border-radius:40px;margin:0px 5px;color:#207591;background-color:#ffffff;pointer-events:none;user-select:none;-webkit-user-select:none;transition:'.call_user_func(function($str){return $str;},'all .3s ease-out').';}@media(max-width:610px){ul.'.$scope->componentSelectorReference.' li{font-size:9px;padding:4px 12px 3px;}}@media(max-width: 820px){ul.'.$scope->componentSelectorReference.'{margin:0px 0px 20px;}ul.'.$scope->componentSelectorReference.' li{font-size:9px;}}@media(max-width: 410px){ul.'.$scope->componentSelectorReference.'{}ul.'.$scope->componentSelectorReference.' li{font-size:5px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('KeywordList');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}