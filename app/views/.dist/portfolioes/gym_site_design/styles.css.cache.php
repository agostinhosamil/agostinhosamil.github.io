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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'GlobalStyles', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return '*,*:after,*:before{list-style:none;list-style-type:none;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}img,svg{pointer-events:none;user-select:none;-webkit-user-select:none;}';})));
});

Capsule::Export ('GlobalStyles');

Capsule::Def ('Container', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Container');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {
	$scope->color = !(isset ($args ['color'])) ? "#ffffff" : $args ['color'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Title');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Title', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:'.call_user_func(function($str){return $str;},'70px 20% 45px').';text-align:center;}div.'.$scope->componentSelectorReference.' h5{color:#ff776f;font-size:17px;font-weight:600;margin:0px;padding:0px;text-transform:uppercase;}div.'.$scope->componentSelectorReference.' h2{color:'.(!is_null($scope->color)? $scope->color:'inherit').';font-weight:800;font-size:32px;line-height:30px;text-transform:uppercase;margin-top:15px;}div.'.$scope->componentSelectorReference.' p{display:block;text-align:center;width:'.call_user_func(function($str){return $str;},'100%').';padding:'.call_user_func(function($str){return $str;},'15px 0% 0px').';font-weight:300;font-size:14px;color:#a9a9a9;}@media(max-width: 1030px){div.'.$scope->componentSelectorReference.'{padding:'.call_user_func(function($str){return $str;},'70px 8% 45px').';}}@media(max-width: 750px){div.'.$scope->componentSelectorReference.'{padding-top:30px;}}@media(max-width: 480px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' h5{font-size:13px;}div.'.$scope->componentSelectorReference.' h2{font-size:23px;}div.'.$scope->componentSelectorReference.' p{font-size:12px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['color','children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Title');

Capsule::Def ('PageSectionContainer', function ($args, CapsuleScopeContext $scope) {
	$scope->backgroundColor = !(isset ($args ['backgroundColor'])) ? "#1a1a1a" : $args ['backgroundColor'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:flex;justify-content:center;align-items:center;background-color:'.(!is_null ($scope->backgroundColor) ? $scope->backgroundColor : 'inherit').';}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['backgroundColor','children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSectionContainer');

Capsule::Def ('PageSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'70%').';}@media(max-width: 1030px){div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSectionBody');

Capsule::Def ('ParthnersList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ParthnersList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ParthnersList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;margin:0px -30px;padding:20px 0px;display:flex;flex-direction:row;justify-content:center;align-items:center;flex-wrap:wrap;}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'25%').';padding:30px;opacity:'.call_user_func(function($str){return $str;},'.8').';}ul.'.$scope->componentSelectorReference.' li img{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width:750px){ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';}}@media(max-width:550px){ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'50%').';}}@media(max-width:400px){ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'100%').';}}@media(max-width: 1030px){ul.'.$scope->componentSelectorReference.'{margin:0px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ParthnersList');

Capsule::Def ('AboutCompanySectionContentWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AboutCompanySectionContentWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AboutCompanySectionContentWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;padding:180px 0px 130px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';max-width:410px;max-height:410px;position:relative;background-color:#ff4a41;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;display:flex;flex-direction:row;align-items:flex-end;justify-content:flex-end;margin-left:70px;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'90%').';margin-right:-80px;position:relative;z-index:1;}div.'.$scope->componentSelectorReference.' div:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"").'').';display:block;width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';border:7px solid #ff4a41;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;position:absolute;top:-40px;left:-70px;}div.'.$scope->componentSelectorReference.' ul{padding:0px 0px 0px 65px;margin:0px;width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' ul li{margin:8px 0px;}div.'.$scope->componentSelectorReference.' ul li strong{font-size:14px;text-transform:uppercase;color:#ff4a41;font-weight:400;}div.'.$scope->componentSelectorReference.' ul li h2{padding:0px;margin:0px;font-size:43px;font-weight:700;color:#ffffff;line-height:44px;}div.'.$scope->componentSelectorReference.' ul li p{padding:10px px;font-size:13px;color:#f9f9f9;line-height:15px;}div.'.$scope->componentSelectorReference.' ul li a{display:inline-block;padding:12px 24px;font-weight:400;font-size:13px;color:#ffffff;background-color:#ff4a41;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;}@media(max-width: 850px){div.'.$scope->componentSelectorReference.'{padding:100px 0px 50px;}div.'.$scope->componentSelectorReference.' div{max-width:250px;max-height:250px;}}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{padding:5px 0px 0px;}div.'.$scope->componentSelectorReference.' div{max-width:180px;max-height:180px;}div.'.$scope->componentSelectorReference.' ul li h2{font-size:25px;line-height:26px;}}@media(max-width: 550px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;}div.'.$scope->componentSelectorReference.' *{text-align:center;}div.'.$scope->componentSelectorReference.' div{margin:80px 0px 0px;}div.'.$scope->componentSelectorReference.' div img{margin-right:unset;}div.'.$scope->componentSelectorReference.' div:before{top:-25px;left:-47px;}div.'.$scope->componentSelectorReference.' ul{padding:0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AboutCompanySectionContentWrapper');

Capsule::Def ('ServiceSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ServiceSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ServiceSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:110px 0px;}div.'.$scope->componentSelectorReference.' h1{display:block;width:fit-content;text-align:center;font-size:37px;color:#ffffff;font-weight:500;text-transform:uppercase;position:relative;margin:auto;}div.'.$scope->componentSelectorReference.' h1 b{margin-left:12px;color:#ff4a41;}div.'.$scope->componentSelectorReference.' h1:after{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';width:52px;display:block;background-color:#ff4a41;position:absolute;right:-94px;height:2px;top:'.call_user_func(function($str){return $str;},'calc(50% + 2px)').';}div.'.$scope->componentSelectorReference.' h1:before{content:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},'').'').';width:52px;display:block;background-color:#ff4a41;position:absolute;right:-78px;height:2px;top:'.call_user_func(function($str){return $str;},'calc(50% - 4px)').';}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;padding:0px;margin:45px -10px 0px;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';padding:10px;}@media(max-width:700px){div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'50%').';}}@media(max-width:450px){div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'100%').';}}@media(max-width:1030px){div.'.$scope->componentSelectorReference.' ul{margin:45px auto 0px;}}@media(max-width: 830px){div.'.$scope->componentSelectorReference.'{padding:55px 0px;}}@media(max-width: 550px){div.'.$scope->componentSelectorReference.'{text-align:center;padding:25px 0px;}div.'.$scope->componentSelectorReference.' h1{font-size:18px;}div.'.$scope->componentSelectorReference.' p{font-size:12px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ServiceSectionBody');

Capsule::Def ('ServiceCard', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ServiceCard');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ServiceCard', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#000000;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;position:relative;display:flex;flex-direction:column;padding-bottom:25px;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';margin-bottom:25px;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';border-top-right-radius:8px;border-top-left-radius:8px;}div.'.$scope->componentSelectorReference.' strong{display:block;padding:0px 25px 9px;font-weight:700;font-size:16px;color:#ffffff;}div.'.$scope->componentSelectorReference.' p{display:-webkit-box;padding:0px 25px 25px;font-weight:700;font-size:12px;line-height:14px;margin:0px;color:#7c7c7c;overflow:hidden;-webkit-box-orient:vertical;-webkit-line-clamp:5;max-height:70px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ServiceCard');

Capsule::Def ('PlanCardList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PlanCardList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PlanCardList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{padding:0px 0px 80px;margin:0px -20px 0px;width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;flex-wrap:wrap;}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';min-height:440px;position:relative;padding:20px;}ul.'.$scope->componentSelectorReference.' li div.colored{background-color:#fd4b41;}ul.'.$scope->componentSelectorReference.' li div.colored div{}ul.'.$scope->componentSelectorReference.' li div.colored div h5{color:#ffffff;}ul.'.$scope->componentSelectorReference.' li div.colored div data{border-color:#ff776f;}ul.'.$scope->componentSelectorReference.' li div.colored div data p i{color:#ffffff;}ul.'.$scope->componentSelectorReference.' li div.colored a{background-color:#ffffff;}@media(max-width: 900px){ul.'.$scope->componentSelectorReference.'{margin:0px;}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'50%').';}}@media(max-width: 700px){ul.'.$scope->componentSelectorReference.'{}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'100%').';padding:20px;}}@media(max-width: 650px){ul.'.$scope->componentSelectorReference.'{padding:0px;}ul.'.$scope->componentSelectorReference.' li{padding:20px 0px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PlanCardList');

Capsule::Def ('PlanCard', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PlanCard');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PlanCard', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';min-height:inherit;background-color:#1a1a1a;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;padding:70px 30px;display:flex;flex-direction:column;justify-content:space-between;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:column;}div.'.$scope->componentSelectorReference.' div h5{font-weight:600;color:#c9c9c9;font-size:23px;line-height:17px;}div.'.$scope->componentSelectorReference.' div strong{font-weight:800;color:#ffffff;font-size:29px;}div.'.$scope->componentSelectorReference.' div data{width:'.call_user_func(function($str){return $str;},'100%').';padding:20px 0px;margin-top:12px;border-top:1px solid #282828;display:block;}div.'.$scope->componentSelectorReference.' div data p{display:flex;width:'.call_user_func(function($str){return $str;},'100%').';flex-direction:row;justify-content:flex-start;align-items:center;}div.'.$scope->componentSelectorReference.' div data p i{color:#fd4b41;font-size:25px;}div.'.$scope->componentSelectorReference.' div data p span{color:#ffffff;font-weight:300;font-size:13px;display:inline-block;margin-left:13px;}div.'.$scope->componentSelectorReference.' a{display:block;width:max-content;padding:12px 24px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;border:1px solid #fd4b41;color:#fd4b41;font-size:13px;font-weight:600;margin:0px auto;}div.'.$scope->componentSelectorReference.' a:hover{transform:'.call_user_func(function($str){return $str;},'scale(1.2)').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PlanCard');

Capsule::Def ('TrainersCardList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TrainersCardList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TrainersCardList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 0px 70px;margin:0px -20px 0px;display:flex;flex-direction:row;justify-content:center;align-items:center;flex-wrap:wrap;}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';padding:20px;}ul.'.$scope->componentSelectorReference.' li div{width:'.call_user_func(function($str){return $str;},'100%').';background-color:#000000;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;position:relative;}ul.'.$scope->componentSelectorReference.' li div img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:inherit;-webkit-border-radius:inherit;-moz-border-radius:inherit;-o-border-radius:inherit;-ms-border-radius:inherit;}ul.'.$scope->componentSelectorReference.' li div data{position:absolute;bottom:'.call_user_func(function($str){return $str;},'5%').';width:'.call_user_func(function($str){return $str;},'70%').';padding:'.call_user_func(function($str){return $str;},'10%').';display:flex;flex-direction:column;margin:auto;left:0px;right:0px;background-color:#191919;padding:11px 18px;border-radius:9px;-webkit-border-radius:9px;-moz-border-radius:9px;-o-border-radius:9px;-ms-border-radius:9px;text-align:center;color:#ffffff;}ul.'.$scope->componentSelectorReference.' li div data span{font-weight:100;font-size:12px;display:block;margin-top:5px;}@media(max-width:350px){ul.'.$scope->componentSelectorReference.' li div data{padding:5px 14px;border-radius:4;-webkit-border-radius:4;-moz-border-radius:4;-o-border-radius:4;-ms-border-radius:4;}ul.'.$scope->componentSelectorReference.' li div data data{width:max-content;padding:14px;}ul.'.$scope->componentSelectorReference.' li div data data span{font-size:10px;margin-top:1px;}}ul.'.$scope->componentSelectorReference.' li.colored div data{background-color:#fd4b41;border:2px solid #ffffff;color:#ffffff;}ul.'.$scope->componentSelectorReference.' li.colored div data *{color:#ffffff;}@media(max-width: 1030px){ul.'.$scope->componentSelectorReference.'{margin:0px;}}@media(max-width: 800px){ul.'.$scope->componentSelectorReference.'{padding-bottom:20px;}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'50%').';padding:10px;}}@media(max-width: 800px){ul.'.$scope->componentSelectorReference.'{padding-bottom:15px;}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'100%').';padding:10px 0px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TrainersCardList');

Capsule::Def ('ScheduleListsWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ScheduleListsWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ScheduleListsWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-wrap:nowrap;justify-content:center;padding-bottom:70px;}@media(max-width: 1030px){div.'.$scope->componentSelectorReference.'{justify-content:flex-start;overflow:scroll clip;padding-bottom:18px;}div.'.$scope->componentSelectorReference.'::-webkit-scrollbar-track{background:'.call_user_func(function($str){return $str;},'none transparent scroll repeat 0% 0%').';}div.'.$scope->componentSelectorReference.'::-webkit-scrollbar{background-color:transparent;height:6px;}div.'.$scope->componentSelectorReference.'::-webkit-scrollbar-thumb{background-color:#ff776f;border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;-o-border-radius:15px;-ms-border-radius:15px;height:6px;}div.'.$scope->componentSelectorReference.'::-webkit-scrollbar-thumb:hover{background-color:#E06058;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ScheduleListsWrapper');

Capsule::Def ('ScheduleList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ScheduleList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ScheduleList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'calc(100% / 7)').';display:flex;flex-direction:column;justify-content:center;align-items:center;}@media(max-width: 1030px){div.'.$scope->componentSelectorReference.'{min-width:138px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ScheduleList');

Capsule::Def ('ScheduleListItem', function ($args, CapsuleScopeContext $scope) {
	$scope->color = !(isset ($args ['color'])) ? "#353334" : $args ['color'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ScheduleListItem');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ScheduleListItem', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:10px;height:auto;}div.'.$scope->componentSelectorReference.' *{user-select:none;-webkit-user-select:none;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';background-color:'.(!is_null($scope->color)? $scope->color:'inherit').';padding:12px 20px;text-align:center;font-size:13px;font-weight:600;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;color:'.call_user_func(function($str){return $str;},'rgb(255 255 255 / 83%)').';}div.'.$scope->componentSelectorReference.' div i{font-size:17px;}div.'.$scope->componentSelectorReference.' div span{font-size:12px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['color','children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ScheduleListItem');

Capsule::Def ('ProductsCardListWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductsCardListWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductsCardListWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';position:relative;padding:30px 45px 70px;}@media(max-width: 830px){div.'.$scope->componentSelectorReference.'{padding:0px 45px 0px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductsCardListWrapper');

Capsule::Def ('ProductsCardList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductsCardList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductsCardList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:flex-start;align-items:center;overflow:hidden;position:relative;padding:10px;}ul.'.$scope->componentSelectorReference.' li{width:310px;margin:0px 20px 0px 0px;}@media(max-width:900px){ul.'.$scope->componentSelectorReference.' li{width:180px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductsCardList');

Capsule::Def ('ProductCard', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductCard');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductCard', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:230px;background-color:transparent;box-shadow:'.call_user_func(function($str){return $str;},'0px 0px 20px rgb(0 0 0 / 52%)').';border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;padding:20px;text-align:center;}div.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;margin-bottom:22px;}div.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'80%').';}div.'.$scope->componentSelectorReference.' strong{font-size:18px;color:#ffffff;font-weight:400;}div.'.$scope->componentSelectorReference.' span{display:block;width:'.call_user_func(function($str){return $str;},'100%').';padding:1px 0px 9px;color:#f6473f;font-size:25px;font-weight:700;}div.'.$scope->componentSelectorReference.' p{font-size:14px;color:#ffffff;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{width:180px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductCard');

Capsule::Def ('ProductsCardListNavigation', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductsCardListNavigation');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductsCardListNavigation', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:max-content;position:absolute;top:0px;margin:auto;bottom:0px;left:0px;right:0px;display:flex;justify-content:space-between;align-items:center;flex-direction:row;}div.'.$scope->componentSelectorReference.' div{width:max-content;display:inline-block;margin-top:-50px;}div.'.$scope->componentSelectorReference.' div button{background-color:transparent;border:0px;outline:0px;font-size:50px;font-weight:500;color:#ffffff;}div.'.$scope->componentSelectorReference.' div button:hover{transform:'.call_user_func(function($str){return $str;},'scale(1.2)').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductsCardListNavigation');

Capsule::Def ('GallerySectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'GallerySectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'GallerySectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:0px 0px 70px;}div.'.$scope->componentSelectorReference.' ul{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;flex-wrap:wrap;}div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'25%').';padding:8px;}div.'.$scope->componentSelectorReference.' ul li div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' ul li div img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;}@media(max-width:750px){div.'.$scope->componentSelectorReference.' ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';}}@media(max-width:580px){div.'.$scope->componentSelectorReference.' ul li{padding:5px;width:'.call_user_func(function($str){return $str;},'50%').';}div.'.$scope->componentSelectorReference.' ul li div img{border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;}}@media(max-width:420px){div.'.$scope->componentSelectorReference.' ul li{padding:5px 0px;width:'.call_user_func(function($str){return $str;},'100%').';}}@media(max-width: 750px){div.'.$scope->componentSelectorReference.'{padding-bottom:30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('GallerySectionBody');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}