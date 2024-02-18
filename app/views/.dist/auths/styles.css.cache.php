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
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:'.call_user_func(function($str){return $str;},'100%').';display:flex;align-items:center;justify-content:flex-end;padding:30px 80px;}@media(max-width: 1000px){div.'.$scope->componentSelectorReference.'{justify-content:center;padding:0px;}}@media(max-width: 530px){div.'.$scope->componentSelectorReference.'{align-items:flex-start;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('Text', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Text');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Text', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto thin").','.call_user_func(function($str){return "'$str'";},"Arial Narrow").','.call_user_func(function($str){return "'$str'";},"Trebuchet MS").',sans-serif').';}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Text');

Capsule::Def ('LoginBox', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'LoginBox');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'LoginBox', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';max-width:520px;background-color:#ffffff;border:1px solid #cdcdcd;padding:50px;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;box-shadow:'.call_user_func(function($str){return $str;},'rgba(0, 0, 0, .23)2px 2px 3px 0px').';}@media(max-width: 530px){div.'.$scope->componentSelectorReference.'{border:0px;box-shadow:none;}}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('LoginBox');

Capsule::Def ('TextBox', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'TextBox');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'TextBox', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto thin").','.call_user_func(function($str){return "'$str'";},"Arial Narrow").','.call_user_func(function($str){return "'$str'";},"Trebuchet MS").',sans-serif').';width:'.call_user_func(function($str){return $str;},'100%').';margin:0px 0px 18px;background-color:inherit;border:1px solid #cdcdcd;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;padding:9px;}div.'.$scope->componentSelectorReference.' span{display:block;margin:2px 0px 8px;font-weight:600;}div.'.$scope->componentSelectorReference.' input{width:'.call_user_func(function($str){return $str;},'100%').';border:0px;outline:0px;font-size:25px;background:transparent none;}div.'.$scope->componentSelectorReference.' textarea{width:'.call_user_func(function($str){return $str;},'100%').';border:0px;outline:0px;font-size:25px;background:transparent none;resize:none;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('TextBox');

Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Title');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Title', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' h1.'.$scope->componentSelectorReference.'{font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto thin").','.call_user_func(function($str){return "'$str'";},"Arial Narrow").','.call_user_func(function($str){return "'$str'";},"Trebuchet MS").',sans-serif').';width:'.call_user_func(function($str){return $str;},'100%').';font-size:43px;color:#444444;text-transform:uppercase;margin:0px 0px 18px;}';})), Capsule::CreateElement ('h1', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Title');

Capsule::Def ('Button', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Button');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Button', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' button.'.$scope->componentSelectorReference.'{font-size:32px;border:1px solid #0664AC;background-color:#279EFA;color:#ffffff;border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;padding:9px 30px;cursor:pointer;user-select:none;}button.'.$scope->componentSelectorReference.':hover{background-color:#1483D9;}';})), Capsule::CreateElement ('button', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('Button');

Capsule::Def ('ButtonContainer', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ButtonContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ButtonContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' div.'.$scope->componentSelectorReference.'{width:'.call_user_func(function($str){return $str;},'100%').';height:auto;padding:10px 0px 0px;}';})), Capsule::CreateElement ('div', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('ButtonContainer');

Capsule::Def ('SubTitle', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'SubTitle');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'SubTitle', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return ' h3.'.$scope->componentSelectorReference.'{font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto thin").','.call_user_func(function($str){return "'$str'";},"Arial Narrow").','.call_user_func(function($str){return "'$str'";},"Trebuchet MS").',sans-serif').';width:'.call_user_func(function($str){return $str;},'100%').';display:block;font-size:16px;color:#494949;margin:0px 0px 30px;}';})), Capsule::CreateElement ('h3', array_merge (ArrayHelper::PropsBeyond (['children'], $args), ['class' => join (' ', [$scope->componentSelectorReference, ((isset ($args ['class']) && is_string ($args ['class'])) ? $args ['class'] : '')])]), Capsule::Yield (null, [])));
});

Capsule::Export ('SubTitle');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}