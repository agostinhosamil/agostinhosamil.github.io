<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('ApplicationMetaDatas', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php
	Capsule::Import ('CapsuleThemeProvider', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php
	Capsule::Import ('Styles', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Scripts', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Style', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('@components/Footer')));

?>

<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('@components/Header')));

?>


<?php
	Capsule::Import ('$theme', Capsule::RelativePathDecode (path ('@views/config/theme')));

?>

<?php Capsule::Def ('Application', function ($args, CapsuleScopeContext $scope) {
$scope->data = !(isset ($args ['data'])) ? null : $args ['data'];
$scope->children = !(isset ($args ['children'])) ? null : $args ['children'];
?>
<?php  Capsule::PartialRender ('html', ['lang' => "pt-BR"], Capsule::CreateElement ('head', [], Capsule::CreateElement ('title', [], 'Agostinho Saml - Fullstack Developer'), Capsule::CreateElement ('ApplicationMetaDatas', []), Capsule::CreateElement ('Style', ['href' => "font-awesome.css"]), Capsule::CreateElement ('Style', ['href' => "bootstrap.css"]), Capsule::CreateElement ('Style', ['href' => "animated.css"]), Capsule::CreateElement ('Style', ['href' => "swipper.css"]), Capsule::CreateElement ('Style', ['href' => "styles.css"]), Capsule::CreateElement ('Scripts', []), Capsule::CreateElement ('Styles', [])), Capsule::CreateElement ('body', [], Capsule::CreateElement ('CapsuleThemeProvider', ['theme' => $scope->theme], Capsule::CreateElement ('Header', []), Capsule::CreateElement ('div', [], Capsule::Yield (null, ['data' => $scope->data])), Capsule::CreateElement ('Footer', [])))); ?>
<?php }); ?>
<?php Capsule::Export ('Application'); ?>

<?php $module->exports = Capsule::Element ('Application'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>