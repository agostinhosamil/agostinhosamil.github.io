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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:transparent;position:relative;}div.'.$scope->componentSelectorReference.' div{cursor:pointer;}div.'.$scope->componentSelectorReference.' div ul{list-style:none;}@media all and(min-width:100px){div.'.$scope->componentSelectorReference.' div ul{background-color:yellow;color:black;}div.'.$scope->componentSelectorReference.' div ul *{font-weight:bold;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('FooterContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' footer.'.$scope->componentSelectorReference.'{border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:transparent;position:relative;padding:'.call_user_func(function($str){return $str;},'85px .0px 50px 0px').';background-color:transparent;}footer.'.$scope->componentSelectorReference.' div{cursor:pointer;}footer.'.$scope->componentSelectorReference.' div ul{list-style:none;}@media all and(min-width:100px){footer.'.$scope->componentSelectorReference.' div ul{background-color:yellow;color:black;}footer.'.$scope->componentSelectorReference.' div ul *{font-weight:bold;}}footer.'.$scope->componentSelectorReference.' .footer-bg{position:absolute;width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'145%').';top:'.call_user_func(function($str){return $str;},'-45%').';z-index:-5;background-repeat:no-repeat;background-position:center;background-size:'.call_user_func(function($str){return $str;},'100% 100%').';-webkit-background-size:'.call_user_func(function($str){return $str;},'100% 100%').';-moz-background-size:'.call_user_func(function($str){return $str;},'100% 100%').';-o-background-size:'.call_user_func(function($str){return $str;},'100% 100%').';-ms-background-size:'.call_user_func(function($str){return $str;},'100% 100%').';filter:'.call_user_func(function($str){return $str;},'blur(2px)').';opacity:'.call_user_func(function($str){return $str;},'.3').';}@media(max-width:768px){footer.'.$scope->componentSelectorReference.' .footer-bg{height:'.call_user_func(function($str){return $str;},'100% !important').';top:'.call_user_func(function($str){return $str;},'0px !important').';}}footer.'.$scope->componentSelectorReference.' ul{padding:'.call_user_func(function($str){return $str;},'.0px').';list-style:none;list-style-type:none;}footer.'.$scope->componentSelectorReference.' .footer-details{padding-top:27px;}footer.'.$scope->componentSelectorReference.' .footer-details-copyright{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:15px 0px;display:block;font-size:15px;color:'.call_user_func(function($str){return $str;},'rgb(88,74,74)').';}footer.'.$scope->componentSelectorReference.' .footer-details .footer-details-icons{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;text-align:center;display:inline-block;position:relative;}footer.'.$scope->componentSelectorReference.' .footer-details .footer-details-icons ul li{display:inline-block;margin:0px 5px;}footer.'.$scope->componentSelectorReference.' .footer-details .footer-details-icons ul li a{display:flex;border-width:1px;border-style:solid;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';font-size:18px;font-weight:bold;border-color:#000000;width:45px;height:45px;justify-content:center;align-items:center;}footer.'.$scope->componentSelectorReference.' .footer-details .footer-details-icons ul li a:hover{background-color:#E2E1E1;}@media(max-width: 768px){footer.'.$scope->componentSelectorReference.'{}footer.'.$scope->componentSelectorReference.' *{text-align:center;}footer.'.$scope->componentSelectorReference.' h3:after{right:0px;margin:auto;}}';})), Capsule::CreateElement ('footer', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterContainer');

Capsule::Def ('FooterBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:transparent;position:relative;}div.'.$scope->componentSelectorReference.' div{cursor:pointer;}div.'.$scope->componentSelectorReference.' div ul{list-style:none;}@media all and(min-width:100px){div.'.$scope->componentSelectorReference.' div ul{background-color:yellow;color:black;}div.'.$scope->componentSelectorReference.' div ul *{font-weight:bold;}}div.'.$scope->componentSelectorReference.' *{color:#181e22;text-transform:uppercase;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterBody');

Capsule::Def ('FooterColumnBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterColumnBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterColumnBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:transparent;position:relative;padding:'.call_user_func(function($str){return $str;},'7px .0px').';}div.'.$scope->componentSelectorReference.' div{cursor:pointer;}div.'.$scope->componentSelectorReference.' div ul{list-style:none;}@media all and(min-width:100px){div.'.$scope->componentSelectorReference.' div ul{background-color:yellow;color:black;}div.'.$scope->componentSelectorReference.' div ul *{font-weight:bold;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterColumnBody');

Capsule::Def ('FooterColumnTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterColumnTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterColumnTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' h3.'.$scope->componentSelectorReference.'{border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:transparent;position:relative;font-size:22px;font-weight:700;padding:'.call_user_func(function($str){return $str;},'.0px .0px 11px').';margin-bottom:31px;width:auto;}h3.'.$scope->componentSelectorReference.' div{cursor:pointer;}h3.'.$scope->componentSelectorReference.' div ul{list-style:none;}@media all and(min-width:100px){h3.'.$scope->componentSelectorReference.' div ul{background-color:yellow;color:black;}h3.'.$scope->componentSelectorReference.' div ul *{font-weight:bold;}}h3.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:35px;height:4px;background:#333333;position:absolute;left:0px;bottom:0px;}';})), Capsule::CreateElement ('h3', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterColumnTitle');

Capsule::Def ('FooterColumnListContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterColumnListContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterColumnListContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:transparent;position:relative;padding:0px;}div.'.$scope->componentSelectorReference.' div{cursor:pointer;}div.'.$scope->componentSelectorReference.' div ul{list-style:none;}@media all and(min-width:100px){div.'.$scope->componentSelectorReference.' div ul{background-color:yellow;color:black;}div.'.$scope->componentSelectorReference.' div ul *{font-weight:bold;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterColumnListContainer');

Capsule::Def ('FooterColumnList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterColumnList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterColumnList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:transparent;position:relative;padding:0px;margin:0px;list-style:none;list-style-type:none;}ul.'.$scope->componentSelectorReference.' div{cursor:pointer;}ul.'.$scope->componentSelectorReference.' div ul{list-style:none;}@media all and(min-width:100px){ul.'.$scope->componentSelectorReference.' div ul{background-color:yellow;color:black;}ul.'.$scope->componentSelectorReference.' div ul *{font-weight:bold;}}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'100%').';display:inline-block;position:relative;margin:'.call_user_func(function($str){return $str;},'3px .0px').';}ul.'.$scope->componentSelectorReference.' li a{font-weight:lighter;font-size:18px;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Trebuchet MS").','.call_user_func(function($str){return "'$str'";},"Arial").','.call_user_func(function($str){return "'$str'";},"Helvetica").',sans-serif').';text-shadow:'.call_user_func(function($str){return $str;},'0 0 3px rgba(0,0,0,0.13)').';letter-spacing:2px;display:inline-block;width:auto;}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterColumnList');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}