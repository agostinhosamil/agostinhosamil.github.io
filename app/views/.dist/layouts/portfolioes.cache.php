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
	Capsule::Import ('$theme', Capsule::RelativePathDecode (path ('capsule/theme')));

?>

<?php Capsule::Def ('MyPortfolioPagesLayout', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('html', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('title', [], 'Portfolio Page'), Capsule::CreateElement ('ApplicationMetaDatas', []), Capsule::CreateElement ('Style', ['href' => "font-awesome.css"]), Capsule::CreateElement ('Style', ['href' => "bootstrap.css"]), Capsule::CreateElement ('Style', ['href' => "animated.css"]), Capsule::CreateElement ('Style', ['href' => "swipper.css"]), Capsule::CreateElement ('Scripts', []), Capsule::CreateElement ('Styles', [])), Capsule::CreateElement ('body', [], Capsule::CreateElement ('CapsuleThemeProvider', ['theme' => $scope->theme], Capsule::Yield (null, [])))); ?>
<?php }); ?>
<?php Capsule::Export ('MyPortfolioPagesLayout'); ?>

<?php $module->exports = Capsule::Element ('MyPortfolioPagesLayout'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>