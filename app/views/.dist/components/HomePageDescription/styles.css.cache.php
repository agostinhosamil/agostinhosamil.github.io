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

Capsule::Def ('HomePageDescriptionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageDescriptionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageDescriptionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:inline-block;position:relative;background-color:#ffffff;}div.'.$scope->componentSelectorReference.' .x-page-desc-body{padding:'.call_user_func(function($str){return $str;},'.0px').';}div.'.$scope->componentSelectorReference.' .x-page-desc-title,.x-page-desc-title code{font-size:52px;font-weight:700;padding:'.call_user_func(function($str){return $str;},'.0px .0px 73px').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageDescriptionContainer');

Capsule::Def ('HomePageDescriptionTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageDescriptionTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageDescriptionTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' h1.'.$scope->componentSelectorReference.'{position:relative;text-align:center;max-width:640px;margin:auto;display:'.call_user_func(function($str){return $str;},'block !important').';font-size:52px;font-weight:700;padding:'.call_user_func(function($str){return $str;},'.0px .0px 73px').';transition:'.call_user_func(function($str){return $str;},'font-size .4s ease').';color:#bdbdbd;}h1.'.$scope->componentSelectorReference.' span{font-size:inherit;font-weight:inherit;padding:inherit;color:#ffffff;background:'.call_user_func(function($str){return $str;},'#d81b60 none repeat scroll 0%').';padding:7px 28px;border-radius:51px;-webkit-border-radius:51px;-moz-border-radius:51px;-o-border-radius:51px;-ms-border-radius:51px;transition:inherit;margin-top:38px;display:inline-block;}@media(max-width:1000px){h1.'.$scope->componentSelectorReference.' span{font-size:43px;}}@media(max-width:500px){h1.'.$scope->componentSelectorReference.' span{font-size:23px;}}@media(max-width: 500px){h1.'.$scope->componentSelectorReference.'{font-size:37px;}}';})), Capsule::CreateElement ('h1', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageDescriptionTitle');

Capsule::Def ('HomePageDescriptionParagraphes', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageDescriptionParagraphes');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageDescriptionParagraphes', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{position:relative;text-align:center;max-width:640px;margin:auto;display:'.call_user_func(function($str){return $str;},'block !important').';font-size:52px;font-weight:700;padding:'.call_user_func(function($str){return $str;},'.0px .0px 73px').';transition:'.call_user_func(function($str){return $str;},'font-size .4s ease').';color:#bdbdbd;padding:0px 0px 28px;}div.'.$scope->componentSelectorReference.' span{font-size:inherit;font-weight:inherit;padding:inherit;color:#ffffff;background:'.call_user_func(function($str){return $str;},'#d81b60 none repeat scroll 0%').';padding:7px 28px;border-radius:51px;-webkit-border-radius:51px;-moz-border-radius:51px;-o-border-radius:51px;-ms-border-radius:51px;transition:inherit;margin-top:38px;display:inline-block;}@media(max-width:1000px){div.'.$scope->componentSelectorReference.' span{font-size:43px;}}@media(max-width:500px){div.'.$scope->componentSelectorReference.' span{font-size:23px;}}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{font-size:37px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageDescriptionParagraphes');

Capsule::Def ('HomePageDescriptionParagraph', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageDescriptionParagraph');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageDescriptionParagraph', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{position:relative;z-index:1;color:#7b7a7a;font-size:26px;font-weight:400;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:inline-block;padding:20px 20px 51px;}div.'.$scope->componentSelectorReference.':before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';position:absolute;top:-8px;left:0px;right:0px;margin:auto;background:#ebeced;width:90px;height:12px;border-radius:45px;-webkit-border-radius:45px;-moz-border-radius:45px;-o-border-radius:45px;-ms-border-radius:45px;}@media(max-width: 610px){div.'.$scope->componentSelectorReference.'{font-size:16px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageDescriptionParagraph');

Capsule::Def ('HomePageDescriptionButton', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageDescriptionButton');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageDescriptionButton', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{text-align:center;padding:'.call_user_func(function($str){return $str;},'5px .0px .0px').';}div.'.$scope->componentSelectorReference.' a{position:relative;z-index:2;color:#225676;background:'.call_user_func(function($str){return $str;},'rgb(255 255 255 / 0%)').';padding:10px 22px 9px;border:4px solid #2a678d;font-size:33px;border-radius:73px;-webkit-border-radius:73px;-moz-border-radius:73px;-o-border-radius:73px;-ms-border-radius:73px;text-transform:uppercase;}div.'.$scope->componentSelectorReference.' a:hover{background:'.call_user_func(function($str){return $str;},'rgb(239 239 239)none repeat 0% 0%').';}@media(max-width:550px){div.'.$scope->componentSelectorReference.' a{font-size:22px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageDescriptionButton');

Capsule::Def ('HomePageDescriptionLinksWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HomePageDescriptionLinksWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HomePageDescriptionLinksWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';list-style-type:none;padding:0px;margin:0px 0px -30px;position:relative;z-index:5;}ul.'.$scope->componentSelectorReference.' li{list-style:none;margin:0px 7px;display:inline-block;}ul.'.$scope->componentSelectorReference.' li a{font-size:35px;color:#d81b60;display:flex;width:40px;height:40px;justify-content:center;align-items:center;align-content:center;transition:'.call_user_func(function($str){return $str;},'font-size .3s ease-in').';}ul.'.$scope->componentSelectorReference.' li a:hover{font-size:48px;}ul.'.$scope->componentSelectorReference.' li a i{font-size:inherit;}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HomePageDescriptionLinksWrapper');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}