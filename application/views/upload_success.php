<div class="unit">
	<div class="container wrapper">
		<h3>Se importo el archivo correctamente!</h3>
		
		<p><?php echo anchor('upload', 'Importa otra lista!'); ?></p>
	</div>
</div>

<script type="text/javascript">
	setTimeout(function() {
	  window.location.href = "<?= base_url(); ?>";
	}, 4000);
</script>