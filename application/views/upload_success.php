<div class="unit">
	<div class="container wrapper">
		<h3>Se importo el archivo correctamente!</h3>

		<?php echo $xlsFile; ?>
		
		<pre>
			<?php print_r($csvData);?> 
		</pre>
		
		<p><?php echo anchor('upload', 'Importa otra lista!'); ?></p>
	</div>
</div>