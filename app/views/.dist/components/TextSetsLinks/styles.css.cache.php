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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;position:relative;list-style:none;margin:0px;padding:0px;}ul.'.$scope->componentSelectorReference.' li{list-style-type:none;}@media(max-width: 767px){ul.'.$scope->componentSelectorReference.'{text-align:center;margin:60px 0px;}ul.'.$scope->componentSelectorReference.' li{background-color:transparent;}ul.'.$scope->componentSelectorReference.' *{text-align:inherit;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Link', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Link');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Link', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{background-color:#FAFAFA;}li.'.$scope->componentSelectorReference.' a{display:block;width:'.call_user_func(function($str){return $str;},'100%').';position:relative;padding:15px 12px 12px;cursor:pointer;}li.'.$scope->componentSelectorReference.' a:hover{background-color:#E2E2E2;}li.'.$scope->componentSelectorReference.' a span{display:block;width:'.call_user_func(function($str){return $str;},'100%').';pointer-events:none;font-weight:800;font-size:16px;color:#362E2E;text-transform:uppercase;}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Link');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}