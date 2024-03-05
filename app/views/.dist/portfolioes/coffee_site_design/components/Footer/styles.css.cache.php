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

Capsule::Def ('FooterContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' footer.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:#d7cfc2;padding:'.call_user_func(function($str){return $str;},'60px 5% 20px').';}';})), Capsule::CreateElement ('footer', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterContainer');

Capsule::Def ('NewsletterFormContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'NewsletterFormContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'NewsletterFormContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-left:40px;}div.'.$scope->componentSelectorReference.' form{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' form h2{font-size:27px;font-weight:800;display:block;padding:0px 0px 8px;margin:0px 0px 25px;color:#320200;}div.'.$scope->componentSelectorReference.' form div{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#ffffff;border-radius:10px;-webkit-border-radius:10px;-moz-border-radius:10px;-o-border-radius:10px;-ms-border-radius:10px;display:flex;flex-direction:row;justify-content:center;align-items:center;padding-left:20px;}div.'.$scope->componentSelectorReference.' form div input{width:'.call_user_func(function($str){return $str;},'100%').';font-size:18px;outline:0px;border:0px;background-color:transparent;color:#320200;}div.'.$scope->componentSelectorReference.' form div button{display:flex;background-color:#320200;outline:0px;border:0px;padding:15px 25px 17px;border-top-right-radius:10px;border-bottom-right-radius:10px;justify-content:center;align-items:center;color:#ffffff;font-weight:700;margin-left:20px;font-size:18px;}@media(max-width: 991px){div.'.$scope->componentSelectorReference.'{padding:40px 0px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('NewsletterFormContainer');

Capsule::Def ('FooterMenuListsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FooterMenuListsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FooterMenuListsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-right:50px;}div.'.$scope->componentSelectorReference.' h4{font-size:19px;font-weight:800;display:block;padding:0px 0px 8px;margin:0px;color:#320200;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';margin:0px;padding:0px;display:flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' ul li{margin:8px 0px;color:#320200;display:inline-flex;align-items:flex-start;}div.'.$scope->componentSelectorReference.' ul li a{font-size:14px;font-weight:500;color:inherit;display:inline-flex;flex-direction:row;align-items:center;}div.'.$scope->componentSelectorReference.' ul li a:hover{text-decoration:underline;}div.'.$scope->componentSelectorReference.' ul li span{font-size:14px;font-weight:500;color:inherit;display:inline-flex;margin-top:-4px;}div.'.$scope->componentSelectorReference.' ul li i{font-size:19px;margin-right:8px;}@media(max-width:767px){div.'.$scope->componentSelectorReference.' ul{flex-direction:row;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{margin:0px 8px 8px 0px;}}div.'.$scope->componentSelectorReference.' ol{width:'.call_user_func(function($str){return $str;},'100%').';margin:0px;padding:0px;display:flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' ol li{margin:8px 0px;color:#320200;display:inline-flex;align-items:flex-start;}div.'.$scope->componentSelectorReference.' ol li span{font-size:14px;font-weight:500;color:inherit;display:inline-flex;margin-top:-4px;}div.'.$scope->componentSelectorReference.' ol li i{font-size:19px;margin-right:8px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FooterMenuListsWrapper');

Capsule::Def ('CompanyDataWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CompanyDataWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CompanyDataWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;justify-content:center;align-items:center;flex-direction:row;border-top:1px solid #b9b1a6;margin:50px 0px 0px;padding:35px 0px 10px;}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CompanyDataWrapper');

Capsule::Def ('LogoWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LogoWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LogoWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:130px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('LogoWrapper');

Capsule::Def ('CopyData', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CopyData');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CopyData', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;justify-content:center;align-items:center;text-align:center;}div.'.$scope->componentSelectorReference.' span{font-weight:400;font-size:13px;text-transform:uppercase;color:#320200;}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{margin:0px 0px 30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CopyData');

Capsule::Def ('LinksWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LinksWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LinksWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:max-content;}div.'.$scope->componentSelectorReference.' ul{display:flex;flex-direction:row;justify-content:flex-end;align-items:center;margin:0px;padding:0px;}div.'.$scope->componentSelectorReference.' ul li{margin-left:20px;}div.'.$scope->componentSelectorReference.' ul li a{display:flex;width:37px;height:37px;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';flex-direction:row;justify-content:center;align-items:center;font-size:15px;color:#ffffff;background-color:#320200;transition:unset;}div.'.$scope->componentSelectorReference.' ul li a i{transition:unset;}div.'.$scope->componentSelectorReference.' ul li a:hover{background-color:#ffffff;color:#320200;}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{margin:0px 0px 30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('LinksWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}