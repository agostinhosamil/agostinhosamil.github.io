<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ImageWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('FormWrapper', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('SubTitle', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Button', Capsule::RelativePathDecode (path ('./styles.css')));

?>


<?php
	Capsule::Import ('TextBox', Capsule::RelativePathDecode (path ('../../auths/styles.css')));

?>


<?php
	Capsule::Import ('$undrawContactUs', Capsule::RelativePathDecode (path ('./undraw_contact_us_re_4qqt.svg')));

?>

<?php Capsule::Def ('Contact', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('div', ['class' => "row"], Capsule::CreateElement ('div', ['class' => "col-md-6"], Capsule::CreateElement ('FormWrapper', [], Capsule::CreateElement ('Title', [], 'Contact Me ✉️'), Capsule::CreateElement ('SubTitle', [], 'Let a message or a feedback about my work and what I have done for you.'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('form', ['method' => "post", 'action' => ""], Capsule::CreateElement ('TextBox', [], Capsule::CreateElement ('span', [], 'Your Name'), Capsule::CreateElement ('input', ['type' => "text", 'name' => "message[userName]"])), Capsule::CreateElement ('TextBox', [], Capsule::CreateElement ('span', [], 'Your Email'), Capsule::CreateElement ('input', ['type' => "text", 'name' => "message[userEmail]"])), Capsule::CreateElement ('TextBox', [], Capsule::CreateElement ('span', [], 'Subject'), Capsule::CreateElement ('input', ['type' => "text", 'name' => "message[subject]"])), Capsule::CreateElement ('TextBox', [], Capsule::CreateElement ('span', [], 'Message'), Capsule::CreateElement ('textarea', ['type' => "text", 'name' => "message[body]", 'rows' => "4"])), Capsule::CreateElement ('br', []), Capsule::CreateElement ('Button', ['type' => "submit"], Capsule::CreateElement ('span', [], 'Send Message'))))), Capsule::CreateElement ('div', ['class' => "col-md-6"], Capsule::CreateElement ('ImageWrapper', [], Capsule::CreateElement ('img', ['src' => $scope->undrawContactUs]))))); ?>
<?php }); ?>
<?php Capsule::Export ('Contact'); ?>

<?php $module->exports = Capsule::Element ('Contact'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>