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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:inline-block;position:relative;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('ProductDetailsContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailsContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailsContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{z-index:1;padding:81px 20px 0px;margin-bottom:-30px;text-align:center;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailsContainer');

Capsule::Def ('ProductDetailsTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailsTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailsTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' h3.'.$scope->componentSelectorReference.'{font-size:58px;padding:'.call_user_func(function($str){return $str;},'.0px .0px 38px').';font-weight:800;color:#738892;}';})), Capsule::CreateElement ('h3', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailsTitle');

Capsule::Def ('ProductDetailsBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailsBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailsBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:inline-block;position:relative;padding:22px 30px 35px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailsBody');

Capsule::Def ('ProductDetailContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{background:'.call_user_func(function($str){return $str;},'#ffffff none repeat scroll 0%').';border:1px solid #e0e0e0;margin:'.call_user_func(function($str){return $str;},'.0px .0px 21px').';border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailContainer');

Capsule::Def ('ProductDetailCounterContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailCounterContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailCounterContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';margin:'.call_user_func(function($str){return $str;},'.0px .0px 4px').';height:18px;border-bottom:1px solid #ececed;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailCounterContainer');

Capsule::Def ('ProductDetailCounter', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailCounter');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailCounter', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';position:relative;text-align:left;pointer-events:none;}div.'.$scope->componentSelectorReference.' div{height:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' i{text-align:center;position:absolute;right:0px;left:0px;top:0px;bottom:0px;margin:auto;display:inline-block;font-size:12px;color:#ffffff;font-size:14px;font-weight:200;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailCounter');

Capsule::Def ('ProductDetailTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{margin:'.call_user_func(function($str){return $str;},'.0px .0px 20px').';position:relative;}div.'.$scope->componentSelectorReference.' span{font-size:26px;font-weight:700;text-shadow:'.call_user_func(function($str){return $str;},'0 0 1px rgba(0,99,255,0.59)').';color:#b3b4e2;position:relative;z-index:1;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailTitle');

Capsule::Def ('ProductDetailBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:inline-block;position:relative;padding:22px 30px 35px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailBody');

Capsule::Def ('ProductDetailDesc', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailDesc');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailDesc', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{text-align:left;background:transparent;font-size:17px;letter-spacing:1px;line-height:33px;word-spacing:5px;color:#737373;text-shadow:'.call_user_func(function($str){return $str;},'0 0 2px rgba(0, 0, 0, 0.24)').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailDesc');

Capsule::Def ('ProductDetailDescList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductDetailDescList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductDetailDescList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:inline-block;position:relative;list-style-type:none;list-style:none;}div.'.$scope->componentSelectorReference.' li{display:table;width:'.call_user_func(function($str){return $str;},'100%').';position:relative;padding:'.call_user_func(function($str){return $str;},'4px .0px').';list-style-type:none;text-align:center;position:relative;padding:0px 0px 0px 10px;}div.'.$scope->componentSelectorReference.' li span{position:relative;;}div.'.$scope->componentSelectorReference.' li span i{width:14px;height:14px;background-color:#9daabd;position:absolute;left:-16px;top:'.call_user_func(function($str){return $str;},'50%').';margin-top:-7px;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductDetailDescList');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}