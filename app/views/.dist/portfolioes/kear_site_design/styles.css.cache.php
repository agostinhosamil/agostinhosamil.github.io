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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'GlobalStyles', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return '*{list-style:none;list-style-type:none;}img,svg{pointer-events:none;user-select:none;-webkit-user-select:none;}';})));
});

Capsule::Export ('GlobalStyles');

Capsule::Def ('Container', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Container');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{transition:inherit;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Title');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Title', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';height:auto;margin:auto;display:flex;flex-direction:column;justify-content:center;align-items:center;padding-top:40px;}div.'.$scope->componentSelectorReference.' h1{font-size:45px;font-weight:800;color:#454545;line-height:44px;text-align:center;}div.'.$scope->componentSelectorReference.' p{display:block;padding:10px 50px 50px;width:'.call_user_func(function($str){return $str;},'70%').';margin:0px auto;color:#a0a0a0;font-weight:400;font-size:14px;text-align:center;}@media(max-width:650px){div.'.$scope->componentSelectorReference.' p{width:'.call_user_func(function($str){return $str;},'100%').';}}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:40px 30px 0px;}}@media(max-width: 400px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' h1{font-size:28px;}div.'.$scope->componentSelectorReference.' p{font-size:12px;padding:10px 0px 20px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Title');

Capsule::Def ('WorkDetailsSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'WorkDetailsSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'WorkDetailsSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;padding:0px 0px 50px;}section.'.$scope->componentSelectorReference.':before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';display:block;position:absolute;width:400px;height:400px;border-radius:70px;-webkit-border-radius:70px;-moz-border-radius:70px;-o-border-radius:70px;-ms-border-radius:70px;background-color:#f5f9fc;top:'.call_user_func(function($str){return $str;},'calc(50% - 200px)').';left:-180px;transform:'.call_user_func(function($str){return $str;},'rotateZ(114deg)').';pointer-events:none;}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('WorkDetailsSectionContainer');

Capsule::Def ('WorkDetailsSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'WorkDetailsSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'WorkDetailsSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'calc(70% - 30px)').';margin:0px auto;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';margin:0px;padding:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;flex-wrap:wrap;position:relative;z-index:1;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';padding:15px;text-align:center;display:flex;flex-direction:column;align-items:center;}div.'.$scope->componentSelectorReference.' ul li div{width:65px;height:65px;}div.'.$scope->componentSelectorReference.' ul li div span{display:block;width:inherit;height:inherit;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';background-color:#eff8ff;color:#0975cf;font-size:20px;display:flex;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' ul li h4{display:block;text-align:center;font-size:22px;font-weight:700;color:#5a5a5a;line-height:25px;padding:18px 0px 19px;margin:0px;}div.'.$scope->componentSelectorReference.' ul li p{font-size:13px;color:#7c7c7c;line-height:18px;}@media(max-width: 950px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 30px;}}@media(max-width: 720px){div.'.$scope->componentSelectorReference.'{padding:0px 25px;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'50%').';}}@media(max-width: 550px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('WorkDetailsSectionBody');

Capsule::Def ('PageSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:10px 0px 60px;}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSectionContainer');

Capsule::Def ('PageSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';margin:0px auto;}div.'.$scope->componentSelectorReference.' div.image-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.image-wrapper img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;}div.'.$scope->componentSelectorReference.' div.pl{padding-left:80px;}div.'.$scope->componentSelectorReference.' div.pr{padding-right:80px;}div.'.$scope->componentSelectorReference.' div.col-md-7{display:flex;flex-direction:column;align-items:center;justify-content:center;}@media(max-width: 950px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 30px;}}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div.pl{padding:60px 0px 0px;text-align:center;}div.'.$scope->componentSelectorReference.' div.pr{padding:0px 0px 60px 0px;text-align:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSectionBody');

Capsule::Def ('PageSectionContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSectionContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSectionContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' h1{font-size:32px;font-weight:600;color:#3f3f3f;line-height:30px;margin:0px;padding:0px;}div.'.$scope->componentSelectorReference.' h2{font-size:24px;text-transform:uppercase;color:#3f3f3f;font-weight:600;line-height:26px;margin:0px;padding:0px;}div.'.$scope->componentSelectorReference.' p{font-size:12px;color:#a0a0a0;margin:0px;padding:20px 0px;display:block;}div.'.$scope->componentSelectorReference.' p b{font-style:normal;font-weight:600;color:#333333;padding:0px 5px;}div.'.$scope->componentSelectorReference.' a{background-color:#0070cd;padding:13px 25px;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;color:#ffffff;font-weight:400;display:inline-block;border:3px solid #0070cd;}div.'.$scope->componentSelectorReference.' a span{margin-left:15px;}div.'.$scope->componentSelectorReference.' a:hover{background-color:#ffffff;color:#0070cd;}@media(max-width:410px){div.'.$scope->componentSelectorReference.' a{padding:8px 16px;font-size:12px;}}div.'.$scope->componentSelectorReference.' a.uncolored{background-color:unset;border-color:transparent;color:#0070cd;padding:0px;display:flex;flex-direction:row;align-items:center;}div.'.$scope->componentSelectorReference.' a.uncolored i{width:40px;height:40px;background-color:#0070cd;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';color:#ffffff;display:inline-flex;align-items:center;justify-content:center;}div.'.$scope->componentSelectorReference.' a.uncolored span{font-size:21px;font-weight:400;}@media(max-width:767px){div.'.$scope->componentSelectorReference.' a.uncolored{width:fit-content;margin:auto;}}@media(max-width:410px){div.'.$scope->componentSelectorReference.' a.uncolored{}div.'.$scope->componentSelectorReference.' a.uncolored i{width:33px;height:33px;}div.'.$scope->componentSelectorReference.' a.uncolored span{font-size:15px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSectionContentWrapper');

Capsule::Def ('CardListWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CardListWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CardListWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:50px 0px;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;display:flex;flex-direction:row;align-items:center;justify-content:center;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';max-width:320px;padding:10px;display:flex;flex-direction:row;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li div{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#f5f9fc;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;margin:0px 0px 20px;padding:40px 20px 0px;display:flex;align-items:flex-end;justify-content:center;flex-direction:row;pointer-events:none;}div.'.$scope->componentSelectorReference.' ul li div img{width:'.call_user_func(function($str){return $str;},'80%').';}div.'.$scope->componentSelectorReference.' ul li *{user-select:none;-webkit-user-select:none;}div.'.$scope->componentSelectorReference.' ul li span{font-weight:500;font-size:13px;color:#157cd1;width:'.call_user_func(function($str){return $str;},'50%').';text-align:center;display:inline-flex;justify-content:flex-start;padding:0px 6px;}div.'.$scope->componentSelectorReference.' ul li strong{font-weight:300;font-size:13px;color:#202020;width:'.call_user_func(function($str){return $str;},'50%').';text-align:center;display:inline-flex;justify-content:flex-end;padding:0px 6px;}div.'.$scope->componentSelectorReference.' ul li p{display:flex;text-align:center;width:'.call_user_func(function($str){return $str;},'100%').';padding:7px 0px;align-items:center;justify-content:center;}div.'.$scope->componentSelectorReference.' ul li p i{margin-right:12px;color:#157cd1;font-size:20px;}@media(max-width:730px){div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'50%').';}}@media(max-width:540px){div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('CardListWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}