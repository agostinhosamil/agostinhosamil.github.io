<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Body', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TopContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LogoWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MenuContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('HeaderLinksWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('VideoContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('KeywordList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Content', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Menu', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Header', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('VideoContainer', [], Capsule::CreateElement ('video', ['src' => "/assets/videos/pexels-kampus-production.mp4", 'autoplay' => "", 'loop' => ""])), Capsule::CreateElement ('Content', [], Capsule::CreateElement ('TopContainer', [], Capsule::CreateElement ('LogoWrapper', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('Image', ['src' => "kwanza-burro-logo.png", 'alt' => "Company Logo"]))), Capsule::CreateElement ('MenuContainer', [], Capsule::CreateElement ('HeaderLinksWrapper', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-facebook"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-twitter"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-instagram"]))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-twitter"])))), Capsule::CreateElement ('Menu', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-home"]), Capsule::CreateElement ('span', [], 'Página inicial'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-shopping-bag"]), Capsule::CreateElement ('span', [], 'Produtos'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-bullhorn"]), Capsule::CreateElement ('span', [], 'Promoções'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-shopping-cart"]), Capsule::CreateElement ('span', [], 'Meu Carrinho'))), Capsule::CreateElement ('li', [], Capsule::CreateElement ('a', ['href' => "#"], Capsule::CreateElement ('i', ['class' => "fa fa-user"]), Capsule::CreateElement ('span', [], 'Minha conta')))))), Capsule::CreateElement ('Body', [], Capsule::CreateElement ('KeywordList', [], Capsule::CreateElement ('li', [], 'Technology'), Capsule::CreateElement ('li', [], 'Leadership'), Capsule::CreateElement ('li', [], 'Material'), Capsule::CreateElement ('li', [], 'Economy'), Capsule::CreateElement ('li', [], 'Inovation')), Capsule::CreateElement ('Title', [], 'Universo tecnológico Kapemba')))); ?>
<?php }); ?>
<?php Capsule::Export ('Header'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>