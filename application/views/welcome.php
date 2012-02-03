<div id="container">
	<h1>EXTRAPOINTS</h1>

	<div id="body">
		<p>Hola <strong><?php echo $username; ?></strong>!</p>
		
		<p>Bienvenido a extrapoints, el mejor lugar para compartir tus puntos y ganar premios.</p>
		
		<?php echo anchor('/upload', 'Importa lista de estudiantes'); ?>
		
	</div>

	<p class="footer"><?php echo anchor('/auth/change_password/', 'Cambiar password'); ?> | &iquest;Te quieres ir? Pues  <?php echo anchor('/auth/logout/', 'salte'); ?></p>
</div>