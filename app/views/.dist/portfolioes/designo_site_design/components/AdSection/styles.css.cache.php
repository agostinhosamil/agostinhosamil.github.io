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

Capsule::Def ('AdSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AdSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AdSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:480px;padding:0px 30px;display:flex;flex-direction:row;justify-content:center;align-items:center;margin-top:65px;position:relative;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}section.'.$scope->componentSelectorReference.' *{transition:inherit;}@media(max-width: 1150px){section.'.$scope->componentSelectorReference.'{margin-top:0px;}}@media(max-width: 500px){section.'.$scope->componentSelectorReference.'{flex-direction:column;height:auto;}}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AdSectionContainer');

Capsule::Def ('AdSectionWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AdSectionWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AdSectionWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:inherit;display:flex;flex-direction:row;justify-content:center;align-items:center;background-color:#eaeaea;border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;-o-border-radius:15px;-ms-border-radius:15px;padding:0px 120px;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{padding:0px 50px;}}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{flex-direction:column;overflow:hidden;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AdSectionWrapper');

Capsule::Def ('AdSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AdSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AdSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' strong{display:block;position:relative;font-weight:600;color:#cf2443;font-size:13px;text-transform:uppercase;padding-left:30px;}div.'.$scope->componentSelectorReference.' strong:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';display:block;height:2px;width:19px;background-color:#cf2443;left:0px;top:'.call_user_func(function($str){return $str;},'50%').';position:absolute;margin-top:-1px;}div.'.$scope->componentSelectorReference.' h1{color:#000000;font-weight:900;font-size:34px;text-transform:uppercase;margin:12px 0px 18px;}div.'.$scope->componentSelectorReference.' h1 i{font-style:normal;font-weight:400;padding-left:16px;}div.'.$scope->componentSelectorReference.' a{display:inline-flex;background-color:#000000;color:#ffffff;padding:7px 17px 7px 44px;font-size:13px;position:relative;align-items:center;width:fit-content;}div.'.$scope->componentSelectorReference.' a:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';display:block;height:2px;width:19px;background-color:#ffffff;left:15px;top:'.call_user_func(function($str){return $str;},'50%').';position:absolute;margin-top:-1px;}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' strong{font-size:11px;}div.'.$scope->componentSelectorReference.' h1{font-size:20px;}div.'.$scope->componentSelectorReference.' a{font-size:11px;}}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{padding-bottom:15px;justify-content:center;}div.'.$scope->componentSelectorReference.' strong{width:max-content;margin:auto;}div.'.$scope->componentSelectorReference.' h1{display:flex;flex-wrap:wrap;justify-content:center;}div.'.$scope->componentSelectorReference.' a{margin:auto;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AdSectionBody');

Capsule::Def ('AdSectionTimer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AdSectionTimer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AdSectionTimer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:fit-content;display:flex;flex-direction:column;justify-content:center;align-items:flex-start;position:relative;z-index:1;}div.'.$scope->componentSelectorReference.' strong{font-weight:400;font-size:26px;word-spacing:14px;text-transform:uppercase;}div.'.$scope->componentSelectorReference.' span{text-transform:uppercase;font-weight:500;word-spacing:39px;}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' strong{font-size:17px;word-spacing:5px;}div.'.$scope->componentSelectorReference.' span{font-size:10px;word-spacing:14px;}}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{margin:20px auto 0px;}}@media(max-width: 350px){div.'.$scope->componentSelectorReference.'{transform:'.call_user_func(function($str){return $str;},'scale(0.6)').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AdSectionTimer');

Capsule::Def ('AdSectionContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AdSectionContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AdSectionContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'50%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;padding:70px 0px;position:relative;overflow-y:clip;overflow-x:visible;}div.'.$scope->componentSelectorReference.':before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';width:205px;height:205px;position:absolute;top:-95px;right:'.call_user_func(function($str){return $str;},'50%').';margin-right:-172px;background-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 3%)').';display:block;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 10%)0px 0px 15px').';}div.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';width:156px;height:156px;position:absolute;top:-70px;right:'.call_user_func(function($str){return $str;},'50%').';margin-right:-147px;background-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 0%)').';display:block;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 10%)0px 0px 15px').';}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AdSectionContentWrapper');

Capsule::Def ('AdSectionImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AdSectionImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AdSectionImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'50%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;justify-content:flex-end;align-items:flex-end;position:relative;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';max-width:450px;position:relative;z-index:1;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';margin-left:'.call_user_func(function($str){return $str;},'+94px').';}@media(max-width:900px){div.'.$scope->componentSelectorReference.' div img{margin-left:0px;}}@media(max-width:800px){div.'.$scope->componentSelectorReference.' div{text-align:right;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'70%').';}}div.'.$scope->componentSelectorReference.':before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';width:205px;height:205px;position:absolute;bottom:70px;left:153px;margin-left:-172px;background-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 3%)').';display:block;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 10%)0px 0px 15px').';}div.'.$scope->componentSelectorReference.':after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';width:156px;height:156px;position:absolute;bottom:94px;left:8px;margin-right:-147px;background-color:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 0%)').';display:block;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 10%)0px 0px 15px').';}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AdSectionImageWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}