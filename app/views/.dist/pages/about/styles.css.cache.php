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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;margin:auto;box-sizing:border-box;max-width:1170px;margin:auto;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}