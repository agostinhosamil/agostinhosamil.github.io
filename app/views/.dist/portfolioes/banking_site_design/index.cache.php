<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Script', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('./components/Header')));

?>

<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('./components/Footer')));

?>

<?php
	Capsule::Import ('AppDownloadAd', Capsule::RelativePathDecode (path ('./components/AppDownloadAd')));

?>


<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('PageSection', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppDetailsContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('AppDetailsCardsWrapper', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('BankingSiteDesign', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('Header', []), Capsule::CreateElement ('head', [], Capsule::CreateElement ('title', [], 'Smart Banking'), Capsule::CreateElement ('Script', ['src' => "banking_site_design/main.js"])), Capsule::CreateElement ('AppDetailsContainer', [], Capsule::CreateElement ('h1', [], 'Get the best services'), Capsule::CreateElement ('h4', [], 'Get the best services from out online banking platform and make a dayly life bank activity more easier and faster'), Capsule::CreateElement ('AppDetailsCardsWrapper', [], Capsule::CreateElement ('div', ['class' => "data-card"], Capsule::CreateElement ('div', [], Capsule::CreateElement ('i', ['class' => "fa fa-music"])), Capsule::CreateElement ('strong', [], '24/7 Services'), Capsule::CreateElement ('p', [], 'We are giving our costumer to 27/7 services for their needs. We are very determind about that')), Capsule::CreateElement ('div', ['class' => "data-card highlight"], Capsule::CreateElement ('div', ['class' => "yellow"], Capsule::CreateElement ('i', ['class' => "fa fa-shield"])), Capsule::CreateElement ('strong', [], 'Sercure Money'), Capsule::CreateElement ('p', [], 'Sending money faster and easier with end to end encryption by us. Sending and receiving is secure.')), Capsule::CreateElement ('div', ['class' => "data-card"], Capsule::CreateElement ('div', ['class' => "red"], Capsule::CreateElement ('i', ['class' => "fa fa-credit-card"])), Capsule::CreateElement ('strong', [], 'Add cards'), Capsule::CreateElement ('p', [], 'Add multiple cards and track your dayly expense with quality interdace that suit for your dayly life')))), Capsule::CreateElement ('PageSection', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-md-6"], Capsule::CreateElement ('h1', [], 'We provide a digital payment system'), Capsule::CreateElement ('p', [], 'Our app allows to connect banks with their clients, providing a very easy and secure way of managing the costumers finances'), Capsule::CreateElement ('div', ['class' => "action-wrapper"], Capsule::CreateElement ('a', ['href' => "#"], 'Get started'))), Capsule::CreateElement ('div', ['class' => "col-md-6"], Capsule::CreateElement ('div', ['class' => "data-section-img"], Capsule::CreateElement ('Image', ['src' => "banking_site_design/card-data.png", 'alt' => "Card data"]))))), Capsule::CreateElement ('PageSection', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-md-5"], Capsule::CreateElement ('div', ['class' => "data-section-img"], Capsule::CreateElement ('Image', ['src' => "banking_site_design/app-data.png", 'alt' => "App data"]))), Capsule::CreateElement ('div', ['class' => "col-md-7"], Capsule::CreateElement ('h1', [], 'We provide a digital payment system'), Capsule::CreateElement ('ul', [], Capsule::CreateElement ('li', [], Capsule::CreateElement ('i', ['class' => "fa fa-credit-card"]), Capsule::CreateElement ('span', [], 'The personal account')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('i', ['class' => "fa fa-bank"]), Capsule::CreateElement ('span', [], 'A joint bank account')), Capsule::CreateElement ('li', [], Capsule::CreateElement ('i', ['class' => "fa fa-money"]), Capsule::CreateElement ('span', [], 'Multi currency account'))), Capsule::CreateElement ('div', ['class' => "action-wrapper"], Capsule::CreateElement ('a', ['href' => "#"], 'Get started'))))), Capsule::CreateElement ('AppDownloadAd', []), Capsule::CreateElement ('Footer', [])); ?>
<?php }); ?>
<?php Capsule::Export ('BankingSiteDesign'); ?>

<?php $module->exports = Capsule::Element ('BankingSiteDesign'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>