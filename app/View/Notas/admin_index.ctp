<div class="card">
	<div class="card-content">
	<div class="card-title">Notas</div>
		<table>
			<tr>
				<th>Título</th>
				<th>Autor</th>
				<th>Categoría</th>
				<th>Acciones</th>
			</tr>
			<?php foreach ($notas as $nota): ?>
				<tr>
					<td><a href="/admin/notas/edit/<?=$nota['Nota']['id']?>"><?=substr($nota['Nota']['titulo'],0,70)?></a></td>
					<td><?=$nota['User']['nombre']?></td>
					<td><?=$nota['Categoria']['nombre']?></td>
					<td>
						<a class="btn small" href="/admin/notas/edit/<?=$nota['Nota']['id']?>">Modificar</a>
						<a class="btn small" href="/admin/notas/delete/<?=$nota['Nota']['id']?>">Eliminar</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
	<div class="card-action">
		<a href="/admin/notas/add">Agregar una nueva nota</a>
	</div>
</div>
