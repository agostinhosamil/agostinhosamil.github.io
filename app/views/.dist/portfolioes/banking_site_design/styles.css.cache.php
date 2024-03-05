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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{box-sizing:border-box;}div.'.$scope->componentSelectorReference.' *{list-style:none;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('AppDetailsContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppDetailsContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppDetailsContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:90px 120px;position:relative;text-align:center;}div.'.$scope->componentSelectorReference.' h1{font-size:55px;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Trebuchet MS").','.call_user_func(function($str){return "'$str'";},"Arial Narraw").','.call_user_func(function($str){return "'$str'";},"Roboto Regular").','.call_user_func(function($str){return "'$str'";},"Verdana").',sans-serif').';color:#262626;font-weight:700;display:block;width:'.call_user_func(function($str){return $str;},'100%').';max-width:730px;margin:0px auto 30px;line-height:47px;}div.'.$scope->componentSelectorReference.' h4{font-size:19px;color:#d0d0d0;font-weight:400;display:block;width:'.call_user_func(function($str){return $str;},'100%').';max-width:730px;margin:0px auto;}@media(max-width: 1100px){div.'.$scope->componentSelectorReference.'{padding:90px 20px;}}@media(max-width: 850px){div.'.$scope->componentSelectorReference.'{padding:'.call_user_func(function($str){return $str;},'30px 5%').';}div.'.$scope->componentSelectorReference.' h1{font-size:35px;line-height:38px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppDetailsContainer');

Capsule::Def ('AppDetailsCardsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppDetailsCardsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppDetailsCardsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;padding:70px 0px 0px;}div.'.$scope->componentSelectorReference.' div.data-card{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;background:#ffffff;box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 13%)0px 0px 3px').';padding:60px 40px;margin:0px 10px;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;-o-border-radius:7px;-ms-border-radius:7px;display:flex;flex-direction:column;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div.data-card div{width:85px;height:85px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;background-color:#00956B;color:#ffffff;font-size:27px;display:flex;flex-direction:row;justify-content:center;align-items:center;margin:0px auto 35px;}div.'.$scope->componentSelectorReference.' div.data-card div.yellow{background-color:#FCD04B;}div.'.$scope->componentSelectorReference.' div.data-card div.red{background-color:#FE0525;}div.'.$scope->componentSelectorReference.' div.data-card strong{font-size:27px;color:#303030;font-weight:600;}div.'.$scope->componentSelectorReference.' div.data-card p{font-size:15px;font-weight:400;color:#161616;display:block;padding-top:25px;}div.'.$scope->componentSelectorReference.' div.data-card.highlight{box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 13%)0px 0px 15px').';}@media(max-width: 850px){div.'.$scope->componentSelectorReference.'{flex-direction:column;padding:'.call_user_func(function($str){return $str;},'30px 5% 0px').';}div.'.$scope->componentSelectorReference.' div.data-card{margin:10px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppDetailsCardsWrapper');

Capsule::Def ('PageSection', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSection');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSection', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:0px 120px 90px;}div.'.$scope->componentSelectorReference.' div.data-section-img{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.data-section-img img{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' h1{font-size:46px;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Trebuchet MS").','.call_user_func(function($str){return "'$str'";},"Arial Narraw").','.call_user_func(function($str){return "'$str'";},"Roboto Regular").','.call_user_func(function($str){return "'$str'";},"Verdana").',sans-serif').';color:#262626;font-weight:900;display:block;width:'.call_user_func(function($str){return $str;},'100%').';max-width:730px;margin:0px auto;line-height:57px;}div.'.$scope->componentSelectorReference.' p{font-size:19px;color:#4c4c4c;font-weight:400;display:block;width:'.call_user_func(function($str){return $str;},'100%').';max-width:730px;margin:20px auto 0px;}div.'.$scope->componentSelectorReference.' .col-md-6{display:inline-flex;flex-direction:column;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' .col-md-7{display:inline-flex;flex-direction:column;justify-content:center;align-items:center;padding-left:70px;}div.'.$scope->componentSelectorReference.' div.action-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:35px 0px 0px;}div.'.$scope->componentSelectorReference.' div.action-wrapper a{white-space:nowrap;background-color:#E3FF53;color:#363636;font-weight:600;padding:13px 34px;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;-o-border-radius:7px;-ms-border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;-o-border-radius:7px;-ms-border-radius:7px;display:inline-flex;}div.'.$scope->componentSelectorReference.' ul{padding:35px 0px 0px;margin:0px;width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';text-align:left;margin:0px 0px 16px;display:flex;flex-direction:row;align-items:center;}div.'.$scope->componentSelectorReference.' ul li i{color:#191919;font-weight:700;font-size:25px;}div.'.$scope->componentSelectorReference.' ul li span{margin-left:21px;font-size:17px;font-weight:400;color:#666666;}@media(max-width: 1100px){div.'.$scope->componentSelectorReference.'{padding:0px 80px 40px;}}@media(max-width: 767px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' .col-md-7{padding:40px 0px 0px;}div.'.$scope->componentSelectorReference.' .col-md-5{padding:0px 0px 40px;}div.'.$scope->componentSelectorReference.' div.data-section-img{padding:40px 0px 0px;width:'.call_user_func(function($str){return $str;},'95%').';margin:auto;}}@media(max-width: 410px){div.'.$scope->componentSelectorReference.'{padding:0px 20px 40px;}div.'.$scope->componentSelectorReference.' div.data-section-img{width:'.call_user_func(function($str){return $str;},'75%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSection');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}