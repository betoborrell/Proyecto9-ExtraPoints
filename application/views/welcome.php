<div id="container">
	<h1>EXTRAPOINTS</h1>

	<div id="body">
		<p>Hola <strong><?php echo $username; ?></strong>!</p>
		
		<p>Bienvenido a extrapoints, el mejor lugar para compartir tus puntos y ganar premios.</p>
		
		<p>level : <?php echo $this->tank_auth->get_user_level()?></p>
		
		<?php echo anchor('/upload', 'Importa lista de estudiantes'); ?>
		
		<h3>Alumnos</h3>
		
		<table>
		
		<tr>
			<td  style="padding:15px;"><strong>NOMBRE</strong></td>
			<td  style="padding:15px;"><strong>APELLIDO PATERNO</strong></td>
			<td  style="padding:15px;"><strong>APELLIDO MATERNO</strong></td>
			<td  style="padding:15px;"><strong>FECHA DE NACIMIENTO</strong></td>
			<td  style="padding:15px;"><strong>PUNTOS</strong></td>
		</tr>
		<?php 
		
			foreach($alumnos->result() as $alumno){
				echo "<tr>";
					echo "<td>".$alumno->nombre."</td>";
					echo "<td>".$alumno->apellido_p."</td>";
					echo "<td>".$alumno->apellido_m."</td>";
					echo "<td>".$alumno->fechaNac."</td>";
					echo "<td>".$alumno->puntos."</td>";
				echo "</tr>";
			}
			
		?>
		</table>
		
	</div>

	<p class="footer"><?php echo anchor('/auth/change_password/', 'Cambiar password'); ?> | &iquest;Te quieres ir? Pues  <?php echo anchor('/auth/logout/', 'salte'); ?></p>
</div>