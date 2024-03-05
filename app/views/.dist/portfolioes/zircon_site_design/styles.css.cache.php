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

Capsule::Def ('Styles', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Styles');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Styles', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'body{background-color:#f7f7f7;}*{list-style:none;list-style-type:none;}';})));
});

Capsule::Export ('Styles');

Capsule::Def ('Container', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Container');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{box-sizing:border-box;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('InfoCardsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'InfoCardsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'InfoCardsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;padding:12px 120px;}@media(max-width: 1160px){div.'.$scope->componentSelectorReference.'{padding:12px 30px;}}@media(max-width: 960px){div.'.$scope->componentSelectorReference.'{flex-direction:column;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('InfoCardsWrapper');

Capsule::Def ('InfoCard', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'InfoCard');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'InfoCard', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#ffffff;box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 18%)0px 0px 6px 1px').';margin:0px 20px;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;padding:70px 35px 110px;text-align:center;}div.'.$scope->componentSelectorReference.' h3{text-align:center;}div.'.$scope->componentSelectorReference.' p{text-align:center;}div.'.$scope->componentSelectorReference.' div.button-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;padding-top:30px;}div.'.$scope->componentSelectorReference.' div.button-wrapper a{display:inline-block;background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.500'):'inherit').';padding:6px 22px 5px;color:#ffffff;font-size:14px;border-radius:30px;-webkit-border-radius:30px;-moz-border-radius:30px;-o-border-radius:30px;-ms-border-radius:30px;border:0px;outline:0px;}div.'.$scope->componentSelectorReference.' div.button-wrapper a:hover{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.700'):'inherit').';}div.'.$scope->componentSelectorReference.' div.button-wrapper a:active{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.800'):'inherit').';}div.'.$scope->componentSelectorReference.' div.button-wrapper a span{margin-right:8px;}@media(max-width: 960px){div.'.$scope->componentSelectorReference.'{margin:20px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('InfoCard');

Capsule::Def ('InfoCardIcon', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'InfoCardIcon');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'InfoCardIcon', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;justify-content:center;align-items:center;padding:40px 0px 35px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('InfoCardIcon');

Capsule::Def ('FeaturesListContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FeaturesListContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FeaturesListContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#363636;padding:90px 120px 140px;margin:75px auto 0px;}@media(max-width: 1220px){div.'.$scope->componentSelectorReference.'{padding:90px 20px 140px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FeaturesListContainer');

Capsule::Def ('FeaturesListsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FeaturesListsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FeaturesListsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{widows:1;display:flex;flex-direction:row;}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{flex-direction:column;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FeaturesListsWrapper');

Capsule::Def ('FeaturesList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FeaturesList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FeaturesList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{widows:1;display:inline-flex;width:'.call_user_func(function($str){return $str;},'100%').';flex-direction:column;padding:0px 35px;justify-content:center;align-items:flex-start;margin:0px;}ul.'.$scope->componentSelectorReference.' li{border-radius:120px;-webkit-border-radius:120px;-moz-border-radius:120px;-o-border-radius:120px;-ms-border-radius:120px;border:1px solid #ffffff;color:#ffffff;display:flex;flex-direction:row;padding:7px 25px;justify-content:center;align-items:center;margin:8px 0px;}ul.'.$scope->componentSelectorReference.' li div.icon-container{width:45px;height:45px;}ul.'.$scope->componentSelectorReference.' li div.icon-container div{width:inherit;height:inherit;background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.400'):'inherit').';border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';display:flex;justify-content:center;align-items:center;font-size:19px;}ul.'.$scope->componentSelectorReference.' li div.feature-details-content{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 0px 0px 13px;}ul.'.$scope->componentSelectorReference.' li div.feature-details-content strong{font-size:13px;}ul.'.$scope->componentSelectorReference.' li div.feature-details-content p{font-size:9px;}@media(max-width: 950px){ul.'.$scope->componentSelectorReference.'{padding:0px 12px;}}@media(max-width: 650px){ul.'.$scope->componentSelectorReference.'{}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FeaturesList');

Capsule::Def ('FeaturesPreview', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FeaturesPreview');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FeaturesPreview', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{widows:1;display:inline-flex;width:'.call_user_func(function($str){return $str;},'100%').';max-width:560px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div svg{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 950px){div.'.$scope->componentSelectorReference.'{display:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FeaturesPreview');

Capsule::Def ('FeaturesListBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FeaturesListBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FeaturesListBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' .features-list-title-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;padding:0px 30px 70px;color:#ffffff;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('FeaturesListBody');

Capsule::Def ('AppOverViewDetailsContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppOverViewDetailsContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppOverViewDetailsContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#ffffff;padding:120px;}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{padding:120px 20px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppOverViewDetailsContainer');

Capsule::Def ('AppOverViewDetailsTitleWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppOverViewDetailsTitleWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppOverViewDetailsTitleWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;padding:0px 20px 70px;}div.'.$scope->componentSelectorReference.' h1{font-size:43px;}div.'.$scope->componentSelectorReference.' h3{font-size:23px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppOverViewDetailsTitleWrapper');

Capsule::Def ('AppOverViewDetailsBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppOverViewDetailsBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppOverViewDetailsBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:flex;flex-direction:row;justify-content:center;align-items:flex-start;}@media(max-width: 760px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppOverViewDetailsBody');

Capsule::Def ('AppOverViewDetailsImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppOverViewDetailsImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppOverViewDetailsImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:540px;padding-right:45px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 760px){div.'.$scope->componentSelectorReference.'{margin:auto;text-align:center;padding:40px 0px 0px;}div.'.$scope->componentSelectorReference.' div{margin:auto;width:'.call_user_func(function($str){return $str;},'92%').';}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppOverViewDetailsImageWrapper');

Capsule::Def ('AppOverViewDetailsContent', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppOverViewDetailsContent');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppOverViewDetailsContent', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;position:relative;flex-direction:column;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppOverViewDetailsContent');

Capsule::Def ('AppOverViewDetailsList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppOverViewDetailsList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppOverViewDetailsList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{padding:0px;margin:0px;display:flex;flex-direction:column;}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppOverViewDetailsList');

Capsule::Def ('AppOverViewDetail', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppOverViewDetail');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppOverViewDetail', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{display:flex;flex-direction:row;padding:0px 0px 22px;}li.'.$scope->componentSelectorReference.' div.icon-wrapper{width:25px;height:25px;background-color:#ffffff;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';box-shadow:'.call_user_func(function($str){return $str;},'0px 0px 6px rgb(0 0 0 / 22%)').';margin-right:15px;}li.'.$scope->componentSelectorReference.' div.icon-wrapper div{width:inherit;height:inherit;font-size:12px;display:flex;align-items:center;justify-content:center;margin-right:15px;}li.'.$scope->componentSelectorReference.' div.data-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';margin-top:-2px;}li.'.$scope->componentSelectorReference.' div.data-wrapper strong{font-size:16px;font-weight:700;display:inline-block;padding-bottom:8px;}li.'.$scope->componentSelectorReference.' div.data-wrapper p{font-size:13px;color:#706e6e;}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppOverViewDetail');

Capsule::Def ('AppOverViewCtaWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppOverViewCtaWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppOverViewCtaWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:28px 0px 0px 40px;}div.'.$scope->componentSelectorReference.' a{display:inline-block;background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.500'):'inherit').';padding:6px 22px 5px;color:#ffffff;font-size:14px;border-radius:30px;-webkit-border-radius:30px;-moz-border-radius:30px;-o-border-radius:30px;-ms-border-radius:30px;border:0px;outline:0px;}div.'.$scope->componentSelectorReference.' a:hover{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.700'):'inherit').';}div.'.$scope->componentSelectorReference.' a:active{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.800'):'inherit').';}div.'.$scope->componentSelectorReference.' a span{margin-right:8px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppOverViewCtaWrapper');

Capsule::Def ('PlanCardsListContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PlanCardsListContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PlanCardsListContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:120px;}@media(max-width: 1250px){div.'.$scope->componentSelectorReference.'{padding:120px 30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PlanCardsListContainer');

Capsule::Def ('PlanCardsListTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PlanCardsListTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PlanCardsListTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 0px 110px;text-align:center;}div.'.$scope->componentSelectorReference.' h1{font-size:40px;}div.'.$scope->componentSelectorReference.' h4{font-size:25px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PlanCardsListTitle');

Capsule::Def ('PlanCard', function ($args, CapsuleScopeContext $scope) {
	$scope->color = !(isset ($args ['color'])) ? 'blue' : $args ['color'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PlanCard');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PlanCard', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{background-color:#ffffff;box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 15%)0px 0px 2px').';margin:0px 13px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;width:'.call_user_func(function($str){return $str;},'100%').';border:1px solid #ececec;padding:80px 50px;border-top-width:6px;border-top-color:'.(!is_null ($scope->theme) ? ObjectHelper::ReadProperty ($scope->theme, 'colors.blue.600') : 'inherit').';}li.'.$scope->componentSelectorReference.' h3{font-size:23px;color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.600'):'inherit').';display:block;width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;}li.'.$scope->componentSelectorReference.' div.icon-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';padding:12px 0px 25px;display:flex;align-items:center;justify-content:center;}li.'.$scope->componentSelectorReference.' div.icon-wrapper div{width:55px;height:55px;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.'.($scope->color).'.200'):'inherit').';color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.'.($scope->color).'.600'):'inherit').';display:flex;flex-direction:column;align-items:center;justify-content:center;font-size:18px;}li.'.$scope->componentSelectorReference.' h5{font-size:18px;color:#363636;display:block;width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;}li.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';margin:32px 0px 0px;padding:20px 0px 0px;border-top:1px solid #938f8f;}li.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';font-size:14px;text-align:center;margin:11px 0px;color:#333333;font-weight:400;}li.'.$scope->componentSelectorReference.' ul li.disabled{color:#938f8f;font-weight:300;}li.'.$scope->componentSelectorReference.' div.cta-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:29px 0px 0px;}li.'.$scope->componentSelectorReference.' div.cta-wrapper div{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;justify-content:center;align-items:center;}li.'.$scope->componentSelectorReference.' div.cta-wrapper div button{display:inline-block;background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.500'):'inherit').';padding:6px 22px 5px;color:#ffffff;font-size:14px;border-radius:30px;-webkit-border-radius:30px;-moz-border-radius:30px;-o-border-radius:30px;-ms-border-radius:30px;border:0px;outline:0px;}li.'.$scope->componentSelectorReference.' div.cta-wrapper div button:hover{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.700'):'inherit').';}li.'.$scope->componentSelectorReference.' div.cta-wrapper div button:active{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.800'):'inherit').';}li.'.$scope->componentSelectorReference.' div.cta-wrapper div button span{margin-right:8px;}@media(max-width: 1000px){li.'.$scope->componentSelectorReference.'{margin:13px 0px;}}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['color','children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PlanCard');

Capsule::Def ('PlanCardsListBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PlanCardsListBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PlanCardsListBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{padding:0px;margin:0px;display:flex;flex-direction:row;}ul.'.$scope->componentSelectorReference.' li.highlight{background-color:#363636;border-top-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.yellow.600'):'inherit').';margin-top:-40px;}ul.'.$scope->componentSelectorReference.' li.highlight h3{color:#ffffff;}ul.'.$scope->componentSelectorReference.' li.highlight div.icon-wrapper{}ul.'.$scope->componentSelectorReference.' li.highlight div.icon-wrapper div{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.blue.600'):'inherit').';color:#ffffff;}ul.'.$scope->componentSelectorReference.' li.highlight h5{color:#ffffff;}ul.'.$scope->componentSelectorReference.' li.highlight ul{}ul.'.$scope->componentSelectorReference.' li.highlight ul li{color:#ffffff;}@media(max-width: 1000px){ul.'.$scope->componentSelectorReference.'{flex-direction:column;}ul.'.$scope->componentSelectorReference.' li.highlight{margin-top:13px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PlanCardsListBody');

Capsule::Def ('AppDownloadAdContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppDownloadAdContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppDownloadAdContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:120px;background-color:#ffffff;}@media(max-width: 1220px){div.'.$scope->componentSelectorReference.'{padding:120px 30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppDownloadAdContainer');

Capsule::Def ('AppDownloadAd', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppDownloadAd');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppDownloadAd', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;padding:120px 80px;background-color:#ffffff;box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 15%)0px 0px 20px').';border-radius:19px;-webkit-border-radius:19px;-moz-border-radius:19px;-o-border-radius:19px;-ms-border-radius:19px;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;padding:50px 30px;align-items:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppDownloadAd');

Capsule::Def ('AppDownloadAdImageWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppDownloadAdImageWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppDownloadAdImageWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:200px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppDownloadAdImageWrapper');

Capsule::Def ('AppDownloadAdBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AppDownloadAdBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AppDownloadAdBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-left:70px;}div.'.$scope->componentSelectorReference.' *{transition:'.call_user_func(function($str){return $str;},'all .2s ease-in-out').';}div.'.$scope->componentSelectorReference.' h1{font-size:40px;}div.'.$scope->componentSelectorReference.' h3{font-weight:28px;}div.'.$scope->componentSelectorReference.' p{font-size:16px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:50px 0px 0px;}div.'.$scope->componentSelectorReference.' div ul{padding:0px;margin:0px;display:flex;flex-direction:row;}div.'.$scope->componentSelectorReference.' div ul li{display:inline-flex;margin:0px 20px 20px 0px;}div.'.$scope->componentSelectorReference.' div ul li a{background-color:#363636;color:#ffffff;font-size:19px;display:block;padding:15px 27px;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;}div.'.$scope->componentSelectorReference.' div ul li a span{margin-left:17px;}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' h1{font-size:31px;}div.'.$scope->componentSelectorReference.' h3{font-size:22px;}div.'.$scope->componentSelectorReference.' p{font-size:13px;}div.'.$scope->componentSelectorReference.' div li a{font-size:'.call_user_func(function($str){return $str;},'12px !important').';padding:6px 15px;}}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{padding-left:0px;}div.'.$scope->componentSelectorReference.' *{text-align:center;}div.'.$scope->componentSelectorReference.' div{padding-top:10px;}div.'.$scope->componentSelectorReference.' div ul{justify-content:center;margin-bottom:'.call_user_func(function($str){return $str;},'+30px').';}div.'.$scope->componentSelectorReference.' div ul li{margin:10px;}}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div ul{flex-direction:column;align-items:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AppDownloadAdBody');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}