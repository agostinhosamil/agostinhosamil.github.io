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

Capsule::Def ('GlobalStyles', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'GlobalStyles');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'GlobalStyles', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'body,html{height:'.call_user_func(function($str){return $str;},'100%').';background-color:#f9f9f9;}*{margin:0px;padding:0px;box-sizing:border-box;}';})));
});

Capsule::Export ('GlobalStyles');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}