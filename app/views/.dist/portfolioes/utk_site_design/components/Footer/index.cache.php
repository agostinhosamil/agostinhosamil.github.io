<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Body', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Details', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Footer', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('Body', [], Capsule::CreateElement ('div', ['class' => "row"], function ($args, CapsuleScopeContext $scope) {$arr4117060222ay = range(1, 4); for ( $i4117060222terator = 0; $i4117060222terator < count (is_array ($arr4117060222ay) ? $arr4117060222ay : []); $i4117060222terator++ ) {
	$scope->i = \Saml::Array2Object ($arr4117060222ay[ $i4117060222terator ]);

          

 Capsule::PartialRender ('div', ['class' => "col-lg-3 footer-col"], Capsule::CreateElement ('strong', [], 'Column - ', function($args, CapsuleScopeContext $scope){return $scope->i;}), Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {$arr1219060222ay = range(1, 9); for ( $i1219060222terator = 0; $i1219060222terator < count (is_array ($arr1219060222ay) ? $arr1219060222ay : []); $i1219060222terator++ ) {
	$scope->n = \Saml::Array2Object ($arr1219060222ay[ $i1219060222terator ]);

                

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Página Inicial'));

}}));

}}), Capsule::CreateElement ('div', ['class' => "row bottom"], Capsule::CreateElement ('div', ['class' => "col-md-8"], Capsule::CreateElement ('div', ['class' => "footer-logo"], Capsule::CreateElement ('Image', ['src' => "kwanza-burro-logo-light.png", 'alt' => "Universo tecnológico Kapemba"]))), Capsule::CreateElement ('div', ['class' => "col-md-4"], Capsule::CreateElement ('div', ['class' => "social-media-links-wrapper"], Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'target' => "_blank"], Capsule::CreateElement ('i', ['class' => "fa fa-facebook"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'target' => "_blank"], Capsule::CreateElement ('i', ['class' => "fa fa-twitter"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'target' => "_blank"], Capsule::CreateElement ('i', ['class' => "fa fa-instagram"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#", 'target' => "_blank"], Capsule::CreateElement ('i', ['class' => "fa fa-youtube"])))))))), Capsule::CreateElement ('Details', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-lg-5"], Capsule::CreateElement ('div', ['class' => "copy-data"], Capsule::CreateElement ('span', [], '&copy;', function($args, CapsuleScopeContext $scope){return date('Y');}, ', todos os direitos reservados'))), Capsule::CreateElement ('div', ['class' => "col-lg-7"], Capsule::CreateElement ('ul', ['class' => "footer-menu-links"], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Página Inicial')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Produtos')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Promoções')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Sobre nós')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Privacidade')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], 'Uso de dados'))))))); ?>
<?php }); ?>
<?php Capsule::Export ('Footer'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>