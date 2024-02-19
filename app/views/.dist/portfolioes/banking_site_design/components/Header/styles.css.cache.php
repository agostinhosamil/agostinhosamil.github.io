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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;background:#004952;position:relative;}div.'.$scope->componentSelectorReference.' *{list-style:none;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Styles', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Styles');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Styles', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return '.fixed-header-menu{position:fixed;z-index:10;top:0px;left:0px;right:0px;width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';background-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 95%)').';display:flex;align-items:center;justify-content:center;flex-direction:column;}.fixed-header-menu button.fixed-header-menu-close-button{position:absolute;top:20px;right:20px;border:0px;background-color:transparent;font-size:40px;color:#ffffff;width:54px;outline:0px;}.fixed-header-menu li{list-style:none;margin:15px 0px;}.fixed-header-menu li a{color:#ffffff;font-size:25px;display:inline-block;}';})));
});

Capsule::Export ('Styles');

Capsule::Def ('MenuContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:50px 120px;position:relative;display:flex;flex-direction:row;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}@media(max-width: 990px){div.'.$scope->componentSelectorReference.'{padding:28px 20px;background-color:'.call_user_func(function($str){return $str;},'rgb(28 111 120 / 65%)').';margin-bottom:80px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuContainer');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{widows:1;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('MenuListWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuListWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuListWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:inline-flex;flex-direction:row;justify-content:center;align-items:center;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuListWrapper');

Capsule::Def ('MenuList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';padding:0px;margin:0px;}ul.'.$scope->componentSelectorReference.' li{display:inline-flex;justify-content:center;align-items:center;margin:0px 16px;}ul.'.$scope->componentSelectorReference.' li a{color:#ffffff;font-size:16px;}ul.'.$scope->componentSelectorReference.' li.menu-button{display:none;}@media(max-width: 800px){ul.'.$scope->componentSelectorReference.'{justify-content:flex-end;}}@media(max-width: 600px){ul.'.$scope->componentSelectorReference.'{}ul.'.$scope->componentSelectorReference.' li{display:none;}ul.'.$scope->componentSelectorReference.' li.menu-button{display:inline-flex;}ul.'.$scope->componentSelectorReference.' li.menu-button a{font-size:40px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuList');

Capsule::Def ('MenuCtaWrappper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuCtaWrappper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuCtaWrappper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:auto;height:auto;display:flex;align-items:center;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div a{white-space:nowrap;background-color:#E3FF53;color:#363636;font-weight:600;padding:13px 34px;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;-o-border-radius:7px;-ms-border-radius:7px;display:inline-flex;}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuCtaWrappper');

Capsule::Def ('HeaderBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:740px;position:relative;display:flex;flex-direction:row;justify-content:center;align-items:center;padding:0px 120px 80px;}@media(max-width: 1100px){div.'.$scope->componentSelectorReference.'{padding:0px 50px 80px;}}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;height:auto;}}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{padding:0px 10px 80px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBody');

Capsule::Def ('HeaderContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;justify-content:center;align-items:flex-start;}div.'.$scope->componentSelectorReference.' h1{color:#ffffff;font-size:62px;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Trebuchet MS").','.call_user_func(function($str){return "'$str'";},"Arial Narraw").','.call_user_func(function($str){return "'$str'";},"Roboto Regular").','.call_user_func(function($str){return "'$str'";},"Arial").','.call_user_func(function($str){return "'$str'";},"Helvetica").',sans-serif').';font-weight:700;line-height:64px;}div.'.$scope->componentSelectorReference.' p{font-size:19px;color:#e1e1e1;padding:25px 0px;}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{padding-top:70px;}}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' h1{font-size:32px;line-height:37px;}div.'.$scope->componentSelectorReference.' p{font-size:14px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderContentWrapper');

Capsule::Def ('HeaderCtaWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderCtaWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderCtaWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;padding:0px;margin:0px;}ul.'.$scope->componentSelectorReference.' li{margin:0px 20px 20px 0px;}ul.'.$scope->componentSelectorReference.' li a{white-space:nowrap;background-color:#E3FF53;color:#363636;font-weight:600;padding:13px 34px;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;-o-border-radius:7px;-ms-border-radius:7px;display:inline-flex;}ul.'.$scope->componentSelectorReference.' li a.outlined{background-color:transparent;color:#ffffff;border:1px solid #ffffff;}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderCtaWrapper');

Capsule::Def ('AppStatsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppStatsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppStatsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:flex;flex-direction:row;justify-content:flex-start;align-items:center;padding:50px 0px 0px;margin:0px;}ul.'.$scope->componentSelectorReference.' li{display:flex;flex-direction:column;justify-content:center;align-items:center;}ul.'.$scope->componentSelectorReference.' li div{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;display:flex;flex-direction:column;justify-content:center;color:#ffffff;margin:0px 22px 22px 0px;text-align:center;}ul.'.$scope->componentSelectorReference.' li div i{font-size:60px;}ul.'.$scope->componentSelectorReference.' li div strong{font-size:28px;}ul.'.$scope->componentSelectorReference.' li div span{font-size:14px;}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppStatsWrapper');

Capsule::Def ('HeaderImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:430px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';pointer-events:none;}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'75%').';margin:auto;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderImageWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}