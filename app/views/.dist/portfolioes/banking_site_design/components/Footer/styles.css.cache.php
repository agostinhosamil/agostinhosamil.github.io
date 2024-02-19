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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' footer.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;background:#ffffff;position:relative;padding:0px 120px;}@media(max-width: 990px){footer.'.$scope->componentSelectorReference.'{padding:0px 20px;}}';})), Capsule::CreateElement ('footer', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('NewsLatterFormWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'NewsLatterFormWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'NewsLatterFormWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:320px;padding:0px 0px 50px;}div.'.$scope->componentSelectorReference.' form{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' form div.logo-wrapper{padding:0px 0px 30px;}div.'.$scope->componentSelectorReference.' form h1{color:#292929;font-size:32px;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Trebuchet MS").','.call_user_func(function($str){return "'$str'";},"Arial Narraw").','.call_user_func(function($str){return "'$str'";},"Roboto Regular").','.call_user_func(function($str){return "'$str'";},"Arial").','.call_user_func(function($str){return "'$str'";},"Helvetica").',sans-serif').';font-weight:700;line-height:34px;}div.'.$scope->componentSelectorReference.' form div.input-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';border:1px solid #e7e7e7;border-radius:10px;-webkit-border-radius:10px;-moz-border-radius:10px;-o-border-radius:10px;-ms-border-radius:10px;display:flex;flex-direction:row;align-items:center;padding:10px;margin-top:35px;}div.'.$scope->componentSelectorReference.' form div.input-wrapper input{width:'.call_user_func(function($str){return $str;},'100%').';border:0px;outline:0px;font-size:18px;padding-left:15px;color:#a0a0a0;}div.'.$scope->componentSelectorReference.' form div.input-wrapper div{margin-left:10px;}div.'.$scope->componentSelectorReference.' form div.input-wrapper div button{border:0px;outline:0px;background:'.call_user_func(function($str){return $str;},'rgb(0 149 107)').';color:#ffffff;font-weight:400;padding:9px 20px;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;}@media(max-width: 991px){div.'.$scope->componentSelectorReference.'{max-width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('NewsLatterFormWrapper');

Capsule::Def ('MenuListWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MenuListWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MenuListWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:20px 0px 0px;}div.'.$scope->componentSelectorReference.' h1{font-size:17px;font-weight:600;color:#101010;}div.'.$scope->componentSelectorReference.' ul{padding:5px 0px 0px;margin:0px;}div.'.$scope->componentSelectorReference.' ul li{margin:16px 0px;}div.'.$scope->componentSelectorReference.' ul li a{color:#303030;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}@media(max-width:767px){div.'.$scope->componentSelectorReference.' ul{display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' ul li{margin:8px 16px 8px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('MenuListWrapper');

Capsule::Def ('FooterDetailsContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterDetailsContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterDetailsContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;border-top:1px solid #cdcdcd;display:flex;flex-direction:row;padding:30px 0px;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div.copy-data{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;align-items:center;}div.'.$scope->componentSelectorReference.' div.list-wrapper{width:auto;}div.'.$scope->componentSelectorReference.' div.list-wrapper ul{padding:0px;margin:0px;display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' div.list-wrapper ul li{margin:0px 0px 0px 25px;}div.'.$scope->componentSelectorReference.' div.list-wrapper ul li a{display:block;width:38px;height:38px;font-size:17px;background:'.call_user_func(function($str){return $str;},'rgb(0 23 55)').';color:#ffffff;display:flex;flex-direction:row;justify-content:center;align-items:center;font-weight:700;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterDetailsContainer');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}