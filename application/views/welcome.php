<div class="unit">
	<div class="container wrapper welcome">
		<h1>EXTRAPOINTS</h1>
	
		<div id="body">
			<p>Hola <strong><?php echo $username; ?></strong>!</p>
			
			<p>Bienvenido a extrapoints, el mejor lugar para compartir tus puntos y ganar premios.</p>
			
			<p>level : <?php echo $this->tank_auth->get_user_level()?></p>
			
			<?php echo anchor('/upload', 'Importa lista de estudiantes'); ?>
			
			<div class="unit">
				<div class="container lista-alumnos">
					
					<h3>Alumnos</h3>
					
					<?php 
			
						foreach($alumnos->result() as $alumno){
							echo '<div class="columns on-4"><div class="container alumn">';
								echo	'<div class="column span-3">'.$alumno->nombre.' '.$alumno->apellido_p.' '.$alumno->apellido_m.'<p>'.$alumno->fechaNac.'</p></div>';
								echo	'<div class="column">'.$alumno->puntos.' Pts. </div>';
							echo "</div></div>";
						}
						
					?>
					
					
				</div>
			</div>
			
		</div>
	
		<p class="footer"><?php echo anchor('/auth/change_password/', 'Cambiar password'); ?> | &iquest;Te quieres ir? Pues  <?php echo anchor('/auth/logout/', 'salte'); ?></p>
	</div>
</div>