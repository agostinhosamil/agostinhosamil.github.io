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

Capsule::Def ('GlobalSyles', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'GlobalSyles');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'GlobalSyles', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return '*{list-style:none;list-style-type:none;}img,svg{pointer-events:none;user-select:none;-webkit-user-select:none;}';})));
});

Capsule::Export ('GlobalSyles');

Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Title');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Title', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;}div.'.$scope->componentSelectorReference.' h1{font-size:25px;font-weight:400;text-transform:uppercase;color:#000000;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Title');

Capsule::Def ('DesignoSiteDesignContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'DesignoSiteDesignContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'DesignoSiteDesignContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{box-sizing:border-box;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('DesignoSiteDesignContainer');

Capsule::Def ('TrendingSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TrendingSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TrendingSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:80px 30px;}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TrendingSectionContainer');

Capsule::Def ('TrendingSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TrendingSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TrendingSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 90px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 4)').';margin:15px 0px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' ul li a{display:flex;flex-direction:column;justify-content:center;align-items:flex-start;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:0px 15px;}div.'.$scope->componentSelectorReference.' ul li a img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;}div.'.$scope->componentSelectorReference.' ul li a h6{margin:9px 0px 7px;padding:0px;font-size:15px;color:#d0d0d0;}div.'.$scope->componentSelectorReference.' ul li a h4{font-size:18px;color:#000000;font-weight:400;line-height:20px;margin:0px 0px 2px;}@media(max-width: 1150px){div.'.$scope->componentSelectorReference.'{padding:0px 40px;}}@media(max-width: 1150px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';}}@media(max-width: 840px){div.'.$scope->componentSelectorReference.'{padding:0px 20px;}}@media(max-width: 750px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 2)').';}}@media(max-width: 550px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TrendingSectionBody');

Capsule::Def ('TrendingSectionCategoryList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TrendingSectionCategoryList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TrendingSectionCategoryList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;padding:0px;margin:0px 0px 10px;flex-wrap:wrap;}ul.'.$scope->componentSelectorReference.' li{margin:20px;}ul.'.$scope->componentSelectorReference.' li a{color:#000000;font-weight:700;}ul.'.$scope->componentSelectorReference.' li.selected a:after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';width:'.call_user_func(function($str){return $str;},'100%').';height:3px;background:#000000;display:block;}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TrendingSectionCategoryList');

Capsule::Def ('TrendingSectionColsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TrendingSectionColsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TrendingSectionColsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-wrap:wrap;flex-direction:row;justify-content:center;padding:60px 86px 0px;}@media(max-width: 1080px){div.'.$scope->componentSelectorReference.'{padding:60px 0px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TrendingSectionColsWrapper');

Capsule::Def ('TrendingSectionCol', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TrendingSectionCol');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TrendingSectionCol', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'calc(100% / 2)').';padding:7px;display:flex;flex-direction:column;}@media(max-width: 1080px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TrendingSectionCol');

Capsule::Def ('TrendingSectionRow', function ($args, CapsuleScopeContext $scope) {
	$scope->height = !(isset ($args ['height'])) ? '390' : $args ['height'];
	$scope->backgroundColor = !(isset ($args ['backgroundColor'])) ? '#eae9e7' : $args ['backgroundColor'];
	$scope->imageWidth = !(isset ($args ['imageWidth'])) ? '250' : $args ['imageWidth'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TrendingSectionRow');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TrendingSectionRow', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},''.(!is_null ($scope->height) ? $scope->height : 'inherit').'px').';background-color:'.(!is_null ($scope->backgroundColor) ? $scope->backgroundColor : 'inherit').';margin:7px 0px;position:relative;display:inline-flex;flex-direction:row;justify-content:center;align-items:flex-end;}div.'.$scope->componentSelectorReference.' ul{margin:0px 20px 0px 0px;padding:'.call_user_func(function($str){return $str;},'0px 0px 10% 10%').';width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul li{margin:8px 0px;}div.'.$scope->componentSelectorReference.' ul li strong{font-size:10px;font-weight:400;text-transform:uppercase;color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 28%)').';}div.'.$scope->componentSelectorReference.' ul li h4{margin:0px;padding:0px;font-weight:800;font-size:36px;color:#000000;line-height:30px;}div.'.$scope->componentSelectorReference.' ul li a{display:inline-block;margin-top:11px;font-size:11px;font-weight:400;color:#000000;}div.'.$scope->componentSelectorReference.' ul li a:after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';display:block;width:'.call_user_func(function($str){return $str;},'100%').';height:2px;background-color:#000000;margin-top:3px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},''.(!is_null($scope->imageWidth)? $scope->imageWidth:'inherit').'px').';}div.'.$scope->componentSelectorReference.' div data{width:'.call_user_func(function($str){return $str;},'100%').';display:block;pointer-events:none;}div.'.$scope->componentSelectorReference.' div data img{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 1080px){div.'.$scope->componentSelectorReference.'{margin:10px 0px;}div.'.$scope->componentSelectorReference.' ul{padding:0px 0px 40px 40px;margin:0px;}div.'.$scope->componentSelectorReference.' div{height:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div data{width:'.call_user_func(function($str){return $str;},'50%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;align-items:flex-end;}div.'.$scope->componentSelectorReference.' div data img{width:unset;height:'.call_user_func(function($str){return $str;},'100%').';}}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div data img{height:'.call_user_func(function($str){return $str;},'60%').';}}@media(max-width: 450px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li h4{font-size:18px;line-height:20px;}div.'.$scope->componentSelectorReference.' ul li a{margin-top:6px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['height','backgroundColor','imageWidth','children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TrendingSectionRow');

Capsule::Def ('TestimonialsSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TestimonialsSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TestimonialsSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 30px;position:relative;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TestimonialsSectionContainer');

Capsule::Def ('TestimonialsSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TestimonialsSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TestimonialsSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;padding:0px 80px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{transition:inherit;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';display:block;white-space:nowrap;padding:0px;margin:50px 0px 0px;overflow:hidden;position:relative;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';display:inline-flex;flex-direction:column;justify-content:center;align-items:center;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' ul li *{white-space:initial;text-align:center;}div.'.$scope->componentSelectorReference.' ul li p{width:'.call_user_func(function($str){return $str;},'100%').';max-width:520px;margin:0px auto;display:block;font-size:14px;pointer-events:none;user-select:none;-webkit-user-select:none;}div.'.$scope->componentSelectorReference.' ul li span{display:block;margin:15px auto 17px;font-weight:600;color:#000000;pointer-events:none;user-select:none;-webkit-user-select:none;}div.'.$scope->componentSelectorReference.' ul li img{width:75px;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{padding:0px;}}@media(max-width: 750px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li{padding:'.call_user_func(function($str){return $str;},'0px 15%').';}}@media(max-width: 510px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul li p{font-size:12px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TestimonialsSectionBody');

Capsule::Def ('TestimonialsSectionNavigation', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TestimonialsSectionNavigation');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TestimonialsSectionNavigation', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';position:absolute;top:0px;left:0px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;align-content:space-between;}div.'.$scope->componentSelectorReference.' button{border:0px;outline:0px;background-color:transparent;font-size:52px;font-weight:300;color:#a9a9a9;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' button:hover{color:#585858;transform:'.call_user_func(function($str){return $str;},'scale(1.7)').';}@media(max-width: 410px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' button{font-size:36px;}div.'.$scope->componentSelectorReference.' button:hover{color:#585858;transform:'.call_user_func(function($str){return $str;},'scale(1.4)').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TestimonialsSectionNavigation');

Capsule::Def ('TestimonialsSectionPagination', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TestimonialsSectionPagination');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TestimonialsSectionPagination', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ol.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:20px 0px 0px;display:flex;flex-direction:row;flex-wrap:wrap;align-items:center;justify-content:center;}ol.'.$scope->componentSelectorReference.' li{margin:7px;width:13px;height:13px;}ol.'.$scope->componentSelectorReference.' li button{background-color:#e3e3e3;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';width:13px;height:13px;border:0px;display:inline-block;outline:0px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}ol.'.$scope->componentSelectorReference.' li button.selected{position:relative;border:2px solid #ffffff;outline:1px solid #e3e3e3;height:16px;}ol.'.$scope->componentSelectorReference.' li button:hover{background-color:#a8a8a8;transform:'.call_user_func(function($str){return $str;},'scale(1.7)').';}';})), Capsule::CreateElement ('ol', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TestimonialsSectionPagination');

Capsule::Def ('ServiceDetailsContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ServiceDetailsContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ServiceDetailsContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:80px 130px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}div.'.$scope->componentSelectorReference.' *{transition:inherit;}div.'.$scope->componentSelectorReference.' ul{padding:0px;margin:0px;display:flex;flex-wrap:wrap;flex-direction:row;justify-content:center;align-items:center;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{padding:0px 50px 50px;}}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' ul{flex-direction:column;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ServiceDetailsContainer');

Capsule::Def ('ServiceDetail', function ($args, CapsuleScopeContext $scope) {
	$scope->color = !(isset ($args ['color'])) ? 'teal' : $args ['color'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ServiceDetail');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ServiceDetail', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';height:auto;display:flex;flex-direction:row;justify-content:center;align-items:center;}li.'.$scope->componentSelectorReference.' div.icon-wrapper{width:65px;height:65px;margin:10px;}li.'.$scope->componentSelectorReference.' div.icon-wrapper div{width:inherit;height:inherit;background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.'.($scope->color).'.100'):'inherit').';border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;display:flex;justify-content:center;align-items:center;font-size:34px;color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 99%)').';}li.'.$scope->componentSelectorReference.' div.body{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;justify-content:center;align-items:flex-start;padding-left:22px;}li.'.$scope->componentSelectorReference.' div.body strong{font-size:13px;font-weight:600;text-transform:uppercase;color:#000000;}li.'.$scope->componentSelectorReference.' div.body span{font-size:12px;font-weight:300;color:#626262;}@media(max-width: 820px){li.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'calc(100% / 2)').';}}@media(max-width: 650px){li.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}}@media(max-width: 360px){li.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}li.'.$scope->componentSelectorReference.' div.icon-wrapper{width:35px;height:35px;margin:10px;}li.'.$scope->componentSelectorReference.' div.icon-wrapper div{font-size:14px;}li.'.$scope->componentSelectorReference.' div.body{padding-left:9px;}li.'.$scope->componentSelectorReference.' div.body strong{font-size:9px;}li.'.$scope->componentSelectorReference.' div.body span{font-size:8px;}}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['color','children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ServiceDetail');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}