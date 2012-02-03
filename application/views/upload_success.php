<div class="unit">
	<div class="container wrapper">
		<h3>Se importo el archivo correctamente!</h3>

		<ul>
			<?php foreach ($upload_data as $item => $value):?>
			<li><?php echo $item;?>: <?php echo $value;?></li>
			<?php endforeach; ?>
		</ul>
		
		<p><?php echo anchor('upload', 'Importa otra lista!'); ?></p>
	</div>
</div>