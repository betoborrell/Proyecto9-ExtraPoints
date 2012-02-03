<div class="unit">
	<div class="container wrapper">
		<?php echo $error;?>

		<?php echo form_open_multipart('upload/do_upload');?>
		
			<h3>Importa el archivo de estudiantes</h3>
			<p><input type="file" name="userfile" size="20" /></p>
			<input type="submit" value="Importar" />
		
		</form>
	</div>
</div>