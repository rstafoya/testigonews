<table>
	<tr>
		<th>Título</th>
		<th>Autor</th>
		<th>Categoría</th>
		<th>Acciones</th>
	</tr>
	<?php foreach ($notas as $nota): ?>
		<?php
		echo '<tr>
		<td><a href="/admin/notas/ver/">'.substr($nota['Nota']['titulo'],0,70).'...</a></td>
		<td>'.$nota['User']['nombre'].'</td>
		<td>'.$nota['Categoria']['nombre'].'</td>
		<td><a class="btn small" href="/admin/edit/'.$nota['Nota']['id'].'">Modificar</a> <a class="btn small" href="/admin/delete/'.$nota['Nota']['id'].'">Borrar</a></td>
		</tr>';
		?>
	<?php endforeach ?>
</table>
