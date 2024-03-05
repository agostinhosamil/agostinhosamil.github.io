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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;background-color:#157cd1;padding:80px 0px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';position:relative;}div.'.$scope->componentSelectorReference.' *{transition:inherit;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('FooterBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';height:auto;margin:auto;padding:50px 0px 0px;}div.'.$scope->componentSelectorReference.' div.company-data{width:'.call_user_func(function($str){return $str;},'100%').';padding-right:70px;}div.'.$scope->componentSelectorReference.' div.company-data div{width:'.call_user_func(function($str){return $str;},'100%').';max-width:140px;}div.'.$scope->componentSelectorReference.' div.company-data div svg{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.company-data p{display:block;width:'.call_user_func(function($str){return $str;},'100%').';padding:15px 0px;font-size:12px;color:#ffffff;font-weight:300;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';padding-left:60px;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper h1{padding:0px;margin:0px;font-size:18px;font-weight:700;color:#ffffff;display:block;padding:0px 0px 20px;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ul{margin:0px;padding:0px;width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ul li{margin:12px 0px;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ul li a{color:#ffffff;font-size:13px;font-weight:500;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ul li a:hover{text-decoration:underline;}@media(max-width:767px){div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ul{display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ul li{margin:0px 12px 12px 0px;}}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ol{padding:0px;margin:0px;display:flex;flex-direction:row;flex-wrap:wrap;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ol li{margin:8px;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ol li a{width:30px;height:30px;display:flex;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';background-color:#ffffff;color:#157cd1;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper ol li a:hover{transform:'.call_user_func(function($str){return $str;},'scale(1.4)').';}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:50px 30px 0px;}}@media(max-width: 991px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div.company-data{padding:0px;}div.'.$scope->componentSelectorReference.' div.menu-lists-wrapper{padding:0px;}}@media(max-width: 600px){div.'.$scope->componentSelectorReference.'{padding:80px 30px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterBody');

Capsule::Def ('FooterDetails', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterDetails');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterDetails', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{position:absolute;width:'.call_user_func(function($str){return $str;},'60%').';left:'.call_user_func(function($str){return $str;},'20%').';background-color:#ffffff;box-shadow:'.call_user_func(function($str){return $str;},'0px 0px 20px rgb(0 0 0 / 14%)').';padding:30px;top:0px;margin-top:-50px;border-radius:13px;-webkit-border-radius:13px;-moz-border-radius:13px;-o-border-radius:13px;-ms-border-radius:13px;display:flex;flex-direction:row;justify-content:center;align-items:center;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';display:inline-flex;justify-content:center;align-items:center;align-items:center;flex-direction:row;}div.'.$scope->componentSelectorReference.' div h3{padding:0px;margin:0px;font-size:21px;font-weight:700;color:#157cd1;}div.'.$scope->componentSelectorReference.' div span{display:flex;width:45px;height:45px;}div.'.$scope->componentSelectorReference.' div span i{display:flex;width:inherit;height:inherit;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';background-color:#157cd1;color:#ffffff;flex-direction:row;justify-content:center;align-items:center;font-size:15px;}div.'.$scope->componentSelectorReference.' div data{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';padding:0px 0px 0px 15px;margin:0px;display:flex;justify-content:center;flex-direction:column;}div.'.$scope->componentSelectorReference.' div data strong{font-weight:500;color:#157cd1;font-size:15px;}div.'.$scope->componentSelectorReference.' div data p{color:#918e8e;font-size:12px;padding:0px;margin:0px;}@media(max-width: 850px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'92%').';left:'.call_user_func(function($str){return $str;},'4%').';}}@media(max-width: 600px){div.'.$scope->componentSelectorReference.'{margin-top:-100px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';margin:8px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterDetails');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}