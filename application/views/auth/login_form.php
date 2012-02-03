<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or Usuario';
} else if ($login_by_username) {
	$login_label = 'Usuario';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
?>

<div class="unit">
	<div class="container login_form wrapper">
		<?php echo form_open($this->uri->uri_string()); ?>
			<div class="unit">
				<?php echo form_label($login_label, $login['id']); ?>
				<?php echo form_input($login); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($login['name']); ?>
					<?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
				</div>
			</div>
			<div class="unit">
				<?php echo form_label('Password', $password['id']); ?>
				<?php echo form_password($password); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($password['name']); ?>
					<?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
				</div>
			</div>
			<div class="unit">
				<?php echo form_checkbox($remember); ?>
				<?php echo form_label('Recordarme', $remember['id']); ?>
				<div class="unit">
					<?php echo anchor('/auth/forgot_password/', 'Olvide mi password'); ?><br>
					<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Registrate'); ?>
				</div>
			</div>
			<?php echo form_submit('submit', 'Entrar'); ?>
		<?php echo form_close(); ?>
	</div>
</div>