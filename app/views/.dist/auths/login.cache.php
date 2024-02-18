<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('LoginBox', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('TextBox', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Button', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('SubTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ButtonContainer', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('Login', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('LoginBox', [], Capsule::CreateElement ('Title', [], 'Login'), Capsule::CreateElement ('SubTitle', [], 'Login to manage the application'), Capsule::CreateElement ('form', ['method' => "post", 'action' => "/auth/login"], Capsule::CreateElement ('TextBox', [], Capsule::CreateElement ('span', [], 'Email or Username'), Capsule::CreateElement ('input', ['type' => "text", 'name' => "user[username]"])), Capsule::CreateElement ('TextBox', [], Capsule::CreateElement ('span', [], 'Password'), Capsule::CreateElement ('input', ['type' => "password", 'name' => "user[password]"])), Capsule::CreateElement ('ButtonContainer', [], Capsule::CreateElement ('Button', ['type' => "submit"], 'Login'))))); ?>
<?php }); ?>
<?php Capsule::Export ('Login'); ?>

<?php $module->exports = Capsule::Element ('Login'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>