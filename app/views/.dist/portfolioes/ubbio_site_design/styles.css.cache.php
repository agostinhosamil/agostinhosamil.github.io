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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{box-sizing:border-box;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;position:relative;}div.'.$scope->componentSelectorReference.' *{list-style:none;list-style-type:none;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('ServiceDescriptionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ServiceDescriptionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ServiceDescriptionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:120px;margin-bottom:220px;position:relative;}div.'.$scope->componentSelectorReference.' div.content-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';padding:50px 30px 0px 0px;}div.'.$scope->componentSelectorReference.' div.content-wrapper h2{font-size:35px;font-family:serif;font-weight:700;color:#05241d;}div.'.$scope->componentSelectorReference.' div.content-wrapper p{font-size:15px;font-weight:400;color:#05241d;}div.'.$scope->componentSelectorReference.' div.content-wrapper div{width:'.call_user_func(function($str){return $str;},'100%').';padding:25px 0px 0px;}div.'.$scope->componentSelectorReference.' div.content-wrapper div a{background-color:#30ac4a;color:#ffffff;display:inline-flex;padding:8px 21px;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;}div.'.$scope->componentSelectorReference.' div.image-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.image-wrapper img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:14px;-webkit-border-radius:14px;-moz-border-radius:14px;-o-border-radius:14px;-ms-border-radius:14px;}div.'.$scope->componentSelectorReference.' div.details-list-container{position:absolute;width:'.call_user_func(function($str){return $str;},'80%').';padding:0px;left:0px;right:0px;margin:auto;top:'.call_user_func(function($str){return $str;},'70%').';}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:0px;margin:0px;display:flex;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item{width:210px;display:inline-flex;flex-direction:column;margin-right:25px;}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item div.details-list-item-container{width:inherit;display:flex;flex-direction:column;background-color:#ffffff;border:1px solid #c8e1d9;border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;-o-border-radius:15px;-ms-border-radius:15px;padding:25px;}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item div.details-list-item-container div{width:'.call_user_func(function($str){return $str;},'100%').';padding:'.call_user_func(function($str){return $str;},'0px 10% 25px').';}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item div.details-list-item-container div img{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item div.details-list-item-container h5{font-weight:500;color:#444444;text-align:center;}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item div.details-list-item-container ul{display:flex;flex-direction:row;justify-content:center;padding:0px;margin:0px 0px 15px;}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item div.details-list-item-container ul li{color:#f79d1d;}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item div.details-list-item-container strong{font-weight:700;color:#0d9d29;font-size:16px;display:block;text-align:center;}@media(max-width:1210px){div.'.$scope->componentSelectorReference.' div.details-list-container{width:'.call_user_func(function($str){return $str;},'100%').';padding-top:40px;position:relative;}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item{width:'.call_user_func(function($str){return $str;},'100%').';margin:0px 13px;}}@media(max-width:650px){div.'.$scope->componentSelectorReference.' div.details-list-container{}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list{flex-direction:column;}div.'.$scope->componentSelectorReference.' div.details-list-container ul.details-list li.details-list-item{margin:13px 0px;}}@media(max-width: 1210px){div.'.$scope->componentSelectorReference.'{margin-bottom:0px;}div.'.$scope->componentSelectorReference.' div.content-wrapper{padding-top:0px;}}@media(max-width: 992px){div.'.$scope->componentSelectorReference.'{padding:40px;}div.'.$scope->componentSelectorReference.' div.content-wrapper{padding:0px 0px 60px;text-align:center;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ServiceDescriptionContainer');

Capsule::Def ('AboutCompanySection', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AboutCompanySection');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AboutCompanySection', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;background-color:#023429;}section.'.$scope->componentSelectorReference.' div.row{margin:0px;}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px 20px 0px 120px;}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper span{color:#fba01d;font-weight:400;text-transform:uppercase;font-size:16px;}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper h3{font-size:35px;color:#ffffff;font-weight:500;font-family:serif;}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper p{font-size:13px;color:#ffffff;font-weight:400;display:block;margin:15px 0px 25px;}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper a{display:inline-block;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;border:1px solid #ffffff;color:#ffffff;font-weight:400;font-size:14px;padding:9px 23px;}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper a:hover{background-color:#ffffff;color:#023429;}section.'.$scope->componentSelectorReference.' div.row div.image-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';pointer-events:none;}section.'.$scope->componentSelectorReference.' div.row div.image-wrapper img{width:'.call_user_func(function($str){return $str;},'100%').';}section.'.$scope->componentSelectorReference.' div.row div.col-lg-5{display:flex;justify-content:center;align-items:center;}section.'.$scope->componentSelectorReference.' div.row div.col-lg-7{padding-right:0px;}@media(max-width: 1110px){section.'.$scope->componentSelectorReference.'{}section.'.$scope->componentSelectorReference.' div.row{}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper{padding:0px 20px 0px;}}@media(max-width: 991px){section.'.$scope->componentSelectorReference.'{}section.'.$scope->componentSelectorReference.' div.row{}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper{padding:40px 20px;}section.'.$scope->componentSelectorReference.' div.row div.content-wrapper a{font-size:11px;padding:5px 15px 3px;}section.'.$scope->componentSelectorReference.' div.row div.col-lg-7{padding:0px;}}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('AboutCompanySection');

Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Title');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Title', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' h1.'.$scope->componentSelectorReference.'{font-weight:800;font-size:52px;text-align:center;font-family:serif;padding:90px 40px 50px;}@media(max-width: 810px){h1.'.$scope->componentSelectorReference.'{padding-top:40px;}}';})), Capsule::CreateElement ('h1', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Title');

Capsule::Def ('ArrivalsSection', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ArrivalsSection');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ArrivalsSection', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:30px 120px;}@media(max-width: 1100px){div.'.$scope->componentSelectorReference.'{padding:30px 20px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ArrivalsSection');

Capsule::Def ('ArrivalsSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ArrivalsSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ArrivalsSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ArrivalsSectionBody');

Capsule::Def ('ArrivalsList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ArrivalsList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ArrivalsList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:0px;margin:0px;display:flex;flex-direction:row;flex-wrap:wrap;}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;position:relative;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;padding:10px;transition:'.call_user_func(function($str){return $str;},'all .3s ease-in-out').';}ul.'.$scope->componentSelectorReference.' li img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:inherit;-webkit-border-radius:inherit;-moz-border-radius:inherit;-o-border-radius:inherit;-ms-border-radius:inherit;}ul.'.$scope->componentSelectorReference.' li div{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';position:absolute;top:0px;left:0px;right:0px;display:flex;justify-content:center;align-items:flex-end;padding:30px;}ul.'.$scope->componentSelectorReference.' li div span{background-color:#eaeae8;padding:12px 25px;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;-o-border-radius:6px;-ms-border-radius:6px;font-weight:800;color:#444444;font-family:serif;box-shadow:'.call_user_func(function($str){return $str;},'rgb(0 0 0 / 14%)2px 2px 7px 18px').';user-select:none;}@media(max-width:810px){ul.'.$scope->componentSelectorReference.' li div span{font-size:12px;padding:8px 15px;}}@media(max-width: 930px){ul.'.$scope->componentSelectorReference.'{}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'calc(100% / 2)').';}}@media(max-width: 630px){ul.'.$scope->componentSelectorReference.'{}ul.'.$scope->componentSelectorReference.' li{width:'.call_user_func(function($str){return $str;},'100%').';}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ArrivalsList');

Capsule::Def ('ProductsBannerContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductsBannerContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductsBannerContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:50px 0px 0px;position:relative;}div.'.$scope->componentSelectorReference.' img{width:'.call_user_func(function($str){return $str;},'100%').';pointer-events:none;user-select:none;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductsBannerContainer');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}