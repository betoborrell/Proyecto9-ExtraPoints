<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
?>

<div class="unit">
	<div class="container register_form">
		<?php echo form_open($this->uri->uri_string()); ?>
		
			<?php if ($use_username) { ?>
			<div class="unit">
				<?php echo form_label('Username', $username['id']); ?>
				<?php echo form_input($username); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($username['name']); ?>
					<?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
				</div>
			</div>
			<?php } ?>
			
			<div class="unit">
				<?php echo form_label('Email Address', $email['id']); ?>
				<?php echo form_input($email); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($email['name']); ?>
					<?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
				</div>
			</div>
			
			<div class="unit">
				<?php echo form_label('Password', $password['id']); ?>
				<?php echo form_password($password); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($password['name']); ?>
				</div>
			</div>
			
			<div class="unit">
				<?php echo form_label('Confirm Password', $confirm_password['id']); ?>
				<?php echo form_password($confirm_password); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($confirm_password['name']); ?>
				</div>
			</div>
		
		
			<?php echo form_submit('register', 'Register'); ?>
		<?php echo form_close(); ?>
	</div>
</div>
