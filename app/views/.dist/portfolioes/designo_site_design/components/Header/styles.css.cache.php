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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' header.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('header', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderContainer');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:120px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';margin-top:-25px;}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('HeaderMenuContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderMenuContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderMenuContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:36px 30px 30px;display:flex;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderMenuContainer');

Capsule::Def ('MenuBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;position:relative;}@media(max-width: 790px){div.'.$scope->componentSelectorReference.'{justify-content:flex-end;}}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{justify-content:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuBody');

Capsule::Def ('MenuWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';flex:1;display:flex;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div ul{padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div ul li{margin:0px 9px;}div.'.$scope->componentSelectorReference.' div ul li a{color:#303030;font-size:14px;font-weight:800;}div.'.$scope->componentSelectorReference.' div ul li a:hover{text-decoration:underline;}@media(max-width: 790px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuWrapper');

Capsule::Def ('IconsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'IconsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'IconsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{display:flex;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div ul{padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div ul li{margin:0px 14px;}div.'.$scope->componentSelectorReference.' div ul li a{font-size:22px;color:#303030;outline:0px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('IconsWrapper');

Capsule::Def ('HeaderBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBody');

Capsule::Def ('NavigationMenu', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'NavigationMenu');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'NavigationMenu', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:420px;background-color:#ffffff;box-shadow:'.call_user_func(function($str){return $str;},'0px 13px 13px rgb(0 0 0 / 16%)').';border-bottom-right-radius:12px;border-bottom-left-radius:12px;padding:40px 20px 20px;position:absolute;right:0px;top:'.call_user_func(function($str){return $str;},'100%').';z-index:10;display:none;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' div ul li{margin:6px 0px;}div.'.$scope->componentSelectorReference.' div ul li a{display:block;padding:12px 17px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;color:#000000;font-weight:700;position:relative;}div.'.$scope->componentSelectorReference.' div ul li a:hover{background-color:#f1f1f1;}div.'.$scope->componentSelectorReference.' div ul li a:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';display:block;width:7px;height:2px;background-color:#000000;position:absolute;right:17px;top:'.call_user_func(function($str){return $str;},'50%').';margin-top:-1px;}div.'.$scope->componentSelectorReference.' div ol{width:'.call_user_func(function($str){return $str;},'100%').';padding:10px 0px 0px;margin:0px;display:flex;flex-direction:row;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' div ol li{margin:0px 12px 12px 0px;}div.'.$scope->componentSelectorReference.' div ol li a{color:#000000;font-weight:400;}div.'.$scope->componentSelectorReference.' div ol li a:hover{text-decoration:underline;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('NavigationMenu');

Capsule::Def ('BannerCaptionTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'BannerCaptionTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'BannerCaptionTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{position:absolute;right:'.call_user_func(function($str){return $str;},'22%').';top:0px;bottom:0px;height:'.call_user_func(function($str){return $str;},'100%').';display:flex;align-items:center;justify-content:center;width:80px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' code{transform:'.call_user_func(function($str){return $str;},'rotateZ(270deg)').';font-size:101px;white-space:nowrap;text-transform:uppercase;font-weight:900;color:transparent;-webkit-text-stroke-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 15%)').';-webkit-text-stroke-width:thin;user-select:none;pointer-events:none;}@media(max-width: 1160px){div.'.$scope->componentSelectorReference.'{right:50px;align-items:flex-start;padding-top:100px;}div.'.$scope->componentSelectorReference.' code{font-size:70px;}}@media(max-width: 400px){div.'.$scope->componentSelectorReference.'{right:20px;align-items:center;padding-top:100px;}div.'.$scope->componentSelectorReference.' code{font-size:55px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('BannerCaptionTitle');

Capsule::Def ('HeaderBannerContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBannerContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBannerContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:520px;position:relative;background-color:#ebebeb;overflow:hidden;}div.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:280px;height:280px;position:absolute;background-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 4%)').';border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';right:120px;top:-80px;}div.'.$scope->componentSelectorReference.':before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:371px;height:371px;position:absolute;border:'.call_user_func(function($str){return $str;},'30px solid rgb(0 0 0 / 4%)').';border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';right:74px;top:-127px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBannerContainer');

Capsule::Def ('HeaderBannerLabel', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBannerLabel');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBannerLabel', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' label.'.$scope->componentSelectorReference.'{position:absolute;bottom:57px;left:18px;font-size:14px;font-weight:700;transform:'.call_user_func(function($str){return $str;},'rotateZ(-270deg)').';text-transform:uppercase;pointer-events:none;user-select:none;}label.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';height:2px;width:17px;background-color:#455a64;display:block;position:absolute;top:0px;bottom:0px;margin:auto;right:-26px;}';})), Capsule::CreateElement ('label', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBannerLabel');

Capsule::Def ('HeaderBannerContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBannerContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBannerContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:max-content;max-width:277px;position:absolute;text-align:left;left:120px;top:0px;bottom:0px;margin:auto;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{text-transform:uppercase;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' strong{font-weight:600;font-size:10px;display:flex;color:#000000;flex-direction:row;align-items:center;margin-bottom:17px;}div.'.$scope->componentSelectorReference.' strong:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:17px;height:2px;background-color:#000000;display:block;margin-right:9px;}div.'.$scope->componentSelectorReference.' h1{font-size:51px;font-weight:900;color:#000000;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto Black").','.call_user_func(function($str){return "'$str'";},"Arial Black").','.call_user_func(function($str){return "'$str'";},"Arial Narraw").','.call_user_func(function($str){return "'$str'";},"Arial").',Helvetica,sans-serif').';line-height:40px;}div.'.$scope->componentSelectorReference.' p{font-size:14px;font-weight:400;color:#444444;padding:6px 0px 12px;}div.'.$scope->componentSelectorReference.' a{display:inline-block;background-color:#000000;color:#ffffff;padding:10px 26px;}div.'.$scope->componentSelectorReference.' a span{display:flex;flex-direction:row;align-items:center;justify-content:center;}div.'.$scope->componentSelectorReference.' a span:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:17px;height:2px;background-color:#ffffff;display:block;margin-right:9px;}@media(max-width: 866px){div.'.$scope->componentSelectorReference.'{left:40px;}}@media(max-width: 560px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' h1{font-size:35px;line-height:34px;}div.'.$scope->componentSelectorReference.' p{font-size:11px;}div.'.$scope->componentSelectorReference.' a{font-size:10px;padding:5px 16px;}}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{top:35px;bottom:unset;}div.'.$scope->componentSelectorReference.' p{padding:6px 0px 5px;}}@media(max-width: 400px){div.'.$scope->componentSelectorReference.'{text-align:center;}div.'.$scope->componentSelectorReference.' strong{justify-content:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBannerContentWrapper');

Capsule::Def ('HeaderBannerImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HeaderBannerImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HeaderBannerImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';background-attachment:scroll;background-position:center;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;-ms-background-size:cover;display:flex;justify-content:center;align-items:flex-end;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'80%').';max-width:510px;}@media(max-width:820px){div.'.$scope->componentSelectorReference.' div img{max-width:310px;}}@media(max-width: 1160px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div{justify-content:flex-end;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HeaderBannerImageWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}