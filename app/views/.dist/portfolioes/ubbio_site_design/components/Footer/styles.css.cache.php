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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' footer.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;color:#ffffff;box-sizing:border-box;margin-top:180px;}@media(max-width: 450px){footer.'.$scope->componentSelectorReference.'{margin-top:10px;}}';})), Capsule::CreateElement ('footer', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Content', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Content');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Content', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#023429;padding:120px 120px 34px;}div.'.$scope->componentSelectorReference.' div.company-data-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding-right:'.call_user_func(function($str){return $str;},'25%').';}div.'.$scope->componentSelectorReference.' div.company-data-wrapper div.logo-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';max-width:150px;margin-bottom:20px;}div.'.$scope->componentSelectorReference.' div.company-data-wrapper div.logo-wrapper svg{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.company-data-wrapper p{font-size:15px;color:#ffffff;font-weight:400;}div.'.$scope->componentSelectorReference.' div.company-data-wrapper ul{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:0px;margin:25px 0px 0px;display:flex;flex-wrap:wrap;flex-direction:row;}div.'.$scope->componentSelectorReference.' div.company-data-wrapper ul li{margin:0px 15px 15px 0px;}div.'.$scope->componentSelectorReference.' div.company-data-wrapper ul li a{display:flex;width:39px;height:39px;background-color:#ffffff;font-weight:800;font-size:19px;color:#023429;flex-direction:row;justify-content:center;align-items:center;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;}div.'.$scope->componentSelectorReference.' div.footer-menu-lists-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.footer-menu-lists-wrapper h3{font-size:18px;}div.'.$scope->componentSelectorReference.' div.footer-menu-lists-wrapper ul{padding:15px 0px 0px;margin:0px;}div.'.$scope->componentSelectorReference.' div.footer-menu-lists-wrapper ul li{margin-bottom:15px;}div.'.$scope->componentSelectorReference.' div.footer-menu-lists-wrapper ul li a{color:#d4e3e0;font-size:14px;}div.'.$scope->componentSelectorReference.' div.footer-menu-lists-wrapper ul li a:hover{text-decoration:underline;}div.'.$scope->componentSelectorReference.' div.footer-copy-data-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';border-top:1px solid #234a42;padding:36px 0px 0px;margin:40px 0px 0px;text-align:center;}div.'.$scope->componentSelectorReference.' div.footer-copy-data-wrapper span{color:#ffffff;font-weight:300;}@media(max-width: 910px){div.'.$scope->componentSelectorReference.'{padding:120px 40px 34px;}}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{padding-top:50px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Content');

Capsule::Def ('ServiceDetailsContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ServiceDetailsContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ServiceDetailsContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';position:absolute;bottom:'.call_user_func(function($str){return $str;},'100%').';padding:0px 120px;left:0px;right:0px;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper{position:relative;margin:'.call_user_func(function($str){return $str;},'-65px auto -50%').';background-color:#eaeae8;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:30px;margin:0px;display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul li{display:inline-flex;width:'.call_user_func(function($str){return $str;},'100%').';align-items:center;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul li div.icon-wrapper{display:inline-flex;width:65px;height:65px;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul li div.icon-wrapper span{display:flex;width:inherit;height:inherit;font-size:35px;font-weight:700;background-color:#023429;color:#ffffff;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul li div.content-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';padding-left:25px;display:inline-flex;justify-content:center;flex-direction:column;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul li div.content-wrapper strong{color:#303030;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul li div.content-wrapper p{color:#303030;padding:0px;margin:0px;}@media(max-width:750px){div.'.$scope->componentSelectorReference.' div.details-list-wrapper{margin:'.call_user_func(function($str){return $str;},'-149px auto -50%').';}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul{flex-direction:column;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper ul li{margin:8px 0px;}}@media(max-width: 910px){div.'.$scope->componentSelectorReference.'{padding:0px 40px;}}@media(max-width: 890px){div.'.$scope->componentSelectorReference.'{padding:0px 40px;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper div.icon-wrapper{width:'.call_user_func(function($str){return $str;},'37px !important').';height:'.call_user_func(function($str){return $str;},'37px !important').';}div.'.$scope->componentSelectorReference.' div.details-list-wrapper div.icon-wrapper span{font-size:'.call_user_func(function($str){return $str;},'16px !important').';}}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{position:relative;padding:0px;}div.'.$scope->componentSelectorReference.' div.details-list-wrapper{margin:0px;background-color:transparent;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ServiceDetailsContainer');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}