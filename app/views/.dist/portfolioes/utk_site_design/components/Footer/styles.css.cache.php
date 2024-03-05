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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' footer.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;background-color:#000000;}';})), Capsule::CreateElement ('footer', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Body', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Body');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Body', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:120px 120px 70px;}div.'.$scope->componentSelectorReference.' div.row.bottom{padding-top:70px;}div.'.$scope->componentSelectorReference.' div.footer-logo{width:'.call_user_func(function($str){return $str;},'100%').';max-width:170px;}div.'.$scope->componentSelectorReference.' div.footer-logo img{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul{padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' div.footer-col{position:relative;}div.'.$scope->componentSelectorReference.' div.footer-col strong{font-size:25px;color:#ffffff;font-weight:700;display:block;margin-bottom:21px;}div.'.$scope->componentSelectorReference.' div.footer-col ul{padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' div.footer-col ul li{list-style:none;margin:0px 0px 8px;}div.'.$scope->componentSelectorReference.' div.footer-col ul li a{font-size:14px;color:#c3c3c3;}div.'.$scope->componentSelectorReference.' div.footer-col ul li a:hover{text-decoration:underline;}@media(max-width:991px){div.'.$scope->componentSelectorReference.' div.footer-col ul li{display:inline-block;margin:0px 17px 17px 0px;}}div.'.$scope->componentSelectorReference.' div.social-media-links-wrapper{height:auto;display:flex;flex-direction:row;justify-content:flex-end;align-items:center;}div.'.$scope->componentSelectorReference.' div.social-media-links-wrapper ul{padding:0px;margin:0px;display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' div.social-media-links-wrapper ul li{list-style:none;margin-left:18px;}div.'.$scope->componentSelectorReference.' div.social-media-links-wrapper ul li a{display:flex;width:42px;height:42px;background-color:#ffffff;color:#000000;font-size:18px;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';flex-direction:row;justify-content:center;align-items:center;border:1px solid transparent;}div.'.$scope->componentSelectorReference.' div.social-media-links-wrapper ul li a:hover{background-color:transparent;border-color:#ffffff;color:#ffffff;}@media(max-width: 991px){div.'.$scope->componentSelectorReference.'{padding:70px;}}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div.row.bottom .col-md-8{display:flex;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div.social-media-links-wrapper{padding-top:50px;justify-content:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Body');

Capsule::Def ('Details', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Details');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Details', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:50px 120px;background-color:#0a0a0a;}div.'.$scope->componentSelectorReference.' ul{padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' .col-lg-5{display:flex;align-items:center;}div.'.$scope->componentSelectorReference.' .copy-data{text-align:left;}div.'.$scope->componentSelectorReference.' .copy-data span{font-size:13px;color:#ffffff;}div.'.$scope->componentSelectorReference.' .footer-menu-links{width:'.call_user_func(function($str){return $str;},'100%').';margin:0px;padding:0px;display:flex;flex-direction:row;justify-content:flex-end;align-items:center;}div.'.$scope->componentSelectorReference.' .footer-menu-links li{display:inline-flex;margin:5px 0px 5px 6px;align-items:center;}div.'.$scope->componentSelectorReference.' .footer-menu-links li a{color:#ffffff;font-size:12px;}div.'.$scope->componentSelectorReference.' .footer-menu-links li a:hover{text-decoration:underline;}@media(max-width: 991px){div.'.$scope->componentSelectorReference.'{text-align:center;padding:50px 20px;}div.'.$scope->componentSelectorReference.' .col-lg-5{display:flex;align-items:center;justify-content:center;}div.'.$scope->componentSelectorReference.' .col-lg-7{display:flex;align-items:center;justify-content:center;padding-top:40px;}div.'.$scope->componentSelectorReference.' .footer-menu-links{align-items:center;justify-content:center;flex-wrap:wrap;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Details');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}