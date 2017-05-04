<div class="row">
	<div class="col s12 m8 offset-m2">
		<div class="card">
			<div class="card-content">
			<table>
				<tr>
					<th>Nombre</th>
					<th class="center">Orden</th>
					<th class="center">Acciones</th>
				</tr>
				<?php foreach($categorias as $cat):?>
				<tr>
					<td><?=$cat['Categoria']['nombre']?></td>
					<td class="center"><?=$cat['Categoria']['orden']?></td>
					<td class="center">
						<a href="/admin/categorias/edit/<?=$cat['Categoria']['id']?>" class="btn small">Editar</a>
					</td>
				</tr>
				<?php endforeach;?>
			</table>
			</div>
			<div class="card-action">
				<a href="/admin/categorias/add">Agregar una categoría nueva</a>
				<a href="/admin/categorias/ordenar">Reordenar</a>
			</div>
		</div>
	</div>
</div>
