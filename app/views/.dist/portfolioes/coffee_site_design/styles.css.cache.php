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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{box-sizing:border-box;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('PageSectionTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSectionTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSectionTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:'.call_user_func(function($str){return $str;},'0px 4% 27px').';text-align:center;}div.'.$scope->componentSelectorReference.' h1{font-size:43px;font-weight:900;color:#320200;line-height:41px;padding:0px;margin:0px;}div.'.$scope->componentSelectorReference.' p{font-size:15px;display:block;width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;padding:'.call_user_func(function($str){return $str;},'20px 20% 0px').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSectionTitle');

Capsule::Def ('PageSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' section.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding:'.call_user_func(function($str){return $str;},'70px 5% 0px').';}';})), Capsule::CreateElement ('section', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSectionContainer');

Capsule::Def ('ProductSlideSectionContaier', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductSlideSectionContaier');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductSlideSectionContaier', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;margin-top:90px;}@media(max-width: 650px){div.'.$scope->componentSelectorReference.'{margin-top:30px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductSlideSectionContaier');

Capsule::Def ('PageSectionBody', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PageSectionBody');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PageSectionBody', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PageSectionBody');

Capsule::Def ('HightlightContent', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HightlightContent');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HightlightContent', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;padding-top:90px;}div.'.$scope->componentSelectorReference.' div.image-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.image-wrapper div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.image-wrapper div img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:25px;-webkit-border-radius:25px;-moz-border-radius:25px;-o-border-radius:25px;-ms-border-radius:25px;}div.'.$scope->componentSelectorReference.' div.content-wrapper{width:'.call_user_func(function($str){return $str;},'35%').';padding-left:20px;}div.'.$scope->componentSelectorReference.' div.content-wrapper h2{padding:0px;margin:0px;font-size:45px;font-weight:900;color:#320200;line-height:44px;}div.'.$scope->componentSelectorReference.' div.content-wrapper p{font-weight:400;font-size:14px;color:#320200;display:block;padding:10px 0px 20px;margin:0px;}div.'.$scope->componentSelectorReference.' div.content-wrapper a{display:inline-block;padding:12px 33px;font-size:14px;background-color:#320200;color:#ffffff;font-weight:400;border-radius:42px;-webkit-border-radius:42px;-moz-border-radius:42px;-o-border-radius:42px;-ms-border-radius:42px;}div.'.$scope->componentSelectorReference.' div.content-wrapper.x-large{width:'.call_user_func(function($str){return $str;},'100%').';}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;padding-top:0px;}div.'.$scope->componentSelectorReference.' div.content-wrapper{padding:0px;width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;padding-bottom:40px;}}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div.content-wrapper{padding-bottom:20px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HightlightContent');

Capsule::Def ('ServiceInfoContent', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ServiceInfoContent');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ServiceInfoContent', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;justify-content:center;align-items:center;padding-top:90px;padding:0px;}div.'.$scope->componentSelectorReference.' div.image-wrapper{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.image-wrapper div{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.image-wrapper div img{width:'.call_user_func(function($str){return $str;},'100%').';border-radius:25px;-webkit-border-radius:25px;-moz-border-radius:25px;-o-border-radius:25px;-ms-border-radius:25px;}div.'.$scope->componentSelectorReference.' div.content-wrapper{width:'.call_user_func(function($str){return $str;},'35%').';padding-left:20px;}div.'.$scope->componentSelectorReference.' div.content-wrapper h2{padding:0px;margin:0px;font-size:45px;font-weight:900;color:#320200;line-height:44px;}div.'.$scope->componentSelectorReference.' div.content-wrapper p{font-weight:400;font-size:14px;color:#320200;display:block;padding:10px 0px 20px;margin:0px;}div.'.$scope->componentSelectorReference.' div.content-wrapper a{display:inline-block;padding:12px 33px;font-size:14px;background-color:#320200;color:#ffffff;font-weight:400;border-radius:42px;-webkit-border-radius:42px;-moz-border-radius:42px;-o-border-radius:42px;-ms-border-radius:42px;}div.'.$scope->componentSelectorReference.' div.content-wrapper.x-large{width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' div.content-wrapper{padding-left:50px;}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{flex-direction:column-reverse;padding-top:0px;}div.'.$scope->componentSelectorReference.' div.content-wrapper{padding:0px;width:'.call_user_func(function($str){return $str;},'100%').';text-align:center;padding-bottom:40px;}}@media(max-width: 800px){div.'.$scope->componentSelectorReference.'{}div.'.$scope->componentSelectorReference.' div.content-wrapper{padding-bottom:20px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ServiceInfoContent');

Capsule::Def ('HightlightList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HightlightList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HightlightList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'65%').';display:inline-flex;flex-direction:row;align-items:center;justify-content:center;padding:0px;margin:0px;}@media(max-width: 1000px){ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';padding-top:114px;}}@media(max-width: 800px){ul.'.$scope->componentSelectorReference.'{flex-direction:column;padding:0px;}}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HightlightList');

Capsule::Def ('HightlightListItem', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'HightlightListItem');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'HightlightListItem', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'50%').';padding:10px 20px 10px 0px;}@media(max-width: 1000px){li.'.$scope->componentSelectorReference.'{padding:10px;}}@media(max-width: 800px){li.'.$scope->componentSelectorReference.'{margin-top:120px;width:'.call_user_func(function($str){return $str;},'100%').';}}@media(max-width: 650px){li.'.$scope->componentSelectorReference.'{margin-top:65px;}}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('HightlightListItem');

Capsule::Def ('SearchFormContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'SearchFormContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'SearchFormContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;background-color:#320200;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;-o-border-radius:12px;-ms-border-radius:12px;padding:30px;}div.'.$scope->componentSelectorReference.' form{display:block;width:'.call_user_func(function($str){return $str;},'100%').';height:auto;position:relative;margin:0px;padding:0px;}div.'.$scope->componentSelectorReference.' form ul{display:flex;flex-direction:row;justify-content:center;align-items:center;flex-wrap:wrap;padding:0px;margin:0px;width:'.call_user_func(function($str){return $str;},'100%').';}div.'.$scope->componentSelectorReference.' form ul li{width:'.call_user_func(function($str){return $str;},'25%').';padding:0px 10px;}div.'.$scope->componentSelectorReference.' form ul li strong{font-size:16px;font-size:400;color:#ffffff;display:block;padding:0px 20px 12px;}div.'.$scope->componentSelectorReference.' form ul li div{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;flex-direction:row;align-items:center;justify-content:center;padding:0px 20px;}div.'.$scope->componentSelectorReference.' form ul li div select{width:'.call_user_func(function($str){return $str;},'100%').';font-size:14px;font-weight:300;color:#ffffff;background-color:transparent;outline:0px;border:0px;}div.'.$scope->componentSelectorReference.' form ul li div select option{color:#303030;}div.'.$scope->componentSelectorReference.' form ul li div i{margin-right:14px;font-size:17px;color:#ffffff;font-weight:700;}div.'.$scope->componentSelectorReference.' form ul li div data{width:'.call_user_func(function($str){return $str;},'100%').';display:flex;background-color:#ffffff;border-radius:45px;-webkit-border-radius:45px;-moz-border-radius:45px;-o-border-radius:45px;-ms-border-radius:45px;padding:12px 20px;flex-direction:row;justify-content:center;align-items:center;}div.'.$scope->componentSelectorReference.' form ul li div data input{width:'.call_user_func(function($str){return $str;},'100%').';outline:0px;border:0px;background-color:transparent;font-size:16px;font-weight:500;}div.'.$scope->componentSelectorReference.' form ul li div data i{color:#606060;font-size:20px;}div.'.$scope->componentSelectorReference.' form ul li.outlined{border-style:solid;border-color:#ffffff;border-width:0px 1px;}@media(max-width:1000px){div.'.$scope->componentSelectorReference.' form ul{}div.'.$scope->componentSelectorReference.' form ul li{width:'.call_user_func(function($str){return $str;},'calc(100% / 3)').';}div.'.$scope->componentSelectorReference.' form ul li.input{width:'.call_user_func(function($str){return $str;},'100%').';margin-top:50px;}}@media(max-width:550px){div.'.$scope->componentSelectorReference.' form ul{flex-direction:column;}div.'.$scope->componentSelectorReference.' form ul li{width:'.call_user_func(function($str){return $str;},'100%').';margin:25px 0px;padding:0px;}div.'.$scope->componentSelectorReference.' form ul li.outlined{border:0px;}}@media(max-width: 750px){div.'.$scope->componentSelectorReference.'{padding:30px 15px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('SearchFormContainer');

Capsule::Def ('ProductSlideWrapper', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductSlideWrapper');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductSlideWrapper', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{width:320px;margin-right:20px;}@media(max-width: 900px){li.'.$scope->componentSelectorReference.'{width:280px;}}@media(max-width: 500px){li.'.$scope->componentSelectorReference.'{width:180px;}}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductSlideWrapper');

Capsule::Def ('ProductSlide', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ProductSlide');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ProductSlide', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:320px;position:relative;display:block;}@media(max-width: 900px){div.'.$scope->componentSelectorReference.'{width:280px;}}@media(max-width: 500px){div.'.$scope->componentSelectorReference.'{width:180px;}div.'.$scope->componentSelectorReference.' h4{font-size:'.call_user_func(function($str){return $str;},'18px !important').';}div.'.$scope->componentSelectorReference.' div div.card-options{flex-direction:column;align-items:center;}div.'.$scope->componentSelectorReference.' div div.card-options ul{padding:0px 0px 25px;justify-content:center;}div.'.$scope->componentSelectorReference.' div div.card-options ul li{padding:0px 7px;}div.'.$scope->componentSelectorReference.' div div.card-options ul li a{color:#320200;background-color:transparent;}div.'.$scope->componentSelectorReference.' div div.card-options strong{font-size:10px;padding:5px 14px 4px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('ProductSlide');

Capsule::Def ('TestimonialSectionContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TestimonialSectionContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TestimonialSectionContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;display:block;position:relative;}div.'.$scope->componentSelectorReference.' li.selected{width:170px;height:170px;border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';}div.'.$scope->componentSelectorReference.' li.selected div img{border:5px solid #320200;}@media(max-width:650px){div.'.$scope->componentSelectorReference.' li.selected{width:120px;height:120px;}div.'.$scope->componentSelectorReference.' li.selected img{border-width:2px;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TestimonialSectionContainer');

Capsule::Def ('TestimonialCardContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TestimonialCardContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TestimonialCardContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{width:120px;height:120px;margin:0px 25px 0px 0px;transition:'.call_user_func(function($str){return $str;},'all .1s linear').';}li.'.$scope->componentSelectorReference.' div{width:inherit;height:inherit;}li.'.$scope->componentSelectorReference.' div img{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';border-radius:'.call_user_func(function($str){return $str;},'50%').';-webkit-border-radius:'.call_user_func(function($str){return $str;},'50%').';-moz-border-radius:'.call_user_func(function($str){return $str;},'50%').';-o-border-radius:'.call_user_func(function($str){return $str;},'50%').';-ms-border-radius:'.call_user_func(function($str){return $str;},'50%').';}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TestimonialCardContainer');

Capsule::Def ('TestimonialsList', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TestimonialsList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TestimonialsList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' ul.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:block;padding:0px;margin:0px;}ul.'.$scope->componentSelectorReference.' li.x-shown{display:'.call_user_func(function($str){return $str;},'flex !important').';}';})), Capsule::CreateElement ('ul', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TestimonialsList');

Capsule::Def ('TestimonialContent', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TestimonialContent');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TestimonialContent', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';display:none;flex-direction:column;justify-content:center;align-items:center;text-align:center;padding:'.call_user_func(function($str){return $str;},'15px 20% 10px').';}li.'.$scope->componentSelectorReference.' h5{font-size:32px;font-weight:700;color:#5e100d;margin:0px;padding:0px;}li.'.$scope->componentSelectorReference.' strong{font-size:14px;color:#320200;font-weight:400;}li.'.$scope->componentSelectorReference.' div{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;text-align:center;padding:4px 20px 10px;}li.'.$scope->componentSelectorReference.' div span{color:#e1a61c;font-size:22px;display:inline-block;margin:0px 2px;}li.'.$scope->componentSelectorReference.' p{font-size:16px;line-height:21px;font-weight:400;color:#8b8b8b;}@media(max-width: 550px){li.'.$scope->componentSelectorReference.'{padding:'.call_user_func(function($str){return $str;},'15px 2% 10px').';}}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('TestimonialContent');

Capsule::Def ('PostCardContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'PostCardContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'PostCardContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' li.'.$scope->componentSelectorReference.'{width:280px;margin:0px 15px 0px 0px;padding:0px;position:relative;display:inline-flex;align-items:center;}';})), Capsule::CreateElement ('li', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => trim(join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')]))]), Capsule::Yield (null, [])));
});

Capsule::Export ('PostCardContainer');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}