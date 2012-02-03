<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
);
?>
<div class="unit">
	<div class="container wrapper">
		<?php echo form_open($this->uri->uri_string()); ?>
			<div class="unit">
				<?php echo form_label('Password actual', $old_password['id']); ?>
				<?php echo form_password($old_password); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($old_password['name']); ?>
					<?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?>
				</div>
			</div>
			<div class="unit">
				<?php echo form_label('Password nuevo', $new_password['id']); ?>
				<?php echo form_password($new_password); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($new_password['name']); ?>
					<?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
				</div>
			</div>
			<div class="unit">
				<?php echo form_label('Confirma password', $confirm_new_password['id']); ?>
				<?php echo form_password($confirm_new_password); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($confirm_new_password['name']); ?>
					<?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
				</div>
			</div>
			<?php echo form_submit('change', 'Cambiar password'); ?>
		<?php echo form_close(); ?>
	</div>
</div>