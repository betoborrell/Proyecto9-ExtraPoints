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

<img class="logo" src="<?= base_url('images/logo.png');?>" />
<div class="unit">
	<div class="container wrapper login_form" style="width: 300px;">
		<?php echo form_open($this->uri->uri_string()); ?>
			
			<div class="unit login_inputs">
				<div class="unit" style="border-bottom: 1px solid #C0C0C0; margin:0;">
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
			</div>
			<div class="unit">
				<div class="container remember">
					<?php //echo form_checkbox($remember); ?>
					<p style="float:left; width:200px;">Recordarme</p>
					 <input type="checkbox" value="1" checked="<?php set_value('remember')?>" id="remember" name="remember" />
					 <label for="remember">Remember</label>
					<?php //echo form_label('Recordarme', $remember['id']); ?>
				</div>
			</div>
			<?php echo form_submit('submit', 'Entrar'); ?>
			
			<div class="unit login_options">
				<p><?php echo anchor('/auth/forgot_password/', 'Olvide mi password'); ?></p>
				<p><?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Registrate'); ?></p>
			</div>
			
		<?php echo form_close(); ?>
	</div>
</div>