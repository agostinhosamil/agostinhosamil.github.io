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

Capsule::Def ('AccordionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AccordionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AccordionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' input{display:none;}div.'.$scope->componentSelectorReference.' input:checked ~ label{background-color:#320200;color:#d7cfc2;}div.'.$scope->componentSelectorReference.' input:checked ~ label p{display:block;}div.'.$scope->componentSelectorReference.' input:checked ~ label h4{}div.'.$scope->componentSelectorReference.' input:checked ~ label h4 i.fa-minus{display:inline-block;}div.'.$scope->componentSelectorReference.' input:checked ~ label h4 i.fa-plus{display:none;}div.'.$scope->componentSelectorReference.' label{display:flex;flex-direction:column;justify-content:center;background-color:#d7cfc2;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;color:#320200;margin:0px 0px 20px;padding:24px;cursor:pointer;}div.'.$scope->componentSelectorReference.' label h4{margin:0px;padding:0px;font-size:34px;font-weight:800;color:inherit;display:flex;flex-direction:row;justify-content:space-between;align-items:center;}div.'.$scope->componentSelectorReference.' label h4 i.fa-minus{display:none;}div.'.$scope->componentSelectorReference.' label p{display:none;width:'.call_user_func(function($str){return $str;},'100%').';padding:10px 0px 0px;font-size:14px;}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' label h4{font-size:21px;line-height:23px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AccordionContainer');

Capsule::Def ('AccordionListContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AccordionListContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AccordionListContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:block;padding:20px 0px 50px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AccordionListContainer');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}