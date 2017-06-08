<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Lista de usuarios</div>
				<table class="highlight">
					<tr>
						<th>Nombre</th>
						<th>email</th>
						<th>Admin</th>
						<th></th>
					</tr>
					<?php foreach($data as $u):?>
						<tr>
							<td><?=$u['User']['nombre']?></td>
							<td><?=$u['User']['email']?></td>
							<td><?=$u['User']['administrador']?></td>
							<td>
								<?php if($administrador):?>
									<a href="/admin/users/edit/<?=$u['User']['id']?>" class="btn small"><i class="material-icons">edit</i></a>
									<a href="/admin/users/delete/<?=$u['User']['id']?>" class="btn small" onclick="return(confirm('¿Está seguro?'))"><i class="material-icons">delete</i></a>
								<?php endif;?>
							</td>
						</tr>
					<?php endforeach;?>
				</table>
			</div>
			<div class="card-action">
				<a href="/admin/users/registrar">Registrar un nuevo usuario</a>
				<a href="/admin/users/changepassword">Cambiar contraseña</a>
			</div>
		</div>
	</div>
</div>
