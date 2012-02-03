<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email o Usuario';
} else {
	$login_label = 'Email';
}
?>

<div class="unit">
	<div class="container wrapper">
		<?php echo form_open($this->uri->uri_string()); ?>
			<div class="unit">
				<?php echo form_label($login_label, $login['id']); ?>
				<?php echo form_input($login); ?>
				<div class="unit" style="color: red;">
					<?php echo form_error($login['name']); ?>
					<?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
				</div>
			</div>
			<?php echo form_submit('reset', 'Enviar nuevo password'); ?>
		<?php echo form_close(); ?>
	</div>
</div>