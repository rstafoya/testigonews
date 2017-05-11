<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Lista de usuarios</div>
				<table>
					<tr>
						<th>Nombre</th>
						<th>email</th>
						<th>Admin</th>
						<th>Acciones</th>
					</tr>
					<?php foreach($data as $u):?>
						<tr>
							<td><?=$u['User']['nombre']?></td>
							<td><?=$u['User']['email']?></td>
							<td><?=$u['User']['administrador']?></td>
							<td>
								<?php if($administrador):?>
									<a href="/admin/users/edit/<?=$u['User']['id']?>" class="btn small">Editar</a>
									<a href="/admin/users/delete/<?=$u['User']['id']?>" class="btn small" onclick="return(confirm('¿Está seguro?'))">Eliminar</a>
								<?php endif;?>
							</td>
						</tr>
					<?php endforeach;?>
				</table>
			</div>
			<div class="card-action">
				<a href="/admin/users/registrar">Registrar un nuevo usuario</a>
			</div>
		</div>
	</div>
</div>
